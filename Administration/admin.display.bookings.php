<?php include 'adminsesion.php';
    include 'conect.One.php';?>
<?php include '../PHP/conect.One.php';?>
<?php

if(isset($_POST['updateusr'])){

    $time = $_POST['time'];
    $date=$_POST['date'];
    $people=$_POST['people'];
    $name=$_POST['name'];
    $surname=$_POST['surname'];
    $phone=$_POST['phone'];
    $uhid = $_POST['hidden'];
    
   
    
    
                      $Update="UPDATE Booking SET Location='Edinburgh',Date='$date',Time='$time',Name='$name',Surname='$surname',People='$people',Email='$email',Phone='$phone' WHERE ID='$uhid'";
                      mysqli_query($connection,$Update);
                     
                      
                  }
                  if(isset($_POST['Deleteusr'])){
                    $uhid = $_POST['hidden'];
                    $Delete="DELETE FROM Booking WHERE ID='$uhid'";
                    mysqli_query($connection,$Delete);
                    
                  }

// Display Bookings
$Sqldisplay="SELECT * FROM Booking ORDER BY Date asc";




$result= mysqli_query($connection,$Sqldisplay);



echo "
<h3 class='americana'>Bookings</h3>
<table class='table table-striped table-bordered table-sm pt-1 m-0 border-dark tableFixHead '
cellspacing='0' width='auto'>
<thead class='sticky-top'>
  <tr display='block' class='black white-text'>
    <th>Time
    </th>
    
    <th>Day
    </th>
    <th>N. of people</th>
    <th>Name</th>
    <th>Surname</th>
    <th>Phone</th>
    <th></th>
    <th></th>
    <th class='d-none'></th>
    

  </tr>
</thead>
<tbody>
  <tr>";

 while($row= mysqli_fetch_array($result,MYSQLI_ASSOC)){      
                echo "<form class='' action='#' method='post'>";
                echo "<td><input  type='text' name='time' value='".$row['Time']."'></td>";
                echo "<td><input  type='text' name='date' value='".$row['Date']."'></td>";
                echo "<td><input  type='text' name='people' value='".$row['People']."'></td>";
                echo "<td><input type='text-area' name='name' value='".$row['Name']."'></td>";
                echo "<td><input type='text-area' name='surname' value='".$row['Surname']."'></td>";
                echo "<td><input  type='text' name='phone' value='".$row['Phone']."'></td>";
                echo "<td class='d-none'><input class='form-control d-none ' type='hidden' name='hidden' value='".$row['ID']."'></td>";
                echo "<td><button class='green'type='submit' name='updateusr' >update</button></td>";
                echo "<td><button class='red' type='submit' name='Deleteusr'>delete</button></td>";
                echo "</form>";

                echo "</tr>";
 }
                echo "</tbody>
                </table>";

               

                
                
                

              
?>