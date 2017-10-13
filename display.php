<html>
    <head>
        <style>
            @import url("./css/styles.css"); 
        </style>
    </head>
    <body>
        <h1>
            Your Answer
        </h1>
        <?php
        echo "<p1>";
        if ($_GET['first'] == ""){echo "<r1/>";
            echo " you need to enter your first name";echo "<br>";
        }else{
            echo "<a1/>";
            echo "First Name : ".$_GET['first'];echo "<br>";
        }
        
        if ($_GET['last'] == ""){echo "<r1/>";
            echo " you need to enter your last name";echo "<br>";
        }else{
            echo "<a1/>";
            echo "Last Name : ".$_GET['last'];echo "<br>";
        }
        
        if ($_GET['country'] != ""){
            echo "<a1/>";
            echo "Country : ".$_GET['country'];echo "<br>";
        }else{
            echo "<r1/>";
            echo " you need to select your country";echo "<br>";
        }
        
        if (isset($_GET['gender'])){
            echo "<a1/>";
            echo "Gender : ".$_GET['gender'];echo "<br>";
        }else{
            echo "<r1/>";
            echo " you need to select your gender";echo "<br>";
        }
        
        if ($_GET['address'] ==""){echo "<r1/>";
            echo " you need to enter your address";echo "<br>";
        }else{
            echo "<a1/>";
            echo "Address : ".$_GET['address'];echo "<br>";
        }
        
        if (isset($_GET['vehicle'])){
            echo "<a1/>";
            echo "vehicle : ".$_GET['vehicle'];echo "<br>";
        }else{
            echo "<r1/>";
            echo " you need to select your vehicle";echo "<br>";
        }
        echo "</p1>";
        switch($_GET['vehicle']){
            case "Bike": echo "<img src='img/bike.png' class='picc'>";break;
            case "Car": echo "<img src='img/Car.png' class='picc'>";break;
            case "Bus": echo "<img src='img/Bus.png' class='picc'>";break;
            case "Walk": echo "<img src='img/walk.png' class='picc'>";break;
        }
        ?>
        <form action="index.php" method="POST">
            <input class='button' type ="submit" value="Enter new information!"/>
        </form>
    </body>
</html>
