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

@endsection
