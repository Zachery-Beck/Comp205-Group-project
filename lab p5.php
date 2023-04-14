<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="Lab P5.css">
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<h1>Countries of the Western Hemisphere</h1>
<?php
// set the connection information
//      151.161.91.21 is the ip address to the database server.
//      set the $UserName and $Password to your credentials.
//      set the $Database to your penguin user name.
$Server = "151.161.91.21";
$UserName = "zeb8809";
$Password = "temp!7683";
$Database = "zeb8809";

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
$SQL = "select id, name, continent, population, gnp from countries;";
// execute the query
//      use the query method of the $Connection object
$Results = $Connection->query( $SQL );
// check for results
//      $Results will evaluate to true if there data is returned
//      from the database, false if no data is returned
if ( $Results )
{
    // results returned
    echo "<p>Results returned from the query</p>\n";  
    // start the table HTML
echo "<table>\n";

// add the HTML for a table header row
echo "   <thead>\n";
echo "      <th>ID</th>\n";
echo "      <th>Name</th>\n";
echo "      <th>Continent</th>\n";
echo "      <th>Population</th>\n";
echo "      <th>GNP</th>\n";
echo "   </thead>\n";
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
}
else
{
    // no results returned
    echo "<p>No results returned from the query</p>\n";
}
     // close the connection
$Connection->close();
?>

</body>
</html>