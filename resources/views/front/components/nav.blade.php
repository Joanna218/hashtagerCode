
<!-- 區塊一 -->
<div id="gototop">
  <div class="container d-none d-md-block">
    <div class="d-flex justify-content-end align-items-center gotobg ">
      <a href="https://hashtager.com.tw/" target="_blank">
        前往hashtager貼嗑
        <img src="../images/nav/arrow_r.png" width="18" height="18" alt="">
      </a>
    </div>
  </div>
</div>

<!-- 區塊二 -->
<div id="navs">
  <div class="container">
    <nav class="navbar navbar-expand-md navbar-light">
      <div class="d-flex align-items-end">
        <a class="navbar-brand" href="#">
          <img class="logo-img img-fluid" src="../images/nav/hashtager_logo.svg" alt="">
        </a>
        <a class="navbar-brand hold-campaign" href="#">我要辦活動</a>
      </div>

      <input type="checkbox" id="active" class="d-md-none">
      <label for="active" class="d-md-none menu-btn"><span></span></label>
      <label for="active" class="d-md-none close"></label>

      <!-- 手機版 -->
      <div class="wrapper justify-content-end align-items-center">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="{{ url('/') }}">優勢特色1 <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('ugc') }}">UGC活動行銷</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">配套服務</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">貼嗑運作模式</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">常見問題</a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-consultant-item" href="#">上架諮詢</a>
          </li>
        </ul>
      </div>

      <!-- 電腦版 -->
      <div class="d-none d-md-flex collapse navbar-collapse justify-content-end align-items-center">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="{{ url('/') }}">優勢特色 <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('ugc') }}">UGC活動行銷</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">配套服務</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">貼嗑運作模式</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">常見問題</a>
          </li>
          <li class="">
            <a class="nav-link nav-consultant-item" href="#">上架諮詢</a>
          </li>
        </ul>
      </div>

    </nav>
  </div>
</div>
