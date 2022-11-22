<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Contact;

class Address extends Model
{
    use HasFactory;

    protected $guarded = [
        'id'
    ];

    public function contact() {
        return $this->hasMany(Contact::class, 'address_id', 'id');
    }
}
