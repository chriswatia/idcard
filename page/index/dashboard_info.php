     <div class="col-lg-8">
     	<div class="row">
     		<div class="col-ms-12 col-sm-12">
                        <div class="circle-tile">
                            <a href="">
                                <div class="circle-tile-heading dark-blue">
                                    <img src="<?php echo $db->logo; ?>" class="logo_img">
                                </div>
                            </a>
                            <div class="circle-tile-content dark-blue">
                                <center>
                                <div class="description_area">
                                  <font class="site_title"><?php echo $db->site_name; ?></font><br/>
                                      <font class="site_description">
                                        <span class="glyphicon glyphicon-map-marker"></span> <?php echo $db->address; ?><br/>
                                        <span class="glyphicon glyphicon-phone"></span> Phone: <?php echo $db->phone; ?> | <span class="glyphicon glyphicon-envelope"></span> Email: <?php echo $db->email; ?>
                                  </font>
                                </div>
                              </center>
                               
                            </div>
                        </div>
                        <div class="circle-tile">
                            <a href="">
                                <div class="circle-tile-heading dark-blue">
                                    <i class="fa fa-users fa-fw fa-3x"></i>
                                </div>
                            </a>
                            <div class="circle-tile-content dark-blue">
                                <div class="circle-tile-description text-faded">
                                    Total Students
                                </div>
                                <div class="circle-tile-number text-faded">
                                    <?php echo "$total_student"; ?>
                                    <span id="sparklineA"></span>
                                </div>
                                <a href="" class="circle-tile-footer">More Info <i class="fa fa-chevron-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
        </div>         
    </div>
     
    <style type="text/css">

    .site_title{
          font-weight: bold;
          font-size: 33px;
          color: var(--font-color);
          font-family: "Times New Roman", Times, serif;
    }
    .site_description{
          font-weight: bold;
          font-size: 18px;
          color: var(--font-color);
    }

    	.td_info1,.td_info2{
  border-width: 1px;
  border-color: #DDDDDD;
  border-style: solid;
  padding: 10px;
}
.td_info1{
  width: 150px; 
  background-color: var(--bg-color);
  color: var(--font-color);
}
.logo_img{

height: 75px;
width: 75px;
padding: 5px;

}
.description_area{
	background-color: var(--bg-color); 
	color: var(--font-color);

	padding: 5px 10px 30px 10px;

}

    </style>

