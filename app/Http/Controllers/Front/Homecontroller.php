<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Mail;

class HomeController extends Controller
{
    public function index()
    {
        return view('front.home');
    }

    public function ugc()
    {
        return view('front.ugc');
    }

    public function contact()
    {
        return view('front.contact');
    }

    public function sendMail(Request $request)
    {
      //從表單取得資料
      // $from = ['email'=>$input['email'],
      // 'name'=>$input['name'],
      // 'subject'=>$input['subject']
      // ];

      // 填寫收信人信箱
      // $to = ['email'=>'xxx@xxx.com',
      // 'name'=>'xxx'];

      // 信件的內容(即表單填寫的資料)
      // $data = ['contact-person'=>$input['contact-person']
      // 'address'=>$input['address'],
      // 'email'=>$input['email'],
      // 'subject'=>$input['subject'],
      // 'msg'=>$input['message']
      // ];

      // 寄出信件
      // Mail::send([], $data, function($message) use ($from, $to) {
      // $message->from($from['email'], $from['name']);
      // $message->to($to['email'], $to['name'])->subject($from['subject']);
      // });

      //$data = $request->all();
      // Mail::send([], $data, function ($message) use ($data) {
      //   $message->from(ENV('MAIL_USERNAME', 'mailsend@google.com'), $data['name']);
      //   $message->to(ENV('MAIL_SUPPORT', 'mailsend@google.com'))->subject('Feedback Mail');
      // });
      return "success";
    }

}
