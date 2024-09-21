<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Chef extends Model

{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'user_id',
        'address',
        'CV',
        'photograph',
        'telephone',
        'description_of_dishes',
        'visibility',

    ];

    // Relazione many to many con il model Sponsor
    public function sponsorships()
    {
        return $this->belongsToMany(Sponsorship::class)
                    ->withPivot('start_date', 'end_date')
                    ->withTimestamps();
    }

    // Relazione many to many con il model Specialization
    public function specializations()
    {
        return $this->belongsToMany(Specialization::class);
    }

    // Relazione many to many con il model Vote
    public function votes()
    {
        return $this->belongsToMany(Vote::class);
    }

    // Relazione one to many con message. Chef è la tabella primaria.
    public function messages(){
        return $this->hasMany(Message::class);
    }

    // Relazione one to many con reviews. Chef è la tabella principale.
    public function reviews(){
        return $this->hasMany(Review::class);
    }

    // Relazione one to one con User.
    public function user(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function isSponsored()
    {
        $now = now();

        return $this->sponsorships()
                    ->wherePivot('start_date', '<=', $now)
                    ->wherePivot('end_date', '>=', $now)
                    ->exists();
    }
}
