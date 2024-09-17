<?php

// app/Models/Answer.php

namespace App;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    // use HasFactory;

    protected $fillable = ['question_id', 'answer_text'];

    public function question()
    {
        return $this->belongsTo(Question::class);
    }

    public function survey()
    {
        return $this->hasMany(Survey::class);
    }
}
