<?php
    // function for the start of an html page
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
            $SQL = "select title, price, id from menu_items where category='".$_POST['category']."';";
            // $SQL = "select title, price from menu_items where category = \"$category\";";
            // execute the query
            //      use the query method of the $Connection object
            $Results = $Connection->query( $SQL );

            // check for results
            //      $Results will evaluate to true if there data is returned
            //      from the database, false if no data is returned
            if ( $Results )
            {
            

                // start the table HTML
                echo "<table class = phptables>\n";


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
                    // echo "<tr draggable='true' ondragstart='StartDrag(event)' data-price= \"$price\";";
                    echo "<tr draggable='true' id = 'menu".$Row[2]."' ondragstart='StartDrag(event)' data-price='".$Row[1]."'>";
                    

                        // add table cells
                        echo "<td>".$Row[0]."</td>\n";
                        echo "<td>$".$Row[1]."</td>\n";
                    

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