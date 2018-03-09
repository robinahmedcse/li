

<div class="right_col" role="main">
             <div>
                 <?php
                 $run_query = $object_supper_admin->view_all_books_information();
                 ?>  
                 
    </div>
            
          <div class="">
            <div class="page-title">
              <div class="title_left ">
                <h3>All <small>Book information</small></h3>
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
        
              <div class="clearfix"></div>

              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                      <?php
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
                      ?>

                     
<!--                    <h2>Hover rows <small>Try hovering over the rows</small></h2>-->
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
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>#</th>
                          <td align="center"><b> Title</b></td>
                          <td align="center"><b> ISBN</b></td>
                          <td align="center"><b>Edition</b></td>
                         
                            <td align="center"><b>Author name</b></td>
                            <td align="center"><b>Publisher Name</b></td>
                            
                          <td align="center"><b>Action</b></td>
                        </tr>
                      </thead>
                      <tbody>
                            <?php
                    while ($all_books_info = mysqli_fetch_assoc($run_query)) {
                   //   var_dump($all_books_info);
                    
                    
                        ?>
                        <tr >
                          <th scope="row"align="center"><?php echo $all_books_info['bookId'];?></th>
                          <td align="center"><?php echo $all_books_info['title'];?> </td>
                          <td align="center"><?php echo $all_books_info['isbn'];?> </td>
                          <td align="center"><?php echo $all_books_info['edition'];?> </td>
                          <td align="center"><?php echo $all_books_info['author'];?> </td>
                           <td align="center"><?php echo $all_books_info['publisher'];?></td>
                          <td align="center"> 
                           
                           <a class="btn btn-primary" href="edit-book.php?&&id=<?php echo $all_books_info['bookId'];?>" >
                                            <i class="halflings-icon white arrow-down"></i>  
                                       Edit </a> 
                           <a class="btn btn-danger" href="?Status=delete&&id=<?php echo $all_books_info['bookId'];?>" onclick="return one_delete();" >
                                            <i class="halflings-icon white arrow-down"></i>  
                                       Delete </a>
                          </td>
                        </tr>
                        
                    <?php }?> 
                        
                       
                      </tbody>
                    </table>
                      
                      
                 
                  </div>
                </div>
              </div>


       

              <div class="clearfix"></div>

 
            </div>
          </div>
        </div>