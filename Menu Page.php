<?php require "pizzahouse.inc";
      
    HTMLStart( "Menu Page" );

    PageStart();

    PizzaHouseHeader();

    Nav();

    PageTitle("Menu");

    LeftBarHours();

    RightBarSpecials();

    PictureUnderBars();

    Footer();

?>
<main class="menu-main">
    <section class='menu-container'>
        <!--Entrees-->
        <aside class="menu-lbar">   
<?php
            // lab P6 code

            // set the connection information
            //      151.161.91.21 is the ip address of the database server
            //      set the UserName and Password to your credentials
            //      set the database to your username 
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
                die( "MySQLi Connection Error: ".$Connection->connect_error."\n" );
            }

            // make a select statement to get data from the database
            // make a select statement to get data from the database
            $SQL = "select title, price from menu_items where category = \"entree\";";
                
            // execute the query
            //      use the query method of the $Connection object
            $Results = $Connection->query( $SQL );

            // check for results
            //      $Results will evaluate to true if there data is returned
            //      from the database, false if no data is returned
            if ( $Results )
            {
            

                // start the table HTML
                echo "<table>\n";


                // loop through the results
                //      the fecth_row method returns an array of the column
                //      data - one item in the array for each column in the
                //      select statement.
                //
                //      the statement in the while will evaluate to false when
                //      there are no more rows
                while( $Row = $Results->fetch_row() )
                {
                    // add  table row
                    echo "   <tr>\n";

                    // loop through the items in the array
                    //      the count function returns the number of items
                    //      in the array.
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
?>
        </aside>
        <!--Appetizers-->
        <aside class="menu-mbar">   
        <?php
            // lab P6 code

            // set the connection information
            //      151.161.91.21 is the ip address of the database server
            //      set the UserName and Password to your credentials
            //      set the database to your username 
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
                die( "MySQLi Connection Error: ".$Connection->connect_error."\n" );
            }

            // make a select statement to get data from the database
            // make a select statement to get data from the database
            $SQL = "select title, price from menu_items where category = \"appetizer\";";
                
            // execute the query
            //      use the query method of the $Connection object
            $Results = $Connection->query( $SQL );

            // check for results
            //      $Results will evaluate to true if there data is returned
            //      from the database, false if no data is returned
            if ( $Results )
            {
            

                // start the table HTML
                echo "<table>\n";


                // loop through the results
                //      the fecth_row method returns an array of the column
                //      data - one item in the array for each column in the
                //      select statement.
                //
                //      the statement in the while will evaluate to false when
                //      there are no more rows
                while( $Row = $Results->fetch_row() )
                {
                    // add  table row
                    echo "   <tr>\n";

                    // loop through the items in the array
                    //      the count function returns the number of items
                    //      in the array.
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
?>
        </aside>
        <!--Sides-->
        <aside class="menu-rbar">   
        <?php
            // lab P6 code

            // set the connection information
            //      151.161.91.21 is the ip address of the database server
            //      set the UserName and Password to your credentials
            //      set the database to your username 
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
                die( "MySQLi Connection Error: ".$Connection->connect_error."\n" );
            }

            // make a select statement to get data from the database
            // make a select statement to get data from the database
            $SQL = "select title, price from menu_items where category = \"sides\";";
                
            // execute the query
            //      use the query method of the $Connection object
            $Results = $Connection->query( $SQL );

            // check for results
            //      $Results will evaluate to true if there data is returned
            //      from the database, false if no data is returned
            if ( $Results )
            {
            

                // start the table HTML
                echo "<table>\n";


                // loop through the results
                //      the fecth_row method returns an array of the column
                //      data - one item in the array for each column in the
                //      select statement.
                //
                //      the statement in the while will evaluate to false when
                //      there are no more rows
                while( $Row = $Results->fetch_row() )
                {
                    // add  table row
                    echo "   <tr>\n";

                    // loop through the items in the array
                    //      the count function returns the number of items
                    //      in the array.
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
?>
         </aside>
        <!--Pizza Photo-->
        <figure class="menu-lbox">   
             <img src="https://img.freepik.com/free-vector/sticker-template-with-pizza-isolated_1308-62307.jpg?w=1380&t=st=1678328833~exp=1678329433~hmac=ca3c3f03dca0f7cb48803eca2f5091fec850d342194d690392a5d36ca77c19e4" height="auto" width="200" alt="pizza">
        </figure>
        <!--Wings Photo-->
        <figure class="menu-mbox">   
            <img src="https://media.istockphoto.com/id/165595676/vector/hot-wing.jpg?s=612x612&w=0&k=20&c=1hrnkh4QWdXcMHfxgWdVYpcnJH0wIR6pPLUba05CGnU=" height="200" >
        </figure>
        <!--Fries Photo-->
        <figure class="menu-rbox">   
            <img src="https://img.freepik.com/free-vector/french-fries-sticker-white-background_1308-71839.jpg?w=1060&t=st=1678328991~exp=1678329591~hmac=bb4ac0278e7df39a96989c037bf206e398308e3379f4d9f2dad88fd040ddfc24" height="200px">
        </figure>
        <!--Drinks Left-->
        <aside class="menu-bbar1">   
        <?php
            // lab P6 code

            // set the connection information
            //      151.161.91.21 is the ip address of the database server
            //      set the UserName and Password to your credentials
            //      set the database to your username 
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
                die( "MySQLi Connection Error: ".$Connection->connect_error."\n" );
            }

            // make a select statement to get data from the database
            // make a select statement to get data from the database
            $SQL = "select title, price from menu_items where category = \"drink1\";";
                
            // execute the query
            //      use the query method of the $Connection object
            $Results = $Connection->query( $SQL );

            // check for results
            //      $Results will evaluate to true if there data is returned
            //      from the database, false if no data is returned
            if ( $Results )
            {
            

                // start the table HTML
                echo "<table>\n";


                // loop through the results
                //      the fecth_row method returns an array of the column
                //      data - one item in the array for each column in the
                //      select statement.
                //
                //      the statement in the while will evaluate to false when
                //      there are no more rows
                while( $Row = $Results->fetch_row() )
                {
                    // add  table row
                    echo "   <tr>\n";

                    // loop through the items in the array
                    //      the count function returns the number of items
                    //      in the array.
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
?>
        </aside>
        <!--Drinks Middle-->
        <aside class="menu-bbar2">
        <?php
            // lab P6 code

            // set the connection information
            //      151.161.91.21 is the ip address of the database server
            //      set the UserName and Password to your credentials
            //      set the database to your username 
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
                die( "MySQLi Connection Error: ".$Connection->connect_error."\n" );
            }

            // make a select statement to get data from the database
            // make a select statement to get data from the database
            $SQL = "select title, price from menu_items where category = \"drink2\";";
                
            // execute the query
            //      use the query method of the $Connection object
            $Results = $Connection->query( $SQL );

            // check for results
            //      $Results will evaluate to true if there data is returned
            //      from the database, false if no data is returned
            if ( $Results )
            {
            

                // start the table HTML
                echo "<table>\n";


                // loop through the results
                //      the fecth_row method returns an array of the column
                //      data - one item in the array for each column in the
                //      select statement.
                //
                //      the statement in the while will evaluate to false when
                //      there are no more rows
                while( $Row = $Results->fetch_row() )
                {
                    // add  table row
                    echo "   <tr>\n";

                    // loop through the items in the array
                    //      the count function returns the number of items
                    //      in the array.
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
?>
        </aside>
        <!--Drinks Right-->
        <aside class="menu-bbar3">
        <?php
            // lab P6 code

            // set the connection information
            //      151.161.91.21 is the ip address of the database server
            //      set the UserName and Password to your credentials
            //      set the database to your username 
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
                die( "MySQLi Connection Error: ".$Connection->connect_error."\n" );
            }

            // make a select statement to get data from the database
            // make a select statement to get data from the database
            $SQL = "select title, price from menu_items where category = \"drink3\";";
                
            // execute the query
            //      use the query method of the $Connection object
            $Results = $Connection->query( $SQL );

            // check for results
            //      $Results will evaluate to true if there data is returned
            //      from the database, false if no data is returned
            if ( $Results )
            {
            

                // start the table HTML
                echo "<table>\n";


                // loop through the results
                //      the fecth_row method returns an array of the column
                //      data - one item in the array for each column in the
                //      select statement.
                //
                //      the statement in the while will evaluate to false when
                //      there are no more rows
                while( $Row = $Results->fetch_row() )
                {
                    // add  table row
                    echo "   <tr>\n";

                    // loop through the items in the array
                    //      the count function returns the number of items
                    //      in the array.
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
?>
        </aside>
        <!--Entrees Title-->
        <div class="lbar-subtitle">   
            Entrees 
        </div>
        <!--Appetizers Title-->
        <div class="mbar-subtitle">   
            Appetizers
        </div>
        <!--Sides Title-->
        <div class="rbar-subtitle">   
            Sides
        </div>
        <!--Drinks Title-->
        <div class="bbar-subtitle">   
            Drinks
        </div>
    </main>
</section>
<?php 

    PageEnd();

?>