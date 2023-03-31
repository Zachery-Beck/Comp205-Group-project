<?php include "pizzahouse.inc";
    
    HTMLStart( "Contact Page" );

    PageStart();

    PizzaHouseHeader();

    Nav();

    PageTitle("Contact Us!");

    LeftBarHours();

    RightBarSpecials();
    
    PictureUnderBars();

    Footer();

?>
<main class = "contact-main">
    <!-- opens page spefic container --> 
    <p>
        <!-- Note for Professor -->
        In the future we will be implementing a contact form that will
        allow our customers to send contact requests to an email. We plan on implementing this when we learn about
        PHP and Java Script but for now we are leaving this grid space open for the future.
    </p>
</main>
<?php 

    PageEnd();

?>