@extends('front.layouts.app')

@section('content')

<!-- 區塊三 -->
<div id="slider">
  <div class="uk-position-relative uk-visible-toggle uk-light"
    tabindex="-1" uk-slideshow="animation: fade;autoplay: true;autoplay-interval: 2500;pause-on-hover: true;">
    <ul class="uk-slideshow-items" uk-height-viewport="offset-top: true; offset-bottom: 30">
      <li>
        <img src="../images/nav/banner01.png" alt="" uk-cover uk-img>
      </li>
      <li>
        <img src="../images/nav/banner02.png" alt="" uk-cover uk-img>
      </li>
      <li>
        <img src="../images/nav/banner03.png" alt="" uk-cover uk-img>
      </li>
    </ul>
  </div>
</div>

<!-- 區塊四 共同推廣-->
<div id="common-promote">
  <div class="container-fluid">
    <div class="d-flex justify-content-end">
      <div class="desc align-items-end">
        <div>
          <h1>與真正喜歡你產品的消費者 <br> 共同推廣</h1>
          <div class="desc-text">
          Hashtager貼嗑上聚集上萬位在朋友圈中具有影響力的KOC（Key Opinion Consumer，翻譯為關鍵意見消費者，廣義稱為素人網紅，是IG粉絲數介於500至5,000人）。他們熱愛嚐鮮、喜歡體驗新的事物，並且熱衷於分享生活中的大小事，他們各個是IG上的活躍人物，我們稱他們為貼嗑仔。
          </div>
          <div class="desc-text">
          透過在Hashtager貼嗑上舉辦活動，你可以快速從中找到對你的產品、品牌感興趣並且符合品牌、產品理念的KOC，讓他們來為你的產品發表體驗後的真實感受，在對產品、品牌高度興趣之下分享出來的口碑心得，口碑影響力更勝於一般KOC。
          </div>
        </div>

      </div>
      <div class="promote-img">
        <img class="img-fluid" src="../images/index/top_img.png" alt="">
      </div>
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

<!-- 區塊六 -->
<div id="ready-to-promote">
  <div class="container">
  <h2>上千位優質素人體驗大使  準備好與你一起推廣產品！</h2>
  <img src="https://fakeimg.pl/1150x413" alt="">
  </div>
</div>

<!-- 區塊七 -->
<div id="platform-advantage">
  <div class="container">
    <h2>平台優勢特色</h2>
  </div>
  <div id="advantage-contents">
      <div class="desc-list">
        <div class="box-list">
          <div class="title">
            <div class="white_num">1</div>
            <span>簡單步驟一站式 輕鬆上架新活動</span>
          </div>
          <p>
            內建模板
            <br>
            簡易設定流程
            <br>
            一天內可直接上線活動
            <br>
            並自動彙整報名資訊
          </p>
        </div>

        <div class="box-list">
          <div class="title">
            <div class="white_num">2</div>
            <span>快速找到 出彩素人體驗大使</span>
          </div>
          <p>
            不怕活動沒人參與，貼嗑有大量優秀的社群經營者能夠分享您的活動與產品。
          </p>
        </div>

        <div class="box-list">
          <div class="title">
            <div class="white_num">3</div>
            <span class="two-line-title">串連Instagram <br> 掌握每個活動體驗心得</span>
          </div>
          <p>
            自動收集活動體驗大使創作出的IG分享內容，您可以在後台查看，並進行之後的素材再利用。
          </p>
        </div>

        <div class="box-list">
          <div class="title">
            <div class="white_num">4</div>
            <span class="two-line-title">事先取得IG貼文授權 <br> 素材再行銷不設限</span>
          </div>
          <p>
            貼嗑體驗大使所分享的體驗心得，可以與品牌的後續行銷活動結合，讓活動效應得以延續。
          </p>
        </div>
      </div>
    </div>
</div>

<!-- 區塊八 -->
<div id="increase-product-sales">
  <div class="container">
    <h2>累積素人體驗 一步步提升產品銷量</h2>
    <img src="https://fakeimg.pl/1150x646" alt="">
  </div>
</div>

<!-- 區塊九 -->
<div id="tager-marketing">
  <div class="container">
    <h2>貼嗑行銷配套服務 讓你的活動更出色</h2>
    <div id="tager-marketing-contents">
      <div class="content-box">
        <img src="https://fakeimg.pl/155x140" alt="">
        <div class="title">活動企劃</div>
        <div class="more">
          <a href="#">瞭解更多</a>
        </div>
      </div>
      <div class="content-box">
        <img src="https://fakeimg.pl/155x140" alt="">
        <div class="title">整合行銷宣傳</div>
        <div class="more">
          <a href="#">瞭解更多</a>
        </div>
      </div>
      <div class="content-box">
        <img src="https://fakeimg.pl/155x140" alt="">
        <div class="title">UGC蒐集再利用</div>
        <div class="more">
          <a href="#">瞭解更多</a>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- 區塊十 -->
<div id="tager-experience-share">
  <div class="container">
    <h2>貼嗑體驗大使的精彩分享</h2>
    <img src="https://fakeimg.pl/1063x200" alt="">
  </div>
</div>

<!-- 區塊十一 -->
<div id="start-campaign">
  <div class="container">
    <h2>開始辦活動</h2>
    <p>貼嗑一站式辦活動，讓你不費吹灰之力，輕鬆舉辦體驗活動</p>
    <a href="#" class="go-btn">GO</a>
  </div>
</div>

@endsection
