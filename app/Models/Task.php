<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = [
         'company_name','group_of_companies','principal','phone_number_of_principal','function_of_company','name_prepaper','position_prepaper','title_prepaper','education_background_prepaper','phone_number_of_prepaper'
    ];
}
