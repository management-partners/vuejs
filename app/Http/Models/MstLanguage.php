<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class MstLanguage extends Model
{
  /**
   * this is table is associated with the model
   *
   * @var string
   */
  protected $table = "mst_language";

  /**
   * the table primary key
   */
  protected $primaryKey = "id";

  protected $fillable = ['id', 'short_name', 'long_name', 'icon', 'flag'];
}
