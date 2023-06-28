<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Morningnews extends Model
{
    protected $table = 'Morning_show';

    protected $fillable = ['title', 'news_text'];
}
