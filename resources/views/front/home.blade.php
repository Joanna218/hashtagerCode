@extends('front.layouts.app')

@section('content')

<!-- 區塊三 -->
<div id="slider">
  <div class="uk-position-relative uk-visible-toggle uk-light"
    tabindex="-1" uk-slideshow="animation: fade;autoplay: true;autoplay-interval: 2500;pause-on-hover: true;">
    <ul class="uk-slideshow-items" uk-height-viewport="offset-top: true; offset-bottom: 30">
      <li>
        <img src="{{ asset('images/nav/banner01.png') }}" alt="輪播圖01" uk-cover uk-img>
      </li>
      <li>
        <img src="{{ asset('images/nav/banner02.png') }}" alt="輪播圖02" uk-cover uk-img>
      </li>
      <li>
        <img src="{{ asset('images/nav/banner03.png') }}" alt="輪播圖03" uk-cover uk-img>
      </li>
    </ul>
  </div>
</div>

<!-- 區塊四 共同推廣-->
<div id="common-promote">
  <div class="container-fluid">
    <div class="d-flex justify-content-end">
      <div class="desc align-items-end">
        <div>
          <h1>與真正喜歡你產品的消費者 <br> 共同推廣</h1>
          <div class="desc-text">
          Hashtager貼嗑上聚集上萬位在朋友圈中具有影響力的KOC（Key Opinion Consumer，翻譯為關鍵意見消費者，廣義稱為素人網紅，是IG粉絲數介於500至5,000人）。他們熱愛嚐鮮、喜歡體驗新的事物，並且熱衷於分享生活中的大小事，他們各個是IG上的活躍人物，我們稱他們為貼嗑仔。
          </div>
          <div class="desc-text">
          透過在Hashtager貼嗑上舉辦活動，你可以快速從中找到對你的產品、品牌感興趣並且符合品牌、產品理念的KOC，讓他們來為你的產品發表體驗後的真實感受，在對產品、品牌高度興趣之下分享出來的口碑心得，口碑影響力更勝於一般KOC。
          </div>
        </div>

      </div>
      <div class="promote-img">
        <img class="img-fluid" src="{{ asset('images/index/top_img.png') }}" alt="共同推廣背景圖">
      </div>
    </div>
  </div>
</div>

<!-- 嗑仔們的特質 -->
<div id="tager-feature">
  <div class="container">
    <h2 class="text-center">這些貼嗑仔們的特質...</h2>
    <nav class="nav nav-pills">
      <div class="nav-item">
        <div class="item-img">
          <img class="img-fluid" src="{{ asset('images/index/icon_index-1.png') }}" alt="貼嗑特質1">
        </div>
        <p>
          貼文內容生活化，有一套自己的 <br>
          風格，非制式形的業配
        </p>
      </div>
      <div class="nav-item">
        <div class="item-img">
          <img class="img-fluid" src="{{ asset('images/index/icon_index-2.png') }}" alt="貼嗑特質2">
        </div>
        <p>
          對你的產品及品牌有高度興趣， <br>
          且認同你的理念與想法
        </p>
      </div>
      <div class="nav-item">
        <div class="item-img">
          <img class="img-fluid" src="{{ asset('images/index/icon_index-3.png') }}" alt="貼嗑特質3">
        </div>
        <p>
          口碑心得是真實的回饋， <br>
          文章內容所創造的共鳴感極強
        </p>
      </div>
    </nav>
  </div>
  <div class="bottom-bg"></div>
</div>

<!-- tager-KOC -->
<div id="tager-KOC">
  <div class="container d-flex justify-content-between">
    <div class="koc-img">
      <img class="img-fluid" src="{{ asset('images/index/img_index-1@2x.png') }}" alt="KOC">
    </div>
    <div class="desc">
      <div>
        <h1>
          有了Hashtager貼嗑， <br>
          找到適合的KOC不再需要 <br>
          大海撈針
        </h1>
        <div class="desc-text">
          我們了解對於新的品牌、產品還有中小企業們來說，要找到合適的KOC既耗時又費力氣，但是社群行銷又非常講求時效。
        </div>
        <div class="desc-text">
          因此，我們致力於讓品牌及KOC的資訊透明化，交流能夠更加快速，利於將不同的品牌類別需求與素人的特性相結合，
          幫助品牌能夠用更短的時間找到更適合的KOC。同時，Hashtager貼嗑擁有完善的後台追蹤系統。
          不只能夠幫助品牌加快行銷節奏，同時省下中間找尋KOC的時間與力氣。
        </div>
      </div>
    </div>
  </div>

</div>

<!-- 萬名優質的KOC -->
<div id="excellent-koc">
  <div class="container">
  <h2>
    Hashtager貼嗑已累積上萬名優質的KOC， <br>
    成功舉辦百檔活動
  </h2>
  <img src="https://fakeimg.pl/1150x413" alt="">
  </div>
</div>

<!-- koc 合作平台 -->
<div id="koc-platform">
  <div class="container">
    <h2>
    Hashtager貼嗑與一般KOC合作平台 <br>
    有什麼不同呢？
    </h2>
    <div class="different-content">
      <div class="different-item">
        <span class="arrow-icon"><i class="fas fa-arrow-right"></i></span>
        <span>在Hashtager貼嗑上只需要提供產品，就可以開始招募產品的體驗者，非常簡單！</span>
      </div>
    </div>
    <div class="different-content">
      <div class="different-item">
        <span class="arrow-icon"><i class="fas fa-arrow-right"></i></span>
        <span>Hashtager貼嗑上的KOC是真實對產品、品牌感興趣，並且是真的有需求，不以得到稿費為目的，因次更能夠以生活化的方式，自然帶出產品的優點。</span>
      </div>
    </div>
    <div class="different-content">
      <div class="different-item">
        <span class="arrow-icon"><i class="fas fa-arrow-right"></i></span>
        <span>體驗者們都是主動來報名，並且會在報名的時候填寫報名原因，讓品牌能夠更了解每個體驗者與產品的關聯性，並更加熟悉這位體驗者。</span>
      </div>
    </div>
    <div class="different-content">
      <div class="different-item">
        <span class="arrow-icon"><i class="fas fa-arrow-right"></i></span>
        <span>更好的是，在貼嗑是以公開的方式舉辦活動，可以同時增加品牌、產品的曝光度，讓更多人認識你的產品！</span>
      </div>
    </div>
  </div>
  <div class="koc-platform-bg">
    <img class="img-fluid" src="{{ asset('images/index/bg_01@2x.png') }}" alt="koc 合作平台背景圖">
  </div>

</div>

@endsection
