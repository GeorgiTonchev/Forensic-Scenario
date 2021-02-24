<?php session_start();?>
<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Patty Valantine's</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.14.0/css/mdb.min.css" rel="stylesheet">
    <!-- Navbar -->
    <link href='css/style.css' rel='stylesheet'>
</head>


<body class='ligthblack'>
<?php include 'PHP/navbar.php';?>
    <main class="">
        <div class='container-fluid'>
            <div class='row py-5 m-2'>


                <?php include 'PHP/conect.One.php';?>
                <?php

                     // Display Starters 
                     $Sqldisplay="SELECT * FROM Milkshakes";


                    $result= mysqli_query($connection,$Sqldisplay);

                    while($row= mysqli_fetch_array($result,MYSQLI_ASSOC)){      

                                echo'
                                    <div class="col-lg-3 d-flex align-items-stretch">

                                        <!-- Card Dark -->
                                        <div class="card">

                                            <!-- Card image -->
                                            <div class="view overlay">
                                                <img class="card-img-top"
                                                src="img/'.$row['Image'].'"
                                                alt="Card image cap">
                                                    
                                            </div>

                                            <!-- Card content -->
                                            <div class="card-body black-text rounded-bottom text-center">
                                                <!-- Title -->
                                                <h6 class="card-title text-black hammer">'.$row['Name'].'</h6>
                                                <p class="card-text black-text mb-4">'.$row['Description'].'</p>
                                                <p class="float-right hammer">'.$row['Price']."£</p>

                                            </div> 

                                        </div>
                                    </div>
                                <!-- Card Dark -->";
               
                                                    }?>
            </div>
        </div>
    </main>
    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"defer></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"defer>
    </script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"defer></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.14.0/js/mdb.min.js"defer>
    </script>


    <?php include 'PHP/footer.php';?>
</body>

</html>