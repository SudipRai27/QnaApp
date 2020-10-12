<?php

namespace App\Observers;

use App\Models\Question;
use Illuminate\Support\Str;

class QuestionObserver
{
    /**
     * Handle the question "created" event.
     *
     * @param  \App\Models\Question  $question
     * @return void
     */
    public function created(Question $question)
    {
        //
    }

    ///  Modle creating
    public function creating(Question $question)
    {
        $question->slug = Str::slug($question->title);
    }

    /**
     * Handle the question "updated" event.
     *
     * @param  \App\Models\Question  $question
     * @return void
     */

    public function updating(Question $question)
    {
        $question->slug = Str::slug($question->title);
    }

    public function updated(Question $question)
    {
        //
    }

    /**
     * Handle the question "deleted" event.
     *
     * @param  \App\Models\Question  $question
     * @return void
     */
    public function deleted(Question $question)
    {
        //
    }

    /**
     * Handle the question "restored" event.
     *
     * @param  \App\Models\Question  $question
     * @return void
     */
    public function restored(Question $question)
    {
        //
    }

    /**
     * Handle the question "force deleted" event.
     *
     * @param  \App\Models\Question  $question
     * @return void
     */
    public function forceDeleted(Question $question)
    {
        //
    }
}
