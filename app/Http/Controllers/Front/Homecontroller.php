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

    public function service()
    {
        return view('front.service');
    }

    public function contact()
    {
        return view('front.contact');
    }

    public function apply()
    {
        return view('front.apply');
    }

    public function sendMail(Request $request)
    {
      $from = ['email'=>'service@hashtager.com.tw',
      'name'=>$request['contact-person']];

      // 填寫收信人信箱
      $to = ['email'=>'service@hashtager.com.tw',
      'name'=>'Hashtager舉辦活動'];

      $to1 = ['email'=>'jcli@indexasia.com.tw',
      'name'=>'Hashtager舉辦活動'];

      $to2 = ['email'=>'hsinhuei.li@indexasia.com.tw',
      'name'=>'Hashtager舉辦活動'];

      // $test = ['email'=>'okokis101@gmail.com',
      // 'name'=>'Hashtager申請上架'];

      // 信件的內容(即表單填寫的資料)
      $data = [
        'moreContents'=> $request['more-contents'],
        'contactPrson'=> $request['contact-person'],
        'contactTel'=>$request['contact-tel'],
        'corporation'=>$request['corporation'],
        'email'=>$request['email'],
        'otherRequired'=>$request['other-required']
      ];

      $subject = '2B網站-上架諮詢' .$request['contact-person'];
      // 寄出信件
      Mail::send('front.post', $data, function($message) use ($from, $to, $subject) {
      $message->from($from['email'], $from['name']);
      $message->to($to['email'], $to['name'])->subject($subject);
      });

      Mail::send('front.post', $data, function($message) use ($from, $to1, $subject) {
        $message->from($from['email'], $from['name']);
        $message->to($to1['email'], $to1['name'])->subject($subject);
        });

      Mail::send('front.post', $data, function($message) use ($from, $to2, $subject) {
        $message->from($from['email'], $from['name']);
        $message->to($to2['email'], $to2['name'])->subject($subject);
        });

      // $data = $request->all();
      // Mail::send([], $data, function ($message) use ($data) {
      //   $message->from(ENV('MAIL_USERNAME', 'mailsend@google.com'), $data['contact-person']);
      //   $message->to(ENV('MAIL_SUPPORT', 'mailsend@google.com'))->subject('Hashtager舉辦活動');
      // });
      return "寄信成功，將會有專人與您聯繫！";
    }

    public function sendApplyMail(Request $request)
    {
      $from = ['email'=>'service@hashtager.com.tw',
      'name'=>$request['contact-person']];

      // 填寫收信人信箱
      $to = ['email'=>'service@hashtager.com.tw',
      'name'=>'Hashtager申請上架'];

      $to1 = ['email'=>'jcli@indexasia.com.tw',
      'name'=>'Hashtager申請上架'];

      $to2 = ['email'=>'hsinhuei.li@indexasia.com.tw',
      'name'=>'Hashtager申請上架'];

      // $test = ['email'=>'okokis101@gmail.com',
      // 'name'=>'Hashtager申請上架'];

      // 信件的內容(即表單填寫的資料)
      $data = [
        'applyName'=> $request['apply-name'],
        'contactTel'=> $request['contact-tel'],
        'corporation'=> $request['corporation'],
        'corporationTel'=> $request['corporation-tel'],
        'manageItem'=> $request['manage-Item'],
        'brandName'=> $request['brand-name'],
        'brandCategory'=> $request['brand-category'],
        'moreActivity'=> $request['more-activity'],
        'home'=> $request['home'],
        'facebook'=> $request['facebook'],
        'instagram'=> $request['instagram'],
        'email'=> $request['email'],
        'otherRequired'=> $request['other-required']
      ];

      $subject = '2B網站-上架諮詢' .$request['apply-name'];
      // 寄出信件
      Mail::send('front.applyMail', $data, function($message) use ($from, $to, $subject) {
      $message->from($from['email'], $from['name']);
      $message->to($to['email'], $to['name'])->subject($subject);
      });

      Mail::send('front.applyMail', $data, function($message) use ($from, $to1, $subject) {
        $message->from($from['email'], $from['name']);
        $message->to($to1['email'], $to1['name'])->subject($subject);
        });

      Mail::send('front.applyMail', $data, function($message) use ($from, $to2, $subject) {
        $message->from($from['email'], $from['name']);
        $message->to($to2['email'], $to2['name'])->subject($subject);
        });

      return "寄信成功，將會有專人與您聯繫！";
    }

}
