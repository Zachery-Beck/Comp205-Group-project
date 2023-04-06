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
            <ul>
                <li>Make your Own Pizza (Starting at $12.99)</li>
                <br>
                <li>Five Cheese Pizza ($13.99)</li>
                <br>
                <li>Meat Lovers Pizza ($16.99)</li>
                <br>
                <li>Spicy Italian Sausage Pizza ($14.99)</li>
                <br>
                <li>Supreme Pizza ($15.99)</li>
                <br>
                <li>Bone in Wings (Dozen- $12.99 or Half Dozen- $6.99) </li>
                <br>
                <li>Chicken Tenders (5 piece- $10.99 or 3 piece- $5.99)</li>
            </ul>
        </aside>
        <!--Appetizers-->
        <aside class="menu-mbar">   
            <ul>
                <li>Mozzarella Sticks $4.49</li>
                <br>
                <li>Spinach & Artichoke Dip $6.99</li>
                <br>
                <li>Brew Pub Pretzels & Beer Cheese Dip $6.99</li>
                <br>
                <li>Fried Pickles $4.99</li>
                <br>
                <li>Chicken Caesar Salad $5 .49</li>
                <br>
                <li>Tater Skins $3.49</li>
                <br>
                <li>Grilled Chicken Salad $6 .49</li>
            </ul>
        </aside>
        <!--Sides-->
        <aside class="menu-rbar">   
            <ul>
                <li>Fries ($3.49)</li>
                <br>
                <li>Cheese Fries ($4.49)</li>
                <li>Onion Rings	($3.49)</li>
                <br>
                <li>Breadsticks ($5.99)</li>
                <br>
                <li>Cheese Sticks ($5.29)</li>
            </ul>
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
            <ul>
                <li>Pepsi ($2.50)</li>
                <br>
                <li>Diet Pepsi ($2.50)</li>
                <br>
                <li>Pepsi Wild Cherry ($2.50)</li> 
                <br>   
                <li>Diet Wild Cherry Pepsi ($2.50)</li>
                <br>
                <li>Ice Tea ($2.50)</li>
            </ul>
        </aside>
        <!--Drinks Middle-->
        <aside class="menu-bbar2">
            <ul>
                <li>Sierra Mist ($2.50)</li>
                <br>
                <li>Diet Sierra Mist ($2.50)</li>
                <br>
                <li>Dr. Pepper ($2.50)</li>
                <br>
                <li>Diet Dr. Pepper ($2.50)</li>
                <br>
                <li>Water ($1.00)</li>
            </ul>
        </aside>
        <!--Drinks Right-->
        <aside class="menu-bbar3">
            <ul>
                <li>Mountain Dew ($2.50)</li>
                <br>
                <li>Diet Mountain Dew ($2.50)</li>
                <br>
                <li>Mug Root Beer ($2.50)</li>
                <br>
                <li>Crush Orange ($2.50)</li>
                <br>
                <li>Baja Blast ($2.50)</li>
            </ul>
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