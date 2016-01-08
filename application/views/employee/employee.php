<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8" /> 
    <!--<meta http-equiv="refresh" content="10">-->
    <title>
        HTML Forms
    </title>
    
    <link href="http://localhost/myproject_1/includes/forms.css" rel="stylesheet" type="text/css"/>
    <script type="text/javascript" src="forms.js"></script>
</head>
<body>

<div id="outer">
<div id="form">
<h1>
    HTML Forms
</h1>

    <form id="f1" onsubmit="return display()" action="<?php echo base_url()?>employee/employee_info" method="post">
    <p> Employee no: <input type="text" name="empno" autofocus /> </p>
    <p> Epf no: <input type="text" name="epfno"  /> </p>
    <p> Name: <input type="text" name="name" /> </p>
    <p> devision: <input type="text" name="devision"  /> </p>
    <p> department: <input type="text" name="dept"  /> </p>
    <p> Address: <input type="text" name="addrs"  /> </p>
    <p> Phone number: <input type="text" name="phone"  /> </p>
    <p> DOB: <input type="date" name="dob" /> </p>
    <p> Designation: <input type="date" name="designation" /> </p>
    <p> Basic Salary: <input type="date" name="basic_sal" /> </p>
    <p> Fixed allowance: <input type="date" name="allowance" /> </p>
    <p> Resigned date: <input type="date" name="resign_date" /> </p>
    <p> date appointed: <input type="date" name="appoint_date" /> </p>
    <p> Password: <input type="password" name="password" /> </p>
    <p> Checkboxes: </p>
    <p> Red: <input type="checkbox" name="red" /> &nbsp;
        Blue: <input type="checkbox" name="blue" checked /> &nbsp;
        Green: <input type="checkbox" name="green" /> 
    </p>
    <p> Radio buttons: </p>
    <p> Tall: <input type="radio" name="size" value="tall" /> &nbsp;
        Grande: <input type="radio" name="size" value="grande" /> &nbsp;
        Venti: <input type="radio" name="size" value="venti" checked /> 
    </p>
    <!--<p> <input type="submit" name="submit1" value="Big Red Button" onclick="return display()" /> </p>-->
    <p> <input type="submit" name="submit1" value="Big Red Button" /> </p>
</form>

</div> <!-- form -->

<div id="results">
    <p> Results go here. </p>
</div> <!-- results -->
</div> <!-- outer -->

</body>
</html>
