<?php

namespace App\Models;

use App\Models\User;
use App\Models\Forum;
use App\Models\CommentReport;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class ForumComment extends Model
{
    use HasFactory;

    // protected $table = ['forum_comments'];
    protected $guarded = ['id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function forum()
    {
        return $this->belongsTo(Forum::class);
    }

    public function commentReports()
    {
        return $this->hasMany(CommentReport::class);
    }

    public function isReport()
    {
        return $this->commentReports->where('user_id', Auth::user()->id)->count();
    }
}
