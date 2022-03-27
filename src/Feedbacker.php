<?php

namespace TheAMasoud\LaravelFeedback;

use Illuminate\Database\Eloquent\Model;
use TheAMasoud\LaravelFeedback\Feedback;

trait Feedbacker
{
    public function feedback(Model $object)
    {
        $feedback = Feedback::class;
        $feedback->user_id = $this->getKey();
        $object->feedbacks()->save($feedback);
    }
}
