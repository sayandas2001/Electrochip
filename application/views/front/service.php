<?php $this->load->view("front/include/header"); ?>
  <!-- service section -->
  <section class="service_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          Our Services
        </h2>
        <img src="<?php echo assets_url(); ?>fassets/images/plug.png" alt="">
      </div>

      <div class="service_container">
      <?php foreach($allservice as $service ) {?>
        <div class="box">
          <div class="img-box">
            <img src="<?php echo assets_url(); ?>uploads/<?php echo $service->image;?>" class="img1" alt="">
          </div>
          <div class="detail-box">
            <h5>
           <?php echo $service->title;?>  
            </h5>
            <p>
              <?php echo $service->description;?>
            </p>
          </div>
        </div>
      <?php }?>
      </div>
      <div class="btn-box">
        <a href="">
          Read More
        </a>
      </div>
    </div>
  </section>
  <!-- end service section -->


  <!-- info section -->

  <section class="info_section layout_padding">
    <div class="container">
      <div class="info_contact">
        <div class="row">
          <div class="col-md-4">
            <a href="">
              <img src="<?php echo assets_url(); ?>fassets/images/location-white.png" alt="">
              <span>
                Passages of Lorem Ipsum available
              </span>
            </a>
          </div>
          <div class="col-md-4">
            <a href="">
              <img src="<?php echo assets_url(); ?>fassets/images/telephone-white.png" alt="">
              <span>
                Call : +012334567890
              </span>
            </a>
          </div>
          <div class="col-md-4">
            <a href="">
              <img src="<?php echo assets_url(); ?>fassets/images/envelope-white.png" alt="">
              <span>
                demo@gmail.com
              </span>
            </a>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-8 col-lg-9">
          <div class="info_form">
            <form action="">
              <input type="text" placeholder="Enter your email">
              <button>
                subscribe
              </button>
            </form>
          </div>
        </div>
        <div class="col-md-4 col-lg-3">
          <div class="info_social">
            <div>
              <a href="">
                <img src="<?php echo assets_url(); ?>fassets/images/fb.png" alt="">
              </a>
            </div>
            <div>
              <a href="">
                <img src="<?php echo assets_url(); ?>fassets/images/twitter.png" alt="">
              </a>
            </div>
            <div>
              <a href="">
                <img src="<?php echo assets_url(); ?>fassets/images/linkedin.png" alt="">
              </a>
            </div>
            <div>
              <a href="">
                <img src="<?php echo assets_url(); ?>fassets/images/instagram.png" alt="">
              </a>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>

  <!-- end info section -->

  <?php $this->load->view("front/include/footer"); ?>
  