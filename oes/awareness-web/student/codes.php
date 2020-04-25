<?php include('assets/header.php');
//if(!isset($_SESSION['studId']))
//header('location:index.php');
?>
<!--banner-->
<div class="head">
	<div class="container">
		<h2 > <a href="index.html">Home</a> / <span>Edit Profile</span></h2>
	</div>
</div>
<!--content-->
	<div class="container">
	
	<div class="page-header text-center">
        <h3>Edit Profile</h3>
      </div>   
  <div class="bs-example" data-example-id="simple-horizontal-form">
    <form class="form-horizontal">
      <div class="form-group">
		<label class="col-sm-3 control-label"></label>
        <label class="col-sm-2 control-label">First Name</label>
        <div class="col-sm-4">
          <input type="text" class="form-control" id="txt_fname" name="txt_fname" placeholder="First Name">
        </div>
      </div>
	  <div class="form-group">
	    <label class="col-sm-3 control-label"></label>
        <label class="col-sm-2 control-label">Middle Name</label>
        <div class="col-sm-4">
          <input type="text" class="form-control" id="txt_mname" name="txt_mname" placeholder="Middle Name">
        </div>
      </div>
	  <div class="form-group">
		<label class="col-sm-3 control-label"></label>
        <label class="col-sm-2 control-label">Last Name</label>
        <div class="col-sm-4">
          <input type="text" class="form-control" id="txt_lname" name="txt_lname" placeholder="Last Name">
        </div>
      </div>
	  <div class="form-group">
		<label class="col-sm-3 control-label"></label>
        <label class="col-sm-2 control-label">Address</label>
        <div class="col-sm-4">
          <input type="text" class="form-control" id="txt_address" name="txt_address" placeholder="Address">
        </div>
      </div>
	  <div class="form-group">
		<label class="col-sm-3 control-label"></label>
        <label class="col-sm-2 control-label">Phone Number</label>
        <div class="col-sm-4">
          <input type="text" class="form-control" id="txt_phone_no" name="txt_phone_no" placeholder="Phone Number">
        </div>
      </div>
	  <div class="form-group">
		<label class="col-sm-3 control-label"></label>
        <label class="col-sm-2 control-label">Mobile Number</label>
        <div class="col-sm-4">
          <input type="text" class="form-control" id="txt_mobile_no" name="txt_mobile_no" placeholder="Mobile Number">
        </div>
      </div>
	  <div class="form-group">
		<label class="col-sm-3 control-label"></label>
        <label class="col-sm-2 control-label">Email ID</label>
        <div class="col-sm-4">
          <input type="text" class="form-control" id="txt_email_id" name="txt_email_id" placeholder="Email Address">
        </div>
      </div>
	  <div class="form-group">
		<label class="col-sm-3 control-label"></label>
        <label class="col-sm-2 control-label">Date Of Birth<br>(yyyy-mm-dd)</label>
        <div class="col-sm-4">
          <input type="text" class="form-control" id="txt_dob" name="txt_dob" placeholder="DOB">
        </div>
      </div>
	  <div class="form-group">
		<label class="col-sm-3 control-label"></label>
        <label class="col-sm-2 control-label">Age</label>
        <div class="col-sm-4">
          <input type="text" class="form-control" id="txt_age" name="txt_age" placeholder="Age">
        </div>
      </div>
	  <div class="form-group">
			<label class="col-sm-3 control-label"></label>
			<label class="col-sm-2 control-label">Gender</label>
			<label class="radio-inline" style="padding-left:35px; " >
				<input type="radio" name="txt_gender" id="txt_gender" value="M">Male
			</label>
			<label class="radio-inline">
				<input type="radio" name="txt_gender" id="txt_gender" value="F">Female
			</label>
		</div>
	  <div class="form-group">
		<label class="col-sm-3 control-label"></label>
        <label class="col-sm-2 control-label">Login Name</label>
        <div class="col-sm-4">
          <input type="text" class="form-control" id="txt_login_name" name="txt_login_name" placeholder="Login Name">
        </div>
      </div>
      <div class="form-group">
		<label class="col-sm-3 control-label"></label>
        <label class="col-sm-2 control-label">Password</label>
        <div class="col-sm-4">
          <input type="password" class="form-control" id="txt_password" name="txt_password" placeholder="Password">
        </div>
      </div>
      <div class="form-group text-center">
        <div>
          <div class="checkbox">
            <label>
              <input type="checkbox"> Remember me
            </label>
          </div>
        </div>
      </div>
      <div class="form-group text-center">
        <div>
		<?php
		if(isset($_SESSION['studId']))
		{
			echo"<input type='submit' name='btn_update' id='btn_update' value='Update' class='btn btn-default'/>";
		}
		else
		{
			echo"<input type='submit' name='btn_register' id='btn_register' value='Register' class='btn btn-default'/>";
		}
		?>
		</div>
      </div>
    </form>
	<!--//forms-->
	</div>
</div>
<?php include('assets/footer.php')?>
<?php include('dbconfig.php');?>
<?php 
if(isset($_REQUEST['btn_update']))
{
	$query = "UPDATE `student` SET 
	`fname`='".$_REQUEST['txt_fname']."',
	`mname`='".$_REQUEST['txt_mname']."',
	`lname`='".$_REQUEST['txt_lname']."',
	`address`='".$_REQUEST['txt_address']."',
	`contactno`='".$_REQUEST['txt_phone_no']."',
	`mobileno`='".$_REQUEST['txt_mobile_no']."',
	`emailid`='".$_REQUEST['txt_email_id']."',
	`dob`='".$_REQUEST['txt_dob']."',
	`age`='".$_REQUEST['txt_age']."',
	`gender`='".$_REQUEST['txt_gender']."',
	`login_name`='".$_REQUEST['txt_login_name']."',
	`password`='".$_REQUEST['txt_password']."' WHERE userid = ".$_SESSION['studId'];
	echo $query;
	if($result = (executeQuery($query)))
	{
		echo "<script>alert('Congrats Your Record is Updated...!!!')</script>";
	}
	else
	{
		echo "<script>alert('Query not Executed...!!!')</script>";
	}
} 	//ONLY UPDATE AVAILABLE, REGESTRATION WAS NOT AVAILABLE
	//IN REGISTRATION SOME FIELDS ARE TAKEN AS 0 AS DEFAULT
else if(isset($_REQUEST['btn_register']))
{
	$query = "INSERT INTO `student`(`fname`, `mname`, `lname`, `address`, `contactno`, `mobileno`, `emailid`, `dob`, `age`, `gender`,`login_name`, `password`) 
	VALUES ('".$_REQUEST['txt_fname']."',
			'".$_REQUEST['txt_mname']."',
			'".$_REQUEST['txt_lname']."',
			'".$_REQUEST['txt_address']."',
			'".$_REQUEST['txt_phone_no']."',
			'".$_REQUEST['txt_mobile_no']."',
			'".$_REQUEST['txt_email_id']."',
			'".$_REQUEST['txt_dob']."',
			'".$_REQUEST['txt_age']."',
			'".$_REQUEST['txt_gender']."',
			'".$_REQUEST['txt_login_name']."',
			'".$_REQUEST['txt_password']."') ";
	echo $query;
	if($result = (executeQuery($query)))
	{
		echo "<script>alert('Congrats Your Record is Inserted...!!!')</script>";
	}
	else
	{
		echo "<script>alert('Insert Query not Executed...!!!')</script>";
	}
}
else
{
	//echo "<script>alert('button not pressed...!!!')</script>";
}
?>