

<div class="right_col" role="main">
    <div>
        <?php
       $run_query = $object_supper_admin->view_book_category_information();
 
        if (isset($_POST['btn'])) {
             
          $object_supper_admin->add_book($_POST);
        }
        ?>
    </div>
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Add Book</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>
            <div class="clearfix"></div>
          
            <div class="row">
              <div class="col-md-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
<!--                    <h2>Various<small> course indo</small></h2>-->
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
                    <form  action="" method="POST" class="form-horizontal form-label-left">
                        
                        
                               
                        <!-- Book name -->
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="category-name">Book TItle <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" id="student-name" name="bookName" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                        
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Select Category</label>
                        <div class="col-md-6 col-sm-6 col-xs-6">
                     
                          <select name="bookCategory" class="form-control">
                            <option value="0">Select Category</option>
                             <?php
                    while ($all_category_info_info = mysqli_fetch_assoc($run_query)) {
                    //var_dump($all_category_info_info);
                        ?>
                            
         <option value="<?php echo $all_category_info_info['category_id'] ?>"><?php echo $all_category_info_info['category_name'] ?></option>
                      <?php }?>
                          </select>
                        </div>
                      </div>  
                     
                        
                         <!-- Book isbn -->
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="isbn">ISBN <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="number" id="student-name" name="bookisbn" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                    
                            <!-- Book edition -->
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="edition">Edition <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" id="student-name" name="bookEdition" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                         
                           <!-- Book author -->
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="author">Author <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" id="student-name" name="bookAuthor" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                           
                               <!-- Book publisher -->
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="publisher">Publisher <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" id="student-name" name="bookpub" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                         
                      <div class="ln_solid"></div>
                       <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3"> 
                            <input type="submit" name='btn' value="Add Book" class="btn btn-success">
                        </div>
                          
                      </div>
                      
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

 