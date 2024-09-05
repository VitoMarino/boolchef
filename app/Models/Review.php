<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Review extends Model
{
    use HasFactory;
    use SoftDeletes;

    // Relazione one to many con Chef. Review è la tabella secondaria.
    public function chef(){
        return $this->belongsTo(Chef::class);
    }
}
