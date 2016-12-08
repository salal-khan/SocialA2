<?php

namespace SocialAppp\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use SocialAppp\Models\Like;
use SocialAppp\Models\User;
use SocialAppp\Models\Status;
use Image;
class StatusController extends Controller
{
    //

    public function postStatus(Request $request)
    {

        $post_type = 0;
        $filename =null;

        if ($request->file('post-file-upload')) {
            $this->validate($request, [
                'status' => 'max:1000',
            ]);
            $post_Avatar =$request->file('post-file-upload');
            $filename = time() . str_random(15) . '.' . $post_Avatar->getClientOriginalExtension();
            Image::make($post_Avatar)->resize(600, 600)->save( public_path('/uploads/posts/' . $filename ) );
            $post_type = 1;
        } else {
            $post_type = 0;
            $filename =null;
            $this->validate($request, [
                'status' => 'required|max:1000',
            ]);
        }
        Auth::user()->statuses()->create([
            'body' => $request->input('status'),
            'image_url'=>$filename,
            'post_type'=>$post_type,
        ]);

        return redirect()->route('home')->with('info', 'status posted');
    }

    public function getDeleteStatus($statusId)
    {
        $status = Status::find($statusId);
        if (!$status) {
            return redirect()->back();
        }
        if (Auth::user()->id !== $status->user->id) {
            return redirect()->back();
        }
        $status->delete();
        return redirect()->back()->with('info', 'status Deleted');
    }

    public function postReply(Request $request, $statusId)
    {
        $post_type = 0;
        $filename =null;
        //checking if file load or not  and get file data like image
        if ($request->file('reply-file-upload-'.$statusId)) {
            $this->validate($request, [
                "reply-{$statusId}" => 'max:1000',
            ]);
            $post_Avatar =$request->file('reply-file-upload-'.$statusId);
            $filename = time() . str_random(15) . '.' . $post_Avatar->getClientOriginalExtension();
            Image::make($post_Avatar)->resize(400, 400)->save( public_path('/uploads/comments/' . $filename ) );
            $post_type = 1;
        }
        else {
            $post_type = 0;
            $filename =null;
            $this->validate($request, [
                "reply-{$statusId}" => 'required|max:1000',
            ],['required' => 'Reply body is required']);
        }

        $status = Status::notReply()->find($statusId);
        if (!$status) {
            return redirect()->back();
        }
        if (!Auth::user()->isFriendWith($status->user) && Auth::user()->id !== $status->user->id) {
            return redirect()->back();
        }
        $reply = Status::create([
            'body' => $request->input("reply-{$statusId}"),
            'image_url'=>$filename,
            'post_type'=>$post_type,
        ])->user()->associate(Auth::user());

        $status->replies()->save($reply);
        return redirect()->back();
    }

    public function postLike(Request $request)
    {
        $statusId = $request['statusId'];
        $status = Status::find($statusId);
        if (!$status) {
            return redirect()->route('home');
        }

        if (!Auth::user()->isFriendWith($status->user)) {
            if (Auth::user()->id !== $status->user->id) {
                return redirect()->back();
            }
        }
        if (Auth::user()->hasLikedStatus($status)) {
            $liks = $status->likes->where('user_id', Auth::user()->id)->first();
            $liks->delete();
//            $status->likes()->delete->where($status->id);
            $statusLikeCount = $status->likes->count() - 1 . " " . str_plural('Like', $status->likes->count() - 1);
            return response()->json(['new_status_body' => $statusId, 'statusLikeCount' => $statusLikeCount], 200);
        }

        $like = $status->likes()->create([]);
        Auth::user()->likes()->save($like);
        $statusLikeCount = $status->likes->count() + 1 . " " . str_plural('Like', $status->likes->count() + 1);
        return response()->json(['new_status_body' => $statusId, 'statusLikeCount' => $statusLikeCount], 200);
    }

    public function postEditStatus(Request $request)
    {
        $this->validate($request, [
            'body' => 'required',
        ]);
        $status = Status::find($request['statustId']);
        if (Auth::user()->id !== $status->user->id) {
            return redirect()->back();
        }

        $status->body = $request['body'];
        $status->update();
        return response()->json(['new_status_body' => $status->body], 200);

    }
}
