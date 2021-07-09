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
        <a class="nav-link" href="#campaign-program">活動企劃</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#other-services">其他應用服務</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#ugc-tool">UGC再行銷工具</a>
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

<!-- 其他應用服務 -->
<div id="other-services">
  <div class="container">
    <h1>其他應用服務</h1>
    <div class="service-contents">
      <div class="service-box">
        <h3 class="d-none d-md-block">KOL <br> 深度整合行銷</h3>
        <img class="other-service-img" src="{{ asset('images/service/service_icon_01@2x.png') }}" alt="">
        <h3 class="d-sm-block d-md-none">KOL <br> 深度整合行銷</h3>
        <div class="desc">
          <div class="item-desc">
            <img src="{{ asset('images/service/arrow-circle-right@2x.png') }}" alt="">
            <span>專案式顧問服務</span>
          </div>
          <div class="item-desc">
            <img src="{{ asset('images/service/arrow-circle-right@2x.png') }}" alt="">
            <span>AsiaKOL跨境網紅合作</span>
          </div>
          <div class="item-desc">
            <img src="{{ asset('images/service/arrow-circle-right@2x.png') }}" alt="">
            <span>AKTour跨境旅遊體驗行銷</span>
          </div>
          <div class="item-desc">
            <img src="{{ asset('images/service/arrow-circle-right@2x.png') }}" alt="">
            <span>AKBOX網紅開箱行銷</span>
          </div>
          <div class="item-desc">
            <img src="{{ asset('images/service/arrow-circle-right@2x.png') }}" alt="">
            <span>D2C網紅電商行銷</span>
          </div>
      </div>
        </div>
      <div class="service-box">
        <h3 class="d-none d-md-block">社群/社團<br>深度整合行銷</h3>
        <img class="other-service-img" src="{{ asset('images/service/service_icon_02@2x.png') }}" alt="">
        <h3 class="d-sm-block d-md-none">社群/社團<br>深度整合行銷</h3>
        <div class="desc">
          <div class="item-desc">
            <img src="{{ asset('images/service/arrow-circle-right@2x.png') }}" alt="">
            <span>FB粉絲團健檢服務</span>
          </div>
          <div class="item-desc">
            <img src="{{ asset('images/service/arrow-circle-right@2x.png') }}" alt="">
            <span>FB/IG社群經營服務</span>
          </div>
          <div class="item-desc">
            <img src="{{ asset('images/service/arrow-circle-right@2x.png') }}" alt="">
            <span>FB/IG廣告投放服務</span>
          </div>
          <div class="item-desc">
            <img src="{{ asset('images/service/arrow-circle-right@2x.png') }}" alt="">
            <span>粉絲團聯盟擴散服務</span>
          </div>
          <div class="item-desc">
            <img class="other-service-img" src="{{ asset('images/service/arrow-circle-right@2x.png') }}" alt="">
            <span>素人大隊朋友圈行銷</span>
          </div>
        </div>
      </div>
      <div class="service-box">
        <h3 class="d-none d-md-block">口碑監測<br>議題擴散</h3>
        <img class="other-service-img" src="{{ asset('images/service/service_icon_03@2x.png') }}" alt="">
        <h3 class="d-sm-block d-md-none">口碑監測<br>議題擴散</h3>
        <div class="desc">
          <div class="item-desc">
            <img src="{{ asset('images/service/arrow-circle-right@2x.png') }}" alt="">
            <span>企業、品牌口碑健檢服務</span>
          </div>
          <div class="item-desc">
            <img src="{{ asset('images/service/arrow-circle-right@2x.png') }}" alt="">
            <span>企業、品牌口碑優化服務</span>
          </div>
          <div class="item-desc">
            <img src="{{ asset('images/service/arrow-circle-right@2x.png') }}" alt="">
            <span>負面口碑平衡服務</span>
          </div>
        </div>
      </div>
    </div>

    <div class="more">
      <a href="{{ url('/contact') }}">瞭解更多</a>
    </div>
  </div>
