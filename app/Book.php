<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
  protected $table = 'books';

//set prmary key
  public $primaryKey = 'id';

//time stamps
  public $timestamps = true;

}
