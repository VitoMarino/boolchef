<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use SebastianBergmann\CodeCoverage\NoCodeCoverageDriverWithPathCoverageSupportAvailableException;

class Sponsor extends Model
{

    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'name',
        'price',
        'length',
    ];

    // Relazione many to many con il model Chef
    public function chef(){
        return $this->belongsToMany(Chef::class);
    }
}
