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
                GrabFood( "entree" );
            ?> 
        </aside>
        <!--Appetizers-->
        <aside class="menu-mbar"> 
            <?php
                GrabFood( "appetizer" );
            ?>   
        </aside>
        <!--Sides-->
        <aside class="menu-rbar">   
            <?php
                GrabFood( "sides" );
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
                GrabFood( "drink1" );
            ?>   
        </aside>
        <!--Drinks Middle-->
        <aside class="menu-bbar2">
            <?php
                GrabFood( "drink2" );
            ?>   
        </aside>
        <!--Drinks Right-->
        <aside class="menu-bbar3">
            <?php
                GrabFood( "drink3" );
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