<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable ;

class Post extends Model
{
    use Searchable;

}
