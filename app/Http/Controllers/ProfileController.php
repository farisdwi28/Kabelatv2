<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Models\Penduduk;
use App\Models\User;
use Illuminate\Validation\Rule;
use Illuminate\Support\Str;
USE Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $penduduk = Penduduk::where('kd_pen', $user->kd_pen)->first();
        return view('profile', compact('user', 'penduduk'));
    }

    public function edit()
    {
        $user = User::find(Auth::id());
        $penduduk = Penduduk::where('kd_pen', $user->kd_pen)->first();
        
        return view('profile.edit', compact('user', 'penduduk'));
    }

    public function update(Request $request)
    {
        $user = User::find(Auth::id());
        
        if (!$user) {
            return redirect()->back()->with('error', 'User tidak ditemukan.');
        }
        
        $penduduk = Penduduk::where('kd_pen', $user->kd_pen)->first();
        
        if (!$penduduk) {
            return redirect()->back()->with('error', 'Data penduduk tidak ditemukan.');
        }

        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'max:255', Rule::unique('users')->ignore($user->id)],
            'email' => ['required', 'string', 'email', 'max:255', Rule::unique('users')->ignore($user->id)],
            'password' => ['nullable', 'string', 'min:8', 'confirmed'],
            'profile_photo' => ['nullable', 'image', 'max:2048'], // max 2MB
        ]);

        try {
            // Handle profile photo upload
            if ($request->hasFile('profile_photo')) {
                // Delete old photo if exists
                if ($penduduk->foto_pen && Storage::exists('public/images/profiles/' . $penduduk->foto_pen)) {
                    Storage::delete('public/images/profiles/' . $penduduk->foto_pen);
                }

                $photo = $request->file('profile_photo');
                $photoName = time() . '_' . $user->kd_pen . '.' . $photo->getClientOriginalExtension();
                $photo->storeAs('public/images/profiles', $photoName);
                
                // Update foto in penduduk table
                $penduduk->foto_pen = $photoName;
                $penduduk->save();
            }

            // Update user information
            $user->name = $validated['name'];
            $user->username = $validated['username'];
            $user->email = $validated['email'];
            
            if ($request->filled('password')) {
                $user->password = Hash::make($validated['password']);
            }

            $user->save();

            // Update penduduk information
            $penduduk->nm_pen = $validated['name'];
            $penduduk->save();

            return redirect()->back()->with('success', 'Profile berhasil diperbarui!');

        } catch (\Exception $e) {
            return redirect()->back()
                ->withInput()
                ->with('error', 'Terjadi kesalahan saat memperbarui profile. ' . $e->getMessage());
        }
    }
}