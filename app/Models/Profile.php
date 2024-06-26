<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = ['name', 'email', 'phone', 'role', 'education', 'file', 'sender_ip', 'sended_at'];
    use HasFactory;
}
