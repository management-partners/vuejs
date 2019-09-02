<?php
namespace App\Http\Controllers\Admin;
/**
 * admin helper function
 */
// use Mail;
use Illuminate\Support\Facades\Mail;
class Helper
{

     public static function sendEmail($emailContent, $emailtemplate){
          // var_dump($emailContent);
        if(isset($emailContent)){
          $content      = $emailContent["EMAIL_CONTENT"];
          $subject      = $emailContent["EMAIL_SUBJECT"];
          $emailTo      = $emailContent["EMAIL_TO"];
          $emailToName  = $emailContent["EMAIL_TO_NAME"];
          if(!empty($emailContent["EMAIL_TO"]) && !empty($emailContent["EMAIL_BCC"])){
            $emailCc      = $emailContent["EMAIL_CC"];
            $emailCcName  = $emailContent["EMAIL_CC_NAME"];
            $emailBcc     = $emailContent["EMAIL_BCC"];
            $emailBccName = $emailContent["EMAIL_BCC_NAME"];
            Mail::send($emailtemplate, ['content'=>$emailContent["EMAIL_CONTENT"]], function($message) {
              $message->to($emailTo, $emailToName)
                      ->cc($emailCc, $emailCcName)
                      ->bcc($emailBcc, $emailBccName)
                      ->subject($subject);
            });
       }else if(empty($emailContent["EMAIL_TO"]) && !empty($emailContent["EMAIL_BCC"])){
                 $emailBcc     = $emailContent["EMAIL_BCC"];
                 $emailBccName = $emailContent["EMAIL_BCC_NAME"];
                 try {
                      Mail::send($emailtemplate, ['content'=>$emailContent["EMAIL_CONTENT"]], function($message) {
                        $message->to($emailTo, $emailToName)
                                ->bcc($emailBcc, $emailBccName)
                                ->subject($subject);
                      });
                 }catch(Exception $ex){
                      dd($ex);
                 }

               }else if(empty($emailContent["EMAIL_TO"]) && !empty($emailContent["EMAIL_BCC"])){
                 $emailCc      = $emailContent["EMAIL_CC"];
                 $emailCcName  = $emailContent["EMAIL_CC_NAME"];
                 Mail::send($emailtemplate, ['content'=>$emailContent["EMAIL_CONTENT"]], function($message) {
                   $message->to($emailTo, $emailToName)
                           ->cc($emailCc, $emailCcName)
                           ->subject($subject);
                 });
               }
        } 
        if (Mail::failures()) {
           return false;
         }else{
           return true;
         }
     }
}


 ?>
