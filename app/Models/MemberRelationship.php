<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MemberRelationship extends Model
{
    protected $fillable = [
        'member_id',
        'related_member_id',
        'relationship_type',
        'is_active',
        'start_date',
        'end_date',
        'remarks',
    ];

    public function member()
    {
        return $this->belongsTo(Member::class);
    }

    public function relatedMember()
    {
        return $this->belongsTo(
            Member::class,
            'related_member_id'
        );
    }
}