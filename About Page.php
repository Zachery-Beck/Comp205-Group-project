<?php require "pizzahouse.inc";
    
    HTMLStart( "About Page" );

    PageStart();

    PizzaHouseHeader();

    Nav();

    PageTitle("About Us!");

    LeftBarHours();

    RightBarSpecials();

    PictureUnderBars();

    Footer();

?>
<section class="about-container">
        <!--Main Text for Paragraphs with <br> for breaks-->
    <main class="about-main">
        <p class="about-text">Welcome to Pizza House, the beloved pizza joint owned and operated by the iconic characters from the TV show South Park.
            Our restaurant is the go-to spot for locals and tourists alike, serving up classic and creative pizzas made with the 
            freshest ingredients. Whether you're in the mood for a traditional pepperoni pizza or a secret menu creation like the
            "Eric Cartman's Ultimate Nacho Pizza", our restaurant has something for everyone.
            <br></br>
            At Pizza House, you'll be greeted by the familiar faces of South Park's most hilarious characters.
            From the friendly and lovable Butters to the irreverent and sarcastic Cartman, our staff will make
            sure you have a dining experience unlike any other.
            <br></br>
            At Pizza House, we take great pride in using only the freshest and highest quality ingredients to create our pizzas.
            Our signature sauce is made from vine-ripened tomatoes and our cheese is sourced from local dairy farms, ensuring 
            the most authentic and flavorful taste. Each pizza is hand-crafted to order,
            allowing you to customize your toppings and create the perfect pizza that suits your taste buds.
            <br></br>
            So, come on down to Pizza House, where the
            pizza's hot and the humor's even hotter.</p>
    </main>
    <!--Kyle Photo-->
    <figure class = "pic1 pic">
      <img src="https://upload.wikimedia.org/wikipedia/en/thumb/2/25/KyleBroflovski.png/255px-KyleBroflovski.png" height="175px">
        <figcaption class = "script">
            Owner/Ceo
            <br>
            Kyle Broflovski
        </figcaption>
    </figure>
    <!--Stan Photo-->
    <figure class = "pic2 pic">
        <img src="https://upload.wikimedia.org/wikipedia/en/a/a7/StanMarsh.png" height="175px">
        <figcaption class = "script">
            Manager
            <br>
            Stan Marsh
        </figcaption>
    </figure>
    <!--Butters Photo-->
    <figure class = "pic3 pic">
        <img src="https://upload.wikimedia.org/wikipedia/en/thumb/0/06/ButtersStotch.png/195px-ButtersStotch.png" height="175px">
        <figcaption class = "script">
            Assistant Manager
            <br>
             Butters Stotch
        </figcaption>
    </figure>
    <!--Chef Photo-->
    <figure class = "pic4 pic">
       <img src="https://upload.wikimedia.org/wikipedia/en/1/1e/SouthParkChef.png" height="175px">
       <figcaption class = "script">
            Head Chef
            <br>
            Chef
    </figcaption>
    </figure>
    <!--Cartman Photo-->
    <figure class = "pic5 pic">
        <img src="https://upload.wikimedia.org/wikipedia/en/7/77/EricCartman.png" height="175px">
        <figcaption class = "script">
            Quality Control
            <br>
            Eric Cartman
        </figcaption>
    </figure>
</section>
<?php 

PageEnd();

?>