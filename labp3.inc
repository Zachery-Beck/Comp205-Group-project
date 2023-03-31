<?php
    // lab 16 php include file

    // function to write the header
    function PageHeader()
    {
?>
        <!-- header of the page -->
        <header>
            <h1>PHP is very cool!</h1>
        </header>
<?php        
    }
?>

<?php
    // lab 16 php include file

    // function to write the Nav
    function PageNav()
    {
?>
        <!-- navigation stuff -->
        <nav>
            <div class="nav-item"><a href="Lab-P3-Page1.php">Page 1</a></div>
            <div class="nav-item"><a href="Lab-P3-Page2.php">Page 2</a></div>
        </nav>
<?php        
    }
?>

<?php
    // lab 16 php include file

    // function to write the Footer
    function PageFooter()
    {
?>

        <!-- page footer -->
        <footer>
            <h1>Footer Section</h1>
        </footer>
<?php        
    }
?>

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
            <link href="Lab-P3.css" type="text/css" rel="Stylesheet" />    
        </head>
        <body>
<?php
    }
?>

<?php
    // function for the end of an html page
    function HTMLEnd()
    {
?>
        </body>
        </html>
<?php
    }
?>

<?php
    }

    // function for the start of the grid
    function GridStart()
    {
?>
        <!-- grid container -->
        <div class="page-container">        
<?php
    }

    // function to write the end of the grid
    function GridEnd()
    {
?>
        <!-- end of the grid container -->
        </div>
<?php
    }
?>






