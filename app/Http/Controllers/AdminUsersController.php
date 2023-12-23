<?php

namespace App\Http\Controllers;

use App\Models\Participant;
use App\Models\User;
use Illuminate\Http\Request;

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
}