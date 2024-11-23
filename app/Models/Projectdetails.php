<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projectdetails extends Model
{
    use HasFactory;
    protected $fillable = [
        'ideatypes_id',
        'users_id',
        'name',
        'descrption', 
        'market_analysis', -
        'file_path', 
        'pitch_deck', 
        'photo',
        'proto_type', 
        'business_splan', 
        'project_timeline', 
        'team_info', 
        'investment_proposal', 
        'invest_need', 
        'use_of_funds_and_budget_allocation', 
        'alignment_with_esg', 
        'feedback', 
        'refrence', 
        'exit_strategy',
        'contact_info',
        'behavioral_insights'


    ];
    // each project deatil belongs to one idea type 
    /**
     * Get the user that owns the Projectdetails
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function ideatype()
    {
        return $this->belongsTo(Ideatype::class, 'ideatypes_id');
    }

    public function user() {
        return $this->belongsTo(User::class, 'users_id');
    }
}
