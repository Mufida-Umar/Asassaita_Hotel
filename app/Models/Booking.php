<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Room;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'fullName', 'checkIn', 'checkOut', 'checkOutTime', 'roomType', 'guest', 'room_id'
    ];
 
public function assignedRoom() {
    return $this->belongsTo(Room::class, 'room_id');
}
}