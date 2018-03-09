<?php
ob_start();
session_start();


include './class_file/supperAdmin.php';
$object_supper_admin = new supperAdmin();

$adminId = $_SESSION['adminId'];
if ($adminId == NULL) {
    header('location:index.php');
}



if (isset($_GET['status'])) {
    if (isset($_GET['status']) == 'logout') {
        $object_supper_admin->admin_logout();
    }
}
?>




<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Home | Robin It Solution </title>


        <!-- Bootstrap -->
        <link href="asset/backEnd/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- Font Awesome -->
        <link href="asset/backEnd/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <!-- NProgress -->
        <link href="asset/backEnd/vendors/nprogress/nprogress.css" rel="stylesheet">
        <!-- iCheck -->
        <link href="asset/backEnd/vendors/iCheck/skins/flat/green.css" rel="stylesheet">

        <!-- bootstrap-progressbar -->
        <link href="asset/backEnd/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
        <!-- JQVMap -->
        <link href="asset/backEnd/vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
        <!-- bootstrap-daterangepicker -->
        <link href="asset/backEnd/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

        <!-- Custom Theme Style -->
        <link href="asset/backEnd/vendors/build/css/custom.min.css" rel="stylesheet">
        
          <script>
              function one_delete(){
                   var check = confirm("are you sure to delete this");
                  if(check){return true;}else{return false;}
              }   
            
            
        </script>	
    </head>

    <body class="nav-md">
        <div class="container body">
            <div class="main_container">
                <div class="col-md-3 left_col">
                    <div class="left_col scroll-view">
                        <div class="navbar nav_title" style="border: 0;">
                            <a href="adminmaster.php" class="site_title"><i class="fa fa-paw"></i> <span>lBIARS</span></a>
                        </div>

                        <div class="clearfix"></div>

                        <!-- menu profile quick info -->
                        <?php include './include/menuProfile.php'; ?>
                        <!-- /menu profile quick info -->

                        <br />

                        <!-- sidebar menu -->
                        <?php include './include/sidebarMenu.php'; ?>
                        <!-- /sidebar menu -->

                        <!-- /menu footer buttons -->
                        <?php include './include/menuFooterButton.php'; ?>
                        <!-- /menu footer buttons -->
                    </div>
                </div>

                <!-- top navigation -->
                <?php include './include/topNavigation.php'; ?>
                <!-- /top navigation -->

                <!-- page content -->
                <?php
                if (isset($pages)) {
                 /************\\ BOOK start //********************/ 
                    
                    if ($pages == "addBook") {
                        include './pagess/addBook.php ';
                    }
                    elseif ($pages == "viewBook") {
                        include './pagess/viewBook.php';
                    }
                    elseif ($pages == "editBook") {
                        include './pagess/';
                    }
                    
                    elseif ($pages == "viewBook") {
                        include './pagess/viewBook.php';
                    }
                
                 /************\\ BOOK end //********************/ 
                  
                     /************\\ Book category start //********************/ 
                    elseif ($pages == "addCategory") {
                        include './pagess/addBookCate.php';
                    }
                     elseif ($pages == "editBC") {
                        include './pagess/editBookCate.php';
                    }
                      elseif ($pages == "viewCategory") {
                        include './pagess/viewBookCate.php';
                    }
                   
                   /************\\ book category end //********************/  
                    
                    
                    
                    
                    
                       /************\\User start //********************/ 
                       elseif ($pages == "addUser") {
                        include './pagess/addUsers.php';
                    }
                      elseif ($pages == "viewUser") {
                        include './pagess/viewUsers.php';
                    }
                    
                      elseif ($pages == "editUser") {
                        include './pagess/';
                    }
                     /************\\user end //********************/
                    
                    
                    
                    
                    
                    
                  /************\\Issue Book start //********************/ 
                    elseif ($pages == "issueBook") {
                        include './pagess/issueBook.php';
                    }
                    elseif ($pages == "viewIssueBook") {
                        include './pagess/viewIssueBook.php';
                    }
                    elseif ($pages == "viewReBook") {
                        include './pagess/viewReBook.php';
                    }
                    elseif ($pages == "recBook") {
                        include './pagess/receiveBook.php';
                    }
                    
                     elseif ($pages == "vRB") {
                        include './pagess/viewRecievebooK.php';
                    }
                   
                   /************\\Issue Book end //********************/  
                    
                   
                    
                    
                  
                } else {
                    include './pagess/homePage.php';
                }
                ?>
                <!-- /page content -->

                 <!-- footer content -->
                <?php include './include/footer.php'; ?>
                <!-- /footer content -->
            </div>
        </div>

        <!-- jQuery -->
        <script src="asset/backEnd/vendors/jquery/dist/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="asset/backEnd/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
        <!-- FastClick -->
        <script src="../vendors/fastclick/lib/fastclick.js"></script>
        <!-- NProgress -->
        <script src="asset/backEnd/vendors/nprogress/nprogress.js"></script>
        <!-- Chart.js -->
        <script src="asset/backEnd/vendors/Chart.js/dist/Chart.min.js"></script>
        <!-- gauge.js -->
        <script src="asset/backEnd/vendors/gauge.js/dist/gauge.min.js"></script>
        <!-- bootstrap-progressbar -->
        <script src="asset/backEnd/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
        <!-- iCheck -->
        <script src="asset/backEnd/vendors/iCheck/icheck.min.js"></script>
        <!-- Skycons -->
        <script src="asset/backEnd/vendors/skycons/skycons.js"></script>
        <!-- Flot -->
        <script src="asset/backEnd/vendors/Flot/jquery.flot.js"></script>
        <script src="asset/backEnd/vendors/Flot/jquery.flot.pie.js"></script>
        <script src="asset/backEnd/vendors/Flot/jquery.flot.time.js"></script>
        <script src="asset/backEnd/vendors/Flot/jquery.flot.stack.js"></script>
        <script src="asset/backEnd/vendors/Flot/jquery.flot.resize.js"></script>
        <!-- Flot plugins -->
        <script src="asset/backEnd/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
        <script src="asset/backEnd/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
        <script src="asset/backEnd/vendors/flot.curvedlines/curvedLines.js"></script>
        <!-- DateJS -->
        <script src="asset/backEnd/vendors/DateJS/build/date.js"></script>
        <!-- JQVMap -->
        <script src="asset/backEnd/vendors/jqvmap/dist/jquery.vmap.js"></script>
        <script src="asset/backEnd/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
        <script src="asset/backEnd/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
        <!-- bootstrap-daterangepicker -->
        <script src="asset/backEnd/vendors/moment/min/moment.min.js"></script>
        <script src="asset/backEnd/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
  <!-- jquery.inputmask -->
  <script src="asset/backEnd/vendors/jquery.inputmask/dist/min/jquery.inputmask.bundle.min.js"></script>
        <!-- Custom Theme Scripts -->
        <script src="asset/backEnd/vendors/build/js/custom.min.js"></script>

    </body>
</html>
