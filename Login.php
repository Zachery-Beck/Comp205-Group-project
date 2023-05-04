<?php
    // include common php routines
    require "pizzahouse.inc";
    $Connection = DatabaseConnect();
       // check for POST variables
if (isset($_POST["Email"])) {
    $SQL = "SELECT Email, Password FROM users WHERE Email='" . $_POST['Email'] . "' AND Password='" . $_POST['Password'] . "'";
    $Results = $Connection->query($SQL);
    if ($Results->num_rows > 0) {
        // save the user name and password to the session
        $_SESSION["Email"] = $_POST["Email"];
        $_SESSION["Password"] = $_POST["Password"];
        exit;
    }
else{
    echo"<p class=invalid>You're not getting any pizza today because your email or password is INVALID</p>";
}
} 

    HTMLStart( "Login Page" );

    PageStart();

    PizzaHouseHeader();

    Nav();

    PageTitle("Login");

    LeftBarHours();

    RightBarSpecials();

    PictureUnderBars();

    Footer();

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