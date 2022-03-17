<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>Welcome to the Nucular Power Plant</title>
        <link rel = "stylesheet" href = "assets/css/main.css">
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>

    <body>
        <!-- Side navigation -->
        <div class="sidenav">
            <a href="#">About</a>
            <a href="#">Services</a>
            <a href="#">Clients</a>
            <a href="#">Contact</a>
            <a href="logout.php">Logout</a>
        </div>


        <!--This is where the Main Content of the Page Goes-->
        <div class="main">
        <h1></h1>
     
             <h2>Hello <?php echo $_SESSION['user_name']; ?>, Welcome to the ACME Nuclear Power Plant</h2>
                <div>
                </div>
                <img src="assets/images/NucularPowerPlantHomePageImage.jpg">
                <div>
                </div>
        </div>
    </body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
?>