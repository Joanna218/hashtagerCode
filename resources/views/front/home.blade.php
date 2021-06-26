@extends('front.layouts.app')

@section('content')

<!-- 區塊三 -->
<div id="slider">

  <!-- 手機 -->
  <div class="d-sm-block d-md-none uk-position-relative uk-visible-toggle uk-light"
    tabindex="-1" uk-slideshow="animation: fade;autoplay:true;autoplay-interval: 2500;pause-on-hover: true;">
    <ul class="uk-slideshow-items" uk-height-viewport="offset-top: true; offset-bottom: 15">
      <li>
        <img src="{{ asset('images/mobile/630@2x.png') }}" alt="手機輪播圖01" uk-cover uk-img>
      </li>
      <li>
        <img src="{{ asset('images/mobile/631@2x.png') }}" alt="手機輪播圖02" uk-cover uk-img>
      </li>
      <li>
        <img src="{{ asset('images/mobile/632@2x.png') }}" alt="手機輪播圖03" uk-cover uk-img>
      </li>
    </ul>
  </div>

  <!-- 平板以上 -->
  <div class="d-none d-md-block uk-position-relative uk-visible-toggle uk-light"
    tabindex="-1" uk-slideshow="animation: fade;autoplay:true;autoplay-interval: 2500;pause-on-hover: true;">
    <ul class="uk-slideshow-items" uk-height-viewport="offset-top: true; offset-bottom: 15">
      <li>
        <img class="img-fluid" src="{{ asset('images/nav/banner01.png') }}" alt="輪播圖01" uk-cover uk-img>
      </li>
      <li>
        <img class="img-fluid" src="{{ asset('images/nav/banner02.png') }}" alt="輪播圖02" uk-cover uk-img>
      </li>
      <li>
        <img class="img-fluid" src="{{ asset('images/nav/banner03.png') }}" alt="輪播圖03" uk-cover uk-img>
      </li>
    </ul>
  </div>
</div>

<!-- 區塊四 共同推廣-->
<div id="common-promote">
  <div class="container">
    <div class="desc">
      <h2 class="d-sm-block d-md-none">與真正喜歡你產品的<br>消費者共同推廣</h2>
      <h2 class="d-none d-md-block">與真正喜歡你產品的消費者 <br> 共同推廣</h2>
      <div class="desc-text">
        Hashtager貼嗑上聚集上萬位在朋友圈中具有影響力的KOC（Key Opinion Consumer，翻譯為關鍵意見消費者，廣義稱為素人網紅，是IG粉絲數介於500至5,000人）。他們熱愛嚐鮮、喜歡體驗新的事物，並且熱衷於分享生活中的大小事，他們各個是IG上的活躍人物，我們稱他們為貼嗑仔。
      </div>
      <div class="desc-text">
        透過在Hashtager貼嗑上舉辦活動，你可以快速從中找到對你的產品、品牌感興趣並且符合品牌、產品理念的KOC，讓他們來為你的產品發表體驗後的真實感受，在對產品、品牌高度興趣之下分享出來的口碑心得，口碑影響力更勝於一般KOC。
      </div>
    </div>
  </div>
  <div class="promote-img">
    <img class="img-fluid" src="{{ asset('images/index/top_img.png') }}" alt="共同推廣背景圖">
  </div>
</div>

<!-- 嗑仔們的特質 -->
<div id="tager-feature">
  <div class="container">
    <h1 class="text-center">這些貼嗑仔們的特質...</h1>
    <nav class="nav nav-pills">
      <div class="nav-item">
        <div class="item-img">
          <img class="img-fluid" src="{{ asset('images/index/icon_index-1@2x.png') }}" alt="貼嗑特質1">
        </div>
        <p>
          貼文內容生活化，有一套自己的 <br>
          風格，非制式形的業配
        </p>
      </div>
      <div class="nav-item">
        <div class="item-img">
          <img class="img-fluid" src="{{ asset('images/index/icon_index-2@2x.png') }}" alt="貼嗑特質2">
        </div>
        <p>
          對你的產品及品牌有高度興趣， <br>
          且認同你的理念與想法
        </p>
      </div>
      <div class="nav-item">
        <div class="item-img">
          <img class="img-fluid" src="{{ asset('images/index/icon_index-3@2x.png') }}" alt="貼嗑特質3">
        </div>
        <p>
          口碑心得是真實的回饋， <br>
          文章內容所創造的共鳴感極強
        </p>
      </div>
    </nav>
  </div>
  <div class="bottom-bg d-none d-md-block"></div>
