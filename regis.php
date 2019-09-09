<?php
echo '<pre>';
print_r($_POST);
if(isset($_POST["bitm"])){
   $connection=mysqli_connect('localhost','root', '' );
   if($connection){
       echo 'server connected';
       
       $select_db= mysqli_select_db($connection, 'ecommerce');
       if($select_db){
           echo 'database selected';
       } else {
           die('database selection error'. mysqli_error($select_db));
           
       }
       
   }else{
        die('server no connection'.  mysqli_error($connection));
        
   }
   
 $sql=  "INSERT INTO tb_customer(customer_name,email_address, phone_number) VALUES('$_POST[customer_name]','$_POST[email_address]', '$_POST[phone_number]')";
      
 if(mysqli_query($connection, $sql)){
     echo 'data save successfuly';
 } else {
     die('data not save'. mysqli_error($connection));
     
 }
}

?>



<form action="" method="post">
    <table>
        <tr>
            <td>Student Name</td>
            <td> <input type="text" name="customer_name"</td>
        </tr>tudent_name
        
         <tr>
            <td>Email Address </td>
            <td><input type="email" name="email_address" </td>
        </tr>
        
         <tr>
            <td> Phone Number</td>
            <td> <input type="number" name="phone_number"</td>
        </tr>
        
         <tr>
            <td> </td>
            <td> <input type="submit" name="bitm" value=" save_student"</td>
        </tr>
    </table>
</form>