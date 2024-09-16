<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Review extends Model
{
    use HasFactory;

    protected $fillable = [
        'chef_id',
        'review_title',
        'review',
        'user_name',
        'email'
    ];
    // Relazione one to many con Chef. Review è la tabella secondaria.
    public function chefs(){
        return $this->belongsTo(Chef::class);
    }
}
