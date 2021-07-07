@extends('front.layouts.app')

@section('content')

<div class="common-banner apply-banner d-none d-md-block">
  <h2 class="common-banner-text justify-content-center">上架活動申請</h2>
</div>

<div class="common-banner apply-mobil-banner d-sm-block d-md-none">
  <h2 class="common-banner-text justify-content-center">上架活動申請</h2>
</div>

<div id="apply">
  <div class="container">
    <h1 class="d-none d-md-block">為了讓Hashtager貼嗑能更快速了解您的品牌與產品，<br>請先填寫以下資訊，<br>我們的專業團隊會盡快與你聯繫！</h1>
    <h1 class="d-sm-block d-md-none">
    為了讓Hashtager<br>貼嗑能更快速了解您的<br>品牌與產品，<br>請先填寫以下資訊，<br>我們的專業團隊會盡快<br>與你聯繫！
    </h1>


    <!-- 電腦 -->
    <form id="submit-form" novalidate="" class="d-none d-md-block">
      <!-- 申請人姓名、聯絡電話 -->
      <div class="form-group row">
        <div class="col">
          <label for="apply-name">申請人姓名<abbr class="text-danger">*</abbr></label>
          <input type="text" class="form-control apply-name" name="apply-name" required>
          <div class="invalid-feedback">
            請輸入申請人姓名
          </div>
        </div>
        <div class="col">
          <label for="contact-tel">聯絡電話<abbr class="text-danger">*</abbr></label>
          <input type="text" class="form-control contact-tel" name="contact-tel" required>
          <div class="invalid-feedback">
            請輸入聯絡電話
          </div>
        </div>
      </div>

      <!-- 公司全稱、公司聯絡電話 -->
      <div class="form-group row">
        <div class="col">
          <label for="corporation">公司全稱<abbr class="text-danger">*</abbr></label>
          <input type="text" class="form-control corporation" name="corporation" required>
          <div class="invalid-feedback">
            請輸入公司全稱
          </div>
        </div>
        <div class="col">
          <label for="corporation-tel">公司聯絡電話<abbr class="text-danger">*</abbr></label>
          <input type="text" class="form-control corporation-tel" name="corporation-tel" required>
          <div class="invalid-feedback">
            請輸入公司聯絡電話
          </div>
        </div>
      </div>

      <!-- 公司經營項目、E-mail -->
      <div class="form-group row">
        <div class="col">
          <label for="manage-item">公司經營項目<abbr class="text-danger">*</abbr></label>
          <div class="d-flex">
            <select style="width:30%;margin-right:5%;" class="form-control manage-item-1" name="manage-item-1">
              <option value="農、林、漁、牧業">農、林、漁、牧業</option>
              <option value="礦業及土石採取業">礦業及土石採取業</option>
              <option value="製造業">製造業</option>
              <option value="水電燃氣業">水電燃氣業</option>
              <option value="營造及工程業">營造及工程業</option>
              <option value="其他未分類業">其他未分類業</option>
              <option value="批發、零售及餐飲業">批發、零售及餐飲業</option>
              <option value="運輸、倉儲及通信業">運輸、倉儲及通信業</option>
              <option value="金融、保險及不動產業">金融、保險及不動產業</option>
              <option value="專業、科學及技術服務業">專業、科學及技術服務業</option>
              <option value="文化、運動、休閒及其他服務業">文化、運動、休閒及其他服務業</option>
            </select>

            <!-- 第二層選單 -->
            <select style="width:28%;margin-right:5%;display:none;" class="form-control manage-item-1-2" name="manage-item-1-2">
            </select>

            <!-- 第三層選單 -->
            <select style="width:32%;display:none;" class="form-control manage-item-1-2-3" name="manage-item-1-2-3">
            </select>
          </div>
        </div>
      </div>

      <!-- 品牌名稱、品牌種類 -->
      <div class="form-group row">
        <div class="col">
          <label for="brand-name">品牌名稱<abbr class="text-danger">*</abbr></label>
          <input type="text" class="form-control brand-name" name="brand-name" required>
          <div class="invalid-feedback">
            請輸入品牌名稱
          </div>
        </div>
        <div class="col">
          <label for="brand-category">品牌種類<abbr class="text-danger">*</abbr></label>
          <input type="text" class="form-control brand-category" name="brand-category" required>
          <div class="invalid-feedback">
            請輸入品牌種類
          </div>
        </div>
      </div>

      <!-- 想要了解的活動類型 -->
      <div class="d-sm-none d-md-flex form-group d-flex row">
        <div class="col">
          <label class="more-activity-label" for="more-activity">想要了解的活動類型<abbr class="text-danger">*</abbr></label>
          <select class="form-control more-activity" name="more-activity">
            <option value="轉發、打卡抽獎活動">轉發、打卡抽獎活動</option>
            <option value="內容創造分享">內容創造分享</option>
            <option value="產品試用、試吃體驗活動">產品試用、試吃體驗活動</option>
            <option value="線下體驗活動">線下體驗活動</option>
          </select>
        </div>
        <div class="col">
          <label for="email">E-mail<abbr class="text-danger">*</abbr></label>
          <input type="email" class="form-control email" name="email" placeholder="公司E-mail為佳" required>
          <div class="invalid-feedback">
            請輸入E-mail
          </div>
        </div>
      </div>

      <!-- 官方網址 -->
      <div class="form-group row">
        <div class="col">
          <label>官方網址<abbr class="text-danger">*</abbr><small class="office-notic">若無請填寫無</small></label>
          <div class="office-item">
            <label for="offical-icon-home" class="offical-icon">
              <i class="fas fa-home"></i></label>
            <input type="text" class="form-control offical-icon-home" name="offical-icon-home" placeholder="公司官方網站" required>
          </div>

          <div class="office-item">
            <label for="offical-icon-facebook" class="offical-icon">
              <i class="fab fa-facebook"></i>
            </label>
            <input type="text" class="form-control offical-icon-facebook" name="offical-icon-facebook" placeholder="Facebook網站" required>
          </div>

          <div class="office-item">
            <label for="offical-icon-instagram" class="offical-icon">
              <i class="fab fa-instagram"></i>
            </label>
            <input type="text" class="form-control offical-icon-instagram" name="offical-icon-instagram" placeholder="Instagram" required>
          </div>
        </div>
      </div>

      <div class="form-group row">
        <div class="other">
        <label for="other-required">其他</label>
          <textarea class="other-required" rows="10"></textarea>
        </div>
      </div>
      <div class="form-group row justify-content-center mt-4">
        <button type="submit" class="btn submit-form submit-form1">送出</button>
      </div>
    </form>

    <!-- 手機 -->
    <form id="submit-form2" class="d-sm-block d-md-none">
      <div class="form-group row text-center">
        <label class="more-contents-label" for="more-contents">想要了解的內容</label>
        <select class="form-control more-contents" name="more-contents2">
          <option value="活動企劃">活動企劃</option>
          <option value="KOL行銷">KOL行銷</option>
          <option value="社群行銷">社群行銷</option>
          <option value="口碑行銷">口碑行銷</option>
          <option value="輿情監測">輿情監測</option>
          <option value="整合行銷服務">整合行銷服務</option>
          <option value="UGC再利用">UGC再利用</option>
          <option value="異業合作">異業合作</option>
          <option value="上架諮詢">上架諮詢</option>
        </select>
      </div>
      <div class="form-group row">
        <label for="contact-person">聯絡人<span class="text-danger">*<span></label>
        <input type="text" class="form-control contact-person2" name="contact-person">
      </div>
      <div class="orm-group row">
        <label for="contact-tel">聯絡電話<span class="text-danger">*<span></label>
        <input type="text" class="form-control contact-tel2" name="contact-tel">
      </div>
      <div class="form-group row">
        <label for="corporation">公司全稱<span class="text-danger">*<span></label>
        <input type="text" class="form-control corporation2" name="corporation">
      </div>
      <div class="form-group row">
        <label for="email">E-mail<span class="text-danger">*<span></label>
        <input type="email" class="form-control email2" name="email" placeholder="公司E-mail為佳">
      </div>

      <div class="form-group row">
        <div class="other">
          <textarea class="other-required2" placeholder="簡短需求說明(幫助我們安排適合的專員與您聯繫)" rows="10"></textarea>
        </div>
      </div>
      <div class="form-group row justify-content-center mt-4">
        <button type="button" class="btn submit-form submit-form2">送出</button>
      </div>

    </form>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="Modal" tabindex="-1" data-backdrop="static" data-keyboard="false" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <!-- <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div> -->
      <div class="modal-body">
        傳送中....請稍候...
      </div>
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div> -->
    </div>
  </div>
