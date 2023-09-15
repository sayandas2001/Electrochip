<?php
$contact_id = $userInfo2->contact_id;
$email = $userInfo2->email;
$phone = $userInfo2->phone;
$telephone = $userInfo2->telephone;
$address = $userInfo2->address;
$fb_link = $userInfo2->fb_link;
$twitter_link = $userInfo2->twitter_link;
$instagram_link = $userInfo2->youtube_link;
?>
<div class="content-wrapper">
    <section class="content-header">
      <h1>
        <i class="fa fa-phone"></i> Contact Details
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
                    <form name="myForm" id="contact" method="post" action="<?php echo base_url() ?>editContactConfig" role="form">
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email">Email*</label>
                                        <input type="email" class="form-control required email" id="email" value="<?php echo $email; ?>" name="email">
                                        <input type="hidden" value="<?php echo $contact_id; ?>" name="contact_id" id="contact_id" />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="phone">Phone Number*</label>
                                        <input type="text" class="form-control required digits" id="phone" value="<?php echo $phone; ?>" name="phone">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="telephone">Alternate Phone Number</label>
                                        <input type="text" class="form-control" id="telephone" value="<?php echo $telephone; ?>" name="telephone">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="address">Address*</label>
                                        <input type="text" class="form-control required" id="address" value="<?php echo $address; ?>" name="address" maxlength="128">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="fb_link">Facebook Link</label>
                                        <input type="text" class="form-control" id="fb_link" value="<?php echo $fb_link; ?>" name="fb_link" maxlength="128">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="twitter_link">Twitter Link</label>
                                        <input type="text" class="form-control" id="twitter_link" value="<?php echo $twitter_link; ?>" name="twitter_link" maxlength="128">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                 <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="instagram_link">Instagram Link</label>
                                        <input type="text" class="form-control" id="instagram_link" value="<?php echo $instagram_link; ?>" name="instagram_link" maxlength="128">
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
