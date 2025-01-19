<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class ForgotPasswordController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function showResetForm()
    {
        return view('auth.forgot-password');
    }

    public function verifyNik(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nik' => ['required', 'string', 'size:16']
        ], [
            'nik.required' => 'NIK harus diisi.',
            'nik.size' => 'NIK harus terdiri dari 16 digit.',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => $validator->errors()->first('nik')
            ]);
        }

        // Validate NIK format for Kabupaten Bandung
        $kodeWilayah = substr($request->nik, 0, 4);
        if ($kodeWilayah !== '3204') {
            return response()->json([
                'success' => false,
                'message' => 'NIK harus berasal dari Kabupaten Bandung.'
            ]);
        }

        // Check if NIK exists in penduduk
        $member = DB::table('penduduk')
            ->select('kd_pen', 'no_ktp', 'nm_pen', 'alamat', 'desa', 'kecamatan')
            ->where('no_ktp', $request->nik)
            ->first();

        if (!$member) {
            return response()->json([
                'success' => false,
                'message' => 'NIK tidak terdaftar sebagai penduduk Kabupaten Bandung.'
            ]);
        }

        // Check if NIK is registered in users table
        $user = User::where('kd_pen', $member->kd_pen)->first();
        if (!$user) {
            return response()->json([
                'success' => false,
                'message' => 'NIK belum terdaftar sebagai pengguna. Silakan registrasi terlebih dahulu.'
            ]);
        }

        return response()->json([
            'success' => true,
            'user' => [
                'nik' => $member->no_ktp,
                'name' => $member->nm_pen
            ]
        ]);
    }

    public function reset(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'login' => 'required|string',
            'password' => 'required|string|min:8|confirmed',
        ], [
            'login.required' => 'Username atau email harus diisi.',
            'password.required' => 'Password baru harus diisi.',
            'password.min' => 'Password minimal 8 karakter.',
            'password.confirmed' => 'Konfirmasi password tidak cocok.',
        ]);
    
        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput($request->except('password', 'password_confirmation'));
        }
    
        // Cek apakah input adalah email atau username
        $field = filter_var($request->login, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
        
        $user = User::where($field, $request->login)->first();
    
        if (!$user) {
            return back()
                ->with('error', 'Username atau email tidak ditemukan.')
                ->withInput($request->except('password', 'password_confirmation'));
        }
    
        // Update password
        $user->password = Hash::make($request->password);
        $user->save();
    
        return redirect()
            ->route('login')
            ->with('success', 'Password berhasil direset. Silakan login dengan password baru Anda.');
    }
    
}
