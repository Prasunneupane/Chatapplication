<?php

namespace App\Models;

use App\Observers\PostObserver;
use Illuminate\Database\Eloquent\Attributes\ObservedBy;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// #[ObservedBy([PostObserver::class])]
class Post extends Model
{
    //
    use HasFactory;
    protected $fillable = ['title', 'description'];
}
