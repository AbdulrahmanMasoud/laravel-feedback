<?php

namespace TheAMasoud\LaravelFeedback;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    protected $table = 'feedbacks';
    protected $guarded = [];

    public function feedbackable()
    {
        return $this->morphTo();
    }

    public function user()
    {
        return $this->belongsTo(config('auth.providers.users.model'), "user_id");
    }
}
