<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;


class Hotel extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name', 
        'destination', 
        'division', 
        'hotel_category', 
        'phone_code', 
        'mobile_number', 
        'whatsapp_number', 
        'email1', 
        'email2', 
        'status'
    ];
}
