<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = [];
    
    public function profileImage() {
        $imagePath = ($this->image) ? $this->image : 'profile/rfAWFqBU9j45NTEA8ApxPhNc6nsJV2kcWKrHkNbv.png';
        return '/storage/' . $imagePath;
    }
    
    public function user() {
        return $this->belongsTo(User::class);
    }
}
