<!--
<html>
    <head>
        <title><?php// echo $title ?></title>
    </head>
<h2 style="font-style: italic">Payroll system</h2>
<form action="<?php //echo base_url() ?>login/verify_user" method="post"> 
    <input type="text" name="username" id="username">
    <input type="password" name="pswrd" id="pswrd">
    <input type="submit" name="login" id="login" value="login">
    
</form>
</html>
-->
<!DOCTYPE html>
<html>
    <title><?php echo $title ?></title>
    <head>
        <link rel="stylesheet" type="text/css" href="http://localhost/payroll-master/assets/css/stylesheets.css" media="all" />
    </head>
    <body>
        <div class="alert alert-error"></div>        <div class="login">
            <form method="post" class="form-signin" action="<?php echo base_url() ?>login/verify_user">
                <div class="page-header">
                    <div class="icon">
                        <span class="ico-arrow-right"></span>
                    </div>
                    <h1>Login <small></small></h1>
                </div>
                <div class="row-fluid">
                    <div class="row-form">
                        <div class="span12">
                            <input type="text" name="username" value="" placeholder="Username" autofocus="autofocus" class="input-block-level"  />                        </div>
                    </div>
                    <div class="row-form">
                        <div class="span12">
                            <input type="password" name="password" value="" placeholder="password" class="input-block-level"  />                        </div>
                    </div>
                    <div class="row-form">
                        <div class="span12">
                            <input type="checkbox" value="remember-me"> Remember me
                        </div>
                    </div>
                    <div class="row-form">
                        <div class="span12">
                            <button class="btn">Sign in <span class="icon-arrow-next icon-white"></span></button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>