</div>

<!-- UGC再行銷工具 -->
<div id="ugc-tool">
  <div class="container">
    <h1>UGC再行銷工具</h1>
    <div class="letro-img">
      <img class="img-fluid" src="{{ asset('images/service/letro@2x.png') }}" alt="">
    </div>
    <h3 class="d-none d-md-block">將IG社群口碑與活動網頁/電商EC快速整合</h3>
    <h3 class="d-sm-block d-md-none">
      將IG社群口碑<br>
      與活動網頁/電商EC<br>
      快速整合
    </h3>
    <div class="tool-contents">
      <div class="tool-box">
        <div class="tool-desc">
          <div class="item">
            <div class="title">
              <div class="d-flex">
                <img class="tool-desc-img" src="{{ asset('images/service/big-arrow-circle-right@2x.png') }}" alt="">
                <h3 class="d-none d-md-block"><span class="color-font">UGC x 品牌網站</span>，大幅增進品牌形象</h3>
                <h3 class="d-sm-block d-md-none"><span class="color-font">UGC x 品牌網站</span>，<br>大幅增進品牌形象</h3>
              </div>
              <p>
              真實的體驗回饋，更具說服力。將豐富的UGC結合至官網內，強化品牌形象，提升對產品的信任感！
              </p>
            </div>
          </div>
        </div>

        <div class="tool-desc">
          <div class="item">
            <div class="title">
              <div class="d-flex">
                <img class="tool-desc-img" src="{{ asset('images/service/big-arrow-circle-right@2x.png') }}" alt="">
                <h3 class="d-none d-md-block"><span class="color-font">UGC x 電商導購</span>，產品銷售量大提升</h3>
                <h3 class="d-sm-block d-md-none"><span class="color-font">UGC x 電商導購</span>，<br>產品銷售量大提升</h3>
              </div>
              <p>
              將活動所搜集的真實體驗文放在電商網站上展示，減少網站跳出率，加速下單的流程，銷售量步步提升！
              </p>
            </div>
          </div>
        </div>

        <div class="tool-desc">
          <div class="item">
            <div class="title">
              <div class="d-flex">
                <img class="tool-desc-img" src="{{ asset('images/service/big-arrow-circle-right@2x.png') }}" alt="">
                <h3 class="d-none d-md-block"><span class="color-font">UGC x 餐飲O2O</span>，有效增加來客數</h3>
                <h3 class="d-sm-block d-md-none"><span class="color-font">UGC x 餐飲O2O</span>，<br>有效增加來客數</h3>
              </div>
              <p>
                餐飲店家網站整合UGC再利用，可有效地將線上流量轉回實際來客數，行銷效果肉眼可見！
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="letro-img d-none d-lg-block">
        <img src="{{ asset('images/service/service_img_04@2x.png') }}" alt="">
      </div>
    </div>
  </div>
</div>

<!-- Letro簡單上手三步驟 -->
<div id="easy-step">
  <div class="container">
    <h1 class="d-none d-md-block">Letro簡單上手三步驟</h1>
    <h1 class="d-sm-block d-md-none">Letro<br>簡單上手三步驟</h1>
    <img class="d-none d-md-block" src="{{ asset('images/service/service_img_05@2x.png') }}" alt="">
    <img class="d-sm-block d-md-none" src="{{ asset('images/mobile/mobile_service_img_05@2x.png') }}" alt="">
    <div class="more">
      <a href="{{ url('contact') }}">瞭解Letro詳情</a>
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

<script>
  // for smooth scrolling when click an anchor link
  $(document).on('click', 'a[href^="#"]', function (event) {
    event.preventDefault();

    $('html, body').animate({
        scrollTop: $($.attr(this, 'href')).offset().top
    }, 500);
});
</script>
@endsection
