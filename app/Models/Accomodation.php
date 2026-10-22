<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Table;
use Illuminate\Database\Eloquent\Model;

#[Table('accommodations')]
#[Fillable(['place_id', 'name', 'image'])]

class Accomodation extends Model
{
    //
}
