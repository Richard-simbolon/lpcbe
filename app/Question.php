<?php

// app/Models/Question.php

namespace App;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    // use HasFactory;

    protected $fillable = ['question_text', 'type'];

    public function answers()
    {
        return $this->hasMany(Answer::class);
    }

    public function surveys()
    {
        return $this->hasMany(Survey::class);
    }
}
