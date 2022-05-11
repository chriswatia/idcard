 <?php

 if(isset($_POST['get_student_info'])){
 	$student_id=$_POST['get_student_info']; 
 	$info=$student_ob->get_info($student_id);
 	?>

<div class="row">
<div class="col-md-0"></div>
<div class="col-md-12">

	<div class="text-right"><button class="button" onclick="edit_student(<?php echo "$id"; ?>)" style="margin-right: 4px; padding: 10px" title="Edit" data-title="Add Product" data-toggle="modal" data-target="#student_profile_update"><span class="glyphicon glyphicon-pencil"></span> Update Student Information</button></div>
<table width="100%">
	<tr>
		<td class="td_info1">Full Name: </td>
		<td class="td_info2"><?php echo $info['name']; ?></td>
	</tr>
	<tr>
		<td class="td_info1">Student Photo: </td>
		<td class="td_info2"><img src="<?php echo $info['photo']; ?>" class="info_img" /></td>
	</tr>
	<tr>
		<td class="td_info1">Student ID: </td>
		<td class="td_info2"><?php echo $student_id; ?></td>
	</tr>
	<tr>
		<td class="td_info1">Student ID Barcode: </td>
		<td class="td_info2"><img src="barcode.php?text=<?php echo $student_id; ?>" class="info_barcode" /></td>
	</tr>
	<tr>
		<td class="td_info1">Email: </td>
		<td class="td_info2"><?php echo $info['email']; ?></td>
	</tr>
	<tr>
		<td class="td_info1">Student Mobile: </td>
		<td class="td_info2"><?php echo $info['personal_mobile']; ?></td>
	</tr>
	<tr>
		<td class="td_info1">Birthday: </td>
		<td class="td_info2"><?php echo $info['birth_day']; ?></td>
	</tr>
	<tr>
		<td class="td_info1">Gender: </td>
		<td class="td_info2"><?php echo $info['gender']; ?></td>
	</tr>
	<tr>
		<td class="td_info1">Address: </td>
		<td class="td_info2"><?php echo $info['address']; ?></td>
	</tr>
	<tr>
		<td class="td_info1">School/College: </td>
		<td class="td_info2"><?php echo $info['school']; ?></td>
	</tr>
	
    
</table>
</div>
</div>
 	<?php
 }
 if(isset($_POST['update_profile_form'])){
 	$student_id=$_POST['update_profile_form'];

 	$info=$student[$student_id];
	$name=$info['name'];
	$student_mobile=$info['personal_mobile'];
	
	$birthday=$info['birth_day'];
	$gender=$info['gender'];
	$email=$info['email'];
	$image=$info['photo'];
	
	$school=$info['school'];
	$department=$info['department'];
	$reg_no=$info['reg_no'];
	$year_of_study=$info['year_of_study'];
  	$address=$info['address'];
  	$batch=$info['batch'];
  	$program_id=$info['program'];
 	?>
  <div class="row">
      <div class="col-xs-12 col-sm-12"> 
 <div class="box" >

  
<div class="box_header">
        <div class="panel-title">Personal Information</div>                   
    </div>  

<div style="padding-top:30px" class="box_body" >
    <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
    <form action="student_action.php" id="update_student" method="post" enctype="multipart/form-data">
      <input type="number" name="student_id" value="<?php echo "$id"; ?>" hidden>
      <?php

      //$site->form_input($level,$name,$id,$type="text",$icon="exclamation-sign",$value="",$ex="",$req="yes")
      
       $site->form_input("Student Full Name","name","name","text","exclamation-sign","$name","","yes");
      $site->form_input("Sudent mobile","student_mobile","student_mobile","number","exclamation-sign","$student_mobile","","no");

      $site->form_input("Email","email","mobile","text","exclamation-sign","$email","","no");
      $site->form_input("Birthday","birthday","mobile","date","exclamation-sign","$birthday","","yes");

      ?>

<div class='form-group'>
        <label class='control-label' for='inputName'><b>Gender</b></label>
        <div class='input-group'>
            <span class='input-group-addon'><i class='glyphicon glyphicon-exclamation-sign'></i></span> 
<select class='form-control'  name='gender' id='brand_add' class='cs-select cs-skin-border' required="">
  <option value="Male" <?php if($gender=="Male")echo "selected"; ?>>Male</option>
  <option value="Female" <?php if($gender=="Female")echo "selected"; ?>>Female</option>
  
</select>
</div></div>


      <?php
      
       $site->form_input("Address","address","address","text","exclamation-sign","$address","","no");

       ?>   
  <div class="form-group">
    <label class="control-label" for="inputName"><b>Upload Student Photo</b></label>
    <div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-camera"></i></span>
      <input type="file" class="form-control" id="image" name="image" accept="image/*"  onchange="document.getElementById('edit_thumbnil_<?php echo $id; ?>').src = window.URL.createObjectURL(this.files[0])" />
        <br/>
    </div>
    <div id="err_product_image" class="error"></div>
  <img id="edit_thumbnil_<?php echo $id; ?>" style="width:20%; margin-top:10px;"  src="<?php echo "$image";?>" alt="image"/>
</div> 
     
</div>  

<!-- Start Academic Information -->

<div class="box_header">
        <div class="panel-title">Academic Information</div>                   
    </div>     

<div style="padding-top:30px" class="box_body" >
    <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                                 
        
       <?php 

    $site->form_input("School Name","school_name","school_name","text","exclamation-sign","$school","","no");
    $site->form_input("Department","department","department","text","exclamation-sign","$department","","no");
    $site->form_input("Registration Number","reg_no","reg_no","text","exclamation-sign","$reg_no","","no");
    $site->form_input("Year of Study","year_of_study","year_of_study","text","exclamation-sign","$year_of_study","","no");
    
  ?>
          
</div>  

       <button class="box_btn" name="update" type="submit" style=""><span class="glyphicon glyphicon-floppy-save"></span> Update Information</button>                  
    
</form>

<!-- end body -->
        </div>
</div>
</div>

 	<?php
 }


 ?>

 <style type="text/css">
 	

 	.td_info1,.td_info2{
  		border-width: 1px 1px 1px 1px;
  		border-color: #DDDDDD;
  		border-style: solid;
  		padding: 10px;
        font-weight: bold;
        font-size: 14px;
        
	}
	.td_info1{
		
  		width: 200px;
  		text-align: right;
  		background-color: #eff0f2;
  		color: #588AB4;
        
  		font-family: Tahoma, Geneva, sans-serif;
	}
	.td_info2{
        color: #60595E;
		font-family: "Trebuchet MS", Helvetica, sans-serif;
	}
	.info_img{
		height: 70px;
		width: 80px;
		border: 1px solid #DDDDDD;
		border-radius: 5px;
	}
	.info_barcode{
		width: 120px;
	    height: 30px;
	}
 </style>