<?php include "pizzahouse.inc"; 
    
    HTMLStart( "Map Page" );

    PageStart();

    PizzaHouseHeader();

    Nav();

    PageTitle("Where to find us!");

    LeftBarHours();

    RightBarSpecials();

    PictureUnderBars();

    Footer();

?>
<main class = "map-main">
    <!--Map Implementation-->
    <main class ='map-main'>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d395.15306831099656!2d106.00251697463969!3d39.22476602629059!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x876ae84521fdf3fd
            %3A0xaeee890901cb89d6!2s455%20Main%20St%2C%20Fairplay%2C%20CO%2080440!5e0!3m2!1sen!2sus!4v1677099604027!5m2!1sen!2sus"
            width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-whendowngrade">
        </iframe>
    </main>
        <!--Address Bar-->
        <footer class ='map-bbar'>
            Address: 455 Main St, Fairplay, CO 80440
        </footer>
</main>
<?php 

    PageEnd();

?>
