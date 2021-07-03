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
