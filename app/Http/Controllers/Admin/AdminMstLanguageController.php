<?php

namespace App\Http\Controllers\Admin;

use App\Http\Models\MstLanguage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Repositories\MstLanguageInterface;

class AdminMstLanguageController extends Controller
{
    protected $ILanguage = null;

    public function __construct(MstLanguageInterface $repoLanguage) {
        $this->ILanguage = $repoLanguage;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         return response()->json($this->ILanguage->getListLanguage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Http\Models\Admin\AdminMstLanguage  $adminMstLanguage
     * @return \Illuminate\Http\Response
     */
    public function show(MstLanguage $adminMstLanguage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Http\Models\Admin\AdminMstLanguage  $adminMstLanguage
     * @return \Illuminate\Http\Response
     */
    public function edit(MstLanguage $adminMstLanguage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Http\Models\Admin\AdminMstLanguage  $adminMstLanguage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MstLanguage $adminMstLanguage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Http\Models\Admin\AdminMstLanguage  $adminMstLanguage
     * @return \Illuminate\Http\Response
     */
    public function destroy(MstLanguage $adminMstLanguage)
    {
        //
    }
}
