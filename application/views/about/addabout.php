<?php $this->load->view('includes/header'); ?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-users"></i> 
        <h1>About </h1>
    </section>
    
    <section class="content">
    
        <div class="row">
            <!-- left column -->
            <div class="col-md-8">
              <!-- general form elements -->            
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title"></h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    <?php $this->load->helper("form"); ?>
                    <form role="form" id="about" enctype='multipart/form-data' action="<?php echo base_url() ?>about/addAboutConfig" method="post" accept-charset="utf-8">
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-6">                                
                                    <div class="form-group">
                                        <label for="title">Title</label><span class="text-red">*</span>
                                        <input type="text" class="form-control required" value="<?php echo set_value('title'); ?>" id="title" name="title" >
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">                                
                                    <div class="form-group">
                                        <label for="image">Image</label><span class="text-red">*</span>
                                        <input type="button" class="form-control image-preview-filename" value="<?php echo set_value('image'); ?>" disabled="disabled">
                                        <span class="input-group-btn">
                                            <button type="button" class="btn btn-default image-preview-clear" style="display:none;">
                                                <span class="fa fa-remove"></span>Clear
                                            </button>
                                            <div class="btn btn-primary image-preview-input">
                                                <span class="fa fa-repeat"></span>
                                                <span class="image-preview-input-title">File Browse</span>
                                                <input type="file" accept="image/png, image/jpeg, image/gif" id="image" name="image"/>
                                            </div>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">                                
                                    <div class="form-group">
                                        <label for="title">Description</label><span class="text-red">*</span>
                                        <textarea id="description" name="description" rows="4" cols="60"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-footer">
                            <input type="submit" class="btn btn-primary" value="Submit" />
                            <button type="button" class="btn btn-primary" value="Back" onclick="goBack()">Back</button>
                            <input type="reset" class="btn btn-default" value="Reset" />
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-4">
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
    </section>
    
</div>
<?php $this->load->view('includes/footer'); ?>

<script src="<?php echo assets_url(); ?>assets/js/banner.js" type="text/javascript"></script>
<script type="text/javascript">
    function goBack()
    {
        window.history.back();

    }
</script>
<script src = "https://code.jquery.com/jquery-3.3.1.min.js"></script>  
<script type = "text/javascript">
    $(document).ready(function() {
    $('#description').summernote({
        height: 300,
        width: 500
    });
});