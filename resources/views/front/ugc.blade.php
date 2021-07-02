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
    <h1>比起單純廣告代言，消費者更相信真實體驗用戶的心得</h1>
    <div class="thoughts-contents">
      <div class="thoughts-box">
        <div class="data-img">
          <img class="img-fluid" src="{{ asset('images/ugc/customer90@2x.png') }}"  alt="">
        </div>
        <div class="thoughts-desc">
          <div class="thoughts-icon">
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
          <img class="img-fluid" src="{{ asset('images/ugc/client78@2x.png') }}"  alt="">
        </div>
        <div class="thoughts-desc">
          <div class="thoughts-icon">
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
      <img src="{{ asset('images/ugc/ugc_img_03@2x.png') }}" alt="">
    </div>
    <div class="gray-bgc">
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
    <h1>運用UGC內容  讓廣告效果倍增</h1>
    <div class="desc">
      <p>
        數位行銷的渠道多元，品牌需因應各渠道的屬性，需要發想並製作大量不同的行銷素材。為減少素材產出的成本，並且提高成效，國內外眾多品牌已經開始採用經由消費者授權的社群貼文，作為經營品牌的素材內容。除了可以減去自產大量素材的繁雜性，最重要的是行銷效果能夠更卓越！
      </p>
      <p>
      與此同時，當品牌良好地運用經過授權所分享的UGC內容，其實也增加了與消費者的互動，加深對於品牌及產品的認同感。
    </p>
    </div>

    <div class="social-way-bg">
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

@endsection
