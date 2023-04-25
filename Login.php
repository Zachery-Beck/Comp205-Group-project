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
    if ( isset( $_POST["Email"] ))
    {
        // save the user name and password to the session
        $_SESSION["Email"] = $_POST["Email"];
        $_SESSION["Password"] = $_POST["Password"];
        exit();
    }    
    
?>   

<main class=loginform>
    <form action="Login.php" method="POST">
        <label for="Email">Email</label><br>
            <input type="Email" id="Email" name="Email"><br>
        <label for="Password">Password</label><br>
            <input type="Password" id="Password" name="Password"><br><br>
            <input type="Submit" value="Submit">
    </form>
</main>
<?php 

  PageEnd();

?>