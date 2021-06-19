
<script>
  $('.nav-item').on('click', function(e) {
    $(this).toggleClass('active').siblings().removeClass('active');
    $('.active-consultant').removeClass('active-consultant');
  });

  $('.nav-consultant-item').on('click', function(e) {
    $(this).toggleClass('active-consultant').siblings().removeClass('active-consultant');
    $('.nav-item').removeClass('active');
  });
</script>


<!-- 區塊一 -->
<div id="gototop" class="bg-white">
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
<div id="navs" class="bg-white">
  <div class="container">
    <nav class="navbar navbar-expand-md navbar-light">
      <div class="d-flex align-items-end">
        <a class="navbar-brand" href="#">
          <img class="logo-img img-fluid" src="../images/nav/hashtager_logo.svg" alt="">
        </a>
        <a class="navbar-brand hold-campaign" href="#">我要辦活動</a>
      </div>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-2x fa-bars"></i>
      </button>

      <div class="collapse navbar-collapse justify-content-end align-items-center" id="navbarNav">
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
