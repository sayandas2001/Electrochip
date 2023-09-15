<?php $this->load->view('front/include/header'); ?>
    <!-- slider section -->
    <section class=" slider_section ">
      <div class="container">
        <div class="row">
          <div class="col-md-6 ">
            <div class="detail_box">
              <h1>
                Electrical <br>
                Service <br>
                Providers
              </h1>
              <p>
                It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem
              </p>
              <a href="" class="">
                Contact Us
            </div>
          </div>
          <div class="col-lg-5 col-md-6 offset-lg-1">
            <div class="img_content">
              <div class="img_container">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner">
                    <?php
                    $i=0;
                     foreach($allbanner as $banner ) {?>
                      <div class="carousel-item <?php if($i==0){echo 'active';} ?>">
                        <div class="img-box">
                          <img src="<?php echo assets_url(); ?>uploads/<?php echo $banner->image;?>" alt="">
                        </div>
                      </div>
                    <?php $i++; }?>
                    <!-- <div class="carousel-item active">
                      <div class="img-box">
                        <img src="<?php echo assets_url(); ?>fassets/images/slider-img.jpg" alt="">
                      </div>
                    </div>
                    <div class="carousel-item">
                      <div class="img-box">
                        <img src="<?php echo assets_url(); ?>fassets/images/slider-img.jpg" alt="">
                      </div>
                    </div>
                    <div class="carousel-item">
                      <div class="img-box">
                        <img src="<?php echo assets_url(); ?>fassets/images/slider-img.jpg" alt="">
                      </div>
                    </div> -->
                  </div>
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="sr-only">Next</span>
              </a>
            </div>

          </div>
        </div>
      </div>
    </section>
    <!-- end slider section -->
  </div>


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


  <!-- blog section -->

  <section class="blog_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          Blog
        </h2>
        <img src="images/plug.png" alt="">
      </div>
      <div class="row">
       <?php foreach($allblog as $blog) {?>
        <div class="col-md-6">
          <div class="box">
          <img src="<?php echo assets_url(); ?>uploads/<?php echo $blog->image;?>" class="img1" alt="">
            <div class="img-box">
            </div>
            <div class="detail-box">
              <h5>
                <?php echo $blog->title;?>
              </h5>
              <p>
                <?php echo $blog->description;?>
              </p>
            </div>
          </div>
        </div>
        <?php }?>
      </div>
    </div>
  </section>

  <!-- end blog section -->


  <!-- contact section -->

  <section class="contact_section layout_padding">
    <div class="container ">
      <div class="heading_container">
        <h2>
          Contact Us
        </h2>
        <img src="<?php echo assets_url(); ?>fassets/images/plug.png" alt="">
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <form action="">
            <div>
              <input type="text" placeholder="Name" />
            </div>
            <div>
              <input type="email" placeholder="Email" />
            </div>
            <div>
              <input type="text" placeholder="Phone Number" />
            </div>
            <div>
              <input type="text" class="message-box" placeholder="Message" />
            </div>
            <div class="d-flex ">
              <button>
                SEND
              </button>
            </div>
          </form>
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
<?php $this->load->view('front/include/footer'); ?>