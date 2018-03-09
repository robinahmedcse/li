<?php

 
class supperAdmin {
    private $link;
     public function __construct() {
        $dbhost = 'localhost';
        $dbuser = 'root';
        $dbpass = '';
        $db = 'libarybook';

        $this->link = mysqli_connect($dbhost, $dbuser, $dbpass);

        if (!$this->link) {
            echo 'Database are not Connected ' . mysqli_error($this->link);
        } else {
            $select_db = mysqli_select_db($this->link, $db);
            if (!$select_db) {
                echo 'Database are not selected ' . mysqli_error($this->link);
            }
        }
    }// end of __construct class
   
    
    
      ///////////////////////////////////////////////////////////////////////////
     /////////////////////Book Management//////////////////////////////////////
    /////////////////////////////////////////////////////////////////////////
   /////////////////////////////////////////////////////////////////////////
    
     public function add_book($data) {
       
        $sql="INSERT INTO tbl_book_info(title,isbn,edition,author,publisher,category_id)" 
   . "VALUES('$data[bookName]','$data[bookisbn]','$data[bookEdition]','$data[bookAuthor]','$data[bookpub]','$data[bookCategory]')";
 //      echo $sql;
//         die(); 
        if(mysqli_query($this->link, $sql)){
             $message = "BOOK info save Suscessfully";
                //return $message;
                session_start();           
               $_SESSION['message']=$message;
                 header("location:view-book.php");
        }
        
        else{
            
            die("insert query problem " . mysqli_error($this->link));
        }
     
   }//END OF add book
     public function add_book_category_information($data) {
        // var_dump($data);
      // die(); 
        $sql="INSERT INTO tbl_category(category_name)"
                . "VALUES('$data[catName]')";
//        echo $sql;
//         die(); 
        if(mysqli_query($this->link, $sql)){
             $message = "Category info save Suscessfully";
                //return $message;
                session_start();           
               $_SESSION['message']=$message;
                 header("location:view-book-category.php");
        }
        
        else{
            
            die("insert query problem " . mysqli_error($this->link));
        }
   }//add_book_category_information
    public function edit_book_category_information($data) {
        // var_dump($data);
      // die(); 
        $sql="SELECT * FROM tbl_category WHERE category_id='$data'";
//        echo $sql;
//         die(); 
        if(mysqli_query($this->link, $sql)){
             $run_query=mysqli_query($this->link, $sql);
             return $run_query;
        }
        
        else{
            
            die("insert query problem " . mysqli_error($this->link));
        }
   }//add_book_category_information
     public function view_book_category_information() {
       // var_dump($data);
        
        $sql="SELECT * FROM tbl_category";
       // echo $sql;
        
       
        if(mysqli_query($this->link, $sql)){
             $run_query=mysqli_query($this->link, $sql);
             return $run_query;
        }
        
        else{
            
            die("insert query problem " . mysqli_error($this->link));
        }
   }//add_book_category_information
     public function view_all_books_information() {
        // var_dump($data);
        
        $sql="SELECT * FROM tbl_book_info";
       // echo $sql;
        
       
        if(mysqli_query($this->link, $sql)){
             $run_query=mysqli_query($this->link, $sql);
             return $run_query;
        }
        
        else{
            
            die("insert query problem " . mysqli_error($this->link));
        }
    }//end of view_all_book_information
    public function update_category_info_by_id($data) {
        //var_dump($data);
        // die();
        $sql = "UPDATE tbl_category SET category_name='$data[catName]'"   
                . " WHERE category_id ='$data[catId]'";


        $run_query = mysqli_query($this->link, $sql);
        if ($run_query) {

            $message = "Category info update succesfull";

            //  return $message;
            $_SESSION['message'] = $message;

            header("location:view-book-category.php");
        } else {
            echo "please try again" . mysqli_error($this->link);
            die();
        }
    }

