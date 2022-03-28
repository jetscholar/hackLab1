<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>Welcome to the Nucular Power Plant</title>
        <link rel = "stylesheet" href = "assets/main.css">
    </head>
    <body>
        <ul>
            <li><a href="#home">Home</a></li>
            <li><a href="about.html">about uS</a></li>
            <li><a href="controlpannel.html">control pnael</a></li>
            <li style="float:right"><a class="active" href="#about">About</a></li>
        </ul>
        <div class="header">
            <h1>Welcome to Cedar Creek Nucular Power Plant</h1>
            <h3>The safest power plant in the world</h3>
        </div>
        <b>
            <h1>Welcome to the Nucular Power Plant</h1>
        </b>
        <div>
        </div>
        <img src="NucularPowerPlantHomePageImage.jpg">
        <p class = "leo"> this is totally a safe nuclrer powder plajnts 1!! <br> just dont breathe within a 50km range of hte powder plan <br> this plant is run by Dayne Walling who has nothing to do with the flint michigan water crisis thing</p>
        <h1>Map of the Plant</h1>
        <h4>
            Take a look at the map of the power plant.
        </h4>
        <img src="https://cdn.sanity.io/images/ccckgjf9/production/b7744875d5087957d3c59681e9f45961290be226-1024x1024.jpg?rect=0,224,1024,576&w=1920&h=1080&fit=max&auto=format" 
            alt="map of the power plant">
        <h1>Take a look inside the Plant</h1>
        <img src="https://cdn1.dotesports.com/wp-content/uploads/2018/08/11095514/8170447a-969e-4871-9a3d-d241ae249549.jpg"
            alt="image 1" width="600" height="400">
        <img src = "https://cdn.akamai.steamstatic.com/apps/csgo/images/reintroducing_nuke/comparisons/small_upperbomb_011_new.jpg?v=1"
            alt="bombside A Nuke" width="600" height="400">
        <img src="https://cdn1.dotesports.com/wp-content/uploads/2018/08/11114737/d5f585eb-c8c1-4920-9b9e-e8b47e8174af.jpg"
            alt="ramp" width="600" height="400">
        <img src="https://cyberpost.co/wp-content/uploads/2019/10/csNuke.jpg"
            alt="nuke but at night" width="600" height="400"> 
        <h1>Where to Next?</h1>
        <div class="btn-group">
            <button>Control Pannel</button>
            <button>About us</button>
            <button>Log Out</button>
        </div>
        <footer>
            <hr />
            <p>Copyright Cedar Creek Power Plant 2022</p>
        </footer>
    </body>
    </div>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
?>
