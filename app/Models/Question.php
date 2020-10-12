<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Question extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'body', 'slug', 'views', 'answers', 'votes', 'best_answer_id', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getUrlAttribute()
    {
        return route('questions.show', $this->id);
    }

    public function getCreatedDateAttribute()
    {
        return $this->created_at->diffForHumans();
    }

    public function getStatusAttribute()
    {
        if ($this->answers > 0) {
            if ($this->best_answer_id) {
                return 'answer-accepted';
            }
            return 'answered';
        }
        return 'unanswered';
    }

    public function createQuestion($input)
    {
        return Question::create([
            'title' => $input['title'],
            'body' => $input['body'],
            'views' => 0,
            'answers' => 0,
            'votes' => 0,
            'user_id' => Auth::id()
        ]);
    }

    public function updateQuestion(Question $question, $input)
    {
        return $question->update([
            'title' => $input['title'],
            'body' => $input['body']
        ]);
    }
}
