<div style="background-color: #ffffff; height: 100%; position: absolute;">
    <div class="sidebar-nav" style="">
        <style type="text/css">
            .img_style {
                height: 74px;
                width: 70px;
                margin: -5px;
            }
        </style>
        <?php

$user_name=$login_user['uname'];
$user_email=$login_user['email'];
$id=$login_user['id'];
$photo=$login_user['photo'];
$user_name=$id_card->make_string($user_name,20);
$user_email=$id_card->make_string($user_email,20);

?>

            <ul class="side_bar_ul">

                <li class="side-user" style="">

                    <div class="user-head">
                        <div>
                            <a class="inbox-avatar" style="border-radius: 0%" href="user_info.php?user_id=<?php echo " $id "; ?>">
        <img class="img_style"  width="74" hieght="70" src="<?php echo"$photo"; ?>">
    </a>
                            <div class="user-name" style="">
                                <h5><a href="user_info.php?user_id=<?php echo "$id"; ?>"><?php echo "$user_name"; ?></a></h5>
                                <span><a href="user_info.php?user_id=<?php echo "$id"; ?>"><?php echo "$user_email"; ?></a></span>
                            </div>
                        </div>

                    </div>

                </li>

                <li><a href="index.php" class="nav-header"><i class="fa fa-fw fa-dashboard side_bar_icon"></i> Dashboard</a></li>

                <li><a href="javascript:void(0)" data-target=".legal-menu_s" class="nav-header collapsed" data-toggle="collapse"><i class="fa fa-mortar-board side_bar_icon"></i> Students<i class="fa fa-collapse"></i></a></li>

                <li>
                    <ul class="legal-menu_s nav nav-list collapse">
                    <li><a href="add_student.php"><span class="fa fa-caret-right"></span>Add Student</a></li>
                    <li class=""><a href="student_list2.php" class=""><span class="fa fa-caret-right"></span>Student List</a></li>
                    <li class=""><a href="student_list.php" class=""><span class="fa fa-caret-right"></span>Student ID Card</a></li>
  
                    </ul>
                </li>

                <?php if($user_permit<8){ ?>

                    <li><a href="batch_list.php" class="nav-header"><i class="fa fa-outdent  side_bar_icon"></i> Batch</a></li>

                    <li><a href="program_list.php" class="nav-header"><i class="fa fa-renren side_bar_icon"></i> Program</a></li>

                    <li><a href="javascript:void(0)" data-target=".user" class="nav-header collapsed" data-toggle="collapse"><i class="fa fa-fw fa-user side_bar_icon"></i> User<i class="fa fa-collapse"></i></a></li>

                    <li>
                        <ul class="user nav nav-list collapse">
                            <li><a href="user_list.php" class="l_active"><span class="fa fa-caret-right"></span> User List</a></li>

                        </ul>
                    </li>
                    <li><a href="javascript:void(0)" data-target=".setting" class="nav-header collapsed" data-toggle="collapse"><i class="fa fa-cogs side_bar_icon"></i> Setting<i class="fa fa-collapse"></i></a></li>

                    <li>
                        <ul class="setting nav nav-list collapse">
                            <li><a href="setting.php" class="l_active"><span class="fa fa-caret-right"></span>Genaral Setting</a></li>

                        </ul>
                    </li>

                    <?php } ?>
            </ul>
    </div>

</div>

<style type="text/css">
   
    .side_bar_ul a{
        text-decoration: none;
    }
    .side_bar_icon {
        background-color: rgba(0,0,0,0.1);
        margin-right: 10px;
        font-size: 15px;
        width: 30px;
        height: 30px;
        line-height: 30px!important;
        text-align: center!important;
        border-radius: 5px;
        padding-left: 9px;
        
    }
    .side_bar_ul{
        color: var(--font-color);
        opacity: 0.9;
    }
    
    
    
</style>