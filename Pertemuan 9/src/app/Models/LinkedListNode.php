<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LinkedListNode extends Model
{
    protected $fillable = ['value','next_id'];

    public function next()
    {
        return $this->belongsTo(LinkedListNode::class, 'next_id');
    }
}
