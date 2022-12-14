<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Events extends Model
{
    protected $table = 'events';
    protected $fillable = ['location','name','description','photo','event_start','event_end','price','available_tickets'];
}
