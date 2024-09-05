<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Sponsorship extends Model
{

    use HasFactory;

    protected $fillable = [
        'name',
        'price',
        'length',
    ];

    // Relazione many to many con il model Chef
    public function chefs()
    {
        return $this->belongsToMany(Chef::class);
    }
}
