<?php

namespace TheAMasoud\LaravelFeedback;

trait Feedbackable
{
    public function feedbacks()
    {
        return $this->morphMany(config('feedback.model'), 'feedbackable');
    }
}
