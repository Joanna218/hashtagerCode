@extends('front.layouts.app')

@section('content')

<div class="common-banner back-banner d-none d-md-block">
  <h2 class="common-banner-text justify-content-center">後台功能介紹</h2>
</div>

<div class="common-banner back-mobil-banner d-sm-block d-md-none">
  <h2 class="common-banner-text justify-content-center">後台功能介紹</h2>
</div>


<div id="back">
  <div class="container2">
    <div class="thoughts-contents">
      <div class="thoughts-box">
        <div class="label-bg1">
          <div class="triangle triangle-1"></div>
        </div>

        <div class="desc-box">
          <div class="data-img">
            <img src="{{ asset('images/back/function_icon_01@2x.png') }}"  alt="">
          </div>
          <div class="thoughts-desc">
            <h3>企業擁有專屬後台<br>輕鬆管理所有報名資訊</h3>
            <div class="dese-item">
              <img class="arrow" src="{{ asset('images/back/awesome-arrow-circle-right@2x.png') }}" alt="">
              <span>所有報名資訊整理及匯出功能</span>
            </div>
            <div class="dese-item">
              <img class="arrow" src="{{ asset('images/back/awesome-arrow-circle-right@2x.png') }}" alt="">
              <span>內含抽獎及評選功能</span>
            </div>
            <div class="dese-item">
              <img class="arrow" src="{{ asset('images/back/awesome-arrow-circle-right@2x.png') }}" alt="">
              <span>產品寄送管理功能</span>
            </div>
          </div>
        </div>
        <img class="gray-triangle" src="{{ asset('images/ugc/1165@2x.png') }}" alt="">
      </div>

      <div class="thoughts-box">
        <div class="label-bg2 bg2">
          <div class="triangle triangle-2"></div>
        </div>

        <div class="desc-box">
          <div class="data-img">
            <img src="{{ asset('images/back/function_icon_02@2x.png') }}"  alt="">
          </div>

          <div class="thoughts-desc">
            <h3>多種模板<br>快速建置活動</h3>
            <div class="dese-item">
              <img class="arrow" src="{{ asset('images/back/awesome-arrow-circle-right@2x.png') }}" alt="">
              <span>設定後自動生成活動頁面</span>
            </div>
            <div class="dese-item">
              <img class="arrow" src="{{ asset('images/back/awesome-arrow-circle-right@2x.png') }}" alt="">
              <span>自由設定活動的參加規則，指定的#Hashtag</span>
            </div>
          </div>
        </div>
        <img class="gray-triangle" src="{{ asset('images/ugc/1165@2x.png') }}" alt="">
      </div>
    </div>

    <div class="thoughts-contents">
      <div class="thoughts-box">
        <div class="label-bg2">
          <div class="triangle triangle-2"></div>
        </div>

        <div class="desc-box">
          <div class="data-img">
            <img src="{{ asset('images/back/function_icon_03@2x.png') }}"  alt="">
          </div>
          <div class="thoughts-desc">
            <h3>多功能報名系統<br>報名自動篩選</h3>
            <div class="dese-item">
              <img class="arrow" src="{{ asset('images/back/awesome-arrow-circle-right@2x.png') }}" alt="">
              <span>用戶資格篩選，在報名時就過濾掉不符合資格的報名者</span>
            </div>
            <div class="dese-item">
              <img class="arrow" src="{{ asset('images/back/awesome-arrow-circle-right@2x.png') }}" alt="">
              <span>入選主動寄出通知</span>
            </div>
            <div class="dese-item">
              <img class="arrow" src="{{ asset('images/back/awesome-arrow-circle-right@2x.png') }}" alt="">
              <span>產品寄出通知</span>
            </div>
            <div class="dese-item">
              <img class="arrow" src="{{ asset('images/back/awesome-arrow-circle-right@2x.png') }}" alt="">
              <span>自動提醒體驗回饋通知</span>
            </div>
            <div class="dese-item">
              <img class="arrow" src="{{ asset('images/back/awesome-arrow-circle-right@2x.png') }}" alt="">
              <span>黑名單與積分機制運用</span>
            </div>
          </div>
        </div>
        <img class="gray-triangle" src="{{ asset('images/ugc/1165@2x.png') }}" alt="">
      </div>

      <div class="thoughts-box">
        <div class="label-bg1">
          <div class="triangle triangle-1"></div>
        </div>

        <div class="desc-box">
          <div class="data-img">
            <img src="{{ asset('images/back/function_icon_04@2x.png') }}"  alt="">
          </div>

          <div class="thoughts-desc">
            <h3 class="last-title">自動彙整活動UGC</h3>
            <div class="dese-item">
              <img class="arrow" src="{{ asset('images/back/awesome-arrow-circle-right@2x.png') }}" alt="">
              <span>收集活動UGC並整理於活動頁面</span>
            </div>
            <div class="dese-item">
              <img class="arrow" src="{{ asset('images/back/awesome-arrow-circle-right@2x.png') }}" alt="">
              <span>可以自由控管想要顯示的UGC</span>
            </div>
            <div class="dese-item">
              <img class="arrow" src="{{ asset('images/back/awesome-arrow-circle-right@2x.png') }}" alt="">
              <span>根據需求增加不同行銷方案 </span>
            </div>
          </div>
        </div>
        <img class="gray-triangle" src="{{ asset('images/ugc/1165@2x.png') }}" alt="">
      </div>
    </div>
  </div>
</div>

@endsection
