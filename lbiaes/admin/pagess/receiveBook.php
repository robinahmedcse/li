 <?php 
 
          $curent_date=date('d-m-y');
          //echo $curent_date;
 ?>
 <div class="right_col" role="main">
     <div>
         <?php 
        
 
         
              if(isset($_POST['btn-search'])){
                 $run_query_issue_book= $object_supper_admin ->find_issue_book_by_book_id($_POST);
                     $all_issue_books_by_user = mysqli_fetch_assoc($run_query_issue_book); 
                    $depositId  =$all_issue_books_by_user['depositId'];
                 //   echo $depositId;
              }
  
             if(isset($_GET['Status'])){
                 $depositId = $_GET['id'];
                  if (($_GET['Status'] == 'recieve')) {
                    $object_supper_admin->recieve_issue_book_by_book_id($depositId);
                    }
             }
              
         ?>
     </div>
     
     
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Receive Book</h3>
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
                  
                  <div class="panel panel-body panel-success">
                      <form action="" method="POST"id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" id="student-name" name="search" class="form-control col-md-4 col-xs-12">
                        </div>
                          
                          <input type="submit" name="btn-search" value="Recieve Book" class="btn btn-default">
                      </form>
                      <br/><br/><br/><br/>
                      
                      <?php 
                          if(isset($depositId)){
                           if( $depositId != NULL ){
                          ?>
                         <table class="table table-hover">
                                  <thead>
                                       
                                      <tr>
                                          
                                          <td align="center"><b>user</b></td>
                                          <td align="center"><b>Book Id</b></td>
                                          <td align="center"><b>book</b></td>
                                          <td align="center"><b>Return Date</b></td>
                                          <td align="center"><b>Status</b></td> 
                                          <td align="center"><b>Action</b></td>
                                      </tr>
                                  </thead>
                                  
                                  <tbody>
                                       <?php 
                                   
                                                 //   var_dump($all_issue_books_by_user);
                                  ?>
                                      <tr >
                                           
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
                           
                                               <a class="btn btn-primary" href="?Status=recieve&&id=<?php echo $all_issue_books_by_user['depositId'];?>" >
                                            <i class="halflings-icon white arrow-down"></i>  
                                        Receive Book</a> 
                           
                          </td>
                                      </tr>
                                      <?php }
                                         
                                        else {
                                            
                                        ?> 
                                      
                                  <h2 class="center info">
                                      
                                      <?php
                                            echo"This book is not borrowing by any users";
                                        }
                           }
                                      ?>
                                          
                                      </h2>
                                  </tbody>
                              </table>
                      
                  </div>
              </div><!-- end of panel -->
            </div>
          </div>
        </div>


?>

 