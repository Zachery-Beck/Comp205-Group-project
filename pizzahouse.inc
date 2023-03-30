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