</div>

<!-- tager-KOC -->
<div id="tager-KOC">
  <div class="container d-flex justify-content-between">
    <div class="koc-img">
      <img class="img-fluid" src="{{ asset('images/index/img_index-1@2x.png') }}" alt="KOC">
    </div>
    <div class="desc">
      <div>
        <h2>
          有了Hashtager貼嗑， <br>
          找到適合的KOC不再需要 <br>
          大海撈針
        </h2>
        <div class="desc-text">
          我們了解對於新的品牌、產品還有中小企業們來說，要找到合適的KOC既耗時又費力氣，但是社群行銷又非常講求時效。
        </div>
        <div class="desc-text">
          因此，我們致力於讓品牌及KOC的資訊透明化，交流能夠更加快速，利於將不同的品牌類別需求與素人的特性相結合，
          幫助品牌能夠用更短的時間找到更適合的KOC。同時，Hashtager貼嗑擁有完善的後台追蹤系統。
          不只能夠幫助品牌加快行銷節奏，同時省下中間找尋KOC的時間與力氣。
        </div>
      </div>
    </div>
  </div>

</div>

<!-- 萬名優質的KOC -->
<div id="excellent-koc">
  <div class="container">
    <h1>
      Hashtager貼嗑已累積上萬名優質的KOC， <br>
      成功舉辦百檔活動
    </h1>
    <img class="d-none d-md-block img-fluid" src="https://fakeimg.pl/1150x413?text=letro" alt="">
  </div>
  <div class="excellent-koc-img d-sm-block d-md-none">
    <img class="img-fluid" src="https://fakeimg.pl/1150x413?text=letro" alt="">
  </div>
</div>

<!-- koc 合作平台 -->
<div id="koc-platform">
  <div class="container">
    <h1>
    Hashtager貼嗑與一般KOC合作平台 <br>
    有什麼不同呢？
    </h1>
    <div class="different-content">
      <div class="different-item">
        <span class="arrow-icon"><i class="fas fa-arrow-right"></i></span>
        <span class="text-black">在Hashtager貼嗑上只需要提供產品，就可以開始招募產品的體驗者，非常簡單！</span>
      </div>
    </div>
    <div class="different-content">
      <div class="different-item">
        <span class="arrow-icon"><i class="fas fa-arrow-right"></i></span>
        <span class="text-black">Hashtager貼嗑上的KOC是真實對產品、品牌感興趣，並且是真的有需求，不以得到稿費為目的，因次更能夠以生活化的方式，自然帶出產品的優點。</span>
      </div>
    </div>
    <div class="different-content">
      <div class="different-item">
        <span class="arrow-icon"><i class="fas fa-arrow-right"></i></span>
        <span class="text-black">體驗者們都是主動來報名，並且會在報名的時候填寫報名原因，讓品牌能夠更了解每個體驗者與產品的關聯性，並更加熟悉這位體驗者。</span>
      </div>
    </div>
    <div class="different-content">
      <div class="different-item">
        <span class="arrow-icon"><i class="fas fa-arrow-right"></i></span>
        <span class="text-black">更好的是，在貼嗑是以公開的方式舉辦活動，可以同時增加品牌、產品的曝光度，讓更多人認識你的產品！</span>
      </div>
    </div>
  </div>
  <div class="koc-platform-bg">
    <img class="img-fluid" src="{{ asset('images/index/bg_01@2x.png') }}" alt="koc 合作平台背景圖">
  </div>

</div>

<!-- Hashtag活動 -->
<div id="hashtager-campaign">
  <div class="container">
    <div class="hashtager-campaign-img d-sm-block d-md-none">
        <img class="img-fluid" src="{{ asset('images/index/img_index-2@2x.png') }}" alt="Hashtag活動">
    </div>
    <h1>
      每月3000元，持續舉辦#Hashtag活動， <br>
      建立自己的IG口碑牆
    </h1>
    <h3>
      如果你的消費者族群屬於年輕世代，你就更需要注重產品在IG上的口碑。
    </h3>
    <div class="d-flex justify-content-center mt-4">
      <div class="hashtager-campaign-img d-none d-md-block">
        <img class="img-fluid" src="{{ asset('images/index/img_index-2@2x.png') }}" alt="Hashtag活動">
      </div>
      <div class="desc">
        <div>
          <div class="desc-text">
            根據統計顯示，高達92%的使用者都曾經因為在IG上看到商品或是服務，被打動後追蹤品牌並且購買產品。
            而現在IG的#Hashtag功能甚至成為年輕人的搜尋引擎，透過#Hashtag搜尋那些感興趣的內容，例如餐廳、打卡景點、美妝、科技等產品。
          </div>
          <div class="desc-text">
            因此對於品牌而言，長期在IG上耕耘，創造聲量，並且在重要的#Hashtag牆中露出自家的產品內容，建立屬於自己的#Hashtag牆，是提升與其他品牌競爭力的關鍵。
          </div>
          <div class="free-program d-none d-md-block">
            <a href="#">諮詢免費方案</a>
          </div>
          <div class="free-program d-sm-block d-md-none">
            <a href="#">申請活動上架</a>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>

