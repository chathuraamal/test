<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CodeIgniter | Insert Employee Details into MySQL Database</title>
    <!--link the bootstrap css file-->
    <link href="<?php echo base_url("assets/bootstrap/css/bootstrap.css"); ?>" rel="stylesheet" type="text/css" />
    <!-- link jquery ui css-->
    <link href="<?php echo base_url('assets/jquery-ui-1.11.2/jquery-ui.min.css'); ?>" rel="stylesheet" type="text/css" />
    <!--include jquery library-->
    <script src="<?php echo base_url('assets/js/jquery-2.2.0.min.js'); ?>"></script>
    <!--load jquery ui js file-->
    <script src="<?php echo base_url('assets/jquery-ui-1.11.2/jquery-ui.min.js'); ?>"></script>
        
    <style type="text/css">
    .colbox {
        margin-left: 0px;
        margin-right: 0px;
    }
    </style>
    
    <script type="text/javascript">
    //load datepicker control onfocus
    $(function() {
        $("#hireddate").datepicker();
    });
    </script>
    
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-sm-offset-3 col-lg-6 col-sm-6 well">
        <legend>Add Employee Details</legend>
        <?php 
        $attributes = array("class" => "form-horizontal", "id" => "employeeform", "name" => "employeeform");
        echo form_open("department/temp_insert", $attributes);?>
        <fieldset>
            
            <div class="form-group">
            <div class="row colbox">
            
            <div class="col-lg-4 col-sm-4">
                <label for="epfno" class="control-label">Employee No</label>
            </div>
            <div class="col-lg-8 col-sm-8">
                <input id="epfno" name="epfno" placeholder="epfno" type="text" class="form-control"  value="<?php echo set_value('epfno'); ?>" />
                <span class="text-danger"><?php echo form_error('epfno'); ?></span>
            </div>
            </div>
            </div>

            <div class="form-group">
            <div class="row colbox">
            <div class="col-lg-4 col-sm-4">
                <label for="firstname" class="control-label">First Name</label>
            </div>
            <div class="col-lg-8 col-sm-8">
                <input id="fname" name="fname" placeholder="first name" type="text" class="form-control"  value="<?php echo set_value('fname'); ?>" />
                <span class="text-danger"><?php echo form_error('fname'); ?></span>
            </div>
            </div>
            </div>
            
            <div class="form-group">
            <div class="row colbox">
            <div class="col-lg-4 col-sm-4">
                <label for="lastname" class="control-label">Last Name</label>
            </div>
            <div class="col-lg-8 col-sm-8">
                <input id="lname" name="lname" placeholder="last name" type="text" class="form-control"  value="<?php echo set_value('lname'); ?>" />
                <span class="text-danger"><?php echo form_error('lname'); ?></span>
            </div>
            </div>
            </div>
            
            <div class="form-group">
            <div class="row colbox">
            <div class="col-lg-4 col-sm-4">
                <label for="DOB" class="control-label">Date of Birth</label>
            </div>
            <div class="col-lg-8 col-sm-8">
                <input id="dob" name="dob" placeholder="2000-01-01" type="text" class="form-control"  value="<?php echo set_value('dob'); ?>" />
                <span class="text-danger"><?php echo form_error('dob'); ?></span>
            </div>
            </div>
            </div>
            
            
            <div class="form-group">
            <div class="row colbox">
            <div class="col-lg-4 col-sm-4">
                <label for="address" class="control-label">Address</label>
            </div>
            <div class="col-lg-8 col-sm-8">
                <input id="address" name="address" placeholder="address" type="text" class="form-control"  value="<?php echo set_value('address'); ?>" />
                <span class="text-danger"><?php echo form_error('address'); ?></span>
            </div>
            </div>
            </div>
            
            
            <div class="form-group">
            <div class="row colbox">
            <div class="col-lg-4 col-sm-4">
                <label for="phone" class="control-label">Phone no</label>
            </div>
            <div class="col-lg-8 col-sm-8">
                <input id="phone" name="phone" placeholder="Phone no:" type="text" class="form-control"  value="<?php echo set_value('phone'); ?>" />
                <span class="text-danger"><?php echo form_error('phone'); ?></span>
            </div>
            </div>
            </div>
            
            <div class="form-group">
            <div class="row colbox">
            <div class="col-lg-4 col-sm-4">
                <label for="department" class="control-label">Department</label>
            </div>
            <div class="col-lg-8 col-sm-8">
            
                <?php
                $attributes = 'class = "form-control" id = "department"';
                echo form_dropdown('department',$department,set_value('department'),$attributes);?>
                <span class="text-danger"><?php echo form_error('department'); ?></span>
            </div>
            </div>
            </div>

            <div class="form-group">
            <div class="row colbox">
            <div class="col-lg-4 col-sm-4">
                <label for="designation" class="control-label">Designation</label>
            </div>
            <div class="col-lg-8 col-sm-8">
            
                <?php
                $attributes = 'class = "form-control" id = "designation"';
                echo form_dropdown('designation',$designation, set_value('designation'), $attributes);?>
                
                <span class="text-danger"><?php echo form_error('designation'); ?></span>
            </div>
            </div>
            </div>
            
            <div class="form-group">
            <div class="row colbox">
            <div class="col-lg-4 col-sm-4">
                <label for="hireddate" class="control-label">Hired Date</label>
            </div>
            <div class="col-lg-8 col-sm-8">
                <input id="hireddate" name="hireddate" placeholder="hireddate" type="text" class="form-control"  value="<?php echo set_value('hireddate'); ?>" />
                <span class="text-danger"><?php echo form_error('hireddate'); ?></span>
            </div>
            </div>
            </div>
            
            
            
            <!--salary is commented out for now..... might add it in later-->
<!--            <div class="form-group">
            <div class="row colbox">
            <div class="col-lg-4 col-sm-4">
                <label for="salary" class="control-label">Salary</label>
            </div>
            <div class="col-lg-8 col-sm-8">
                <input id="salary" name="salary" placeholder="salary" type="text" class="form-control" value="<?php echo set_value('salary'); ?>" />
                <span class="text-danger"><?php echo form_error('salary'); ?></span>
            </div>
            </div>
            </div>-->
            



            <div class="form-group">
            <div class="col-sm-offset-4 col-lg-8 col-sm-8 text-left">
                <input id="btn_add" name="btn_add" type="submit" class="btn btn-primary" value="Insert" />
                <input id="btn_cancel" name="btn_cancel" type="reset" class="btn btn-danger" value="Cancel" />
            </div>
            </div>
        </fieldset>
        <?php echo form_close(); ?>
        <?php echo $this->session->flashdata('msg'); ?>
        </div>
    </div>
</div>
</body>
</html>