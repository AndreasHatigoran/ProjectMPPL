<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ForumComment;
use App\Models\Upvote;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UpvoteController extends Controller
{
    public function upvotecomment($id)
    {

        dd($id);
        $comment = ForumComment::findOrFail($id);

        Upvote::create([
            'comment_id' => $comment->id,
            'user_id' => Auth::user()->id
        ]);
        $msg = ['status' => 'upvote'];
        return response()->json($msg);
    }
}