</div>

<!-- 手機版 -->
<div class="modal fade" id="ModalMobile" tabindex="-1" data-backdrop="static" data-keyboard="false" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <!-- <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div> -->
      <div class="modal-body">
        寄信成功，將會有專人與您聯繫！
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary mb-check" data-dismiss="modal">確定</button>
        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
      </div>
    </div>
  </div>
</div>

<script>

  // 公司經營項目
  // 批發、零售及餐飲業子層
  var retailSecondData = ['批發業', '零售業', '綜合零售業', '國際貿易業', '餐飲業', '智慧財產權業'];

  // 批發業子層
  var wholsaleThridData = ['農、畜、水產品批發業', '食品什貨、菸酒、飲料批發業', '飼料批發業', '布疋、衣著、鞋、帽、傘、服飾品批發業', '家具及裝設品批發業', '五金及日常用品批發業','化學原料及其製品批發業','藥物、化粧品批發業','文教、樂器、育樂用品批發業','鐘錶、眼鏡批發業'];
  // 零售業子層
  var retailThridData = ['農、畜、水產品零售業', '食品什貨、菸酒、飲料零售業', '飼料零售業', '布疋、衣著、鞋、帽、傘、服飾品零售業', '家具及裝設品零售業', '五金及日常用品零售業','化學原料及其製品零售業','藥物、化粧品零售業','文教、樂器、育樂用品零售業','鐘錶、眼鏡零售業'];
  // 綜合零售業子層
  var complexRetailThridData = ['百貨超市業', '食品什貨、菸酒、飲料零售業', '其他綜合零售業'];
  // 國際貿易業
  var InternationalTradeThridData = ['國際貿易業'];
  // 餐飲業
  var eatThridData = ['餐飲業'];
  // 智慧財產權業
  var authorThridData = ['智慧財產權業'];
  // =====================================

  // 運輸、倉儲及通信業子層
  var shipSecondData = ['陸上運輸業','陸上運輸輔助業','水上運輸業','水上運輸輔助業','航空運輸業','航空運輸輔助業','其他運輸輔助業','倉儲業','電信業','郵政業'];

  // 陸上運輸業子層
  var roadThridDatad = ['汽車運輸業','大眾捷運系統運輸業','公路經營業','鐵路經營業'];
  // 陸上運輸輔助業子層
  var roadThridDatad2 = ['計程車客運服務業','停車場經營業','救護車經營業'];
  // 水上運輸業子層
  var waterThridDatad = ['船舶運送業','小船經營業'];
  // 水上運輸輔助業子層
  var waterThridDatad2 = ['船務代理業','海運承攬運送業','船舶出租業','貨櫃集散站經營業','貨櫃出租業','商港服務業','打撈業','海難救護業','工業專用港服務業'];
  // 航空運輸業子層
  var airThridDatad = ['民用航空運輸業','普通航空業'];
  // 航空運輸輔助業子層
  var airThridDatad2 = ['航空貨運承攬業','航空站地勤業','航空貨物集散站經營業','民營飛行場業','空廚業','機場經營業'];
  // 其他運輸輔助業子層
  var otherThridDatad = ['報關業','船舶勞務承攬業','其他運輸輔助業'];
  // 倉儲業子層
  var warehouseThridDatad = ['倉儲業'];
  // 電信業子層
  var electronicThridDatad = ['第一類電信事業','第二類電信事業'];
  // 郵政業子層
  var postThridDatad = ['郵政業'];
  // =====================================

  // 金融、保險及不動產頁
  var financialSecondData = ['金融業','投資典當業','證券業','期貨業','保險業','保險輔助人','不動產業','金融控股公司業','證券期貨控股業','其他金融、保險及不動產業'];

  // 金融業
  var financialThridDatad = ['銀行業','票券金融業','外匯經紀商','信託業','郵政儲金匯兌業','短期票券集中保管結算機構','農業金庫業'];
  // 投資典當業
  var investThridDatad = ['一般投資業','創業投資業','當舖業'];
  // 證券業
  var securitiesThridDatad = ['證券商','證券金融業','證券投資信託業','證券投資顧問業','證券集中保管業','證券交易所','信用評等業','都市更新投資信託業','櫃檯買賣業','證券交易輔助人'];
  // 期貨業
  var futuresThridDatad = ['期貨商','期貨交易場所','期貨結算機構','槓桿交易商','期貨顧問事業','期貨信託事業','期貨經理事業','期貨交易輔助人','其他期貨服務事業'];
  // 保險業
  var insuranceThridDatad = ['保險業','保險代理人'];
  // 保險輔助人
  var insuranceThridDatad2 = ['保險經紀人','保險公證人'];
  // 不動產業
  var realEstateThridDatad = ['不動產投資業','建築經理業','不動產買賣租賃業','不動產經紀業'];
  // 金融控股公司業
  var financialHoldingThridDatad = ['金融控股公司業'];
  // 證券期貨控股業
  var securitiesFuturesThridDatad = ['證券期貨控股業'];
  // 其他金融、保險及不動產業
  var ohterThridDatad = ['其他金融、保險及不動產業','金融資產證券化業','存款保險業','電子票證業','電子支付業','其他金融、保險及不動產業'];
  // =====================================

  // 專業、科學及技術服務業
  var professionSecondData = ['顧問服務業','資訊服務業','廣告業','設計業','就業服務業','公寓大廈管理服務業','保全業','工業檢驗業','建築物公共安全檢查業','藥品檢驗業','環保服務業','訓練服務業'];

  // 顧問服務業
  var consultantThridDatad = ['技術顧問業','投資顧問業'];
  // 資訊服務業
  var informationThridDatad = ['管理顧問業','藝術品諮詢顧問業','其他顧問服務業','資訊服務業'];
  // 廣告業
  var advertisementThridDatad = ['廣告業'];
  // 設計業
  var designThridDatad = ['產品設計業','服飾設計業','景觀、室內設計業','花藝設計業','其他設計業'];
  // 就業服務業
  var jobThridDatad = ['就業服務業'];
  // 公寓大廈管理服務業
  var apartmentThridDatad = ['公寓大廈管理服務業'];
  // 保全業
  var securityThridDatad = ['保全業'];
  // 工業檢驗業
  var industrialThridDatad = ['工業檢驗業'];
  // 建築物公共安全檢查業
  var buildThridDatad = ['建築物公共安全檢查業'];
  // 藥品檢驗業
  var dragThridDatad = ['藥品檢驗業'];
  // 環保服務業
  var envirThridDatad = ['環保服務業'];
  // 訓練服務業
  var traningThridDatad = ['訓練服務業','產業育成業'];
  // =====================================

  // 文化、運動、休閒及其他服務業
  var sportSecondData = ['出版事業','電影事業','廣播電視業','藝文業','休閒、娛樂服務業','運動服務業','觀光及旅遊服務業','個人服務業'];

  // 出版事業
  var releaseThridDatad = ['報紙業','通訊稿業','雜誌（期刊）出版業','書籍出版業','有聲出版業','其他出版業'];
  // 電影事業
  var movieThridDatad = ['電影片製作業','電影片發行業','電影片映演業','提供電影器材、設施及技術之專業'];
  // 廣播電視業
  var tvThridDatad = ['廣播業','電視業','廣播電視節目供應業','有線廣播電視業','有線電視節目播送系統業','衛星廣播電視業'];
  // 藝文業
  var actThridDatad = ['藝文服務業','演藝活動業','音樂展演空間業'];
  // 休閒、娛樂服務業
  var entertainThridDatad = ['休閒、娛樂服務業','其他休閒服務業'];
  // 運動服務業
  var sportThridDatad = ['運動場館業','運動訓練業','職業運動業'];
  // 觀光及旅遊服務業
  var tourThridDatad = ['旅館業','旅行業','旅遊諮詢服務業','觀光旅遊業','民宿'];
  // 個人服務業
  var personnelThridDatad = ['汽車服務業','維修服務業','洗衣業','移民服務業','留學服務業'];

  // 請除與隱欌
  function clearAndNoneSelect(selector) {
    $('.' + selector).find('option').remove().end();
    $('.' + selector).css('display','none');
  }
  // 清除 option
  function clearSelect(selector) {
    $('.' + selector).find('option').remove().end();
  }
  // 隱藏 select
  function diplayNoneSelect(selector) {
    $('.' + selector).css('display','none');
  }

  // 觸發顯示第二、三的下拉選單
  function triggerSelect(select2, select3, e) {
    if (e.val() == '批發、零售及餐飲業') {
      $(select2).css('display','block');
      for (var i = 0; i < retailSecondData.length; i++) {
        $(select2).append('<option value="' + retailSecondData[i] + '">' + retailSecondData[i] + '</option>');
      }
      $(select3).css('display','block');
      for (var i = 0; i < wholsaleThridData.length; i++) {
        $(select3).append('<option value="' + wholsaleThridData[i] + '">' + wholsaleThridData[i] + '</option>');
      }
    } else if(e.val() == '運輸、倉儲及通信業') {
      $(select2).css('display','block');
      for (var i = 0; i < shipSecondData.length; i++) {
        $(select2).append('<option value="' + shipSecondData[i] + '">' + shipSecondData[i] + '</option>');
      }
      $(select3).css('display','block');
      for (var i = 0; i < shipSecondData.length; i++) {
        $(select3).append('<option value="' + shipSecondData[i] + '">' + shipSecondData[i] + '</option>');
      }
    } else if(e.val() == '金融、保險及不動產業') {
      $(select2).css('display','block');
      for (var i = 0; i < financialSecondData.length; i++) {
        $(select2).append('<option value="' + financialSecondData[i] + '">' + financialSecondData[i] + '</option>');
      }
      $(select3).css('display','block');
      for (var i = 0; i < financialSecondData.length; i++) {
        $(select3).append('<option value="' + financialSecondData[i] + '">' + financialSecondData[i] + '</option>');
      }
    } else if(e.val() == '專業、科學及技術服務業') {
      $(select2).css('display','block');
      for (var i = 0; i < professionSecondData.length; i++) {
        $(select2).append('<option value="' + professionSecondData[i] + '">' + professionSecondData[i] + '</option>');
      }
      $(select3).css('display','block');
      for (var i = 0; i < professionSecondData.length; i++) {
        $(select3).append('<option value="' + professionSecondData[i] + '">' + professionSecondData[i] + '</option>');
      }
    } else if(e.val() == '文化、運動、休閒及其他服務業') {
      $(select2).css('display','block');
      for (var i = 0; i < sportSecondData.length; i++) {
        $(select2).append('<option value="' + sportSecondData[i] + '">' + sportSecondData[i] + '</option>');
      }
      $(select3).css('display','block');
      for (var i = 0; i < sportSecondData.length; i++) {
        $(select3).append('<option value="' + sportSecondData[i] + '">' + sportSecondData[i] + '</option>');
      }
    }
  }

  // 第二個下拉選當改變時，觸發改變第三的下拉選單內容
  function triggerThridSelect(select3, e) {
    if (e.val() == '批發業') {
      for (var i = 0; i < wholsaleThridData.length; i++) {
        $(select3).append('<option value="' + wholsaleThridData[i] + '">' + wholsaleThridData[i] + '</option>');
      }
    } else if (e.val() == '零售業') {
      for (var i = 0; i < retailThridData.length; i++) {
        $(select3).append('<option value="' + retailThridData[i] + '">' + retailThridData[i] + '</option>');
      }
    } else if (e.val() == '綜合零售業') {
      for (var i = 0; i < complexRetailThridData.length; i++) {
        $(select3).append('<option value="' + complexRetailThridData[i] + '">' + complexRetailThridData[i] + '</option>');
      }
    } else if (e.val() == '國際貿易業') {
      for (var i = 0; i < InternationalTradeThridData.length; i++) {
        $(select3).append('<option value="' + InternationalTradeThridData[i] + '">' + InternationalTradeThridData[i] + '</option>');
      }
    } else if (e.val() == '餐飲業') {
      for (var i = 0; i < eatThridData.length; i++) {
        $(select3).append('<option value="' + eatThridData[i] + '">' + eatThridData[i] + '</option>');
      }
    } else if (e.val() == '智慧財產權業') {
      for (var i = 0; i < authorThridData.length; i++) {
        $(select3).append('<option value="' + authorThridData[i] + '">' + authorThridData[i] + '</option>');
      }
    } else if (e.val() == '陸上運輸業') {
      for (var i = 0; i < roadThridDatad.length; i++) {
        $(select3).append('<option value="' + roadThridDatad[i] + '">' + roadThridDatad[i] + '</option>');
      }
    } else if (e.val() == '陸上運輸輔助業') {
      for (var i = 0; i < roadThridDatad2.length; i++) {
        $(select3).append('<option value="' + roadThridDatad2[i] + '">' + roadThridDatad2[i] + '</option>');
      }
    } else if (e.val() == '水上運輸業') {
      for (var i = 0; i < waterThridDatad.length; i++) {
        $(select3).append('<option value="' + waterThridDatad[i] + '">' + waterThridDatad[i] + '</option>');
      }
    } else if (e.val() == '水上運輸輔助業') {
      for (var i = 0; i < waterThridDatad2.length; i++) {
        $(select3).append('<option value="' + waterThridDatad2[i] + '">' + waterThridDatad2[i] + '</option>');
      }
    } else if (e.val() == '航空運輸業') {
      for (var i = 0; i < airThridDatad.length; i++) {
        $(select3).append('<option value="' + airThridDatad[i] + '">' + airThridDatad[i] + '</option>');
      }
    } else if (e.val() == '航空運輸輔助業') {
      for (var i = 0; i < airThridDatad2.length; i++) {
        $(select3).append('<option value="' + airThridDatad2[i] + '">' + airThridDatad2[i] + '</option>');
      }
    } else if (e.val() == '其他運輸輔助業') {
      for (var i = 0; i < otherThridDatad.length; i++) {
        $(select3).append('<option value="' + otherThridDatad[i] + '">' + otherThridDatad[i] + '</option>');
      }
    } else if (e.val() == '倉儲業') {
      for (var i = 0; i < warehouseThridDatad.length; i++) {
        $(select3).append('<option value="' + warehouseThridDatad[i] + '">' + warehouseThridDatad[i] + '</option>');
      }
    } else if (e.val() == '電信業') {
      for (var i = 0; i < electronicThridDatad.length; i++) {
        $(select3).append('<option value="' + electronicThridDatad[i] + '">' + electronicThridDatad[i] + '</option>');
      }
    } else if (e.val() == '郵政業') {
      for (var i = 0; i < postThridDatad.length; i++) {
        $(select3).append('<option value="' + postThridDatad[i] + '">' + postThridDatad[i] + '</option>');
      }
    } else if (e.val() == '金融業') {
      for (var i = 0; i < financialThridDatad.length; i++) {
        $(select3).append('<option value="' + financialThridDatad[i] + '">' + financialThridDatad[i] + '</option>');
      }
    } else if (e.val() == '投資典當業') {
      for (var i = 0; i < investThridDatad.length; i++) {
        $(select3).append('<option value="' + investThridDatad[i] + '">' + investThridDatad[i] + '</option>');
      }
    } else if (e.val() == '證券業') {
      for (var i = 0; i < securitiesThridDatad.length; i++) {
        $(select3).append('<option value="' + securitiesThridDatad[i] + '">' + securitiesThridDatad[i] + '</option>');
      }
    } else if (e.val() == '期貨業') {
      for (var i = 0; i < futuresThridDatad.length; i++) {
        $(select3).append('<option value="' + futuresThridDatad[i] + '">' + futuresThridDatad[i] + '</option>');
      }
    } else if (e.val() == '保險業') {
      for (var i = 0; i < insuranceThridDatad.length; i++) {
        $(select3).append('<option value="' + insuranceThridDatad[i] + '">' + insuranceThridDatad[i] + '</option>');
      }
    } else if (e.val() == '保險輔助人') {
      for (var i = 0; i < insuranceThridDatad2.length; i++) {
        $(select3).append('<option value="' + insuranceThridDatad2[i] + '">' + insuranceThridDatad2[i] + '</option>');
      }
    } else if (e.val() == '不動產業') {
      for (var i = 0; i < realEstateThridDatad.length; i++) {
        $(select3).append('<option value="' + realEstateThridDatad[i] + '">' + realEstateThridDatad[i] + '</option>');
      }
    } else if (e.val() == '金融控股公司業') {
      for (var i = 0; i < financialHoldingThridDatad.length; i++) {
        $(select3).append('<option value="' + financialHoldingThridDatad[i] + '">' + financialHoldingThridDatad[i] + '</option>');
      }
    } else if (e.val() == '證券期貨控股業') {
      for (var i = 0; i < securitiesFuturesThridDatad.length; i++) {
        $(select3).append('<option value="' + securitiesFuturesThridDatad[i] + '">' + securitiesFuturesThridDatad[i] + '</option>');
      }
    } else if (e.val() == '其他金融、保險及不動產業') {
      for (var i = 0; i < ohterThridDatad.length; i++) {
        $(select3).append('<option value="' + ohterThridDatad[i] + '">' + ohterThridDatad[i] + '</option>');
      }
    } else if (e.val() == '顧問服務業') {
      for (var i = 0; i < consultantThridDatad.length; i++) {
        $(select3).append('<option value="' + consultantThridDatad[i] + '">' + consultantThridDatad[i] + '</option>');
      }
    } else if (e.val() == '資訊服務業') {
      for (var i = 0; i < informationThridDatad.length; i++) {
        $(select3).append('<option value="' + informationThridDatad[i] + '">' + informationThridDatad[i] + '</option>');
      }
    } else if (e.val() == '廣告業') {
      for (var i = 0; i < advertisementThridDatad.length; i++) {
        $(select3).append('<option value="' + advertisementThridDatad[i] + '">' + advertisementThridDatad[i] + '</option>');
      }
    } else if (e.val() == '設計業') {
      for (var i = 0; i < designThridDatad.length; i++) {
        $(select3).append('<option value="' + designThridDatad[i] + '">' + designThridDatad[i] + '</option>');
      }
    } else if (e.val() == '就業服務業') {
      for (var i = 0; i < jobThridDatad.length; i++) {
        $(select3).append('<option value="' + jobThridDatad[i] + '">' + jobThridDatad[i] + '</option>');
      }
    } else if (e.val() == '公寓大廈管理服務業') {
      for (var i = 0; i < apartmentThridDatad.length; i++) {
        $(select3).append('<option value="' + apartmentThridDatad[i] + '">' + apartmentThridDatad[i] + '</option>');
      }
    } else if (e.val() == '保全業') {
      for (var i = 0; i < securityThridDatad.length; i++) {
        $(select3).append('<option value="' + securityThridDatad[i] + '">' + securityThridDatad[i] + '</option>');
      }
    } else if (e.val() == '工業檢驗業') {
      for (var i = 0; i < industrialThridDatad.length; i++) {
        $(select3).append('<option value="' + industrialThridDatad[i] + '">' + industrialThridDatad[i] + '</option>');
      }
    } else if (e.val() == '建築物公共安全檢查業') {
      for (var i = 0; i < buildThridDatad.length; i++) {
        $(select3).append('<option value="' + buildThridDatad[i] + '">' + buildThridDatad[i] + '</option>');
      }
    } else if (e.val() == '藥品檢驗業') {
      for (var i = 0; i < dragThridDatad.length; i++) {
        $(select3).append('<option value="' + dragThridDatad[i] + '">' + dragThridDatad[i] + '</option>');
      }
    } else if (e.val() == '環保服務業') {
      for (var i = 0; i < envirThridDatad.length; i++) {
        $(select3).append('<option value="' + envirThridDatad[i] + '">' + envirThridDatad[i] + '</option>');
      }
    } else if (e.val() == '訓練服務業') {
      for (var i = 0; i < traningThridDatad.length; i++) {
        $(select3).append('<option value="' + traningThridDatad[i] + '">' + traningThridDatad[i] + '</option>');
      }
    } else if (e.val() == '出版事業') {
      for (var i = 0; i < releaseThridDatad.length; i++) {
        $(select3).append('<option value="' + releaseThridDatad[i] + '">' + releaseThridDatad[i] + '</option>');
      }
    } else if (e.val() == '電影事業') {
      for (var i = 0; i < movieThridDatad.length; i++) {
        $(select3).append('<option value="' + movieThridDatad[i] + '">' + movieThridDatad[i] + '</option>');
      }
    } else if (e.val() == '廣播電視業') {
      for (var i = 0; i < tvThridDatad.length; i++) {
        $(select3).append('<option value="' + tvThridDatad[i] + '">' + tvThridDatad[i] + '</option>');
      }
    } else if (e.val() == '藝文業') {
      for (var i = 0; i < actThridDatad.length; i++) {
        $(select3).append('<option value="' + actThridDatad[i] + '">' + actThridDatad[i] + '</option>');
      }
    } else if (e.val() == '休閒、娛樂服務業') {
      for (var i = 0; i < entertainThridDatad.length; i++) {
        $(select3).append('<option value="' + entertainThridDatad[i] + '">' + entertainThridDatad[i] + '</option>');
      }
    } else if (e.val() == '運動服務業') {
      for (var i = 0; i < sportThridDatad.length; i++) {
        $(select3).append('<option value="' + sportThridDatad[i] + '">' + sportThridDatad[i] + '</option>');
      }
    } else if (e.val() == '觀光及旅遊服務業') {
      for (var i = 0; i < tourThridDatad.length; i++) {
        $(select3).append('<option value="' + tourThridDatad[i] + '">' + tourThridDatad[i] + '</option>');
      }
    } else if (e.val() == '個人服務業') {
      for (var i = 0; i < personnelThridDatad.length; i++) {
        $(select3).append('<option value="' + personnelThridDatad[i] + '">' + personnelThridDatad[i] + '</option>');
      }
    }
  }

  // 電腦版
  // 第一層選單改變
  $('.manage-item-1').change(function() {
    // 隱藏與清除二三層的下拉選單
    clearAndNoneSelect('manage-item-1-2');
    clearAndNoneSelect('manage-item-1-2-3');
    // 顯示第二層與第三層
    triggerSelect('.manage-item-1-2', '.manage-item-1-2-3', $(this));
  });
  // 第二層選單改變
  $('.manage-item-1-2').change(function() {
    clearSelect('manage-item-1-2-3');
    // 顯示第三層
    triggerThridSelect('.manage-item-1-2-3', $(this));
  });

  $('#submit-form').submit(function(e) {
    e.preventDefault();
     var vForm = $(this);
    if (vForm[0].checkValidity() === false) {
      e.stopPropagation();
      vForm.addClass('was-validated');
    } else {
      alert('驗證通過！');
    }
  });
  // $('.submit-form1').on('click', function (e) {
  //   e.preventDefault();
  //   debugger;
  //   if ($('.contact-person').val() == "" || $('.contact-tel').val()=="" ||
  //   $('.corporation').val() == "" || $('.email').val() == "") {
  //     alert("請輸入必填資訊！");
  //     return false;
  //   }
  //   if ($('.other-required').val() == "") {
  //     $('.other-required').val("無");
  //   }
  //   $('#Modal').modal('show');
  //   $.ajax({
  //       type: "POST",
  //       url: "/api/sendMail",
  //       data: {
  //         'more-contents': $('.more-contents').val(),
  //         'contact-person': $('.contact-person').val(),
  //         'contact-tel': $('.contact-tel').val(),
  //         'corporation': $('.corporation').val(),
  //         'email': $('.email').val(),
  //         'other-required': $('.other-required').val(),
  //         '_token': "{{ csrf_token() }}"
  //       },
  //       success: function (res) {
  //         alert(res);
  //         $('#Modal').modal('hide');
  //         location.href = "./";
  //       },
  //       error: function (xhr, status, error) {
  //         console.error(xhr);
  //       }
  //     });
  // });

  $('.submit-form2').on('click', function (e) {
    e.preventDefault();
    if ($('.contact-person2').val() == "" || $('.contact-tel2').val()=="" ||
    $('.corporation2').val() == "" || $('.email2').val() == "") {
      // alert("請輸入必填資訊！");
      return false;
    }
    if ($('.other-required').val() == "") {
      $('.other-required').val("無");
    }
    $('#Modal').modal('show');
    $.ajax({
        type: "POST",
        url: "/api/sendMail",
        data: {
          'more-contents': $('.more-contents2').val(),
          'contact-person': $('.contact-person2').val(),
          'contact-tel': $('.contact-tel2').val(),
          'corporation': $('.corporation2').val(),
          'email': $('.email2').val(),
          'other-required': $('.other-required2').val(),
          '_token': "{{ csrf_token() }}"
        },
        success: function (res) {
          // alert(res);
          $('#ModalMobile').modal('show');
          $('#Modal').modal('hide');
          $('.mb-check').on('click', function() {
            location.href = "./";
          });
        },
        error: function (xhr, status, error) {
          console.error(xhr);
        }
      });
  });

  // $('#submit-form2').on('submit', function (e) {
  //   e.preventDefault();
  //   if ($('.other-required').val() == "") {
  //     $('.other-required').val("無");
  //   }
  //   $.ajax({
  //       type: "POST",
  //       url: "/api/sendMail",
  //       data: {
  //         'more-contents': $('.more-contents2').val(),
  //         'contact-person': $('.contact-person2').val(),
  //         'contact-tel': $('.contact-tel2').val(),
  //         'corporation': $('.corporation2').val(),
  //         'email': $('.email2').val(),
  //         'other-required': $('.other-required2').val(),
  //         '_token': "{{ csrf_token() }}"
  //       },
  //       success: function (res) {
  //         debugger;
  //         $('#Modal').modal('hide');
  //         alert(res);
  //       },
  //       error: function (xhr, status, error) {
  //         console.error(xhr);
  //       }
  //     });
  // });


</script>

@endsection
