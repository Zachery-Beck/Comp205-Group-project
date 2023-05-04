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
// connect to the database
            $Connection = DatabaseConnect();
// make a select statement to get data from the database
            $SQL = "select title, price from menu_items where category = \"$category\";";
// execute the query
// use the query method of the $Connection object 
            $Results = $Connection->query( $SQL );
// check for results
// $Results will evaluate to true if there data is returned
// from the database, false if no data is returned
            if ( $Results )
            {
                // results returned
                // start the table HTML
                echo "<table class=\"menutable\">\n";
// loop through the results
// the fecth_row method returns an array of the column
// data - one item in the array for each column in the
// select statement.
//
// the statement in the while will evaluate to false when
// there are no more rows
                while( $Row = $Results->fetch_row() )
                {
                    // add table row
                    echo "   <tr>\n";
                    // loop through the items in the array
                    // the count function returns the number of items
                    // in the array.
                    for( $i=0; $i<count($Row); $i++ )
                    {
                        // add table cells
                        echo "     <td>".$Row[$i]."</td>\n";
                    }
                    // end of the table row
                    echo "   </tr>\n";
                }
                // stop the table HTML
                echo "</table>\n";
            }
            else
            {
                // no results returned
                echo "<p>No results returned from the query</p>\n";
            }
            // close the connection
            $Connection->close();
    }
?>

<?php
    function DatabaseConnect()
    {

        // set the connection information
        //      willy is the server name on the penguin network
        //      set the UserName and Password to your credentials
        //      set the Database to your database (you mysql UserName)
            $Server = "151.161.91.21";
            $UserName = "tal6010";
            $Password = "temp!7734";
            $Database = "tal6010";

        // connect to the database
        //      create a new instance of a mysqli object. this
        //      object contains the connection to the mysql server
        $Connection = new mysqli( $Server, $UserName, $Password, $Database );

        // check for a successful connection
        //      connect_error will evaluate to true if there is an error
        if ( $Connection->connect_error )
        {
            // stop the script and echo an error message
            echo "<h2>Database Error</h2>\n";
            die( "<p>MySQLi Connection Error: ".$Connection->connect_error."</p>\n" );
        }

        // return the connection
        return $Connection;
    }
?>


<?php
// insert data
function InsertUser()
{
    // check to see if something was sent via POST
    if ( isset( $_POST["Email"] ))
    {
        <meta http-equiv="Refresh" content="0; url='Login.php'" />
        }

        // connect to the database
        $Connection = DatabaseConnect();   
        
        // build the insert sql
        $SQL = "insert into users( Email, Password, Name, Address, City, State, Zip ) value (";
        $SQL .= "\"".$_POST['Email']."\"";
        $SQL .= ",\"".$_POST['Password']."\"";
        $SQL .= ",\"".$_POST['Name']."\"";
        $SQL .= ",\"".$_POST['Address']."\"";
        $SQL .= ",\"".$_POST['City']."\"";
        $SQL .= ",\"".$_POST['State']."\"";
        $SQL .= ",\"".$_POST['Zip']."\"";
        $SQL .= ");";   
        
        // execute the insert
        $Results = $Connection->query( $SQL );   
        
        // close the connection
        $Connection->close();         
        
        // check if the insert was successful
        if ($Results === true) {
            return true;
        } else {
            return false;
        }
    }
    else {
        // error message
        echo "<p>Error with insert</p>\n";
        return false;
    }  
}
?>
