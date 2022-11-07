<?php

namespace App\Models;
// asdadas
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use \Illuminate\Database\Eloquent\Factories\HasFactory;
class Post extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'body', 'likes', 'author', 'draft'];

    // public function comment(Request $request)
    // {
        
        
            
    //         $comment = new Comment;
    //         $comment->body = $request->get('comment_body');
    //         $comment->user()->associate($request->user());
    //         $comment->parent_id = $request->get('comment_id');
    //         $post = Post::find($request->get('post_id'));
    //         $post->comments()->save($comment);
    //         return back();
    
    //   }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable')->whereNull('parent_id');
    }
    
}
