<?php

namespace App\Http\Controllers;

use App\Models\Participant;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminUsersController extends Controller
{
    //
    public function retrieveAllUser() {
        $users = User::with('participants.event')->get();

        return view('manageUserRecord.user_events_record', compact('users'));
    }

    public function destroyUser($id) {
        $user = User::findOrFail($id);
        $user->forceDelete();
        Participant::where('user_id', $user->id)->delete();

        return view('/listofuser')->with('success', 'User deleted successfully!');
    }

    public function displayUserData() {
        $user = Auth::user();

        $role = $user->role;
        $participants = $user->participants;

        return view('manageProfile.user_profile', compact('user', 'role', 'participants'));
    }

    public function updateUserData(Request $request, $id) {
        $user = User::findOrFail($id);

        $input['user_fullname'] = $request->fullname;
        $input['user_ic'] = $request->ic;
        $input['user_address'] = $request->address;
        $input['user_age'] = $request->age;
        $input['user_username'] = $request->username;
        $input['user_password'] = $request->password;

        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $path = $file->store('images', 'public');
            $input['user_photopath'] = $path;
        }
        
        $user->update($input);

        return redirect()->route('profile');
    }
}