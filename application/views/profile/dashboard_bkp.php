<div class="content-wrapper">
    <section class="content-header">
      <h1>
        <i class="fa fa-tachometer" aria-hidden="true"></i> Dashboard
        <small>Control panel</small>
      </h1>
    </section>
    
    <section class="content">
        <div class="row">
          <div class="col-lg-3 col-xs-6">
            <div class="small-box bg-aqua">
              <div class="inner">
                <h3>Contact</h3>
                <p>Details</p>
              </div>
              <div class="icon">
                <i class="fa fa-phone"></i>
              </div>
              <a href="<?php echo base_url(); ?>contact/1" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- <div class="col-lg-3 col-xs-6">
            <div class="small-box bg-green">
              <div class="inner">
                <h3>
                  <?php
                    $banner_count = 0;
                    foreach($this->data['banner_count'] as $banner){
                        if($banner){
                            $banner_count++;
                        }
                    }
                    echo $banner_count;
                  ?>
                </h3>
                <p>Banner</p>
              </div>
              <div class="icon">
                <i class="fa fa-flag"></i>
              </div>
              <a href="<?php echo base_url(); ?>banner_listing" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div> -->
          <!-- <div class="col-lg-3 col-xs-6">
            <div class="small-box bg-yellow">
              <div class="inner">
                <h3>
                  <?php
                    $product_count = 0;
                    foreach($this->data['product_count'] as $product){
                        if($product){
                            $product_count++;
                        }
                    }
                    echo $product_count;
                  ?>
                </h3>
                <p>Our Product</p>
              </div>
              <div class="icon">
                <i class="fa fa-ticket"></i>
              </div>
              <a href="<?php echo base_url(); ?>product_listing" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div> -->
          <div class="col-lg-3 col-xs-6">
            <div class="small-box bg-yellow">
              <div class="inner">
                <h3>
                  <?php
                    $service_count = 0;
                    foreach($this->data['service_count'] as $service){
                        if($service){
                            $service_count++;
                        }
                    }
                    echo $service_count;
                  ?>
                </h3>
                <p>Our Service</p>
              </div>
              <div class="icon">
                <i class="fa fa-user"></i>
              </div>
              <a href="<?php echo base_url(); ?>service_listing" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-xs-6">
            <div class="small-box bg-red">
              <div class="inner">
                <h3>
                  <?php
                    $partner_count = 0;
                    foreach($this->data['partner_count'] as $partner){
                        if($partner){
                            $partner_count++;
                        }
                    }
                    echo $partner_count;
                  ?>
                </h3>
                <p>International Partners</p>
              </div>
              <div class="icon">
                <i class="fa fa-fighter-jet"></i>
              </div>
              <a href="<?php echo base_url(); ?>partner_listing" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-xs-6">
            <div class="small-box bg-green">
              <div class="inner">
                <h3>
                  <?php
                    $video_count = 0;
                    foreach($this->data['video_count'] as $video){
                        if($video){
                            $video_count++;
                        }
                    }
                    echo $video_count;
                  ?>
                </h3>
                <p>Product Video</p>
              </div>
              <div class="icon">
                <i class="fa fa-play-circle"></i>
              </div>
              <a href="<?php echo base_url(); ?>video_listing" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-xs-6">
            <div class="small-box bg-red">
              <div class="inner">
                <h3>
                  <?php
                    $client_count = 0;
                    foreach($this->data['client_count'] as $client){
                        if($client){
                            $client_count++;
                        }
                    }
                    echo $client_count;
                  ?>
                </h3>
                <p>Clients</p>
              </div>
              <div class="icon">
                <i class="fa fa-male"></i>
              </div>
              <a href="<?php echo base_url(); ?>client_listing" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-xs-6">
            <div class="small-box bg-green">
              <div class="inner">
                <h3>
                  <?php
                    $application_count = 0;
                    foreach($this->data['application_count'] as $application){
                        if($application){
                            $application_count++;
                        }
                    }
                    echo $application_count;
                  ?>
                </h3>
                <p>Application Area</p>
              </div>
              <div class="icon">
                <i class="fa fa-briefcase"></i>
              </div>
              <a href="<?php echo base_url(); ?>application_listing" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-xs-6">
            <div class="small-box bg-aqua">
              <div class="inner">
                <h3>
                  <?php
                    $testimonial_count = 0;
                    foreach($this->data['testimonial_count'] as $testimonial){
                        if($testimonial){
                            $testimonial_count++;
                        }
                    }
                    echo $testimonial_count;
                  ?>
                </h3>
                <p>Testimonial</p>
              </div>
              <div class="icon">
                <i class="fa fa-trademark"></i>
              </div>
              <a href="<?php echo base_url(); ?>testimonial_listing" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-xs-6">
            <div class="small-box bg-yellow">
              <div class="inner">
                <h3>
                  <?php
                    $certifications_count = 0;
                    foreach($this->data['certifications_count'] as $certifications){
                        if($certifications){
                            $certifications_count++;
                        }
                    }
                    echo $certifications_count;
                  ?>
                </h3>
                <p>Our Certifications</p>
              </div>
              <div class="icon">
                <i class="fa fa-certificate"></i>
              </div>
              <a href="<?php echo base_url(); ?>certifications_listing" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-xs-6">
            <div class="small-box bg-aqua">
              <div class="inner">
                <h3>
                  <?php
                    $team_count = 0;
                    foreach($this->data['team_count'] as $team){
                        if($team){
                            $team_count++;
                        }
                    }
                    echo $team_count;
                  ?>
                </h3>
                <p>Our Team</p>
              </div>
              <div class="icon">
                <i class="fa fa-users"></i>
              </div>
              <a href="<?php echo base_url(); ?>team_listing" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-xs-6">
            <div class="small-box bg-yellow">
              <div class="inner">
                <h3>
                  <?php
                    $usp_count = 0;
                    foreach($this->data['usp_count'] as $usp){
                        if($usp){
                            $usp_count++;
                        }
                    }
                    echo $usp_count;
                  ?>
                </h3>
                <p>Our USP</p>
              </div>
              <div class="icon">
                <i class="fa fa-comment"></i>
              </div>
              <a href="<?php echo base_url(); ?>usp_listing" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-xs-6">
            <div class="small-box bg-red">
              <div class="inner">
                <h3>
                  <?php
                    $product_count = 0;
                    foreach($this->data['product_count'] as $product){
                        if($product){
                            $product_count++;
                        }
                    }
                    echo $product_count;
                  ?>
                </h3>
                <p>Product</p>
              </div>
              <div class="icon">
                <i class="fa fa-product-hunt"></i>
              </div>
              <a href="<?php echo base_url(); ?>product_listing" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-xs-6">
            <div class="small-box bg-green">
              <div class="inner">
                <h3>
                  <?php
                    $contact_query_count = 0;
                    foreach($this->data['contact_query_count'] as $contact_query){
                        if($contact_query){
                            $contact_query_count++;
                        }
                    }
                    echo $contact_query_count;
                  ?>
                </h3>
                <p>Contact Query</p>
              </div>
              <div class="icon">
                <i class="fa fa-question-circle"></i>
              </div>
              <a href="<?php echo base_url(); ?>contact_query_listing" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
        </div>
    </section>
</div>