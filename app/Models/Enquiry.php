<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Enquiry extends Model
{
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'company_name',
        'message',
        'feedback_remark',
        'enquiry_type',
        'source_page',
    ];
}
