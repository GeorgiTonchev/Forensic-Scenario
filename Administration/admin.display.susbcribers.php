<?php include 'adminsesion.php';
    include '../PHP/conect.One.php';?>
<?php

// Display Customers
$Sqldisplay="SELECT * FROM Customers";


$result= mysqli_query($connection,$Sqldisplay);

echo "
<h3>Suscribers</h3>
<table class='table table-striped table-bordered table-sm pt-1 m-0 border-dark tableFixHead '
cellspacing='0' width='auto'>
<thead class='sticky-top'>
  <tr display='block' class='black white-text'>
    <th>Email
    </th>
    
    
    
    <th class='d-none'></th>
    

  </tr>
</thead>
<tbody>
  <tr>";

 while($row= mysqli_fetch_array($result,MYSQLI_ASSOC)){      
                echo "<form class='' action='#' method='post'>";
                echo "<td><input  class='p-3' size='50' type='email' name='Name' value='".$row['Email']."'></td>";
                
                
                echo "<td class='d-none'><input class='form-control d-none ' width='100' type='hidden' name='hidden' value='".$row['ID']."'></td>";
               
                echo "</form>";

                echo "</tr>";
 }
                echo "</tbody>
                </table>";
               




?>