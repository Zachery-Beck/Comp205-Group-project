<?php
            require "pizzahouse.inc";

            HTMLStart( "Registered Page" );
            PizzaHouseHeader();
            PageTitle("Registered");
        
?>

<body class = registerbody>

    <h1>Registering Your Account</h1>
    <a href="Login.php">Return to Login Page</a>
    <?php
        // call the insert function
        InsertUser();
    ?>

</body>
</html>       