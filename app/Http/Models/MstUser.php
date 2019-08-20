<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class MstUser extends Model
{
     /**
     * this is table is associated with the model
     *
     * @var string
     */
    protected $table = "mst_user";

    /**
     * the table primary key
     */
    protected $primaryKey = "id";

    protected $fillable = ['id', 'user_name', 'full_name', 'icon', 'flag'];
}
