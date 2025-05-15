<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class SettingsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $profiles = User::where('id', $id)->get();
        return view('user.settings', compact('profiles'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Find the user
        $user = User::findOrFail($id);


        $profileUpdate = [];

        $validate = $request->validate([
            'img_profile' => 'nullable|sometimes|image|mimes:jpeg,png,jpg,svg',
            'email' => 'nullable|sometimes|email|max:255',
            'phone' => 'nullable|sometimes|string|max:15',
            'postal_code' => 'nullable|sometimes|string|max:10',
            'address' => 'nullable|sometimes|string|max:255',
        ]);


        if ($validate['email']) {
            $existedEmail = User::where('email', $validate['email'])
                ->where('id', '!=', $user->id)
                ->first();

            if ($existedEmail) {
                return redirect()->back()
                    ->with('isProfileInfoModal', true)
                    ->withErrors([
                        'email' => 'Email sudah terdaftar.',
                    ]);
            }
            $profileUpdate['email'] = $validate['email'];
        }

        if ($validate['phone']) {
            if (!preg_match('/^\+?[0-9\-]{7,15}$/', $validate['phone'])) {
                return redirect()->back()
                    ->with('isProfileInfoModal', true)
                    ->withErrors([
                        'phone' => 'Format nomor telepon tidak valid. Harus 7-15 digit ',
                    ]);
            }
            $profileUpdate['phone'] = $validate['phone'];
        }

        if ($validate['postal_code']) {
            if (!preg_match('/^\+?[0-9]{4,10}$/', $validate['postal_code'])) {
                return redirect()->back()
                    ->with('isProfileInfoModal', true)
                    ->withErrors([
                        'postal_code' => 'Format kode pos tidak valid',
                    ]);
            }
            $profileUpdate['postal_code'] = $validate['postal_code'];
        }

        if ($validate['address']) {
            $profileUpdate['address'] = $validate['address'];
        }

        if (array_key_exists('img_profile', $validate) && $validate['img_profile']) {
            if ($validate['img_profile']->getSize() > 5242880) { // 5MB in bytes
                return redirect()->back()
                    ->with('isProfileInfoModal', true)
                    ->withErrors([
                        'img_profile' => 'File harus gambar maksimal 5mb',
                    ]);
            }

            $imgpath = $validate['img_profile']->store('profile', 'public');

            if ($user->img) {
                Storage::disk('public')->delete($user->img);
            }
            // Save the new image path
            $profileUpdate['img'] = $imgpath;
        }




        if (!empty($profileUpdate)) {
            $user->update($profileUpdate);
        }

        return redirect()->back()->with('success', 'Profile updated successfully');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
