<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeedbacksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(config('feedback.feedbacks_table'), function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger(config('feedback.user_foreign_key'))->index()->comment('user_id');
            $table->morphs('feedbackable');
            $table->text("feedback")->nullable();
            $table->decimal('degree', 5, 1)->default(1.0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists(config('feedback.feedbacks_table'));
    }
}
