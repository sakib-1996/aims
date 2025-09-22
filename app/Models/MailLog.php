<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MailLog extends Model
{
    use HasFactory;

    use HasFactory;

    protected $fillable = [
        'recipient_email',
        'subject',
        'message',
        'status',
    ];
}
