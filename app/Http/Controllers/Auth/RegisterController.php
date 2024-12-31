<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class RegisterController extends Controller
{

    public function showRegistrationForm()
    {
        if (!session('verified_nik')) {
            session()->forget('verified_nik');
            return redirect()->route('verify-nik')
                ->with('error', 'Silakan verifikasi NIK terlebih dahulu.');
        }
        return view('auth.register');
    }

    public function showVerifyNikForm()
    {
        return view('auth.verify-nik');
    }


    public function verifyNik(Request $request)
    {
        $request->validate([
            'nik' => ['required', 'string', 'size:16']
        ]);
    
        // Validate NIK format for Kabupaten Bandung
        $kodeWilayah = substr($request->nik, 0, 4);
        if ($kodeWilayah !== '3204') {
            return response()->json([
                'status' => 'error',
                'message' => 'NIK harus berasal dari Kabupaten Bandung (Kode: 3204).'
            ]);
        }
    
        // Check if NIK already registered
        if (User::where('kd_pen', $request->nik)->exists()) {
            return response()->json([
                'status' => 'error',
                'message' => 'NIK sudah terdaftar sebagai pengguna.'
            ]);
        }
    
        // Check if NIK exists in penduduk
        $member = DB::table('penduduk')
            ->select('kd_pen', 'no_ktp','jk', 'nm_pen', 'alamat', 'desa', 'kecamatan')
            ->where('no_ktp', $request->nik)
            ->first();
    
        if (!$member) {
            return response()->json([
                'status' => 'error',
                'message' => 'NIK tidak terdaftar sebagai penduduk Kabupaten Bandung.'
            ]);
        }
    
        // Store verified NIK in session
        session([
            'verified_nik' => $request->nik,
            'member_data' => [
                'kd_pen' => $member->kd_pen,
                'name' => $member->nm_pen,
                // 'no_ktp' => $member->no_ktp
            ]
        ]);
    
        return response()->json([
            'status' => 'success',
            'member' => $member
        ]);
    }

    public function register(Request $request)
    {
        try {
            $validated = $request->validate([
                'name' => 'required|string|max:255',
                'username' => 'required|string|unique:users',
                'email' => 'required|email|unique:users',
                'password' => 'required|min:8|confirmed'
            ]);

            if (!session('verified_nik') || !session('member_data')) {
                return response()->json([
                    'status' => 'error',
                    'message' => 'NIK belum diverifikasi'
                ], 422);
            }

            $memberData = session('member_data');

            DB::beginTransaction();

            $user = User::create([
                'name' => $validated['name'],
                'username' => $validated['username'],
                'email' => $validated['email'],
                'password' => Hash::make($validated['password']),
                'kd_pen' => $memberData['kd_pen'],
                'role' => 'user'
            ]);

            DB::commit();

            session()->forget(['verified_nik', 'member_data']);

            Log::info('User registered successfully', ['user_id' => $user->id]);

            return response()->json([
                'status' => 'success',
                'message' => 'Registrasi berhasil, silakan login',
                'redirect' => route('login')
            ]);
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error('Registration error: ' . $e->getMessage());
            Log::error($e->getTraceAsString());

            return response()->json([
                'status' => 'error',
                'message' => 'Terjadi kesalahan saat registrasi: ' . $e->getMessage()
            ], 422);
        }
    }
    
}
