@extends('front.layouts.app')

@section('content')
<div id="contact-banner">
<img class="img-fluid d-none d-md-block" src="{{ asset('images/contact/contact_banner@2x.png') }}" alt="">
<img class="img-fluid d-sm-block d-md-none" src="{{ asset('images/mobile/633@2x.png') }}" alt="">
</div>

<div id="contact">
  <div class="container">
    <h1 class="d-none d-md-block">請填寫下方資料，我們將盡快與你聯繫，請耐心等候。</h1>
    <h1 class="d-sm-block d-md-none">請填寫下方資料，<br>我們將盡快與你聯繫，<br>請耐心等候。</h1>
    <h4 class="d-none d-md-block">如要在Hashtager貼嗑上舉辦活動，可於上架諮詢直接填寫申請。</h4>
    <h4 class="d-sm-block d-md-none">如要在Hashtager貼嗑上舉辦活動，<br>可於上架諮詢直接填寫申請。</h4>

    <!-- 電腦 -->
    <form class="d-none d-md-block">
      <!-- 想要了解的內容 -->
      <div class="d-sm-none d-md-flex form-group d-flex">
        <label class="more-contents-label" for="more-contents">想要了解的內容</label>
        <select class="form-control more-contents-select" id="more-contents">
          <option value="活動企劃">活動企劃</option>
          <option value="KOL行銷">KOL行銷</option>
          <option value="社群行銷">社群行銷</option>
          <option value="口碑行銷">口碑行銷</option>
          <option value="輿情監測">輿情監測</option>
          <option value="整合行銷服務">整合行銷服務</option>
          <option value="UGC再利用">UGC再利用</option>
          <option value="異業合作">異業合作</option>
        </select>
      </div>

      <!-- 聯絡人、聯絡電話 -->
      <div class="form-group row">
        <div class="col">
          <label for="contact-person">聯絡人<span class="text-danger">*<span></label>
          <input type="text" class="form-control" id="contact-person">
        </div>
        <div class="col">
          <label for="contact-tel">聯絡電話<span class="text-danger">*<span></label>
          <input type="text" class="form-control" id="contact-tel">
        </div>
      </div>

      <!-- 公司全稱、E-mai -->
      <div class="form-group row">
        <div class="col">
          <label for="corporation">公司全稱<span class="text-danger">*<span></label>
          <input type="text" class="form-control" id="corporation">
        </div>
        <div class="col">
          <label for="eamil">E-mail<span class="text-danger">*<span></label>
          <input type="email" class="form-control" id="eamil" placeholder="公司E-mail為佳">
        </div>
      </div>

      <div class="form-group row">
        <div class="other">
          <textarea class="other-required" id="exampleFormControlTextarea1" placeholder="簡短需求說明(幫助我們安排適合的專員與您聯繫)" rows="10"></textarea>
        </div>
      </div>
      <div class="form-group row justify-content-center mt-4">
        <img src="https://fakeimg.pl/150x50/" alt="">
      </div>
      <div class="form-group row justify-content-center mt-4">
        <button type="submit" class="btn submit-form">送出</button>
      </div>
    </form>

    <!-- 手機 -->
    <form class="d-sm-block d-md-none">
      <div class="form-group row text-center">
        <label class="more-contents-label" for="more-contents">想要了解的內容</label>
        <select class="form-control more-contents-select" id="more-contents">
          <option value="活動企劃">活動企劃</option>
          <option value="KOL行銷">KOL行銷</option>
          <option value="社群行銷">社群行銷</option>
          <option value="口碑行銷">口碑行銷</option>
          <option value="輿情監測">輿情監測</option>
          <option value="整合行銷服務">整合行銷服務</option>
          <option value="UGC再利用">UGC再利用</option>
          <option value="異業合作">異業合作</option>
        </select>
      </div>
      <div class="form-group row">
        <label for="contact-person">聯絡人<span class="text-danger">*<span></label>
        <input type="text" class="form-control" id="contact-person">
      </div>
      <div class="orm-group row">
        <label for="contact-tel">聯絡電話<span class="text-danger">*<span></label>
        <input type="text" class="form-control" id="contact-tel">
      </div>
      <div class="form-group row">
        <label for="corporation">公司全稱<span class="text-danger">*<span></label>
        <input type="text" class="form-control" id="corporation">
      </div>
      <div class="form-group row">
        <label for="eamil">E-mail<span class="text-danger">*<span></label>
        <input type="email" class="form-control" id="eamil" placeholder="公司E-mail為佳">
      </div>

      <div class="form-group row">
        <div class="other">
          <textarea class="other-required" id="exampleFormControlTextarea1" placeholder="簡短需求說明(幫助我們安排適合的專員與您聯繫)" rows="10"></textarea>
        </div>
      </div>
      <div class="form-group row justify-content-center mt-4">
        <img src="https://fakeimg.pl/150x50/" alt="">
      </div>
      <div class="form-group row justify-content-center mt-4">
        <button type="submit" class="btn submit-form">送出</button>
      </div>

    </form>
  </div>
</div>

@endsection
