@extends('front.layouts.app')

@section('content')
<div class="common-banner ugc-banner d-none d-md-block">
  <h2 class="common-banner-text">
    UGC行銷時代 <br>
    真實口碑  影響力更強
  </h2>
</div>

<div class="common-banner ugc-mobil-banner d-sm-block d-md-none">
  <h2 class="common-banner-text text-center">
    UGC行銷時代 <br>
    真實口碑 <br>
    影響力更強
  </h2>
</div>

<!-- 用戶心得 -->
<div id="client-thouhts">
  <div class="container">
    <h1 class="d-none d-lg-block">比起單純廣告代言，消費者更相信真實體驗用戶的心得</h1>
    <h1 class="d-md-block d-lg-none">比起單純廣告代言，<br>消費者更相信真實體驗用戶的心得</h1>
    <div class="thoughts-contents">
      <div class="thoughts-box">
        <div class="data-img">
          <img class="img-fluid d-none d-lg-block" src="{{ asset('images/ugc/customer90@2x.png') }}"  alt="">
          <img class="img-fluid d-md-block d-lg-none" src="{{ asset('images/mobile/90@2x.png') }}"  alt="">
        </div>
        <div class="thoughts-desc">
          <div class="thoughts-icon d-none d-lg-block">
            <img class="img-fluid" src="{{ asset('images/ugc/862@2x.png') }}" alt="">
          </div>
          <p>
          90%的消費者相信UGC貼文能加強影響他們的購買決定，並認為它會是品牌可信度及真實性的關鍵指標。
          </p>
        </div>
        <img class="gray-triangle" src="{{ asset('images/ugc/1165@2x.png') }}" alt="">
      </div>

      <div class="thoughts-box">
        <div class="data-img">
          <img class="img-fluid d-none d-lg-block" src="{{ asset('images/ugc/client78@2x.png') }}"  alt="">
          <img class="img-fluid d-md-block d-lg-none" src="{{ asset('images/mobile/90@2x.png') }}"  alt="">
        </div>
        <div class="thoughts-desc">
          <div class="thoughts-icon d-none d-lg-block">
            <img class="img-fluid" src="{{ asset('images/ugc/865@2x.png') }}" alt="">
          </div>
          <p>
          近8成的網友會選擇相信朋友的推薦更勝過於一般的廣告。
          </p>
        </div>
        <img class="gray-triangle" src="{{ asset('images/ugc/1165@2x.png') }}" alt="">
      </div>
    </div>
  </div>

</div>

<!-- 什麼是UGC -->
<div id="ugc-contents">
  <div class="bg-wrapper">
    <div class="triangle-bgc">
      <h1 class="d-sm-block d-md-none">什麼是UGC（User <br> Generated Content)？</h1>
      <img src="{{ asset('images/ugc/ugc_img_03@2x.png') }}" alt="">
      <p class="d-sm-block d-md-none">UGC直接翻譯稱作用戶原創內容，是消費者自行拍攝照片、寫出文章，由自己發想的原創內容。簡單來說UGC是一種消費者分享生活的同時幫品牌也做了宣傳，打卡牆就是一種例子。</p>
    </div>
    <div class="gray-bgc d-none d-md-block">
      <div class="ugc-desc">
        <h1>什麼是UGC（User <br> Generated Content)？</h1>
        <p>UGC直接翻譯稱作用戶原創內容，是消費者自行拍攝照片、寫出文章，由自己發想的原創內容。簡單來說UGC是一種消費者分享生活的同時幫品牌也做了宣傳，打卡牆就是一種例子。</p>
      </div>

    </div>
  </div>
</div>

