@extends('front.layouts.app')


@section('scripts')
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
@endsection


@section('content')
<!-- 區塊一 -->
<div id="gototop">
    <div class="container">
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
        <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand d-flex align-items-end" href="#">
                <img class="mr-2" src="../images/nav/hashtager_logo.svg" width="150" height="48" alt="">
                <span>我要辦活動</span>
            </a>

            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">優勢特色 <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item menuline2">
                        <a class="nav-link" href="#">什麼是UGC活動行銷</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">配套服務</a>
                    </li>
                    <li class="nav-consultant-item">
                        <a class="nav-link-consultant" href="#">上架諮詢</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>

<div id="slider">
    <div class="uk-position-relative uk-visible-toggle uk-light"
        tabindex="-1" uk-slideshow="animation: fade;autoplay: true;autoplay-interval: 2500;pause-on-hover: true" >
        <ul class="uk-slideshow-items">
            <li>
                <img src="https://fakeimg.pl/1920x520?text=banner1" width="100%" alt="">
            </li>
            <li>
                <img src="https://fakeimg.pl/1920x520?text=banner2" width="100%" alt="">
            </li>
            <li>
                <img src="https://fakeimg.pl/1920x520?text=banner3" width="100%" alt="">
            </li>
        </ul>
    </div>

</div>


@endsection
