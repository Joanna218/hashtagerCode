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
          <select style="width:20%" class="form-control manage-item-1" name="manage-item-1">
            <option value="農、林、漁、牧業">農、林、漁、牧業</option>
            <option value="礦業及土石採取業">礦業及土石採取業</option>
            <option value="製造業">製造業</option>
            <option value="水電燃氣業">水電燃氣業</option>
            <option value="營造及工程業">營造及工程業</option>
            <option value="其他未分類業">其他未分類業</option>
            <option value="批發、零售及餐飲業">批發、零售及餐飲業</option>
            <option value="運輸、倉儲及通信業">運輸、倉儲及通信業</option>
          </select>

          <!-- 第二層選單 -->
          <select style="width:20%;" class="form-control manage-item-1-2" name="manage-item-1-2">
          </select>

          <!-- 第三層選單 -->
          <select style="width:20%;" class="form-control manage-item-1-2-3" name="manage-item-1-2-3">
          </select>
        </div>
        <!-- <div class="col">
          <label for="email">E-mail<abbr class="text-danger">*</abbr></label>
          <input type="email" class="form-control email" name="email" placeholder="公司E-mail為佳" required>
          <div class="invalid-feedback">
            請輸入E-mail
          </div>
        </div> -->
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

  function clearSelect(selector) {
    $('.' + selector).find('option').remove().end();
  }

  // 第一層選單改變
  $('.manage-item-1').change(function() {
    // 隱藏與清除二三層的下拉選單
    clearSelect('manage-item-1-2');
    clearSelect('manage-item-1-2-3');
    // 顯示第二層
    if ($(this).val() == '批發、零售及餐飲業') {
      for (var i = 0; i < retailSecondData.length; i++) {
        $(".manage-item-1-2").append('<option value="' + retailSecondData[i] + '">' + retailSecondData[i] + '</option>');
      }
    } else if($(this).val() == '運輸、倉儲及通信業') {
      for (var i = 0; i < shipSecondData.length; i++) {
        $(".manage-item-1-2").append('<option value="' + shipSecondData[i] + '">' + shipSecondData[i] + '</option>');
      }
    }
  });
  // 第二層選單改變
  $('.manage-item-1-2').change(function() {
    // 隱藏與清除三層的下拉選單
    clearSelect('manage-item-1-2-3');
    // 顯示第三層
    if ($(this).val() == '批發業') {
      for (var i = 0; i < wholsaleThridData.length; i++) {
        $(".manage-item-1-2-3").append('<option value="' + wholsaleThridData[i] + '">' + wholsaleThridData[i] + '</option>');
      }
    } else if ($(this).val() == '零售業') {
      for (var i = 0; i < retailThridData.length; i++) {
        $(".manage-item-1-2-3").append('<option value="' + retailThridData[i] + '">' + retailThridData[i] + '</option>');
      }
    } else if ($(this).val() == '綜合零售業') {
      for (var i = 0; i < complexRetailThridData.length; i++) {
        $(".manage-item-1-2-3").append('<option value="' + complexRetailThridData[i] + '">' + complexRetailThridData[i] + '</option>');
      }
    } else if ($(this).val() == '國際貿易業') {
      for (var i = 0; i < InternationalTradeThridData.length; i++) {
        $(".manage-item-1-2-3").append('<option value="' + InternationalTradeThridData[i] + '">' + InternationalTradeThridData[i] + '</option>');
      }
    } else if ($(this).val() == '餐飲業') {
      for (var i = 0; i < eatThridData.length; i++) {
        $(".manage-item-1-2-3").append('<option value="' + eatThridData[i] + '">' + eatThridData[i] + '</option>');
      }
    } else if ($(this).val() == '智慧財產權業') {
      for (var i = 0; i < authorThridData.length; i++) {
        $(".manage-item-1-2-3").append('<option value="' + authorThridData[i] + '">' + authorThridData[i] + '</option>');
      }
    } else if ($(this).val() == '陸上運輸業') {
      for (var i = 0; i < roadThridDatad.length; i++) {
        $(".manage-item-1-2-3").append('<option value="' + roadThridDatad[i] + '">' + roadThridDatad[i] + '</option>');
      }
    } else if ($(this).val() == '陸上運輸輔助業') {
      for (var i = 0; i < roadThridDatad2.length; i++) {
        $(".manage-item-1-2-3").append('<option value="' + roadThridDatad2[i] + '">' + roadThridDatad2[i] + '</option>');
      }
    } else if ($(this).val() == '水上運輸業') {
      for (var i = 0; i < waterThridDatad.length; i++) {
        $(".manage-item-1-2-3").append('<option value="' + waterThridDatad[i] + '">' + waterThridDatad[i] + '</option>');
      }
    } else if ($(this).val() == '水上運輸輔助業') {
      for (var i = 0; i < waterThridDatad2.length; i++) {
        $(".manage-item-1-2-3").append('<option value="' + waterThridDatad2[i] + '">' + waterThridDatad2[i] + '</option>');
      }
    } else if ($(this).val() == '航空運輸業') {
      for (var i = 0; i < airThridDatad.length; i++) {
        $(".manage-item-1-2-3").append('<option value="' + airThridDatad[i] + '">' + airThridDatad[i] + '</option>');
      }
    } else if ($(this).val() == '航空運輸輔助業') {
      for (var i = 0; i < airThridDatad2.length; i++) {
        $(".manage-item-1-2-3").append('<option value="' + airThridDatad2[i] + '">' + airThridDatad2[i] + '</option>');
      }
    } else if ($(this).val() == '其他運輸輔助業') {
      for (var i = 0; i < otherThridDatad.length; i++) {
        $(".manage-item-1-2-3").append('<option value="' + otherThridDatad[i] + '">' + otherThridDatad[i] + '</option>');
      }
    } else if ($(this).val() == '倉儲業') {
      for (var i = 0; i < warehouseThridDatad.length; i++) {
        $(".manage-item-1-2-3").append('<option value="' + warehouseThridDatad[i] + '">' + warehouseThridDatad[i] + '</option>');
      }
    } else if ($(this).val() == '電信業') {
      for (var i = 0; i < electronicThridDatad.length; i++) {
        $(".manage-item-1-2-3").append('<option value="' + electronicThridDatad[i] + '">' + electronicThridDatad[i] + '</option>');
      }
    } else if ($(this).val() == '郵政業') {
      for (var i = 0; i < postThridDatad.length; i++) {
        $(".manage-item-1-2-3").append('<option value="' + postThridDatad[i] + '">' + postThridDatad[i] + '</option>');
      }
    }
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
