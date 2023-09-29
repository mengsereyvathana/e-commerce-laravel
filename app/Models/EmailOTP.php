<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmailOTP extends Model
{
    use HasFactory;

    protected $table = "email_otp";
    protected $guarded = ["id"];
}
