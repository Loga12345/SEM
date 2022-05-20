<?php

include "controller/fineController.php";

?>

<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Fine Record Reports</title>

    <!-- Favicons -->
    <link href="assets/img/ByteThis.co logo.png" rel="icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <style>
        input[type=text], input[type=number], input[type=date]
    	{
    	  width: 100%;
    	  padding: 10px;
    	}

		table, tr, td
		{
			border:2px solid black;
		}

    	td
    	{
    		text-align: center;
			width: 80%;
    	}

    	#list th, #list td
    	{
    	  border: 3px solid black;
    	  border-collapse: collapse;
    	  background: white;
    	  padding: 5px;
    	}

    	#list th
    	{
    	  background-color: #ffd503;
    	  color: white;
    	}

    	#list tr:nth-child(even)
    	{
    	  background-color: #f2f2f2;
    	}

    	#list tr:hover
    	{
    	  background-color: #ddd;
    	}

    	#searchButton
    	{
    	  width: 100%;
    	  font-size: 20px;
    	  padding: 7px;
    	  border: 1px solid #ddd;
    	}

    	#greenlinks:link, #greenlinks:visited
    	{
    	  background-color: #00aea6;
    	  color: white;
    	  padding: 6px;
    	  text-align: center;
    	  text-decoration: none;
    	  display: inline-block;
    	  border-radius: 4px;
    	}

    	#greenlinks:hover, #greenlinks:active
    	{
    	  background-color: #ffd600;
    	  color: black;
    	}

    	#redlinks:link, #redlinks:visited
    	{
    	  background-color:#eb2d53;
    	  color: white;
    	  padding: 6px;
    	  text-align: center;
    	  text-decoration: none;
    	  display: inline-block;
    	  border-radius: 4px;
    	}

    	#redlinks:hover, #redlinks:active
    	{
    	  background-color: #ffd600;
    	  color: black;
    	}

			input[type=button]
      {
        background-color: #ffd600;
        border: none;
        color: black;
        padding: 5px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 20px;
        font-weight: bold;
        cursor: pointer;
        width: 20%;
      }
  </style>

  </head>


  <body>
      <!-- ======= Header ======= -->
      <header id="header" class="fixed-top d-flex align-items-center header-transparent">
        <div class="container-fluid">

          <div class="row justify-content-center align-items-center">
            <div class="col-xl-11 d-flex align-items-center justify-content-between">
              <h1 class="logo"><a href="../login/librarian.php">Library Management System</a></h1>


              <nav id="navigateBar" class="navigateBar">
                <ul>
                  <li><a href="../login/librarian.php">Home</a></li>
        				  <li class="dropdown"><a href="#"><span>Menu</span> <i class="bi bi-chevron-down"></i></a>

        					  <ul>
        						<li><a href="../manage_book_record.php">Manage Book Record</a></li>
        						<li><a href="../manage_user/ManageUser.php">Manage User</a></li>
        						<li><a href="../manageFineModule/manageFineModule.php">Manage Fine</a></li>
        						<li><a href="../manage_reservation/managereserv.php">Manage Reservation</a></li>
        						<li><a href="ReportMain.php">Report</a></li>
        					  </ul>
                  </li>

                  <li class="dropdown"><a href="#"><span>Profile</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                      <li><a href="../login/logout_controller.php?logout">Log Out</a></li>
                    </ul>
                  </li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
              </nav><!-- .navbar -->
            </div>
          </div>
        </div> <!--settle header-->
      </header><!-- End Header -->


      <!-- middle/centre section title-->
      <section id="hero">
      <div class="hero-container">

          <ol id="hero-carousel-indicators" class="carousel-indicators"></ol>

          <div class="carousel-inner" role="listbox">

            <div class="carousel-item active" style="background-image: url(assets/img/book/book1.jpg)">
              <div class="carousel-container">
                <div class="container">
                  <h2  style="color: white;" class="animate__animated animate__fadeInDown">Fine Reports</h2>
                  <p class="animate__animated animate__fadeInUp">Search for records needed, view reports are available</p>

                  <!--input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search by Title, ISBN or author" title="Type in a name"-->

                  <center >

        						<form name="FineReport" action="<?php echo $id ?>" method="POST">
        							<p>
        								<table id="tabledata">
        									<tr>
        										<th style="background-color: #ffd600;color:black;">ID</th>
        										<td><input type=number id="id" name="id" value="<?php echo $id ?>" readonly></td>
        									</tr>

        									<tr>
        										<th style="background-color: #ffd600;color:black;">NAME</th>
        										<td><input type="text" id="borrower_name" name="borrower_name" value="<?php echo $borrower_name ?>" readonly></td>
        									</tr>

        									<tr>
        										<th style="background-color: #ffd600;color:black;">DAYS</th>
        										<td><input type=number id="days" name="days" value="<?php echo $days ?>" readonly></td>
        									</tr>

        									<tr>
        										<th style="background-color: #ffd600;color:black;">FINE</th>
        										<td><input type=number id="fine" name="fine" value="<?php echo $fine ?>" readonly></td>
        									</tr>

        									<tr>
        										<th style="background-color: #ffd600;color:black;">TOTAL (MYR)</th>
        										<td><input type=text id="total" name="total" value="<?php echo $total ?>" readonly></td>
        									</tr>

        								</table>

        						</form><br>

                    <input id="but" type="button" value="Back" onclick="location.href='finedRecordReportList.php'">
                    <input id="but" type="button" value="Download PDF" onclick="downloadDoc()">

          			</center>
                </div>
              </div>
            </div>

          </div>

      </div>
    </section>



    <!-- ======= Footer ======= -->
    <footer id="footer">

      <div class="container">
        <div class="copyright">
          &copy; Copyright <strong>LIBRARY MANAGEMENT SYSTEM</strong>. All Rights Reserved
        </div>
        <div class="credits">
          <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=BizPage
        -->
          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
      </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
    <!-- Uncomment below i you want to use a preloader -->
    <!-- <div id="preloader"></div> -->

    <!-- Vendor JS Files -->
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/purecounter/purecounter.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

    <!-- REPOERT DOWLOAD JS-->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/pdfmake.min.js"></script>
    <script src="assets/js/html2canvas.min.js"></script>

    <script>
       function downloadDoc()
       {
          html2canvas($("#tabledata")[0],
          {
            onrendered:function(canvas)
            {
              var data=canvas.toDataURL();
              var docDefinition={
                content:
                [{
                  image:data,
                  width:500
                }]
              };

              pdfMake.createPdf(docDefinition).download("FineReport.pdf");
            }
          })
       }

     </script>
  </body>


  </html>
