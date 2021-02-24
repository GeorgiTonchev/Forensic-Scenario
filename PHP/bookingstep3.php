<?php

include 'conect.One.php';



$name=$_POST['Name'];
$surname=$_POST['Surname'];
$email=$_POST['Email'];
$phone=$_POST['Phone'];
$location=$_GET['id'];
$date=$_GET['id2'];
$time=$_GET['id3'];
$people=$_GET['id4'];


$bookinsert="INSERT INTO Booking(ID,Location,Date,Time,Name,Surname,People,Email,Phone)
    VALUES('0','$location','$date','$time','$name','$surname','$people','$email','$phone')";
    
   
    
    if(isset($_POST["Next"])){
    
        header( 'refresh:1;url=../index.php' );
        mysqli_query($connection,$bookinsert);
        echo "<h1 class='redvintage americana fbig'> You succefully booked</h1>";
        }
        else{   
    
   
    


echo " 
<div class='col-lg-8 col-md-8 col-sm-12 col-xs-12 whitecream  pt-2 m-0 no-gutters' id='booking''>
<div class='card text-center'>
<form method='post' action='#'>
<h1 class='card-header backgroundred whitecream text-center py-4 americana'>
<strong>Your booking details</strong>
</h1>
<!--Card content-->
    <div class='card-body text-dark px-lg-5 pt-0 no-gutters'>

    <!-- Location -->
        <div class='md-form p-0 m-0 mb-0'>
        <span><strong>Location</strong><span>
        <p class='mb-0 ptext blue-text'>".$location."</p>
        </div>

        <!-- People -->
        <div class='md-form p-0 m-0 mb-0'>
        <span><strong>Number of people</strong><span>
            <p class='mb-0 ptext blue-text'>".$people."</p>
            </div>
        
            <!-- Date -->
            <div class='md-form p-0 m-0 mb-0'>
            <span><strong>Date</strong><span>

            <p class='mb-0 ptext blue-text'>".$date."</p>

            </div>
            <!-- Time -->
            <div class='md-form p-0 m-0 mb-0'>
            <span><strong>Time</strong><span>
            <p class='mb-0 ptext blue-text'>".$time."</p>
<hr>
<!-- Location -->
        <div class='md-form p-0 m-0 mb-0'>
        <span><strong>Name</strong><span>
        <p class='mb-0 ptext blue-text'>".$name." ".$surname."</p>
        </div>

        <!-- Email -->
        <div class='md-form p-0 m-0 mb-0'>
        <span><strong>Email</strong><span>
        <p class='mb-0 ptext blue-text'>".$email."</p>
        </div>

        <!-- Phone -->
        <div class='md-form p-0 m-0 mb-0'>
        <span><strong>Location</strong><span>
        <p class='mb-0 ptext blue-text'>".$phone."</p>
        </div>

        <!-- Send button -->
       
        <a href='Booktablestep2.php' class='whitecream btn backgroundred'>Previous</a>
        <button class='text-small btn whitecream backgroundred'name='Next' type='Next'>Confirm</button>
                            

                         
    </div>
    </form>
</div>
</div>";
        }
        
?>