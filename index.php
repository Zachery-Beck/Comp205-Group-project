<?php require "pizzahouse.inc";
   
  HTMLStart( "Home Page" );

  PageStart();

  PizzaHouseHeader();

  Nav();

  PageTitle("Welcome to Pizza House");
    
  LeftBarHours();

  RightBarSpecials();
    
  PictureUnderBars();
    
  Footer();

?>
<main class = "main">
  <!--Main Text-->
   <p class="home-main-text">
     Pizza House makes New York style pizza in downtown South Park, CO.
      We're right on Market St. near El Pollo loco in the heart of South Park.
      We have much more than just pizza. We have great hospitality and a great selection
      of entrees, appetizers, and sides. We also have great availablility that allows for customers
      to get their favorite pizza whenever they need.
    </p>
</main>
<?php 

  PageEnd();

?>