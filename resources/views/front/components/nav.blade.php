<div id="nav-wrapper">
  <!-- 區塊一 -->
  <div id="gototop">
    <div class="container-fluid d-none d-md-block">
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
    <div class="container-fluid">
      <nav class="navbar navbar-expand-md navbar-light">
        <div class="d-flex align-items-end">
          <a class="navbar-brand" href="{{ url('/') }}">
            <img class="logo-img img-fluid" src="../images/nav/hashtager_logo.svg" alt="">
          </a>
          <a class="navbar-brand hold-campaign" href="{{ url('/') }}">我要辦活動</a>
        </div>

        <input type="checkbox" id="active" class="d-md-none">
        <label for="active" class="d-md-none menu-btn"><span></span></label>
        <label for="active" class="d-md-none close"></label>

        <!-- 手機版 -->
        <div class="wrapper justify-content-end align-items-center">
          <ul class="navbar-nav">
            <li class="{{ (request()->is('/')) ? 'nav-item active' : 'nav-item'}}">
              <a class="nav-link" href="{{ url('/') }}">優勢特色 <span class="sr-only">(current)</span></a>
            </li>
            <li class="{{ (request()->is('ugc')) ? 'nav-item active' : 'nav-item'}}">
              <a class="nav-link" href="{{ url('ugc') }}">UGC活動行銷</a>
            </li>
            <li class="{{ (request()->is('service')) ? 'nav-item active' : 'nav-item'}}">
              <a class="nav-link" href="{{ url('service') }}">配套服務</a>
            </li>
            <li class="{{ (request()->is('back')) ? 'nav-item active' : 'nav-item'}}">
              <a class="nav-link" href="{{ url('back') }}">後台功能介紹</a>
            </li>
            <li class="{{ (request()->is('question')) ? 'nav-item active' : 'nav-item'}}">
              <a class="nav-link" href="{{ url('question') }}">常見問題</a>
            </li>
            <li class="">
              <a class="nav-link nav-consultant-item" href="{{ url('apply') }}">上架諮詢</a>
            </li>
          </ul>
        </div>

        <!-- 電腦版 -->
        <div class="d-none d-md-flex collapse navbar-collapse justify-content-end align-items-center">
          <ul class="navbar-nav">
            <li class="{{ (request()->is('/')) ? 'nav-item active' : 'nav-item'}}">
              <a class="nav-link" href="{{ url('/') }}">優勢特色 <span class="sr-only">(current)</span></a>
            </li>
            <li class="{{ (request()->is('ugc')) ? 'nav-item active' : 'nav-item'}}">
              <a class="nav-link" href="{{ url('ugc') }}">UGC活動行銷</a>
            </li>
            <li class="{{ (request()->is('service')) ? 'nav-item active' : 'nav-item'}}">
              <a class="nav-link" href="{{ url('service') }}">配套服務</a>
            </li>
            <li class="{{ (request()->is('back')) ? 'nav-item active' : 'nav-item'}}">
              <a class="nav-link" href="{{ url('back') }}">後台功能介紹</a>
            </li>
            <li class="{{ (request()->is('question')) ? 'nav-item active' : 'nav-item'}}">
              <a class="nav-link" href="{{ url('question') }}">常見問題</a>
            </li>
            <li class="">
              <a class="nav-link nav-consultant-item" href="{{ url('apply') }}">上架諮詢</a>
            </li>
          </ul>
        </div>

      </nav>
    </div>
  </div>
</div>


<script>
  $(window).scroll(function(){            //當視窗滾動時
    if ( $(this).scrollTop() > 118) {     //如果視窗向下滾動100px
      $('#navs').addClass('scroll');  //header 加上我們剛剛寫好的scroll css
      $('#gototop').addClass('scroll');

    } else {
      $('#navs').removeClass('scroll'); //如果沒有的話就刪除 scroll css
      $('#gototop').removeClass('scroll');
    }
  });
</script>
