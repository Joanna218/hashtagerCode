@extends('front.layouts.app')

@section('content')
<div class="common-banner service-banner d-none d-md-block">
  <h2 class="common-banner-text">
    Hashtager行銷團隊 <br>
    讓你的活動更上層樓
  </h2>
</div>

<div class="common-banner service-mobil-banner d-sm-block d-md-none">
  <h2 class="common-banner-text text-center">
    Hashtager<br>行銷團隊 <br>
    讓你的活動<br>更上層樓
  </h2>
</div>

<!-- nav -->
<div id="nav-bar-bg">
  <div class="container">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="#">活動企劃</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">其他應用服務</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">UGC再行銷工具</a>
      </li>
    </ul>
  </div>

</div>

<!-- 活動企劃 -->
<div id="campaign-program">
  <div class="container">
    <h1>活動企劃</h1>
    <div class="campaign-contents">
      <div class="campaign-box">
        <h2>市場分析</h2>
        <img class="promote-img d-none d-md-block" src="{{ asset('images/service/service_img_01@2x.png') }}" alt="">
        <p>
          為產品或品牌進行完整市場分析，找出行銷方向，建議你最適合的活動規劃，讓你辦活動能夠穩紮穩打的完成目標。
          <br>
        </p>
      </div>
      <div class="campaign-box">
        <h2>內容企劃</h2>
        <img class="promote-img d-none d-md-block" src="{{ asset('images/service/service_img_02@2x.png') }}" alt="">
        <p>
        辦活動最怕沒有人參加，Hashtager貼嗑提供你各種創意活動企劃的建議，幫你吸引參加者，引爆話題熱潮，提高產品銷售量與品牌形象打造！
        </p>
      </div>
      <div class="campaign-box">
        <h2>素材製作</h2>
        <img class="promote-img d-none d-md-block" src="{{ asset('images/service/service_img_03@2x.png') }}" alt="">
        <p>
        Hashtager貼嗑提供撰寫創意文案服務，搭配引人注目的頭版banner設計，讓活動可以一眼抓住目光，吸引更多報名者參加，廣告效益事半功倍。
        </p>
      </div>
    </div>
  </div>
</div>

<!-- 開始辦活動 -->
<div id="start-campaign">
  <div class="container">
    <h1>開始辦活動</h1>
    <h3 class="d-none d-md-block">貼嗑一站式辦活動，讓你不費吹灰之力，輕鬆舉辦體驗活動</h3>
    <h3 class="d-sm-block d-md-none">貼嗑一站式辦活動，讓你不費吹灰之力，<br>輕鬆舉辦體驗活動</h3>
    <a href="{{ url('contact') }}" class="go-btn">GO</a>
  </div>
</div>
@endsection
