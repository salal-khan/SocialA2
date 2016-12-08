<?php

namespace SocialAppp\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use SocialAppp\Http\Requests;
use SocialAppp\Models\User;

class FriendController extends Controller
{
    //

    public function getIndex()
    {
        $frineds = Auth::user()->friends();
        $request = Auth::user()->friendRequests();
        return view('friends.index')->with('friends', $frineds)->with('request', $request);
    }

    public function getAdd($username)
    {
        $user = User::where('username', $username)->first();
        if (!$user) {
            return redirect()->back()->with('info', 'User Could Not Be Found');
        }

        if (Auth::user()->id === $user->id){
            return redirect()->back();
        }
        if (Auth::user()->hasFriendRequestsPending($user) || $user->hasFriendRequestsPending(Auth::user())) {
            return redirect()->route('profile.index', ['username' => $user->username])->with('info', 'Friend Request Already Pending.');
        }
        if (Auth::user()->isFriendWith($user)) {
            return redirect()->route('profile.index', ['username' => $user->username])->with('info', 'You are Aleady friends.');
        }

        Auth::user()->addFriend($user);

        return redirect()->route('profile.index', ['username' => $user->username])->with('info', 'Friend Request sent');
    }

    public function getAccept($username)
    {
        $user = User::where('username', $username)->first();
        if (!$user) {
            return redirect()->route('home')->with('info', 'User Could Not Be Found');
        }

        if (!Auth::user()->hasFriendRequestsReceived($user)) {
            return redirect()->route('home');
        }
        Auth::user()->acceptFriendRequest($user);
        return redirect()->route('profile.index',['username'=>$username])->with('info','Friend Request Accepted.');
    }

    public function postUnfriend($username){
        $user = User::where('username',$username)->first();
        if (!Auth::user()->isFriendWith($user)) {
            return redirect()->back();
        }
        Auth::user()->Unfriend($user);
        return redirect()->back()->with('info','Friend Unfriend');
    }


    public function postCancelFriendRequest($username){
        $user = User::where('username',$username)->first();
        if (!Auth::user()->hasFriendRequestsPending($user)) {
            return redirect()->back();
        }
        Auth::user()->Unfriend($user);
        return redirect()->back()->with('info','Friend Unfriend');
    }
}
