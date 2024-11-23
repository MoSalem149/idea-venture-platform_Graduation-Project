<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ideatype extends Model
{
    use HasFactory;
    protected $fillable = [
        'proj_type'
    ];
    // if i have many projects  it would have idea type, each idea type can take many ideas
    /**
     * Get all of the comments for the Ideatype
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function projectdeatilss()
    {
        return $this->hasMany(Projectdetails::class);
    }
}


