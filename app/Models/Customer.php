<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    //
    use HasFactory;

    protected $table = 'customer';
    protected $fillable = [
        'firstName',
        'lastName',
        'email',
        'jobTitle',
        'companyName',
        'industry',
        'phoneNumber'
    ]; 
}
