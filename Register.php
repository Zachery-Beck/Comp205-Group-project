<?php
    // include common php routines
    require "pizzahouse.inc";

    HTMLStart( "Register Page" );

    PageStart();

    PizzaHouseHeader();

    Nav();

    PageTitle("Register");

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
    <form name="data-input" action="RegisterFunction.php" method="POST">
        <label for="Email">Email</label><br>
            <input type="Email" id="Email" name="Email" required="true"><br><br>
        <label for="Password">Password</label><br>
            <input type="Password" id="Password" name="Password" required="true" ><br><br>
        <label for="Name">Name</label><br>
            <input type="Name" id="Name" name="Name" required="true" ><br><br>
        <label for="Address">Address</label><br>
            <input type="Address" id="Address" name="Address" required="true" ><br><br>
        <label for="City">City</label><br>
            <input type="City" id="City" name="City" required="true" ><br><br>
        <label for="State">State</label><br>
            <input type="State" id="State" name="State" required="true" ><br><br>
        <label for="Zip">Zip</label><br>
            <input type="Zip" id="Zip" name="Zip" required="true" ><br><br>
        <input type="Submit" value="Submit">
    </form>
</main>
<?php 

  PageEnd();

?>