 <?php 
          $curent_date=date('d-m-y');
          //echo $curent_date;
 ?>
 <div class="right_col" role="main">
     <div>
         <?php
         
         
                 $run_query_issue_book= $object_supper_admin ->view_all_issue_book();
              
         ?>
     </div>
     
     
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>View Issue Book</h3>
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
               <div  class="col-md-12 col-sm-12 col-xs-12">
                  <div>    <?php
                      if (isset($_SESSION['message'])) {
                          ?>
                          <div class="text text-center text-success"><h2><?php echo $_SESSION['message']; ?></h2></div>
                          <?php
                      }
                      unset($_SESSION['message']);
                      
                      
                      if (isset($message)) {
                          ?>
                          <div class="text text-center text-success"><h2><?php echo $message; ?></h2></div>
                          <?php
                      }
                      unset($message);
                      ?></div>
                  <div class="panel panel-body panel-success">
                      
                      
                      
                         <table class="table table-hover">
                                  <thead>
                                       
                                      <tr>
                                          
                                          <td align="center"><b>user Id</b></td>
                                          <td align="center"><b>user</b></td>
                                          <td align="center"><b>Book Id</b></td>
                                          <td align="center"><b>book Title</b></td>
                                          <td align="center"><b>Return Date</b></td>
                                          <td align="center"><b>Status</b></td> 
                                          <td align="center"><b>Action</b></td>
                                          
                                      </tr>
                                  </thead>
                                  
                                  <tbody>
                                       <?php 
                                       
                          while ($all_issue_books_by_user = mysqli_fetch_assoc($run_query_issue_book)){
                                       
                                                //  var_dump($all_issue_books_by_user);
                                  ?>
                                      <tr >
                                           <td align="center"><?php echo $all_issue_books_by_user['userId']; ?></td>
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
                                                         echo 'Received';
                                                        
                                                    }  
                                              
                                                    ?> 
                                          </td>
                                           <td align="center"> 
                           
                                         
                                               <a class="btn btn-danger" href="?Status=delete&&id=<?php echo $all_issue_books_by_user['depositIdokId'];?>" onclick="return one_delete();" >
                                            <i class="halflings-icon white arrow-down"></i>  
                                       Delete </a>
                          </td>
                                          
                                       
                                      </tr>
                          <?php }?>
                                  </tbody>
                              </table>
                      
                  </div>
              </div><!-- end of panel -->
            </div>
          </div>
        </div>


?>

 