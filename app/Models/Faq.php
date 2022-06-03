<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
   // protected $guarded = [];
    protected $fillable = ['question', 'answer', 'link'];
    use HasFactory;
    public function getRouteKeyName()
    {
        return 'question'; //Article::where('question', $faq)->first()
    }
}
