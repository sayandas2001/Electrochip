<?php $this->load->view('includes/header'); ?>
<div class="content-wrapper">
    <section class="content-header">
      <h1>
        <i class="fa fa-phone"></i> About Details
        <small></small>
      </h1>
    </section>
    
    <section class="content">
        <div class="row">
            <div class="col-md-8">
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title"></h3>
                    </div>
                    <?php $this->load->helper("form"); ?>
                    <form name="myForm" id="contact" method="post" action="<?php echo base_url() ?>about/fixedcontentedit" role="form" enctype='multipart/form-data'>
                        <input type="hidden" value="<?php echo $aboutcontent->id; ?>" name="about_id" id="about_id" />
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="title">title</label>
                                        <input type="title" class="form-control required title" id="title" value="<?php echo $aboutcontent->title; ?>" name="title">
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="image">Image</label><span class="text-red">*</span>
                                        <input type="button" class="form-control image-preview-filename" value="<?php echo set_value('image', $aboutcontent->image); ?>">
                                        <span class="input-group-btn">
                                            <button type="button" class="btn btn-default image-preview-clear" style="display:none;">
                                                <span class="fa fa-remove"></span>Clear
                                            </button>
                                            <div class="btn btn-primary image-preview-input">
                                                <span class="fa fa-repeat"></span>
                                                <span class="image-preview-input-title">File Browse</span>
                                                <input type="file" accept="image/png, image/jpeg, image/gif"  value="<?php echo $aboutcontent->image; ?>" id="image" name="image"/>
                                            </div>
                                        </span>
                                        <?php if(!empty($aboutcontent->image)) { ?>
                                            <img src="<?php echo base_url('uploads/'.$aboutcontent->image); ?>" width="150" height="100">
                                        <?php } else { ?>
                                            <td class="text-center"><img src="<?php echo assets_url(); ?>uploads/blank.jpg" width="100" height="100"></td>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="banner_image">banner_image</label><span class="text-red">*</span>
                                        <input type="button" class="form-control image-preview-filename" value="<?php echo set_value('banner_image', $aboutcontent->banner_image); ?>">
                                        <span class="input-group-btn">
                                            <button type="button" class="btn btn-default image-preview-clear" style="display:none;">
                                                <span class="fa fa-remove"></span>Clear
                                            </button>
                                            <div class="btn btn-primary image-preview-input">
                                                <span class="fa fa-repeat"></span>
                                                <span class="image-preview-input-title">File Browse</span>
                                                <input type="file" accept="image/png, image/jpeg, image/gif"  value="<?php echo $aboutcontent->banner_image; ?>" id="banner_image" name="banner_image"/>
                                            </div>
                                        </span>
                                        <?php if(!empty($aboutcontent->banner_image)) { ?>
                                            <img src="<?php echo base_url('uploads/'.$aboutcontent->banner_image); ?>" width="150" height="100">
                                        <?php } else { ?>
                                            <td class="text-center"><img src="<?php echo assets_url(); ?>uploads/blank.jpg" width="100" height="100"></td>
                                        <?php } ?>
                                     </div>
                                  </div>
                            </div>                               
                            <!-- <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="description">description</label>
                                        <input type="text" class="form-control" id="description" value="<?php echo $aboutcontent->description;?>" name="description">
                                    </div>
                                </div>
                            </div> -->
                            <textarea id="description" name="description" rows="4" cols="60"><?php echo $aboutcontent->description;?></textarea>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="link">link</label>
                                        <input type="text" class="form-control required" id="link" value="<?php echo $aboutcontent->link;?>" name="link" maxlength="128">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-footer">
                           <input type="submit" class="btn btn-primary" />
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
<script src="<?php echo base_url(); ?>assets/js/addSalary.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/delete.js" charset="utf-8"></script>
<script type="text/javascript">
    function goBack()
    {
        window.history.back();

    }
</script>
<script type="text/javascript">
    var number2="0123456789";
    var string2="abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ-. ";
    function alphachar(e,allow)
    {
        var k;
        k=document.all?String(e.keyCode): String(e.which);
        return (allow.indexOf(String.fromCharCode(k))!=-1||k==8||k==9||k==13);
    }
</script>
