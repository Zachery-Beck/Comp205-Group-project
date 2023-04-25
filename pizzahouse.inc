<?php
    // function for the start of an html page
    function HTMLStart( $Title )
    {
?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <title><?php echo $Title ?></title>
            <link href="Main CSS page.css" type="text/css" rel="Stylesheet" /> 
             <script src="menu.js"></script>  
        </head>
<?php
    }
?>

<?php
    function PizzaHouseHeader()
    {
?>
        <header class="header-main">
            <img src="https://clipartix.com/wp-content/uploads/2017/07/Pizza-clip-art-tumundografico-5.gif" height="40px">
            Pizza House
            <img src="https://clipartix.com/wp-content/uploads/2017/07/Pizza-clip-art-tumundografico-5.gif" height="40px"/>
            <!-- <img class="header" src="images/beer.svg" /> -->
        </header>
<?php
    }
?>

<?php
    function Nav()
    {
?>
      <nav>
        <a href="index.php">Home</a>
        <a href="About Page.php">About</a>
        <a href="Menu Page.php">Menu</a>
        <a href="Contact Page.php">Contact</a>
        <a href="Map Page.php">Map</a>
        <a href="Takeout.php">Takeout</a>
        <a href="Register.php">Register</a>
        <a href="Login.php">Login</a>
    </nav>
<?php
    }
?>

<?php
    function PageTitle($Title)
    {
?>
     <header class="title">
        <?php echo $Title ?>
        </header>
<?php
    }
?>

<?php
    function LeftBarHours()
    {
?>
     <aside class = "lbar"> 
        <ul class="hours">
            <li class="Hours-Title">Hours</li>
            <br></br>
            <li>Monday:   11AM-10PM</li>
            <li> <img src = "https://media.istockphoto.com/id/843213562/vector/cartoon-with-contour-of-pizza-slice-with-melted-cheese-and-pepperoni.jpg?s=612x612&w=0&k=20&c=St6rIJz83w2MjwSPj4EvHA8a4x_z9Rgmsd5TYkvSGH8=" height="35px">
            <li>Tuesday:	    11AM-10PM</li>
            <li> <img src = "https://media.istockphoto.com/id/843213562/vector/cartoon-with-contour-of-pizza-slice-with-melted-cheese-and-pepperoni.jpg?s=612x612&w=0&k=20&c=St6rIJz83w2MjwSPj4EvHA8a4x_z9Rgmsd5TYkvSGH8=" height="35px">
            <li>Wednesday:	    11AM-10PM</li>
            <li> <img src = "https://media.istockphoto.com/id/843213562/vector/cartoon-with-contour-of-pizza-slice-with-melted-cheese-and-pepperoni.jpg?s=612x612&w=0&k=20&c=St6rIJz83w2MjwSPj4EvHA8a4x_z9Rgmsd5TYkvSGH8=" height="35px">
            <li>Thursday:	    11AM-10PM</li>
            <li> <img src = "https://media.istockphoto.com/id/843213562/vector/cartoon-with-contour-of-pizza-slice-with-melted-cheese-and-pepperoni.jpg?s=612x612&w=0&k=20&c=St6rIJz83w2MjwSPj4EvHA8a4x_z9Rgmsd5TYkvSGH8=" height="35px">
            <li>Friday:	    11AM-10PM</li>
            <li> <img src = "https://media.istockphoto.com/id/843213562/vector/cartoon-with-contour-of-pizza-slice-with-melted-cheese-and-pepperoni.jpg?s=612x612&w=0&k=20&c=St6rIJz83w2MjwSPj4EvHA8a4x_z9Rgmsd5TYkvSGH8=" height="35px">
            <li>Saturday:	    11AM-10PM</li>
            <li> <img src = "https://media.istockphoto.com/id/843213562/vector/cartoon-with-contour-of-pizza-slice-with-melted-cheese-and-pepperoni.jpg?s=612x612&w=0&k=20&c=St6rIJz83w2MjwSPj4EvHA8a4x_z9Rgmsd5TYkvSGH8=" height="35px">
            <li>Sunday:	    Closed</li>
        </ul>
    </aside>
<?php
    }
?>