<!-- 運用UGC內容 -->
<div id="ugc-advertisement">
  <div class="container">
    <h1 class="d-none d-md-block">運用UGC內容  讓廣告效果倍增</h1>
    <h1 class="d-sm-block d-md-none">運用UGC內容 <br> 讓廣告效果倍增</h1>
    <div class="desc">
      <p>
        數位行銷的渠道多元，品牌需因應各渠道的屬性，需要發想並製作大量不同的行銷素材。為減少素材產出的成本，並且提高成效，國內外眾多品牌已經開始採用經由消費者授權的社群貼文，作為經營品牌的素材內容。除了可以減去自產大量素材的繁雜性，最重要的是行銷效果能夠更卓越！
      </p>
      <p>
      與此同時，當品牌良好地運用經過授權所分享的UGC內容，其實也增加了與消費者的互動，加深對於品牌及產品的認同感。
    </p>

    <div class="d-sm-block d-md-none mobile-social-way">
      <h1>貼嗑推薦的社群貼文<br>3大再利用方式</h1>
      <img src="{{ asset('images/mobile/social-way-991@2x.png') }}" alt="">
      <img src="{{ asset('images/mobile/social-way-992@2x.png') }}" alt="">
      <img src="{{ asset('images/mobile/social-way-993@2x.png') }}" alt="">
    </div>
    </div>

    <div class="social-way-bg d-none d-md-block">
    </div>

  </div>
</div>

<!-- UGC產生 -->
<div id="ugc-produce">
  <div class="bg-wrapper">
    <div class="triangle-bgc">
      <div class="desc">
        <h1>持續舉辦活動 主動刺激UGC產生</h1>
        <p>
          透過長期性、經常的舉辦活動，刺激與消費者的互動，產出大量且有內容的UGC圖文。再透過與其他整合行銷活動的結合，一步步創造品牌聲譽並提高產品的銷量！
        </p>
      </div>
    </div>
    <div class="gray-bgc">
      <img src="{{ asset('images/ugc/ugc_img_05@2x.png') }}" alt="">
    </div>
  </div>
</div>

<!-- UGC活動指標 -->
<div id="campaign-indicator">
  <div class="campaign-indicator-wrapper">
    <h1>衡量UGC活動行銷的三大指標</h1>
    <h3>優秀的體驗大使、高品質的分享、UGC再行銷利用，三大體驗活動成功要素，缺一不可</h3>
    <div class="indicator-contents">
      <div class="indicator-box">
        <div class="indicator-desc">
          <div class="title">
            <div class="white_num">1</div>
            <h2>要如何找到足夠多且優質的體驗大使？</h2>
          </div>
          <p class="p p1">
          活動參加者重「量」也重「質」。 <br>
          除了需要招募到足夠多的參加者，也必須檢視每次活動是否都有新的消費者加入、
          將品牌或產品訊息再次擴散到新的族群，或者加深原本族群品牌的體驗深度。
          </p>
          <div class="check">
            <h4>
              <img src="{{ asset('images/ugc/502@2x.png') }}" alt="">
              參加者是否符合這次的活動受眾族群？
            </h4>
            <h4>
              <img src="{{ asset('images/ugc/502@2x.png') }}" alt="">
              參加者是否符合這次的活動受眾族群？
            </h4>
          </div>
        </div>
        <div class="indicator-img">
          <img src="{{ asset('images/ugc/ugc_img_06@2x.png') }}" alt="">
        </div>
      </div>

      <div class="indicator-box">
        <div class="indicator-desc">
          <div class="title">
            <div class="white_num">2</div>
            <h2>怎麼確認體驗大使願意互動或分享？</h2>
          </div>
          <p class="p p2">
            參加者享受活動體驗的同時，品牌也需要確保有完善的設計，
            引導這些體驗大使在社群中分享，讓活動效果以倍數的方式擴散，
            觸及到更多潛在消費者。
          </p>
          <div class="check">
            <h4>
              <img src="{{ asset('images/ugc/502@2x.png') }}" alt="">
              參加者是否踴躍在社群互動/分享？
            </h4>
            <h4>
              <img src="{{ asset('images/ugc/502@2x.png') }}" alt="">
              分享的內容是否豐富並且能與活動想傳達訊息一致？
            </h4>
          </div>
        </div>
        <div class="indicator-img">
          <img src="{{ asset('images/ugc/ugc_img_07@2x.png') }}" alt="">
        </div>
      </div>

      <div class="indicator-box">
        <div class="indicator-desc">
          <div class="title">
            <div class="white_num">3</div>
            <h2>要如何利用UGC再行銷將無形聲量轉換為實際銷量？</h2>
          </div>
          <p class="p p3">
            利用這些與活動相關的社群貼文，也就是UGC素材，
            再進行後續行銷（例如推廣品牌，建立口碑、分享產品好的評價），
            不僅成效會比單一的品牌廣告大，成本也遠低於單純的投放廣告。
          </p>
          <div class="check">
            <h4>
              <img src="{{ asset('images/ugc/502@2x.png') }}" alt="">
              在彙整相關UGC時怎麼檢視成效？
            </h4>
            <h4>
              <img src="{{ asset('images/ugc/502@2x.png') }}" alt="">
              你知道UGC能夠作為素材及靈感進行再次、二次行銷嗎？
            </h4>
          </div>
          <div class="tag-contents">
            <div class="tag-item">UGC vs 網站 </div>
            <div class="tag-item">UGC vs 線下活動 </div>
            <div class="tag-item">UGC vs 電子郵件</div>
            <div class="tag-item">UGC vs 小編PO文</div>
          </div>
        </div>
        <div class="indicator-img indicator-img3">
          <img src="{{ asset('images/ugc/ugc_img_08@2x.png') }}" alt="">
          <p>
          案例： <br>
          知名美式餐廳將那些舉辦活動所產生的UGC內容與活動一頁式網頁結合，增加網頁的停留率與活動參與率，也等於提升了轉換率。
          </p>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- 解決方案 -->
