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
        <div class="label-bg">
          <div class="triangle triangle-3"></div>
        </div>


        <!-- <div class="data-img">
          <img class="img-fluid d-none d-lg-block" src="{{ asset('images/back/function_icon_01@2x.png') }}"  alt="">
          <img class="img-fluid d-md-block d-lg-none" src="{{ asset('images/mobile/90@2x.png') }}"  alt="">
        </div>
        <div class="thoughts-desc">
          <h3>企業擁有專屬後台<br>輕鬆管理所有報名資訊</h3>
          <p>
            90%的消費者相信UGC貼文能加強影響他們的購買決定，並認為它會是品牌可信度及真實性的關鍵指標。
          </p>
        </div>
        <img class="gray-triangle" src="{{ asset('images/ugc/1165@2x.png') }}" alt=""> -->
      </div>

      <!-- <div class="thoughts-box">
        <div class="data-img">
          <img class="img-fluid d-none d-lg-block" src="{{ asset('images/ugc/client78@2x.png') }}"  alt="">
          <img class="img-fluid d-md-block d-lg-none" src="{{ asset('images/mobile/78@2x.png') }}"  alt="">
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
      </div> -->
    </div>

  </div>
</div>

@endsection
