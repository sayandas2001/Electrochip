<?php $this->load->view("front/include/header"); ?>
  
  <!-- about section -->
  <section class="about_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
                <?php echo $aboutcontent->title;?>
              </h2>
              <img src="<?php echo assets_url(); ?>fassets/images/plug.png" alt="">
            </div>
            <p>
            <?php echo $aboutcontent->description;?>
            </p>
            <a href="<?php echo $aboutcontent->link;?>" target="_blank">
              Read More
            </a>
          </div>
        </div>
        <div class="col-md-6">
          <div class="img_container">
            <div class="img-box b1">
              <img src="<?php echo assets_url(); ?>uploads/<?php echo $aboutcontent->image;?>" alt="" />
            </div>
             <div class="img-box b2">
              <img src="<?php echo assets_url(); ?>uploads/<?php echo $aboutcontent->banner_image;?>" alt="" />
            </div> 
          </div>

        </div>

      </div>
    </div>
  </section>

  <!-- end about section -->

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
              <img src="<?php echo assets_url(); ?>fassets/ges/envelope-white.png" alt="">
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
