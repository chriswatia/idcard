<?php

session_start(); 
 
if( isset($_SESSION['user'])!="" ){

include "config/config.php";
$db=new database();

include 'script/program/program.php';
include "script/site_content/site_content.php";
include "tool/vendor/vendor/autoload.php";
include 'script/theme/theme.php';

include 'script/user/user.php';
$id=$_SESSION['user'];
$user_ob=new user($id);

$user=$user_ob->get_user_info();
$login_user=$user_ob->get_login_user();

$user_id=$login_user['id'];
$login_user_id=$login_user['id'];
$user_permit=$login_user['permit'];
$role=$login_user['permit'];
$login_user_role=$role;

$ip = $_SERVER['REMOTE_ADDR'];
$browser = $user_ob->get_browser($_SERVER['HTTP_USER_AGENT']);

$db->set_login_user($user_id,$ip,$browser);

 
$site=new site_content();

include 'script/batch/batch.php';
$batch_ob=new batch();
$batch=$batch_ob->batch_info();

//include 'script/program/program.php';
$program_ob=new program();
$program=$program_ob->get_program_info();

include 'script/student/student.php';
$student_ob=new student();
$student=$student_ob->get_student_info();



include 'script/contest/contest.php';
$contest=new contest();

include 'script/id_card/id_card.php';
$id_card=new id_card();



$theme=new theme();
$theme_info=$theme->get_theme_info();



include 'script/setting/setting.php';
$setting=new setting();


}
else{

    echo "<script>window.location.href = 'login.php';</script>";

}

?>