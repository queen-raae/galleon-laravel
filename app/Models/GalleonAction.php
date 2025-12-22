<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GalleonAction extends Model
{
    /** @use HasFactory<\Database\Factories\GalleonActionFactory> */
    use HasFactory;
    protected $fillable = ['shipmate_id', 'art_id', 'action_type'];

    
}