<div id="resolve">
  <div class="container">
    <h1>每個問題都有解決方案</h1>
    <h3>打造最有效果的活動</h3>
    <div class="resolve-contents">
      <div class="resolve-box">
        <div class="tradition">
          無法確立活動目標 <br>
          流失目標受眾的注意
        </div>
        <div class="arrow-down">
          <img class="img-fluid" src="{{ asset('images/ugc/arrow-down@2x.png') }}"  alt="">
        </div>
        <h3>完整的前期策畫</h3>
        <div class="img-icon">
          <img class="img-fluid" src="{{ asset('images/ugc/ugc_icon_01@2x.png') }}"  alt="">
        </div>
      </div>

      <div class="resolve-box">
        <div class="tradition">
          活動宣傳設計困難 <br>
          一點也不引人注目
        </div>
        <div class="arrow-down">
          <img class="img-fluid" src="{{ asset('images/ugc/arrow-down@2x.png') }}"  alt="">
        </div>
        <h3>設計良好的活動素材</h3>
        <div class="img-icon">
          <img class="img-fluid" src="{{ asset('images/ugc/ugc_icon_02@2x.png') }}"  alt="">
        </div>
      </div>

      <div class="resolve-box">
        <div class="tradition">
          知名度不夠大 <br>
          找不到優質消費者分享
        </div>
        <div class="arrow-down">
          <img class="img-fluid" src="{{ asset('images/ugc/arrow-down@2x.png') }}"  alt="">
        </div>
        <h3>有效的行銷宣傳</h3>
        <div class="img-icon">
          <img class="img-fluid" src="{{ asset('images/ugc/ugc_icon_03@2x.png') }}"  alt="">
        </div>
      </div>

      <div class="resolve-box">
        <div class="tradition">
          活動流程太複雜 <br>
          消費者參加門檻高
        </div>
        <div class="arrow-down">
          <img class="img-fluid" src="{{ asset('images/ugc/arrow-down@2x.png') }}"  alt="">
        </div>
        <h3>優質的活動參與流程</h3>
        <div class="img-icon">
          <img class="img-fluid" src="{{ asset('images/ugc/ugc_icon_04@2x.png') }}"  alt="">
        </div>
      </div>

      <div class="resolve-box">
        <div class="tradition">
          活動結束後 <br>
          聲量就失效
        </div>
        <div class="arrow-down">
          <img class="img-fluid" src="{{ asset('images/ugc/arrow-down@2x.png') }}"  alt="">
        </div>
        <h3>UGC整合再利用</h3>
        <div class="img-icon">
          <img class="img-fluid" src="{{ asset('images/ugc/ugc_icon_05@2x.png') }}"  alt="">
        </div>
      </div>
    </div>
    <div class="more">
      <a href="#">查看更多方案</a>
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
