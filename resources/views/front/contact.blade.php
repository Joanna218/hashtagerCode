@extends('front.layouts.app')

@section('content')

<div class="common-banner contact-banner d-none d-md-block">
  <h2 class="common-banner-text justify-content-center">聯絡我們！</h2>
</div>

<div class="common-banner contact-mobil-banner d-sm-block d-md-none">
  <h2 class="common-banner-text justify-content-center">聯絡我們！</h2>
</div>


<div id="contact">
  <div class="container">
    <h1 class="d-none d-md-block">請填寫下方資料，我們將盡快與你聯繫，請耐心等候。</h1>
    <h1 class="d-sm-block d-md-none">請填寫下方資料，<br>我們將盡快與你聯繫，<br>請耐心等候。</h1>
    <h4 class="d-none d-md-block">如要在Hashtager貼嗑上舉辦活動，可於上架諮詢直接填寫申請。</h4>
    <h4 class="d-sm-block d-md-none">如要在Hashtager貼嗑上舉辦活動，<br>可於上架諮詢直接填寫申請。</h4>

    <!-- 電腦 -->
    <form id="submit-form" class="d-none d-md-block">
      <!-- 想要了解的內容 -->
      <div class="d-sm-none d-md-flex form-group d-flex">
        <label class="more-contents-label" for="more-contents">想要了解的內容</label>
        <select class="form-control more-contents" name="more-contents">
          <option value="活動企劃">活動企劃</option>
          <option value="KOL行銷">KOL行銷</option>
          <option value="社群行銷">社群行銷</option>
          <option value="口碑行銷">口碑行銷</option>
          <option value="輿情監測">輿情監測</option>
          <option value="整合行銷服務">整合行銷服務</option>
          <option value="UGC再利用">UGC再利用</option>
          <option value="異業合作">異業合作</option>
        </select>
      </div>

      <!-- 聯絡人、聯絡電話 -->
      <div class="form-group row">
        <div class="col">
          <label for="contact-person">聯絡人<span class="text-danger">*<span></label>
          <input type="text" class="form-control contact-person" name="contact-person" required>
        </div>
        <div class="col">
          <label for="contact-tel">聯絡電話<span class="text-danger">*<span></label>
          <input type="text" class="form-control contact-tel" name="contact-tel" required>
        </div>
      </div>

      <!-- 公司全稱、E-mai -->
      <div class="form-group row">
        <div class="col">
          <label for="corporation">公司全稱<span class="text-danger">*<span></label>
          <input type="text" class="form-control corporation" name="corporation" required>
        </div>
        <div class="col">
          <label for="email">E-mail<span class="text-danger">*<span></label>
          <input type="email" class="form-control email" name="email" placeholder="公司E-mail為佳" required>
        </div>
      </div>

      <div class="form-group row">
        <div class="other">
          <textarea class="other-required" placeholder="簡短需求說明(幫助我們安排適合的專員與您聯繫)" rows="10"></textarea>
        </div>
      </div>
      <!-- <div class="form-group row justify-content-center mt-4">
        <img src="https://fakeimg.pl/150x50/" alt="">
      </div> -->
      <div class="form-group row justify-content-center mt-4">
        <button type="button" class="btn submit-form submit-form1">送出</button>
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
  $('.submit-form1').on('click', function (e) {
    e.preventDefault();
    if ($('.contact-person').val() == "" || $('.contact-tel').val()=="" ||
    $('.corporation').val() == "" || $('.email').val() == "") {
      alert("請輸入必填資訊！");
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
          'more-contents': $('.more-contents').val(),
          'contact-person': $('.contact-person').val(),
          'contact-tel': $('.contact-tel').val(),
          'corporation': $('.corporation').val(),
          'email': $('.email').val(),
          'other-required': $('.other-required').val(),
          '_token': "{{ csrf_token() }}"
        },
        success: function (res) {
          alert(res);
          $('#Modal').modal('hide');
          location.href = "./";
        },
        error: function (xhr, status, error) {
          console.error(xhr);
        }
      });
  });

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
