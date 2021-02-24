<?php include 'adminsesion.php';
    include 'conect.One.php';?>
<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
    <meta http-equiv='x-ua-compatible' content='ie=edge'>
    <title>50,s</title>
    <!-- Font Awesome -->
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.11.2/css/all.css'>
    <!-- Bootstrap core CSS -->
    <link href='../css/bootstrap.min.css' rel='stylesheet'>
    <!-- Material Design Bootstrap -->
    <link href='../css/mdb.min.css' rel='stylesheet'>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <!-- Your custom styles (optional) -->
    <link href='../css/style.css' rel='stylesheet'>
</head>

<body class=''>

    <?php include 'sidenav.php';?>
    <main class='mainadmin'>
        <div class='container black'>
            <h1 class=' text-center text-white'>Bookings</h1>
        </div>

        <div class='container-fluid ml-4 pr-2 pb-2'>
            <div class='row'>
                <div class='col-6'>

                <?php include 'admin.display.bookings.php';?>
               

                </div>
        </div>
        </div>
    </main>


    <!-- Scripts -->
    <?php include 'PHP/scripts.php';?>

</body>

</html>