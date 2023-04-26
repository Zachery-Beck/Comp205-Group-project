<?php
            require "pizzahouse.inc";
            $Connection = DatabaseConnect();

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