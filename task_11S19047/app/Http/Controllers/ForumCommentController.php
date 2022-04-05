<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ForumComment;
use Illuminate\Http\Request;

class ForumCommentController extends Controller
{
    public function markcomment($id)
    {
        $comment = ForumComment::find($id);

        if ($comment->is_solved) {
            $comment->update([
                'is_solved' => false
            ]);
            $msg = ['status' => 'unmark'];
        } else {
            $comment->update([
                'is_solved' => true
            ]);
            $msg = ['status' => 'mark'];
        }
        return response()->json($msg);
    }
}
