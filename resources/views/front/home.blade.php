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

<!-- 區塊三 -->
<div id="slider">
    <div class="uk-position-relative uk-visible-toggle uk-light"
        tabindex="-1" uk-slideshow="animation: fade;autoplay: false;autoplay-interval: 2500;pause-on-hover: true;max-height: 520;">
        <ul class="uk-slideshow-items">
            <li>
                <img src="https://fakeimg.pl/1920x520?text=banner1" alt="" uk-cover uk-img>
            </li>
            <li>
                <img src="https://fakeimg.pl/1920x520?text=banner2" alt="" uk-cover uk-img>
            </li>
            <li>
                <img src="https://fakeimg.pl/1920x520?text=banner3" alt="" uk-cover uk-img>
            </li>
        </ul>
    </div>
</div>

<!-- 區塊四 -->
<div id="tager-todo">
    <div class="container">
        <div class="d-flex justify-content-end">
            <img src="../images/index/todoBg.png" width="800" alt="">
        </div>

        <div id="todo-contents">
            <h2>貼嗑可以為你做什麼</h2>
            <p>
                一站式活動服務，幫助你上架新活動、產品，尋找優質報名者、彙整線上聲量，並提供圖文素材再利用、行銷的加值服務，輕鬆進行體驗活動，並一步步將所有無形聲量轉換成可見的品牌價值與產品銷量。
            </p>

            <h3>
                <div class="num">1</div>
                增加品牌及產品曝光
            </h3>

            <h3>
                <div class="num">2</div>
                快速找到優質的體驗⼤使
                <br>
                為品牌及產品證言
            </h3>

            <h3>
                <div class="num">3</div>
                增加IG社群內容
            </h3>

            <h3>
                <div class="num">4</div>
                累積可再次利用的圖文素材
            </h3>

            <a href="#" class="yellow-btn">申請活動上架</a>

        </div>
    </div>
</div>

<!-- 區塊五 -->
<div id="tager-hot-event">
    <div class="container">
        <h2>
            在
            <span class="tager-font">貼嗑</span>
            上舉辦這些熱門活動
        </h2>
        <div class="d-flex justify-content-between">
            <div class="box-event">
                <div class="toptitle">
                    #試用體驗活動
                </div>

                <div class="title">
                    <a href="#">
                    吃喝玩樂美妝與生活 <br>
                    募集素人品牌大使
                    </a>
                </div>

                <p>
                    舉辦免費試吃、試用，真實體驗後給予的心得分享，
                    最具公信力、說服力。產品的好，讓更多人知道！
                </p>

                <div class="pic">
                    <div class="whitetag">#長期招募 素人體驗！</div>
                    <img src="https://fakeimg.pl/344x217?text=pic1" alt="">
                </div>
            </div>
            <div class="box-event">
                <div class="toptitle">
                    #新品搶先體驗
                </div>

                <div class="title">
                    <a href="#">
                    與愛嚐鮮的貼嗑人 <br>
                    一起開箱體驗新品
                    </a>
                </div>

                <p>
                    新品上市體驗活動，讓貼嗑上喜歡嚐鮮的體驗大使們，即刻搶先試用分享！新品推出，立即享有口碑。
                </p>

                <div class="pic">
                    <div class="whitetag">#高迴響 反應熱烈</div>
                    <img src="https://fakeimg.pl/344x217?text=pic2" alt="">
                </div>
            </div>
            <div class="box-event">
                <div class="toptitle">
                    #線下體驗活動
                </div>

                <div class="title">
                    <a href="#">
                    熱門話題產生器 <br>
                    增加與參與者的連結性
                    </a>
                </div>

                <p>
                    線下快閃活動、打卡活動，都可以同步在貼嗑舉辦加碼活動，刺激參與者分享實況，為活動加溫不停歇。
                </p>

                <div class="pic">
                    <div class="whitetag">#拓展不同客群與市場</div>
                    <img src="https://fakeimg.pl/344x217?text=pic2" alt="">
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
