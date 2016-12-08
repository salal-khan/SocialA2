<?php

namespace SocialAppp\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use SocialAppp\Models\User;
use Image;
class ProfileController extends Controller
{
    //

    public function getProfile($username)
    {
        $user = User::where('username', $username)->first();
        if (!$user) {
            abort(404);
        }
        $statuses = $user->statuses()->notReply()->orderBy('created_at' , 'desc')->paginate(10);
        return view('profile.profiles')->with('user', $user)->with('statuses', $statuses)
            ->with('authUserIsFriend',Auth::user()->isFriendWith($user));
    }

    public function getEdit()
    {
        return view('profile.edit');
    }


    public function postEdit(Request $request)
    {

        $this->validate($request, [
            'first_name' => 'alpha|max:50',
            'last_name' => 'alpha|max:50',
            'location' => 'max:20',
        ]);
        Auth::user()->update([
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'location' => $request->input('location'),
        ]);

        return redirect()->route('profile.edit')->with('info', 'Your Profile Has been Updated');
    }


    public function update_avatar(Request $request){

        // Handle the user upload of avatar
        if($request->hasFile('avatar')){
            $avatar = $request->file('avatar');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(300, 300)->save( public_path('/uploads/avatars/' . $filename ) );

            $user = Auth::user();
            $user->avatar = $filename;
            $user->save();
        }

        return redirect()->route('profile.index',['username'=>Auth::user()->username]);

    }
}
