
<div class="right_col" role="main">
    <div>
        <?php 

 if(isset($_POST['btn'])){
  // $object_supper_admin ->add_student_information($_POST);
 }
?>
    </div>
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Add User</h3>
              </div>
            </div>
              
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>User<small>Registration</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form action="" method="POST"id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                      
                        
                        <!-- student name -->
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="user-name">User Name <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" id="student-name" name="userName" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                        
                        
                        <!-- student phone number -->
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="user-phone-number">User Phone Number <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="number" id="student-phone-number" name="userPhone" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                       
                        <!-- student father name -->
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="user-email">User Email <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="email" id="student-father-name" name="UserEmail" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                        
                           <!-- student father phone number -->
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="user-password">User Password <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="password" id="student-name" name="userPassword " required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                           
                           
                      
                          
                              
                                 
                      <!-- student present address -->
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="User-present-address">User Present Address <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12"> 
                            <textarea id="student-present-address" name="userPreAddress"  class="form-control col-md-7 col-xs-12" required="required"></textarea>

                        </div>
                      </div>
                      
                       <!-- student parmanent address -->
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="User-parmanent-address">User Permanent Address <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12"> 
                            <textarea id="student-parmanent-address" name="userPerAddress"  class="form-control col-md-7 col-xs-12" required="required"></textarea>

                        </div>
                      </div>
                   
                      
                      
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3"> 
                            <input type="submit" name='btn' value="Submit" class="btn btn-success">
                        </div>
                      </div>

                    </form>
                  </div>
                </div>
              </div>
            </div>

    
          </div>
        </div>
