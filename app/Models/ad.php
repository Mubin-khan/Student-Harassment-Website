<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ad extends Model
{
    use HasFactory;
    protected $table='ad';
    protected $fillable=['email','password','phone','message'];
}

?>
