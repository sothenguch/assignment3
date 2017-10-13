<!DOCTYPE html>
<html>
    <head>
        <style>
            @import url("./css/styles.css"); 
        </style>
    </head>
    <body>
        <h1>
            CSUMB Student Survey
        </h1>
        <form action="display.php">
            <b>Enter your name</b><br>
            <input type="text" name="first" placeholder="First Name">
            <input type="text" name="last" placeholder="Last Name">
            <br>
            <b>Select Your Country</b><br>
            <select name = "country">
                <option value = "">Select a country</option>
                <option value = "United States">United States</option>
                <option value = "Canada">Canada</option>
                <option value = "Mexico">Mexico</option>
                <option value = "China">China</option>
                <option value = "Japan">Japan</option>
                <option value = "France">France</option>
                <option value = "Other">Other</option>
            </select>
            <br>
            <b>Gender</b><br>
            <label for="male">Male</label>
            <input type="radio" id="male" name="gender" value="male"><br>
            
            <label for="female">Female</label>
            <input type="radio" id="female" name="gender" value="female"><br>
            
            <label for="other">Other</label>
            <input type="radio" id="other" name="gender" value="other"><br>
            <br>
            <b>Your Address</b><br>
            <input type="text" name="address" placeholder="Address">
            <br>
            <b>Your Transportation to class</b><br>
            <input type="checkbox" name="vehicle" value="Bike">I have a bike <br>
            <input type="checkbox" name="vehicle" value="Car">I have a car <br>
            <input type="checkbox" name="vehicle" value="Bus">I ride the bus <br>
            <input type="checkbox" name="vehicle" value="Walk">I walk to class<br>
            <br>
            <br>
            <input type="submit" value="Submit">
        </form>
    </body>
    
</html>