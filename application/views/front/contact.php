<?php $this->load->view("front/include/header"); ?>

  <!-- contact section -->

  <section class="contact_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          Contact Us
        </h2>
        <img src="images/plug.png" alt="">
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-6">
        <form role="form" enctype='multipart/form-data' action="<?php echo base_url() ?>Home/addcontact" method="post" id="Contact_listing" role="form">
            <div>
              <input type="text" name="name" placeholder="Name" />
            </div>
            <div>
              <input type="email" name="email" placeholder="Email" />
            </div>
            <div>
              <input type="text" name="phone_number" placeholder="Phone Number" />
            </div>
            <div>
              <input type="text"  name="message" class="message-box" placeholder="Message" />
            </div>
            <div class="d-flex ">
              <button>
                SEND
              </button>
            </div>
          </form>
          <?php  
          $success = $this->session->flashdata('success');
          if($success)
          {
          ?>
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
              <?php echo $this->session->flashdata('success'); ?>
          <?php } ?>
        </div>
        
        <div class="col-md-6">
          <div class="map_container">
            <div class="map-responsive">
              <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&q=Eiffel+Tower+Paris+France" width="600" height="300" frameborder="0" style="border:0; width: 100%; height:100%" allowfullscreen></iframe>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end contact section -->


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