<?php
    function RightBarSpecials()
    {
?>
    <aside class = "rbar"> 
        <ul class="specials">
            <li class="spec-title">Specials</li>
            <br></br>
            <li>Two-One Topping Pizzas ($18.99)</li>
            <li> <img src = "https://media.istockphoto.com/id/843213562/vector/cartoon-with-contour-of-pizza-slice-with-melted-cheese-and-pepperoni.jpg?s=612x612&w=0&k=20&c=St6rIJz83w2MjwSPj4EvHA8a4x_z9Rgmsd5TYkvSGH8=" height="35px">
            <li>Five or More Custom Pizzas each priced at (9.99)</li>
            <li> <img src = "https://media.istockphoto.com/id/843213562/vector/cartoon-with-contour-of-pizza-slice-with-melted-cheese-and-pepperoni.jpg?s=612x612&w=0&k=20&c=St6rIJz83w2MjwSPj4EvHA8a4x_z9Rgmsd5TYkvSGH8=" height="35px">
            <li>Spend $25 get one FREE Basket of Mozzarella Sticks</li>
            <li> <img src = "https://media.istockphoto.com/id/843213562/vector/cartoon-with-contour-of-pizza-slice-with-melted-cheese-and-pepperoni.jpg?s=612x612&w=0&k=20&c=St6rIJz83w2MjwSPj4EvHA8a4x_z9Rgmsd5TYkvSGH8=" height="35px">
            <li>Family Box (Any Two Customs Pizzas, Any Two Appatizers, One Large Side) ($32.99) </li>
            <li> <img src = "https://media.istockphoto.com/id/843213562/vector/cartoon-with-contour-of-pizza-slice-with-melted-cheese-and-pepperoni.jpg?s=612x612&w=0&k=20&c=St6rIJz83w2MjwSPj4EvHA8a4x_z9Rgmsd5TYkvSGH8=" height="35px">
            <li>Monday Mania (Bottomless Sides with any Purchase of Two or More Pizzas)</li>
        </ul>
    </aside>
<?php
    }
?>

<?php
    function PictureUnderBars()
    {
?>
    <figure class = "lbox"> 
        <img src="https://cdn.pixabay.com/photo/2022/10/06/22/22/pizza-7503664_960_720.png" height="auto" width="200" alt="pizza">
    </figure>
    <figure class = "rbox"> 
        <img src="https://static.vecteezy.com/system/resources/previews/010/553/790/original/french-fries-fast-food-icon-clipart-cartoon-animated-illustration-in-white-background-vector.jpg" height="260px">
    </figure>
<?php
    }
?>

<?php
function Footer() {
?>
    <footer class="footer-main">
        <?php
        // check for a user
        if (isset($_SESSION["Email"])) {
            ?>
            <p>Current User: <?php echo $_SESSION["Email"]; ?></p>
            <p><a href="Logout.php">Log Out</a> when finished</p>
            <?php
        } else {
            ?>
            <p>No user logged in</p>
            <p>Please <a href="Login.php">Log in</a></p>
            <p>Please <a href="Register.php">Register</a></p>
            <?php
        }
        ?>
    </footer>
<?php
}
?>

<?php
    function PageStart()
    {
?>
     <!--Start of About Container Main Code-->
    <body>  
        <section class="main-container">

<?php
    }
?>


<?php
    function PageEnd()
    {
?>
   </section>    
    </body>
    </html>

<?php
    }
?>








<?php
    function GrabFood( $category )
    {
        $Server = "151.161.91.21";
            $UserName = "tal6010";
            $Password = "temp!7734";
            $Database = "tal6010";

            $Connection = new mysqli( $Server, $UserName, $Password, $Database );

            if ( $Connection->connect_error )
            {
                echo "<h2>Database Error</h2>\n";
                die( "MySQLi Connection Error: ".$Connection->connect_error."\n" );
            }

            $SQL = "select title, price from menu_items where category = \"$category\";";
                
            $Results = $Connection->query( $SQL );

            if ( $Results )
            {
                echo "<table class=\"menutable\">\n";

                while( $Row = $Results->fetch_row() )
                {
                    echo "   <tr>\n";

                    for( $i=0; $i<count($Row); $i++ )
                    {
                        echo "     <td>".$Row[$i]."</td>\n";
                    }
                    echo "   </tr>\n";
                }
                echo "</table>\n";
            }
            else
            {
                echo "<p>No results returned from the query</p>\n";
            }
            $Connection->close();
    }
?>
