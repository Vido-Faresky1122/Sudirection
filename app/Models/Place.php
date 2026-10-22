<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Table;
use Illuminate\Database\Eloquent\Model;

#[Table('places')]
#[Fillable(['name', 'country', 'description', 'image'])]

class Place extends Model
{
    //
}
