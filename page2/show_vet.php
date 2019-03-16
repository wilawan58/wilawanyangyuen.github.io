<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="img/favicon.png" type="image/png">
        <title>MeetMe Personal</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="vendors/linericon/style.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
        <link rel="stylesheet" href="vendors/lightbox/simpleLightbox.css">
        <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
        <link rel="stylesheet" href="vendors/animate-css/animate.css">
        <link rel="stylesheet" href="vendors/popup/magnific-popup.css">
        <link rel="stylesheet" href="vendors/flaticon/flaticon.css">
        <!-- main css -->
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">
    </head>
    <body>
        
        <!--================Header Menu Area =================-->
        <header class="header_area">
            <div class="main_menu">
            	<nav class="navbar navbar-expand-lg navbar-light">
					<div class="container box_1620">
						<!-- Brand and toggle get grouped for better mobile display -->
						<a class="navbar-brand logo_h" href="index.html"><img src="img/logo4.png" alt=""></a>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
							<ul class="nav navbar-nav menu_nav ml-auto">
								<li class="nav-item active"><a class="nav-link" href="index.html">หน้าหลัก</a></li> 
								<li class="nav-item submenu dropdown">
									<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">ข้อมูลสัตว์เลี้ยง</a>
									<ul class="dropdown-menu">
										<li class="nav-item"><a class="nav-link" href="portfolio.html">เพิ่มข้อมูลสัตว์เลี้ยง</a></li>
										<li class="nav-item"><a class="nav-link" href="elements.html">แสดงข้อมูลสัตว์เลี้ยง</a></li>
									</ul>
								</li> 
								<li class="nav-item submenu dropdown">
									<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">ข้อมูลสัตว์แพทย์</a>
									<ul class="dropdown-menu">
										<li class="nav-item"><a class="nav-link" href="portfolio.html">เพิ่มข้อมูลสัตว์แพทย์</a></li>
										<li class="nav-item"><a class="nav-link" href="elements.html">แสดงข้อมูลสัตว์แพทย์</a></li>
									</ul>
								</li> 

								<li class="nav-item submenu dropdown">
									<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">ข้อมูลเจ้าของ</a>
									<ul class="dropdown-menu">
										<li class="nav-item"><a class="nav-link" href="portfolio.html">เพิ่มข้อมูลเจ้าของ</a></li>
										<li class="nav-item"><a class="nav-link" href="elements.html">แสดงข้อมูลเจ้าของ</a></li>
									</ul>
								</li> 

								<li class="nav-item submenu dropdown">
									<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">ข้อมูลยา</a>
									<ul class="dropdown-menu">
										<li class="nav-item"><a class="nav-link" href="portfolio.html">เพิ่มข้อมูลยา</a></li>
										<li class="nav-item"><a class="nav-link" href="elements.html">แสดงข้อมูลยา</a></li>
									</ul>
								</li> 

								<li class="nav-item submenu dropdown">
									<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">การนัดหมาย</a>
									<ul class="dropdown-menu">
										<li class="nav-item"><a class="nav-link" href="portfolio.html">เพิ่มการนัดหมาย</a></li>
										<li class="nav-item"><a class="nav-link" href="elements.html">แสดงการนัดหมาย</a></li>
									</ul>
								</li> 

								<li class="nav-item submenu dropdown">
									<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">การแจ้งเตือน</a>
									<ul class="dropdown-menu">
										<li class="nav-item"><a class="nav-link" href="portfolio.html">เพิ่มการแจ้งเตือน</a></li>
										<li class="nav-item"><a class="nav-link" href="elements.html">แสดงการแจ้งเตือน</a></li>
									</ul>
								</li> 
								
								<li class="nav-item"><a class="nav-link" href="contact.html">Log Out</a></li>
							</ul>
						</div> 
					</div>
            	</nav>
            </div>
        </header>
        <!--================Header Menu Area =================-->
        
        <!--================Home Banner Area =================-->
        <section class="home_banner_area">
           	<div class="container box_1620">
           		<div class="banner_inner d-flex align-items-center">
					<div class="banner_content">
						<div class="media">
							<div class="d-flex">
							
							</div>
							<!--textbox-->
                            <form name="frmMain" action="q_del-vetcheckbox.php" method="post" OnSubmit="return onDelete();">
<div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
<h2 align="center">ข้อมูลสัตวแพทย์<br><hr><button type="button" class="btn btn-success" id="sidebarCollapse" >
    <a href="a_add-vet.php" style="color:#FFF;"><i class="fas fa-pencil-alt"></i>&nbsp;<span>เพิ่มข้อมูลสัตวแพทย์</span></a>
</button>&nbsp;
<input type="submit" name="btnDelete" value="ลบข้อมูลสัตวแพทย์" class="btn btn-danger"></h3><br>
  <div class="container">
    <div class="row">
      <table class="table table-striped table-responsive{-sm|-md|-lg|-xl}">
         <thead>
           <th></th>
           <th> <div align="left">ชื่อสัตวแพทย์</div></th>
          <th> <div align="left">ความเชี่ยวชาญเฉพาะด้าน</div></th>
      </thead>
      <tbody>
        <?php
        while($rs_vet=mysqli_fetch_array($query_select_vet,MYSQLI_ASSOC))
        {
        ?>
           <tr>
             <td><input type="checkbox" name="chkDel[]" value="<?php echo $rs_vet["vet_id"];?>"></td>
             <td align="left"><a href="a_show-listvet.php?vet_id=<?php echo $rs_vet["vet_id"];?>"><?php echo $rs_vet["vet_name"];?></a></td>
            <td align="left"><?php echo $rs_vet["vet_specialty"];?></td>
            </tr>
            </tbody>
            <?php } ?>
            </tbody>
        <div class="clearfix"></div>
        </div>
        </div>
      </table>
</div>
</div>
</div>
</form><br><br>

									
								  
								
			  </section>
								  
			  <div class= "col-lg-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 col-12">
  <div class="container">
    <div class="row">
    <nav aria-label="Page navigation example">
      <ul class="pagination">
        <li class="page-item">
          <a class="page-link" href="a_show-vet.php?page=1" aria-label="Previous">
            <span aria-hidden="true">&laquo;</span>
            <span class="sr-only">Previous</span>
          </a>
        </li>
        <?php for($i=1;$i<=$total_page;$i++){ ?>
        <li class="page-item"><a class="page-link" href="a_show-vet.php?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
        <?php } ?>
          <a class="page-link" href="a_show-vet.php?page=<?php echo $total_page;?>" aria-label="Next">
            <span aria-hidden="true">&raquo;</span>
            <span class="sr-only">Next</span>
          </a>
        </li>
      </ul>
    </nav>
  </div>
</div>
</div>
							
							<!--endtextbox-->
						</div>
					</div>
				</div>
            </div>
        </section>
        <!--================End Home Banner Area =================-->
        
       
       
        
        
        
        
        
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/popper.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/stellar.js"></script>
        <script src="vendors/lightbox/simpleLightbox.min.js"></script>
        <script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
        <script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
        <script src="vendors/isotope/isotope.pkgd.min.js"></script>
        <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="vendors/popup/jquery.magnific-popup.min.js"></script>
        <script src="js/jquery.ajaxchimp.min.js"></script>
        <script src="vendors/counter-up/jquery.waypoints.min.js"></script>
        <script src="vendors/counter-up/jquery.counterup.min.js"></script>
        <script src="js/mail-script.js"></script>
        <script src="js/theme.js"></script>
    </body>
</html>