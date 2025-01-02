<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
USE Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return view('profile', compact('user'));
    }

    public function edit()
    {
        return view('profile', ['user' => Auth::user()]);
    }

    public function update(Request $request)
    {
        DB::beginTransaction();
        try {
            $user = Auth::user();
            if (!$user) {
                return response()->json([
                    'status' => 'error',
                    'message' => 'User not authenticated',
                ], 401);
            }
            
            $validated = $request->validate([
                'name' => 'required|max:255',
                'username' => 'required|unique:users,username,'.$user->id,
                'email' => 'required|email|unique:users,email,'.$user->id,
                'password' => $request->filled('password') ? 'required|min:8|confirmed' : '',
                'profile_photo' => 'nullable|image|mimes:jpeg,png,jpg|max:2048'
            ]);

            if ($request->hasFile('profile_photo')) {
                if ($user->profile_photo_url) {
                    Storage::delete('public/images/profiles/' . $user->profile_photo_url);
                }
                $filename = time() . '_' . Str::random(10) . '.' . $request->profile_photo->extension();
                $request->profile_photo->storeAs('public/images/profiles', $filename);
                $user->profile_photo_url = $filename;
            }

            $user->name = $validated['name'];
            $user->username = $validated['username'];
            $user->email = $validated['email'];

            if ($request->filled('password')) {
                $user->password = Hash::make($request->password);
            }

            $user->save();
            DB::commit();

            return response()->json([
                'status' => 'success',
                'message' => 'Profile berhasil diperbarui',
                'user' => $user
            ]);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json([
                'status' => 'error',
                'message' => $e->getMessage()
            ], 500);
        }
    }
}