<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    use HasFactory;

    // private $message = "Hello DSI21G2";

    public function testMessage() {
        return "Hello DSI21G2";
    }
}
