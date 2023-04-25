<?php
    // include common php routines
    require "pizzahouse.inc";

    HTMLStart( "Login Page" );

    PageStart();

    PizzaHouseHeader();

    Nav();

    PageTitle("Login");

    LeftBarHours();

    RightBarSpecials();

    PictureUnderBars();

    Footer();

    // check for POST variables
    if ( isset( $_POST["UserName"] ))
    {
        // save the user name and password to the session
        $_SESSION["Email"] = $_POST["Email"];
        $_SESSION["Password"] = $_POST["Password"];
        $_SESSION["Name"] = $_POST["Name"];
        $_SESSION["Address"] = $_POST["Address"];
        $_SESSION["City"] = $_POST["City"];
        $_SESSION["State"] = $_POST["State"];
        $_SESSION["Zip"] = $_POST["Zip"];
        exit();
    }    

?>   

<main class=loginform>
    <form action="Login.php" method="POST">
        <label for="email">Email</label><br>
            <input type="email" id="email" name="email"><br>
        <label for="password">Password</label><br>
            <input type="password" id="password" name="password"><br><br>
        <label for="name">Name</label><br>
            <input type="name" id="name" name="name"><br><br>
        <label for="address">Address</label><br>
            <input type="address" id="address" name="address"><br><br>
        <label for="city">City</label><br>
            <input type="city" id="city" name="city"><br><br>
        <label for="state">State</label><br>
            <input type="state" id="state" name="state"><br><br>
        <label for="zip">Zip</label><br>
            <input type="zip" id="zip" name="zip"><br><br>
        <input type="submit" value="Submit">
    </form>
</main>
<?php 

  PageEnd();

?>