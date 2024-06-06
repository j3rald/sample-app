<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateAvatarRequest;
use Illuminate\Support\Facades\Storage;

// use App\Http\Controllers\Profile\auth;

class AvatarController extends Controller
{
    public function update(UpdateAvatarRequest $request) {
        // return back()->with('message', 'Avatar Changed Success.');

        $path = Storage::disk('public')->put('avatars',$request->file('avatar'));

        // $path = $request->file('avatar')->store('avatars', 'public');

        if($oldAvatar = auth()->user()->avatar) {
            Storage::disk('public')->delete($oldAvatar);
        } 

        auth()->user()->update(['avatar' => $path]);

        return redirect(route('profile.edit'))->with('message', 'Avatar Updated.');
    }
}
