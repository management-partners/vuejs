<?php

namespace App\Http\Models\User;

use Illuminate\Database\Eloquent\Model;

class MstLanguage extends Model
{
     /**
      * テーブル名
      *
      * @var string
      */
    protected  $table = "mst_language";

    /**
     * created_atとupdated_atの自動更新をOFFにする
     *
     * ＠var bool
     */
     public $timestamps = true;

     /**
      *モデルの日付カラムの保存フォーマット
      *
      * @var string
      */
     protected $dateFormat  = "y-m-d h:m:s";

     /**
      * 作成日時カラムの指定
      *
      * @var string
      */
     const CREATED_AT = "created_at";

     /**
      * 更新日時カラムの指定
      *
      * @var string
      */
     const UPDATED_AT = "updated_at";

     /**
      * 削除日時カラムの指定
      * @var string
      */
     const DELETED_AT = "deleted_at";

     /**
     * 日付を変形する属性
     *
     * @var array
     */
    protected $dates = ['created_at', 'updated_at', 'deleted_at'];

     /**
      * 登録を許可するカラム
      *
      * @var array
      */
     protected $fillable = ['short_name', 'long_name', 'icon', 'flag'];
}
