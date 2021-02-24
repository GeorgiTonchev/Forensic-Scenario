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







<div class='container text-center p-5 text-white'>
			<div class='row justify-content-md-center'>
				<div class='col-lg-6'>
					<!-- Start your project here-->
					<b>Forgot Password</b>
					<p>
						Enter the email address you used to sign up with to retrieve your password.
						<p>
							<table width='400' cellpadding='1' cellspacing='1'>
								<tr>
									<td valign='top'>Enter your email :</td>
									<td valign='top'>
										<form name='form1' method='post' action='PHP\forgotpass.php'>
											<input name='email_to' type='email' id='mail_to' size='25' required>
									</td>
									<td valign='top'>
										<input type='submit' name='Submit' value='Submit' class='submit'>
										</form>
									</td>
								</tr>
							</table>
				</div>
			</div>
        </div>
        
         <!-- SCRIPTS -->
        <!-- JQuery -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"defer>
        </script>
        <!-- Bootstrap tooltips -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"defer>
        </script>
        <!-- Bootstrap core JavaScript -->
        <script type="text/javascript"
            src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"defer></script>
        <!-- MDB core JavaScript -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.14.0/js/mdb.min.js"defer>
        </script>
    </main>

    <?php include 'PHP/footer.php';?>
</body>

</html>