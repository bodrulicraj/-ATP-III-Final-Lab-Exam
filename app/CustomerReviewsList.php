<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CustomerReviewsList extends Model
{
  protected $table = 'CustomerReviewsList';
  protected $primaryKey = 'studentId';
  // protected $primaryKey = 'customerId';
  protected $keyType = 'string';
  public $timestamps = false;
}
