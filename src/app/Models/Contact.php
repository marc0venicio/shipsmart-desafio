<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Address;

class Contact extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
        'address_id'
    ];

    public function addresses(){
        return $this->belongsTo(Address::class);
    }
}
