<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CustomerReviewsList extends Model
{
  protected $table = 'review';
  protected $primaryKey = 'studentId';
  protected $keyType = 'string';
  public $timestamps = false;
}
