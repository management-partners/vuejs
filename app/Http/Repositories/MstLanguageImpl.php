<?php
  namespace App\Http\Repositories;

  use App\Http\Models\MstLanguage;
  use Illuminate\Database\Eloquent\Collection;
  use Illuminate\Http\Request;
  use App\Http\Repositories\MstLanguageInterface;

  /**
   * Class LanguageRepository
   * @package App\Http\Repositories
   */
  class MstLanguageImpl implements MstLanguageInterface {

    /**
     * @var language model
     */
    protected $model = null;

    /**
     * LangaugeRepository Langauge
     * parameter langauge model
     */
    public function __construct(MstLanguage $model) {
      $this->model = $model;
    }

    /**
     * get all record from database
     */
     public function getListLanguage() {
          return $this->model::all();
     }

     /**
      * create new  record model language
      */
     public function createLanguage(Request $request) {
       return $this->model::create($request->all());
     }

     /**
      * get info record
      */
     public function showLanguage(MstLanguage $lang) {
       return $this->model::findOrFail($lang);
     }

     /**
      *
      */
     public function updateLanguage(Request $request, MstLanguage $lang) {
       $lang = $this->model::findOrFail($lang);
       return $lang->update($request->all());
     }

     /**
      * delete record
      */
     public function deleteLangue(MstLanguage $lang) {
       $lang = $this->model::findOrFail($lang);
       $lang->Flag = 1;
       return $lang->save();
     }
  }
 ?>
