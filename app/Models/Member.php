<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Member extends Model
{
    use SoftDeletes;

    protected $fillable = ['position_id', 'first_name', 'last_name', 'middle_name', 'gender', 'birthday', 'contact_number', 'email', 'house_number', 'street_name', 'barangay', 'city', 'province', 'occupation', 'status', 'spiritual_status', 'encounter_date', 'baptism_date'];

    public function relationships()
    {
        return $this->hasMany(MemberRelationship::class);
    }

    public function position()
    {
        return $this->belongsTo(Position::class);
    }
}
