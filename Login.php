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

<section class = loginform>
    <form action="Login.php" method="POST">
        <p>Email: <input name="Email" type="text" required="true" /></p>
        <p>Password: <input name="Password" type="password" required="true" /></p>
        <p><button type="submit">Login</button></p>
    </form>
</section>
<?php 

  PageEnd();

?>