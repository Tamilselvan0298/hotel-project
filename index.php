<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
  <link href="index.css" rel="stylesheet">
  <script type="text/javascript">
    var menulist=document.getElementById("menulist");
    menulist.style.maxHeight="0px";
    menulist.style.maxwidth="0px";
    function menubar()
    {
        if((menulist.style.maxHeight="0px") && (contactus.style.maxHeight="0px"))
        {
            menulist.style.maxHeight="1000px";
            contactus.style.maxHeight="1000px";
        }
        else{
            menulist.style.maxHeight="0px";
            contactus.style.maxHeight="0px";
        }
    }
</script>
</head>
<body>
    <header>
        <!--navigation bar-->
    <div class="mainpage">
        <div class="logo">
            <img src="pics/logo1.png" alt="" height="100px" width="150px">
        </div>
    <div class="menu">
        <ul id="menulist">
            <li><a href="index.php">HOME</a></li>
            <li><a href="#aboutus">ABOUT</a></li>
            <li><a href="#room1">ROOMS</a></li>
            <li><a href="#gallery">GALLERY</a></li>
            <li><a href="#contactus">CONTACT</a></li>
            <li><a href="admin.php">ADMIN</a></li>
             <li><a href="booking.php"><button class="book" >BOOK NOW</button></a></li>
    </ul></div></header>
    <!--image with resort title-->
    <div class="main"><h2 id="over"><strong>WELCOME  TO   LONG   BAY   RESORT</strong></h2></div><br/><br/><br/>
    <div id="activity1"><h1>ACTIVITY</h1><br/><br/><!--activity on resort -->
    <div class="activity">
        <div id="food"></div>
        <div id="pub"></div></div><br/><br/>
    <div class="activity2">
        <div id="games"></div>
        <div id="gym"></div>
    </div></div><br/><br/>
    <div id="room1"><!-- types of room availability -->
        <h1>ROOMS</h1>
        <button type="button" id="leftside" > < </button> <button type="button" id="rightside">></button><br/><br/>
    <div id="room" >
    <div><img id="r1" src="pics/room1.jpg" alt=""><h4 id="r1-1" align="center">Double Bed</h4></div>
    <div> <img id="r2" src="pics/room2.jpg" alt=""><h4 id="r1-1" align="center">Extra Single Bed</h4></div>
    <div> <img id="r3" src="pics/room3.webp" alt=""><h4 id="r1-1" align="center">Single Bed</h4></div>
    <div> <img id="r4" src="pics/room4.jpg" alt=""><h4 id="r1-1" align="center">Premium Room With Single Bed</h4></div>
    <div> <img id="r5" src="pics/room5.png" alt=""><h4 id="r1-1" align="center">Premium Room With Double Bed</h4></div>
    </div></div><br/><br/>
        <div id="gallery"><h1>GALLERY</h1><button type="button" id="leftside"> < </button> <button type="button" id="rightside">></button><br/><br/><br/><!-- gallery of the resort -->
        <div class="galleryimg">
            <img src="pics/g1.jpg" alt="" width="300px" height="300px" id="g1"/><br/><br/>
            <img src="pics/g2.jfif" alt=""  width="300px" height="300px" id="g2"/><br/><img src="pics/g3.jpg" alt=""  width="300px" height="300px" id="g3"/><br/><img src="pics/g4.jpg" alt=""  width="300px" height="300px" id="g4"/><br/><img src="pics/g5.jpg" alt=""  width="300px" height="300px" id="g5"/><br/><img src="pics/g6.jpg" alt=""  width="300px" height="300px" id="g6"/><br/>
        </div></div><br/><br/>
        <!-- About resort -->
    <div id="aboutus"><h1>ABOUT US..</h1><br/><h3>The Earth has its music for those who will listen...<br/></h3> <h5>While at Long Bay Resort, Our guest wake each morning to the sounds of chirping birds and the view of lush green pasture.<br/> This the perfect location to unwind from the hustle bustle of city life for Corporate getaways,Romantic Rendezvous,weddings, Familiy getogether and more.</div></h5><br/>
    <footer><!-- contact resort -->
    <div id="contactus"><h1>CONTACT US..</h1><br/>
        <div class="address">
    <h4><b><center>"The ambience at Long Bay Resort has something infinitely healing in the repeated refrains of nature."</center></b></h4>

            <address><h4 id="reach"><i><center>No.2,Thaiyur Road, Near Market, Kelambakkam, Chennai (Dt), Chennai -603 105.</i><br/>
          (044) - 27781594 | 9710560428,9514973220<br/>
            <a href="booking@longbayresort.com">booking@longbayresort.com</a></h4></center></address><br/>
_______________________________________________________________________________________________________________<br/>
            
            <center>Copyright © Resort 2019. All rights reserved. Maintained By: Long Bay Resort</center></div>
        <div class="icons">
            
  <a href="https://instagram.com/bonny_boy_02?igshid=MzNlNGNkZWQ4Mg=="><img id="insta" src="pics/insta.jpg" alt="" width="50px" height="50px" style="border-radius: 30% ;"></a><br/> <br/><a href="https://wa.me/qr/PFJ45XIC63QAJ1"><img id="whatsapp" src="pics/whatsapp.jpeg" alt="" width="50px" height="50px"  style="border-radius: 30%;"> </a><br/><br/><a><img id="twitter" src="pics/twitter.jpeg" alt="" width="50px" height="50px" style="border-radius: 30%;"></a></div>

</div></div></footer>    
</body>
</html>