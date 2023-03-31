<?php include "pizzahouse.inc";
     
    HTMLStart( "Takeout Page" );

    PageStart();

    PizzaHouseHeader();

    Nav();  

    PageTitle("Takeout");

    LeftBarHours();

    RightBarSpecials();

    PictureUnderBars();

    Footer();

?>



<main>
    <!-- use a grid to layout the main content -->
    <div class="takeout-container">
        <section class="takeout-appetizers menu">
            <h3 class="aligncenter" onclick="LoadMenu( 'Appetizers.html', 'menu-apps');">Appetizers</h3>
            <div id="menu-apps"></div>
        </section>
    
        <section class="takeout-entrees menu">           
            <h3 class="aligncenter" onclick="LoadMenu( 'Entree.html', 'menu-entrees');">Entrees</h3>
            <div id="menu-entrees"></div>
        </section>
            
        <section class="takeout-drinks menu">                    
            <h3 class="aligncenter" onclick="LoadMenu( 'Drinks.html', 'menu-drinks');">Drinks</h3>
            <div id="menu-drinks"></div>
        </section>     
                     
        <section class="takeout-sides menu">                    
            <h3 class="aligncenter" onclick="LoadMenu( 'Drinks.html', 'menu-sides');">Sides</h3>
            <div id="menu-sides"></div>
        </section> 
          
        <!-- this section has the cart -->
        <section class="takeout-cart menu">
            
            <!-- allow the whole table as a place to drop. note that
            the destination id is for the tbody section of the
            table. that is where the rows will be created in the
            drop function -->
            <table class="takeout-table" ondragover="AllowDrop( event );" ondrop="Drop( event, 'order-cart', 'order-total' );">
                <thead>
                    
                    <tr>
                        <th colspan="3">Cart</th>
                    </tr>
                    
                    <tr>
                        <th class="menu-item">Item</th>
                        <th class="menu-quantity">Qty</th>
                        <th class="menu-price">Price</th>
                    </tr>

                </thead>
            
                <tfoot>
                    <th class="alignright" colspan="2">Total</th>
                    <th id="order-total" class="menu-price alignright">$0.00</th>
                </tfoot>
                                    
                <!-- this is where the items will be created -->
                <tbody id="order-cart" >
                </tbody>
            
            </table>
        </section>
    </div>
</main> 
<?php 

PageEnd();

?>