       public function category_info_delete($id) {
    //         var_dump($id);  
  // echo 'unpub';
  //die();        
         $sql="DELETE FROM tbl_category WHERE category_id ='$id'";
         $run_query = mysqli_query($this->link, $sql);
                    if ($run_query) {

                        $message = "category info Delete succesfull";
                        return $message;
                
                       header("location:view-course-info.php");
 
                    } else {
                        echo "please try again" . mysqli_error($this->link);
                        die();
                    } 
        
    }//category_info_delete
    
    
    ///////////////////////////////////////////////////////////////////////////
     /////////////////////Book Management//////////////////////////////////////
    /////////////////////////////////////////////////////////////////////////
   /////////////////////////////////////////////////////////////////////////
    
    
    //\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\//
   //\\\\\\\\\\\\\\\\\\\\\\\\\\\\book borrow \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\//
  //\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\//
 //\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\//
    
     public function book_issue_info_save($data){  
          //echo '<pre>';
          //var_dump($data);
          
          $da= $data['issueDate'];
          //die();
          $status=0;
      $sql="INSERT INTO tbl_book_deposit(userId,bookId,issueDate,returnDate,status)" 
   . "VALUES('$data[userId]','$data[bookId]','$da','$data[returnDate]','$status')";
     echo $sql;
      //   die(); 
        if(mysqli_query($this->link, $sql)){
             $message = "BooK issue info save Suscessfully";
                //return $message;
                session_start();           
               $_SESSION['message']=$message;
                 header("location: view-issue-book.php");
        }
        
        else{
            
            die("insert query problem " . mysqli_error($this->link));
        }
     
  
     }
     public function find_issue_book_by_user_id($data){  
//            var_dump($data);
          $id=$data['search'];
          
   $sql="SELECT user.userName,book.*,deposit.* FROM  tbl_user_info as user,tbl_book_deposit as deposit,tbl_book_info as book"
           . " WHERE user.userId=deposit.userId AND book.bookId=deposit.bookId AND deposit.userId='$id' AND deposit.status='0'";
        
          
       // $sql="SELECT * FROM tbl_book_deposit WHERE stuId='$id'";
         // echo $sql;
        if(mysqli_query($this->link, $sql)){
             $run_query=mysqli_query($this->link, $sql);
             return $run_query;
        }
        
        else{
            
            die("insert query problem " . mysqli_error($this->link));
        }
     }//find_issue_book_by_user_id
     public function find_issue_book_by_book_id($data){  
//            var_dump($data);
          $id=$data['search'];
          
//   $sql="SELECT user.userName,book.*,deposit.* FROM tbl_user_info as user,tbl_book_deposit as deposit,tbl_book_info as book"
//           . " WHERE user.userId=deposit.userId AND book.bookId=deposit.bookId AND deposit.bookId='$id' AND deposit.status='0'";
//        
          
    $sql="SELECT user.userName, book.*,deposit.* FROM tbl_book_info as book,tbl_book_deposit as deposit, tbl_user_info as user"
            . " WHERE book.bookId=deposit.bookId AND deposit.userId=user.userId AND deposit.bookId='$id' AND deposit.status='0'";
    
  
          
   //     $sql="SELECT * FROM tbl_book_deposit WHERE bookId='$id'";
         // echo $sql;
        if(mysqli_query($this->link, $sql)){
             $run_query=mysqli_query($this->link, $sql);
             return $run_query;
        }
        
        else{
            
            die("insert query problem " . mysqli_error($this->link));
        }
     }//find_issue_book_by_user_id
     public function recieve_issue_book_by_book_id($id) {
             // var_dump($data);
       
       // die();
    $sql="UPDATE tbl_book_deposit SET status='1'"
         . "WHERE depositId ='$id'";
         
       
         $run_query = mysqli_query($this->link, $sql);
                    if ($run_query) {

                      $message ="Book Recieved";
                      $_SESSION['message']=$message;
                header("location:view-recieve-book.php");
 
                    } else {
                        echo "please try again" . mysqli_error($this->link);
                        die();
                    } 
    }   
     public function view_all_issue_book() {
       // $sql="SELECT * FROM course_reg";
       // echo $sql;
         
  $sql = "SELECT user.userName, book.*,deposit.* FROM tbl_book_info as book,tbl_book_deposit as deposit, tbl_user_info as user"
  ." WHERE book.bookId=deposit.bookId AND deposit.userId=user.userId AND deposit.status='0' ORDER BY  deposit.bookId DESC";



        if(mysqli_query($this->link, $sql)){
             $run_query=mysqli_query($this->link, $sql);
           return $run_query;
             
//              while ($all_payment_info = mysqli_fetch_assoc($run_query)) {
//                  echo '<pre>';
//                var_dump($all_payment_info);
//            }
//            die();
            
        }
      
        else{
            
            die("insert query problem " . mysqli_error($this->link));
        }
    }//
     public function view_all_recieve_book_by_book_id() {
     
           // echo 'check';
             //       die();
       // $sql="SELECT * FROM course_reg";
       // echo $sql;
//    $sql="SELECT studentpay.*,courseReg.*,student.* FROM stu_payment as studentpay ,course_reg as courseReg,all_stu_info as student"
//   . " WHERE studentpay.stu_id=courseReg.stu_id AND studentpay.stu_id=student.stu_id";
         
         
  $sql = "SELECT user.userName, book.*,deposit.* FROM tbl_book_info as book,tbl_book_deposit as deposit, tbl_user_info as user"
  ." WHERE book.bookId=deposit.bookId AND deposit.userId=user.userId AND deposit.status='1' ORDER BY  deposit.bookId DESC";



        if(mysqli_query($this->link, $sql)){
             $run_query=mysqli_query($this->link, $sql);
           return $run_query;
             
//              while ($all_payment_info = mysqli_fetch_assoc($run_query)) {
//                  echo '<pre>';
//                var_dump($all_payment_info);
//            }
//            die();
            
        }
      
        else{
            
            die("insert query problem " . mysqli_error($this->link));
        }
    }//
     public function view_all_recieve_book() {
     
           // echo 'check';
             //       die();
       // $sql="SELECT * FROM course_reg";
       // echo $sql;
//    $sql="SELECT studentpay.*,courseReg.*,student.* FROM stu_payment as studentpay ,course_reg as courseReg,all_stu_info as student"
//   . " WHERE studentpay.stu_id=courseReg.stu_id AND studentpay.stu_id=student.stu_id";
         
         
  $sql = "SELECT user.userName, book.*,deposit.* FROM tbl_book_info as book,tbl_book_deposit as deposit, tbl_user_info as user"
  ." WHERE book.bookId=deposit.bookId AND deposit.userId=user.userId AND deposit.status='1' ORDER BY  deposit.bookId DESC";



        if(mysqli_query($this->link, $sql)){
             $run_query=mysqli_query($this->link, $sql);
           return $run_query;
             
//              while ($all_payment_info = mysqli_fetch_assoc($run_query)) {
//                  echo '<pre>';
//                var_dump($all_payment_info);
//            }
//            die();
            
        }
      
        else{
            
            die("insert query problem " . mysqli_error($this->link));
        }
    }//
   
    
           public function recieve_book_info_delete($id) {
    //         var_dump($id);  
  // echo 'unpub';
  //die();        
         $sql="DELETE FROM tbl_book_deposit WHERE depositId ='$id'";
         $run_query = mysqli_query($this->link, $sql);
                    if ($run_query) {

                        $message = "Recieve book info Delete succesfull";
                        return $message;
                
                       header("location:view-recieve-book.php");
 
                    } else {
                        echo "please try again" . mysqli_error($this->link);
                        die();
                    } 
        
    }//category_info_delete
    //\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\//
   //\\\\\\\\\\\\\\\\\\\\\\\\\\\\book borrow \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\//
  //\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\//
 //\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\//
    
    
  
    
     public function view_all_users_information() {
        // var_dump($data);
        
        $sql="SELECT * FROM tbl_user_info";
       // echo $sql;
        
       
        if(mysqli_query($this->link, $sql)){
             $run_query=mysqli_query($this->link, $sql);
             return $run_query;
        }
        
        else{
            
            die("insert query problem " . mysqli_error($this->link));
        }
    }//end of view_all_users_information
     
   
     
        public function admin_logout() {
         
         unset($_SESSION['adminId']);
         unset( $_SESSION['adminName']);
         
         header("location:index.php");
     }
    
}//end of supper Admin

