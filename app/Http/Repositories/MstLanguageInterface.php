<?php
namespace App\Http\Repositories;

use App\Http\Models\MstLanguage;
use Illuminate\Http\Request;

interface MstLanguageInterface {

  /**
   * get all record in language table
   *
   */
  public function getListLanguage();

  /**
   * create new record in language table
   *
   * @var $request
   */
  public function createLanguage(Request $request);

  /**
   * show detail infomation record language
   *
   *  @var $language
   */
  public function showLanguage(MstLanguage $lang);

  /**
   *  update infomation of record language
   *
   * @var $request, $lang
   */
  public function updateLanguage(Request $request, MstLanguage $lang);

  /**
   * delete flag off
   *
   * @var $language
   */
  public function deleteLangue(MstLanguage $lang);

}

?>
