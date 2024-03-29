<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;
    public $timestamps = true;

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'number_of_guests',
        'time',
        'table_id'
    ];

    public function table()
    {
        return $this->belongsTo(Table::class);
    }
}
