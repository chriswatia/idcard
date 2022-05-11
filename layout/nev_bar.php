<!--
===============================
  Navbar
===============================
-->
<script type="text/javascript" src="layout/js/nav_bar_script.js"></script>
 <div class="navbar navbar-default" role="navigation" style="position: auto; border-width: 0px 0px 1px 0px; border-color: rgba(0,0,0,0.2); padding: 10px;" >

        <div class="navbar-header"  style="position: auto; border-width: 0px;">

        <ul class="nav navbar-nav navbar-left">  
          <span onclick="action_side_bar()" class="sidebar-toggle-action">
          <button  class="btn_nav_toggle"><i class="fa fa-bars" id="icon_div"></i></button>
          </span>         
        
          <a class="" href="index.php"><span class="navbar-brand"  style="color:var(--font-color)"><font class="logo_title"> <?php echo $db->site_name; ?></font></span></a>
          
        </ul>
        </div>
</div>

  
<style type="text/css">
  @media screen and (max-width: 800px) {
  .nev_bar_button_area {
    visibility: hidden;
    clear: both;
    float: left;
    margin: 10px auto 5px 20px;
    width: 28%;
    display: none;
  } 
}




</style>

        
<script type="text/javascript">
  function action_side_bar(){
    div=document.getElementById('content');
    icon_div=document.getElementById('icon_div');
    class_name=div.className;
    if(class_name=='content_with_sidebar'){
      div.className = 'content';
      icon_div.className='fa fa-bars';
    }
    else{
      div.className = 'content_with_sidebar';
      icon_div.className='fa fa-times';
    }
  }
</script>
<script type="text/javascript" src="layout/js/nav_bar_script.js"></script>
<link rel="stylesheet" type="text/css" href="style/css/nav_bar.css">

        </div>
  </div>

