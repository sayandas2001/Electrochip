<?php $this->load->view('includes/header'); ?>
<div class="content-wrapper">
    <section class="content-header">
      <h1>
        <i class="fa fa-users"></i>About
        <small>Details</small>
      </h1>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-xs-12 text-right">
                <div class="form-group">
                    <a class="btn btn-primary" href="<?php echo base_url(); ?>about/addabout"><i class="fa fa-plus"></i> Add About</a>
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
                </div>
                <div class="box-body table-responsive no-padding">
                    <table class="table table-hover">
                        <tr>
                            <th>#</th>
                            <th class="text-center">Title</th>
                            <th class="text-center">Image</th>
                            <th class="text-center">Description</th>
                        </tr>
                        <?php
                        if(!empty($allabout))
                        {
                            foreach($allabout as $about)
                            {
                        ?>
                        <tr>
                            <td><?php echo $about->id ?></td>
                            <td class="text-center"><?php echo $about->title ?></td>
                            <td class="text-center"><img src="<?php echo assets_url(); ?>uploads/<?php echo $about->image; ?>" width="150" height="100"></td>
                            <td class="text-center">
                                <a class="btn btn-sm btn-info" href="<?php echo base_url().'about/editabout/'.$about->id; ?>" title="Edit"><i class="fa fa-pencil"></i></a>
                                <a class="btn btn-sm btn-danger" href="<?php echo base_url().'about/deleteabout/'.$about->id; ?>" title="Delete"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                        <?php
                            } 
                        }
                        ?>
                    </table>
                    <div class="box-footer clearfix">
                        <?php //echo $this->pagination->create_links(); ?>
                    </div>
                </div>
                
              </div>
            </div>
        </div>
    </section>
</div>
<?php $this->load->view('includes/footer'); ?>

<script type="text/javascript" src="<?php echo assets_url(); ?>assets/js/delete.js" charset="utf-8"></script>
<script type="text/javascript">
    jQuery(document).ready(function(){
        jQuery('ul.pagination li a').click(function (e) {
            e.preventDefault();            
            var link = jQuery(this).get(0).href;            
            var value = link.substring(link.lastIndexOf('/') + 1);
            jQuery("#searchList").attr("action", baseURL + "about_listing/" + value);
            jQuery("#searchList").submit();
        });
    });
</script>
