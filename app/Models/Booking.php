<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'fullName', 'checkIn', 'checkOut', 'checkOutTime', 'roomType', 'guest'
    ];
}