<!-- 貼嗑上的熱門活動 -->
<div id="tager-hot-event">
  <div class="container">
    <h1>
      貼嗑上的熱門活動
    </h1>
    <div class="tager-hot-event-content">
      <div class="box-event">
        <div class="toptitle">
          試用體驗活動
        </div>

        <div class="pic d-none d-md-block">
          <div class="whitetag">#長期招募 素人體驗！</div>
          <div>
            <img class="img-fluid" src="{{ asset('images/index/img_index-3.png') }}" alt="">
          </div>
        </div>

        <div class="title">
          <a href="#">
            吃喝玩樂美妝與生活 募集素人品牌大使
          </a>
          <p>
          舉辦免費試吃、試用，真實體驗後給予的心得分享，
          最具公信力、說服力。產品的好，讓更多人知道！
        </p>
        </div>
      </div>
      <div class="box-event">
        <div class="toptitle">
          新品搶先體驗
        </div>

        <div class="pic d-none d-md-block">
          <div class="whitetag">#高迴響 反應熱烈</div>
          <div>
            <img class="img-fluid" src="{{ asset('images/index/img_index-4.png') }}" alt="">
          </div>

        </div>

        <div class="title">
          <a href="#">
          與愛嚐鮮的貼嗑人 一起開箱體驗新品
          </a>
          <p>
            新品上市體驗活動，讓貼嗑上喜歡嚐鮮的體驗大使們，即刻搶先試用分享！新品推出，立即享有口碑。
          </p>
        </div>

      </div>
      <div class="box-event">
        <div class="toptitle">
          線下體驗活動
        </div>

        <div class="pic d-none d-md-block">
          <div class="whitetag">#拓展不同客群與市場</div>
          <div>
            <img class="img-fluid" src="{{ asset('images/index/img_index-5.png') }}" alt="">
          </div>
        </div>

        <div class="title">
          <a href="#">
          熱門話題產生器 增加與參與者的連結性
          </a>
          <p>
            線下快閃活動、打卡活動，都可以同步在貼嗑舉辦加碼活動，刺激參與者分享實況，為活動加溫不停歇。
          </p>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- 平台優勢 -->
<div id="platform-advantage">
  <div class="container">
    <h1>平台優勢特色</h1>
    <div class="d-flex">
      <div class="desc-list">
        <div class="box-list">
          <div class="title">
            <div class="white_num">1</div>
            <h3 class="d-none d-md-block">簡單一站式步驟 就能輕鬆上架新活動</h3>
            <h3 class="d-sm-block d-md-none">簡單一站式步驟<br>就能輕鬆上架新活動</h3>
          </div>
          <p class="text-black">
            內建多種活動模板 <br>
            一步步帶領你設定流程 <br>
            一天內就可直接上線活動 <br>
            迅速自動收集整理報名資訊 <br>
            擁有屬於自己的專屬系統後台 <br>
          </p>
        </div>

        <div class="box-list">
          <div class="title">
            <div class="white_num">2</div>
            <h3 class="d-none d-md-block">快速找到出彩的KOC素人體驗大使</h3>
            <h3 class="d-sm-block d-md-none">快速找到出彩的<br>KOC素人體驗大使</h3>
          </div>
          <p class="text-black">
            不怕活動沒人參加！
            Hashtager貼嗑有大量且有自我風格、優秀的社群
            經營者，能夠分享你的活動、品牌與產品。
          </p>
        </div>

        <div class="box-list">
          <div class="title">
            <div class="white_num">3</div>
            <h3>
              事先取得IG貼文的授權 <br>
              素材再行銷不設限制
            </h3>
          </div>
          <p class="text-black">
            事前報名就取得貼文的授權，活動體驗大使們所分
            享的體驗心得，可以與品牌後續的行銷活動做結
            合，讓活動效應可以擴大且延續效果。
          </p>
        </div>

        <div class="box-list">
          <div class="title">
            <div class="white_num">4</div>
            <h3 class="d-none d-md-block">
              自動串連IG <br>
              簡單掌握每個活動體驗心得圖文
            </h3>
            <h3 class="d-sm-block d-md-none">
              自動串連IG <br>
              簡單掌握每個活動體驗<br>心得圖文
            </h3>
          </div>
          <p class="text-black">
            自動搜集活動體驗大使創作出的IG分享圖文，你可
            以直接在專屬後台查看、打包，並進行之後的素材
            再利用。
          </p>
        </div>
      </div>
    </div>
  </div>
  <div class="seven-days-bg d-none d-md-block">
    <img class="img-fluid" src="{{ asset('images/index/seven-days.png') }}" alt="koc 合作平台背景圖">
  </div>
  <div class="platform-advantage-bg">
    <img class="img-fluid" src="{{ asset('images/index/bg_02@2x.png') }}" alt="koc 合作平台背景圖">
  </div>
