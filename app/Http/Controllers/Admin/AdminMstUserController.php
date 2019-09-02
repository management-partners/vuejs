<?php

namespace App\Http\Controllers\Admin;

use App\Http\Models\MstUser;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;

class AdminMstUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Models\MstUser  $mstUser
     * @return \Illuminate\Http\Response
     */
    public function show(MstUser $mstUser)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Http\Models\MstUser  $mstUser
     * @return \Illuminate\Http\Response
     */
    public function edit(MstUser $mstUser)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Http\Models\MstUser  $mstUser
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MstUser $mstUser)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Http\Models\MstUser  $mstUser
     * @return \Illuminate\Http\Response
     */
    public function destroy(MstUser $mstUser)
    {
        //
    }
    /**
     * user send email register
     * @param \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function sendEmailRegister(Request $request){

        $subject = 'パスワード再発行 | 電話占いカリヨン';
        $emailTo = $request->email;
        $emailToName = $request->name;
        $emailCc = '';
        $emailCcName = '';
        $emailBcc = '';
        $emailBccName = '';
        $emailFrom = env('MAIL_FROM_ADDRESS');
        $emailFromName =  env('MAIL_FROM_NAME');
        $content = 'MAIL_FROM_CONTEN';
        $emailContent= array(
          'EMAIL_TO'        => $emailTo,
          'EMAIL_TO_NAME'   => $emailToName,
          'EMAIL_CC'        => $emailCc,
          'EMAIL_CC_NAME'   => $emailCcName,
          'EMAIL_BCC'       => $emailBcc,
          'EMAIL_BCC_NAME'  => $emailBccName,
          'EMAIL_FROM'      => $emailFrom,
          'EMAIL_FROM_NAME' => $emailFromName,
          'EMAIL_SUBJECT'   => $subject,
          'EMAIL_CONTENT'   => $content
     );
        $emailtemplate = 'admin.index';

        $result = Helper::sendEmail($emailContent, $emailtemplate);
        if($result) {
             return response()->json(['type'=>'success','message' => 'Item created successfully!']);
             // return back()->with('success','Item created successfully!');
        }else {
             return response()->json(['type'=>'error','message' => 'Item created fail!']);
             // return back()->with('error','Item created successfully!');
        }

    }
}
