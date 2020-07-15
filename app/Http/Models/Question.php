<?php

namespace App\Http\Models;

use Str;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $table = 'questions';

    protected $fillable = [
        'title', 'slug', 'body', 'views', 'answers', 'votes', 'best_answer_id', 'user_id'
    ];

    public function users(){
        return $this->belongsTo(User::class);
    }

    public function setTitleAttribute($value){
        $this->attributes['title'] = $value;
        $this->attributes['slug'] = Str::slug($value);
    }
}
