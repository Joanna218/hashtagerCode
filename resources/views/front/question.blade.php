@extends('front.layouts.app')

@section('content')

<div class="common-banner question-banner d-none d-md-block">
  <h2 class="common-banner-text justify-content-center">常見問題</h2>
</div>

<div class="common-banner question-mobil-banner d-sm-block d-md-none">
  <h2 class="common-banner-text justify-content-center">常見問題</h2>
</div>


<div id="question">
  <div class="container">
    <div class="question-content">
      <div class="question-box">
        <img class="question-check" src="{{ asset('images/question/945@2x.png') }}" alt="">
        <div class="question-desc">
          <div class="title">我想上架活動該怎麼做？</div>
          <p>
          先到上架諮詢中填寫資料，我們的專員會在三天內與你聯繫，幫你建置帳號。設置完成帳密後即可自行操作企業後台上架活動，活動填寫完畢送出審核，等待審核通過即可。
          </p>
        </div>
      </div>
      <div class="question-box">
        <img class="question-check" src="{{ asset('images/question/945@2x.png') }}" alt="">
        <div class="question-desc">
          <div class="title">後台該怎麼操作？會不會很難？</div>
          <p>
          前期只要準備好時程表(活動報名開始及結束時間、招募體驗者人數、產品寄出時間、UGC回收時間)、Banner(封面照片)、內文及其照片(產品活動資訊照)，系統會一步一步帶著你建立活動頁面，開始上架活動！
          </p>
        </div>
      </div>
      <div class="question-box">
        <img class="question-check" src="{{ asset('images/question/945@2x.png') }}" alt="">
        <div class="question-desc">
          <div class="title">活動通常怎麼進行？流程是怎麼樣的？</div>
          <img class="campaign-process d-none d-md-block" src="{{ asset('images/question/quesion_img_01@2x.png') }}" alt="">
          <img class="campaign-process d-sm-block d-md-none" src="{{ asset('images/mobile/quesion_process@2x.png') }}" alt="">
        </div>
      </div>
      <div class="question-box">
        <img class="question-check" src="{{ asset('images/question/945@2x.png') }}" alt="">
        <div class="question-desc">
          <div class="title">要怎麼保證KOC的效益？</div>
          <p>
          在初步就會先篩選掉不符合設定條件的報名者，而Hashtager貼嗑上擁有上萬位粉絲數高於500的優質KOC等著您做挑選，在專屬的後台中可依照報名原因、粉絲數、IG風格等等做挑選，輕易就能找到與品牌及產品理念相同的KOC，不用擔心KOC與品牌、產品不符。
          </p>
        </div>
      </div>
      <div class="question-box">
        <img class="question-check" src="{{ asset('images/question/945@2x.png') }}" alt="">
        <div class="question-desc">
          <div class="title">什麼樣的產品、活動適合在Hashtager貼嗑上舉辦？</div>
          <p>
          無論線上體驗至線下活動都適合在Hashtager貼嗑上舉行，從低單價產品想發送體驗，到高單價產品想進行門店體驗打卡，進行關於品牌的內容創造抽獎，都可以在Hashtager貼嗑為你找到解答，詳細資訊可至上架諮詢聯繫我們。
          </p>
        </div>
      </div>
      <div class="question-box">
        <img class="question-check" src="{{ asset('images/question/945@2x.png') }}" alt="">
        <div class="question-desc">
          <div class="title">UGC真的可以利用嗎？該怎麼用？</div>
          <p>
          KOC與Hashtager貼嗑簽署合約保證3個月內不下架圖文，並且同意圖文再利用，而這些UGC可以結合官網，作為真實評論宣傳，也能加入在電商，作為素材利用，更能當作投放廣告時的廣告素材，圖文皆為真實心得分享，更能增加產品的可信度！
          </p>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