</div>

<!-- 素人體驗 -->
<div id="increase-product-sales">
  <div class="container">
    <h1 class="d-none d-md-block">累積素人體驗心得 一步步提升產品銷量</h1>
    <h1 class="d-sm-block d-md-none">累積素人體驗<br>一步步提升產品銷量</h1>
    <div class="d-none d-md-block">
      <img class="img-fluid" src="{{ asset('images/index/img_index-7.png') }}" alt="提升產品銷量">
    </div>
    <div class="d-sm-block d-md-none">
      <img class="img-fluid" src="{{ asset('images/mobile/605@3x.png') }}" alt="提升產品銷量">
    </div>
  </div>
</div>

<!-- 貼嗑的行銷配套 -->
<div id="tager-marketing">
  <div class="container">
    <h1 class="d-none d-md-block">
      Hashtager貼嗑的行銷配套服務 <br>
      讓你的活動更出色
    </h1>
    <h1 class="d-sm-block d-md-none">
      Hashtager貼嗑的 <br>
      行銷配套服務 <br>
      讓你的活動更出色
    </h1>
    <div class="d-none d-md-flex marketing-contents">
      <div class="marketing-item">
        <h3 class="text-black">活動企劃</h3>
        <div class="marketing-icon">
          <img class="img-fluid" src="{{ asset('images/index/icon_index-4.png') }}" alt="">
        </div>
        <a class="more-btn" href="#">暸解更多</a>
      </div>
      <div class="marketing-item">
        <h3 class="text-black">整合行銷服務</h3>
        <div class="marketing-icon">
          <img class="img-fluid" src="{{ asset('images/index/icon_index-5.png') }}" alt="">
        </div>
        <a class="more-btn" href="#">暸解更多</a>
      </div>
      <div class="marketing-item">
        <h3 class="text-black">UGC彙整於官網</h3>
        <div class="marketing-icon">
          <img class="img-fluid" src="{{ asset('images/index/icon_index-6.png') }}" alt="">
        </div>
        <a class="more-btn" href="#">暸解更多</a>
      </div>
    </div>
    <div class="d-sm-block d-md-none marketing-contents">
      <div class="marketing-item">
        <div class="marketing-icon">
          <img class="img-fluid" src="{{ asset('images/index/icon_index-4.png') }}" alt="">
        </div>
        <h3>活動企劃</h3>
      </div>
      <div class="marketing-item2">
        <div class="marketing-item">
          <div class="marketing-icon">
            <img class="img-fluid" src="{{ asset('images/index/icon_index-5.png') }}" alt="">
          </div>
          <h3>整合行銷服務</h3>
        </div>
        <div class="marketing-item">
          <div class="marketing-icon">
            <img class="img-fluid" src="{{ asset('images/index/icon_index-6.png') }}" alt="">
          </div>
          <h3>UGC彙整於官網</h3>
        </div>
      </div>
      <a class="more-btn" href="#">暸解更多</a>
    </div>
  </div>
</div>

<!-- 開始辦活動 -->
<div id="start-campaign">
  <div class="container">
    <h2>開始辦活動</h2>
    <p>貼嗑一站式辦活動，讓你不費吹灰之力，輕鬆舉辦體驗活動</p>
    <a href="#" class="go-btn">GO</a>
  </div>
</div>


@endsection
