<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8" /> 
    <!--<meta http-equiv="refresh" content="10">-->
    <title>
        HTML Forms
    </title>
    
<!--    <link href="http://localhost/myproject_1/includes/forms.css" rel="stylesheet" type="text/css"/>
    <script type="text/javascript" src="forms.js"></script>-->
</head>
<body>

<div id="outer">
<div id="form">
<h1>
    Add Employee
    
</h1>

    <form id="f1" onsubmit="return display()" action="<?php echo base_url()?>employee/employee_info" method="post">
    <p> Epf no: <input type="text" name="epfno" autofocus  /> </p>
    <p> First Name: <input type="text" name="fname" /> </p>
    <p> Last Name: <input type="text" name="lname" /> </p>
    <p> DOB: <input type="date" name="dob" /> </p>
    <p> Address: <input type="text" name="addrs"  /> </p>
    <p> Phone number: <input type="text" name="phone"  /> </p>
    <p> department: <input type="text" name="dept"  /> </p>
    <p> Designation: <input type="text" name="designation" /> </p>
    <p> Basic Salary: <input type="text" name="basic_sal" /> </p>
    <p> Fixed allowance: <input type="text" name="allowance" /> </p>
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
    <p> <input type="submit" name="submit1" value="Submit" /> </p>
    </form><br>
    <a href="<?php echo base_url();?>employee">back</a>

</div> <!-- form -->

<div id="results">
    <p> Results go here. </p>
</div> <!-- results -->
</div> <!-- outer -->

</body>
</html>
