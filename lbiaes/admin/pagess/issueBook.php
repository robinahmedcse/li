<?php 
          $curent_date=date('d-m-y');
          //echo $curent_date;
 ?>
 <div class="right_col" role="main">
     <div>
         <?php 
              if(isset($_POST['btn-issue-book'])){
                  $object_supper_admin ->book_issue_info_save($_POST);
              }
         
              if(isset($_POST['btn-search'])){
                 $run_query_issue_book= $object_supper_admin ->find_issue_book_by_user_id($_POST);
              }
         
         
         
         
         
         ?>
     </div>
     
     
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Issue Book</h3>
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
              <div class="">
                  <div class="col-md-12 col-sm-12 col-xs-12">
                      <div class="x_panel">
                          <div class="x_title">
                              <h2> Date:<?php 
                                  
                                    echo $curent_date;
                                  ?></h2>
                              
                              <div class="clearfix"></div>
                          </div>

                      </div>
                  </div>
               </div>
              
            <div class="clearfix"></div>

            <div class="row">
                
                
              <div  class="col-md-6 col-sm-6 col-xs-6 left">
                  
                  <div class="panel panel-body panel-success">
                      <form action="" method="POST"id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                        
                        <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="user-id">User Id
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="text" id="user-id" name="userId" required class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>  
                          
                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="user-id">Book Id
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="text" id="user-id" name="bookId" required class="form-control col-md-7 col-xs-12">
                        </div>
                      </div> 
                          
                          
                          <div class="control-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="user-id">Book Issue Date
                        </label>
                            <div class="controls">
                              <div class="col-md-9 xdisplay_inputx form-group has-feedback">
                                <input type="text" required name="issueDate"class="form-control has-feedback-left" id="single_cal1" placeholder="enter the date " aria-describedby="inputSuccess2Status">
                                <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
                                <span id="inputSuccess2Status" class="sr-only">(success)</span>
                              </div>
                            </div>
                          </div>
                          
                          <div class="control-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="user-id">Book Return Date
                              </label>
                              <div class="controls">
                                  <div class="col-md-9 xdisplay_inputx form-group has-feedback">
                                      <input type="text" required name="returnDate" class="form-control has-feedback-left" id="single_cal4" placeholder="Enter book return DATE" aria-describedby="inputSuccess2Status4">
                                      <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
                                      <span id="inputSuccess2Status4" class="sr-only">(success)</span>
                                  </div>
                              </div>

                          </div>
                        
                          
                          <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3"> 
                            
                            <input type="submit" name='btn-issue-book' value="Submit" class="btn btn-success">
                            
                        </div>
                      </div>
                          
                      </form>
                  </div>
              </div><!-- end of panel -->
              
              
               <div  class="col-md-6 col-sm-6 col-xs-6 left">
                   
                  <div class="panel panel-body panel-success">
                      <form action="" method="POST"id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" id="student-name" name="search" class="form-control col-md-4 col-xs-12">
                        </div>
                          
                          <input type="submit" name="btn-search" value="Search student Issue Book" class="btn btn-default">
                      </form>
                      <br/><br/><br/><br/>
                      
                      <?php 
                           if(isset( $run_query_issue_book)){
                               
                             
                         
                          ?>
                         <table class="table table-hover">
                                  <thead>
                                       
                                      <tr>
                                          <th>#</th>
                                          <td align="center"><b>user</b></td>
                                          <td align="center"><b>Book Id</b></td>
                                          <td align="center"><b>book</b></td>
                                          <td align="center"><b>Return Date</b></td>
                                          <td align="center"><b>Status</b></td> 
                                      </tr>
                                  </thead>
                                  
                                  <tbody>
                                       <?php 
                                      while ($all_issue_books_by_user = mysqli_fetch_assoc($run_query_issue_book)) {
                                                    //var_dump($all_issue_books_by_user);
                                  ?>
                                      <tr >
                                           <th scope="row"align="center"><?php echo $all_issue_books_by_user['depositId']; ?></th>
                                           <td align="center"><?php echo $all_issue_books_by_user['userName']; ?></td>
                                           <td align="center"><?php echo $all_issue_books_by_user['bookId']; ?></td>
                                          <td align="center"><?php echo $all_issue_books_by_user['title']; ?> </td>
                                          <td align="center"><?php echo $all_issue_books_by_user['returnDate']; ?> </td>
                                          <td align="center">
                                              <?php  $status=$all_issue_books_by_user['status'];
                                                    if($status == '0'){
                                                        echo 'pending';
                                                    }
                                                    else{
                                                         echo 'done';
                                                        
                                                    }  
                                              
                                                    ?> 
                                          </td>
                                      </tr>
                                      <?php }?>
                                  </tbody>
                              </table>
                      
                      
                 
                                      <?php }?>
                      
                      
                      
                  </div>
              </div><!-- end of panel -->
            </div>
          </div>
        </div>

















?>