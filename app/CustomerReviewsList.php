<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CustomerReviewsList extends Model
{
  protected $table = 'review';
  protected $primaryKey = 'customerId';
  protected $keyType = 'string';
  public $timestamps = false;
}
