<div class="content-wrapper">
    <section class="content-header">
      <h1>
        <i class="fa fa-shield"></i> CMS
        <small>Details</small>
      </h1>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-xs-12 text-right">
                <div class="form-group">
                    <a class="btn btn-primary" href="<?php echo base_url(); ?>addcms"><i class="fa fa-plus"></i> Add cms</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <?php
                    $this->load->helper('form');
                    $error = $this->session->flashdata('error');
                    if($error)
                    {
                ?>
                <div class="alert alert-danger alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <?php echo $this->session->flashdata('error'); ?>                    
                </div>
                <?php } ?>
                <?php  
                    $success = $this->session->flashdata('success');
                    if($success)
                    {
                ?>
                <div class="alert alert-success alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <?php echo $this->session->flashdata('success'); ?>
                </div>
                <?php } ?>
                
                <div class="row">
                    <div class="col-md-12">
                        <?php echo validation_errors('<div class="alert alert-danger alert-dismissable">', ' <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button></div>'); ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                    <h3 class="box-title">List</h3>
                    <div class="box-tools">
                        <form action="<?php echo base_url() ?>cms_listing" method="POST" id="searchList">
                            <div class="input-group">
                              <input type="text" name="searchText" value="<?php echo $searchText; ?>" class="form-control input-sm pull-right" style="width: 150px;" placeholder="Search"/>
                              <div class="input-group-btn">
                                <button class="btn btn-sm btn-default searchList"><i class="fa fa-search"></i></button>
                              </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="box-body table-responsive no-padding">
                  <table class="table table-hover">
                    <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th class="text-center">Image</th>
                        <th>Description</th>
                        <th class="text-center">Actions</th>
                    </tr>
                    <?php
                    if(!empty($cmss))
                    {
                        foreach($cmss as $cms)
                        {
                    ?>
                    <tr>
                        <td><?php echo $cms->cms_id ?></td>
                        <td><?php echo $cms->title ?></td>
                        <?php if(!empty($cms->image)) { ?>
                            <td class="text-center">
                                <div class="popup" onclick="myFunction(<?=$cms->cms_id?>)">
                                    <span class="popuptext" id="<?=$cms->cms_id?>">
                                        <img src="<?php echo assets_url(); ?>uploads/<?php echo $cms->image; ?>" width="100" height="120">
                                    </span>
                                </div>
                            </td>
                        <?php } else { ?>
                            <td class="text-center"><img src="<?php echo assets_url(); ?>uploads/images.jpg" width="100" height="100"></td>
                        <?php } ?>
                        <td style="width:500px; text-align:justify;"><div style="height: 70px; overflow: hidden; line-height: 22px;"><?php echo $cms->description ?></div></td>
                        <td class="text-center">
                            <a class="btn btn-sm btn-info" href="<?php echo base_url().'editcms/'.$cms->cms_id; ?>" title="Edit"><i class="fa fa-pencil"></i></a> 
                            <a class="btn btn-sm btn-danger" href="<?php echo base_url().'deletecms/'.$cms->cms_id; ?>" title="Delete"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                    <?php
                        }
                    }
                    ?>
                  </table>
                  
                </div>
                <div class="box-footer clearfix">
                    <?php echo $this->pagination->create_links(); ?>
                </div>
              </div>
            </div>
        </div>
    </section>
</div>
<script type="text/javascript" src="<?php echo assets_url(); ?>assets/js/delete.js" charset="utf-8"></script>
<script type="text/javascript">
    jQuery(document).ready(function(){
        jQuery('ul.pagination li a').click(function (e) {
            e.preventDefault();            
            var link = jQuery(this).get(0).href;            
            var value = link.substring(link.lastIndexOf('/') + 1);
            jQuery("#searchList").attr("action", baseURL + "cms_listing/" + value);
            jQuery("#searchList").submit();
        });
    });
</script>
<script type="text/javascript">
    function myFunction(popupId){
        var popup = document.getElementById(popupId);
        popup.classList.toggle("show");
    }
</script>
