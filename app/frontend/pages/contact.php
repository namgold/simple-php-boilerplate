<div class="hero-wrap hero-bread" style="background-image: url('images/bg_6.jpg');">
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <!-- <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Trang chủ</a></span> <span>Products</span></p> -->
                <h1 class="mb-0 bread">Liên hệ với chúng tôi</h1>
            </div>
        </div>
    </div>
</div>
<?php
    $address = getSetting('address');;
    $phone = getSetting('phone');
    $email = getSetting('email');
    $website = getSetting('website');
?>
    <section class="ftco-section contact-section">
      <div class="container">
          <div class="row d-flex mb-5 contact-info">
          <div class="w-100"></div>
          <div class="col-md-3 d-flex">
              <div class="info bg-white p-4">
                <p><span>Địa chỉ:</span> <?php echo $address ?></p>
              </div>
          </div>
          <div class="col-md-3 d-flex">
              <div class="info bg-white p-4">
                <p><span>Số điện thoại:</span> <a href="tel://<?php echo $phone ?>">+<?php echo $phone ?></a></p>
              </div>
          </div>
          <div class="col-md-3 d-flex">
              <div class="info bg-white p-4">
                <p><span>Email:</span> <a href="mailto:<?php echo $email ?>"><?php echo $email ?></a></p>
              </div>
          </div>
          <div class="col-md-3 d-flex">
              <div class="info bg-white p-4">
                <p><span>Website</span> <a href="<?php echo $website ?>"><?php echo $website ?></a></p>
              </div>
          </div>
        </div>
        <div class="row block-9">
          <div class="col-md-6 order-md-last d-flex">
            <form action="#" class="bg-white p-5 contact-form">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Họ và Tên">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Địa chỉ Email">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Tiêu đề">
              </div>
              <div class="form-group">
                <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Nội dung"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" value="Gửi tin nhắn" class="btn btn-primary py-3 px-5">
              </div>
            </form>
          </div>

          <div class="col-md-6 d-flex">
              <div class="box_full">
              <div class="box_x bando">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7838.546877737372!2d106.688099!3d10.790357!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xc992920033504e1!2sMeli+Spa+%26+Beauty+Clinic!5e0!3m2!1sen!2sus!4v1537496323989" width="500" height="450" frameborder="0" style="border:0" allowfullscreen=""></iframe>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>