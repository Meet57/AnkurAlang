<!doctype html>
<html lang="ja-JP">
<head>
	<meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Ankur Enterprise</title>

    <meta name="keywords" content="machine,tools,industry,enterprise,cnc,vmc,bandsaw,boring,grinder,lathe,machines,cutter,vtl,turning" />
    <meta name="description" content="Ankur Enterprise is a company dealing with industrial tools and machines manufactured with precised quality and efficiency." />
    <meta name="author" content="ANKUR ENTERPRISE INC." />

    <meta property="og:title" content="ANKUR ENTERPRISE" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://www.ankuralang.com/" />
    <meta property="og:image" content="http://www.ankuralang.com/img/logo-ankur.jpg" />
    <meta property="og:site_name" content="ANKUR ENTERPRISE" />
    <meta property="og:description" content="Ankur Enterprise is a company dealing with industrial tools and machines manufactured with precised quality and efficiency." />

    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="ANKUR ENTERPRISE INC.">
    <meta name="twitter:description" content="Ankur Enterprise is a company dealing with industrial tools and machines manufactured with precised quality and efficiency.">
    <meta name="twitter:url" content="https://www.ankuralang.com">
    <meta name="twitter:image" content="https://www.ankuralang.com/img/logo-ankur.jpg">

	<link rel="stylesheet" href="ankur.css">
    <link rel="stylesheet" href="about.css">
    <link rel="icon" type="image/png" href="img/logo.png"/>
	<link rel="stylesheet" href="node_modules/animate.css/animate.min.css">
    <link rel="stylesheet" href="node_modules/swiper/swiper-bundle.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="node_modules/morphext/dist/morphext.css">

    <script src="libs.js" type="text/javascript"></script>
    <script src="ankur.js" type="text/javascript"></script>
    <!-- <script src="checking.js" type="text/javascript"></script> -->
	<script src="node_modules/wow.js/dist/wow.js" type="text/javascript"></script>
	<script src="node_modules/morphext/dist/morphext.min.js" type="text/javascript"></script>
    <script src="https://kit.fontawesome.com/b2706093e4.js" crossorigin="anonymous"></script>
	<script src="assets/ankur/waypoints/lib/jquery.waypoints.min.js"></script>
	<script src="assets/ankur/waypoints/lib/shortcuts/inview.min.js"></script>
	<script src="assets/ankur/parallax.js-1.5.0/parallax.js"></script>
    <script src="assets/ankur/jquery.hoverdir.js"></script>
    <script src="node_modules/swiper/swiper-bundle.js" type="text/javascript"></script>
 
</head>


<body id="mikiyakobayashi" class="sub">

    <div id="wrap">
        <div id="header">
	       <div class="container">
		      <div id="logo">
			     <img class="ankur_logo" src="img/logo-ankur.jpeg">
		      </div>
		

        		<div id="gnavi" class="nav">
        			<div class="nav-btn">
        				<a href="#gnavi-links">
        					<span style="margin: 10px 10px 10px 10px;font-size: 23px" class="bars">
        						<span class="bar"></span>
        						<span class="bar"></span>
        						<span class="bar"></span>
        						<span class="bar"></span>
        					</span>
        					<span class="label">GO-TO</span>
        				</a>
        			</div>
        		</div>

		
                <div id="cnavi" class="nav">
                	<div class="nav-btn">
                		<a href="#cnavi-links">
                			<!-- <i class="icon-search icon"></i> -->
                            <i style="margin: 20px 15px 15px 15px;font-size: 23px" class="fa fa-toolbox"></i>
                			<span class="label">
                			
                				<span class="main-label">PRODUCTS</span>
                			
                			</span>
                		</a>
                	</div>
                </div>

	       </div>
        </div>

<nav id="cnavi-links" class="nav-links">

<ul>
	<li>
		<?php
            include_once("assets/conn.php");
            $sql = "SELECT Name FROM `category`";
            $result = $conn->query($sql);

            while($row = $result->fetch_assoc()) {
            ?>
            <a class="dropdown-item bale" href="searchCategory.php?cat=<?php echo $row['Name'];?>"><?php echo $row["Name"];?></a>
            <?php
            }
         ?>

          
     </li>
</ul>

</nav>


<section id="about-intro">
    
    <div class="about-intro-div">
        <div class="about-image-first-row animated slideInLeft">
            <img src="img/carousel/1.jpeg" class="about-intro-image-1">
            <div class="about-image-text-1 animated fadeInUp">
                <p>
                    Ankur Enterprises, an Indian Co. based in Ahmedabad (Gujarat), is a trusted name in the market due to its used imported machinery.
                </p>
            </div>
            <img src="img/carousel/2.jpeg" class="about-intro-image-1">
        </div>

    <div class="about-text-main">

        <div class="about-text-pre animated fadeInLeft">
            <p style="font-size: 20px;font-family: cookie">Our company is under the leadership of Manoj Soni who has protean experience of 30 years and Deepak Soni who has versatile experience of 20 years in used machinery.</p>
        </div>

        <div class="about-text animated fadeInUp">
            <h2 class="about-heading">
                The customers are not dealing with a company engaged in supplying tools and machinery but with a family who caters all your needs at one place.
            </h2>
        </div>

        <div class="about-text-post animated fadeInRight">
            <p style="font-size: 20px;font-family: cookie">With our excellent reputation built into every machine, you can rest assured knowing you’re not just buying a product.</p><br/><br/>
        </div>

    </div>

        <div class="about-intro-second-row animated slideInRight">
            <img src="img/carousel/3.jpeg" class="about-intro-image-2">
            <div class="about-image-text-2 animated fadeInBottom">
                <p>
                    Established in 1983 on the mighty shoulders of J.D Soni, the company has been serving in the corporate market since 35 years.
                </p>
            </div>
            <img src="img/carousel/5.jpeg" class="about-intro-image-2">
        </div>
    </div>

</section>

<section id="about-mobile-section-heading">

    <div class="about-mobile-heading" style="background-color: white;padding: 20px;margin: 20px">

        <h2 style="font-family: hack;font-size: 35px;letter-spacing: 2px">

            The customers are not dealing with a company engaged in supplying Industrial tools and machinery but with a family who caters all your needs at one place.


        </h2>

    </div>

    </section>

<section id="about-mobile">

    <div class="about-mobile-intro">

        <!-- Slider main container -->
        <div class="swiper-container">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide"><img style="max-width: 100%;height: 300px" src="img/carousel/1.jpeg" alt="cnc lathe"></div>
                <div class="swiper-slide"><img style="max-width: 100%;height: 300px" src="img/carousel/2.jpeg" alt="cnc lathe"></div>
                <div class="swiper-slide"><img style="max-width: 100%;height: 300px" src="img/carousel/3.jpeg" alt="cnc lathe"></div>
                <div class="swiper-slide"><img style="max-width: 100%;height: 300px" src="img/carousel/5.jpeg" alt="cnc lathe"></div>
                ...
            </div>

            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>

    </div>

    </section>

    <section id="about-intro-2" style="margin-top: -100px">

        <div class="about-mobile-intro-2" style="width: 70%;font-size: 25px">

        <!-- Slider main container -->
        <div class="swiper-container-2">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide">
                    <h1 style="font-size: 30px">Leader</h1>
                    <p>Our company is under the leadership of Manoj Soni who has protean experience of 30 years and Deepak Soni who has versatile experience of 20 years in used machinery trading sector. Our leadership believes in 100% customer satisfaction at all costs.
                    </p>
                </div>


                <div class="swiper-slide">
                    <h1 style="font-size: 30px">Product</h1>
                    <p>We are committed to selling magnificent working machines, our customers include small business holdings and even large companies, manual to CNC. We are promised in bringing Old to Modern Machines to cater to all kinds of customers from small vendors to the users who use it for manufacturing purpose.</p>
                    <p>We stock and sell a wide variety of Industrial Machines which include all kinds of machines like Lathe, Cylindrical Grinder, Milling, Surface Grinder, VTL, CNC Turning, Radial Drill; to name a few. Our large inventory and infrastructure is a non-stop-shop for all your machinery needs. Our machines are kept in experienced hands under our careful attention and for customer satisfaction can be checked under power at our Warehouse in Bakrol.</p>
                    <p>All the major machineries are available in the stock and if not the same can be imported from different countries.</p>    

                </div>


                <div class="swiper-slide">
                    
                    <h1 style="font-size: 30px">Belief</h1>
                    <p>With our excellent reputation built into every machine, you can rest assured knowing you’re not just buying a product — you’re partnering with a team dedicated to your productivity and performance.</p>
                    <p>We believe in service before self and are here to provide you with best and most useful machinery for the specific application as and when required. Our depth of knowledge comes from the experience and reliable source of machinery for the buyer.</p>
                    <p>Years of experience and belief of our customers has always made us to strive hard to provide quality materials at your disposal. Our machineries are tested as soon as it is brought in our warehouse to provide our customers best machinery which suits their need.</p>

                </div>
                
                ...
            </div>

            <div class="swiper-pagination"></div>


        </div>

    </div>

</section>

<section id="about-mobile-section-2">
    <div class="about-mobile-div-2" style="display: flex;flex-direction: column;justify-content: center;margin: auto;background-color: white;padding: 20px;margin: 20px">

        <h1 style="font-size: 40px;font-family: cookie">The Company</h1>

        <h2 style="font-size: 20px">
            
            Ankur Enterprises, an Indian Co. based in Ahmedabad (Gujarat), is a trusted name in the market due to its used imported machinery. We have been serving the customers for more than 35 years, we strive hard to provide our customers the best machinery with maximum quality condition which makes us stockiest of old conventional and CNC machines.

            Established in 1983 by J.D Soni, has maintained a goodwill in the market due to its professional management, the principal on which this company was founded was to supply quality imported and indigenous CNC & Conventional machines to our customers in INDIA.

        </h2>

    </div>
    </section>


<section id="about-mobile-section-3">
  <details open>
    <summary>Leader</summary>
    <div id="details-div">
      <p class="details-p">
          Our company is under the leadership of Manoj Soni who has protean experience of 30 years and Deepak Soni who has versatile experience of 20 years in used machinery trading sector. Our leadership believes in 100% customer satisfaction at all costs.
      </p>
    </div>
  </details>
  <details>
    <summary>Product</summary>
    <div id="details-div">
      <p class="details-p">
        We are committed to selling magnificent working machines, our customers include small business holdings and even large companies, manual to CNC. We are promised in bringing Old to Modern Machines to cater to all kinds of customers from small vendors to the users who use it for manufacturing purpose.
        We stock and sell a wide variety of Industrial Machines which include all kinds of machines like Lathe, Cylindrical Grinder, Milling, Surface Grinder, VTL, CNC Turning, Radial Drill; to name a few. Our large inventory and infrastructure is a non-stop-shop for all your machinery needs. Our machines are kept in experienced hands under our careful attention and for customer satisfaction can be checked under power at our Warehouse in Bakrol.
        All the major machineries are available in the stock and if not the same can be imported from different countries.

      </p>
    </div>
  </details>
  <details>
    <summary>Belief</summary>
    <div id="details-div">
      <p class="details-p">
          With our excellent reputation built into every machine, you can rest assured knowing you’re not just buying a product — you’re partnering with a team dedicated to your productivity and performance.
            We believe in service before self and are here to provide you with best and most useful machinery for the specific application as and when required. Our depth of knowledge comes from the experience and reliable source of machinery for the buyer.
            Years of experience and belief of our customers has always made us to strive hard to provide quality materials at your disposal. Our machineries are tested as soon as it is brought in our warehouse to provide our customers best machinery which suits their need.

      </p>
    </div>
  </details>
</section>

<section id="about-history-mobile-section">

    <div class="about-history-mobile-div" style="display: flex;flex-direction: column;background-color: white;justify-content:center;margin: 20px;padding: 20px;border-radius: 20px">

        <h1 style="font-size: 40px;font-family: cookie">Our History</h1>

        <hr/>

        <div class="about-history-inner-div-1" style="display: flex;flex-direction: row">

            <h3 style="font-size: 20px;padding: 10px">Started</h3>
            <p style="font-size: 20px;padding: 10px">1983</p>

        </div>

        <div class="about-history-inner-div-2" style="display: flex;flex-direction: row">

            <h3 style="font-size: 20px;padding: 10px">Established by</h3>
            <p style="font-size: 20px;padding: 10px">J.D Soni</p>

        </div>

        <div class="about-history-inner-div-3" style="display: flex;flex-direction: row">

            <h3 style="font-size: 20px;padding: 10px">Leadership under</h3>
            <p style="font-size: 20px;padding: 10px">Manoj Soni and Deepak Soni</p>

        </div>

        <div class="about-history-inner-div-4" style="display: flex;flex-direction: row">

            <h3 style="font-size: 20px;padding: 10px">Serving since</h3>
            <p style="font-size: 20px;padding: 10px">35 years</p>

        </div>

    </div>

    </section>


<div id="menu">
    <nav id="gnavi-links" class="nav-links">
        <ul>
            <li><a href="index.php"><span class="not-hover">HOME</span></a></li>
            <li><a href="about.php"><span class="not-hover">ABOUT</span></a></li>
            <li><a href="newproducts.php"><span class="not-hover">NEW ARRIVALS</span></a></li>
            <li><a href="ccontact.php"><span class="not-hover">CONTACT</span></a></li>
            <li><a style="margin-left: 12px" href="enquiry.php"><span class="not-hover">ENQUIRY</span></a></li>
        </ul>
    </nav>
</div> 


<section class="footer-section">
    <footer>

        <div class="footer-heading">

        	
            <a class="footer-heading-link" href="/">Ankur Enterprise</a>


        </div>

    <div class="grid-2">

        <div class="footer-links-1">

        <ul class="footer-links-1-list">
        	<li><a href="index.php">Home</a></li>
        	<li><a href="about.php">About</a></li>
        	<li><a href="contact.php">Contact</a></li>
        </ul>	

        </div>

        <div class="footer-social-links">

        	<ul class="footer-social-links-list">

        		<li class="s1"><a href="https://www.youtube.com/channel/UC5wwofLXwypENiQbjmABZdg"  class="fa fa-youtube-play"></a></li>
        		<li class="s1"><a href="https://www.facebook.com/114080283759335/" class="fa fa-facebook"></a></li>
        		<li class="s1"><a href="https://www.instagram.com/p/CFPDsJgBNSt/?igshid=1qrpghgx45jut" class="fa fa-instagram"></a></li>

        	</ul>

        </div>

    <div class="footer-links-2">

        <ul class="footer-links-2-list">
        	<li><a href="index.php">Products</a></li>
        	<li><a href="enquiry.php">Enquiry</a></li>
        	<li><a href="about.php">Address</a></li>
        </ul>	

    </div>

    </div>

    <div class="grid-3">

    	<div class="footer-newsletter">
    		<hr class="vertical" />
    	<div class="footer-contacts">
    		<ul class="footer-contacts-list">
    			<li class="s2"><a href='tel:+918758182115'><span style="padding-top: 20px; padding-right: 15px" class="fa fa-phone"></span>Kunal Soni</a></li>
                <li class="s2"><a href='tel:+919825073206'><span style="padding-top: 20px; padding-right: 15px" class="fa fa-phone"></span>Manoj Soni</a></li>
                <li class="s2"><a href='tel:+919825336082'><span style="padding-top: 20px; padding-right: 15px" class="fa fa-phone"></span>Deepak Soni</a></li>
    		</ul>
    	</div>
    	</div>
    	<br/>
    	<br/>



    </div>





    </footer>
</section>

<div id="footer">
	<div class="container">
		<div id="copyright" class="wfont">&copy; ANKUR ENTERPRISE. All Rights Reserved.</div>
	</div>
</div>

<script type="text/javascript">
	
   var href = window.location.href,
       newUrl = href.substring(0, href.indexOf('/'))
   window.history.replaceState({}, '', newUrl);

</script>

<script type="text/javascript">
	$("#js-rotating").Morphext({
    animation: "flipInX",
    separator: ",",
    speed: 2000,
    loop: 1000,
    complete: function () {
    }
});


</script>
<script type="text/javascript">
	
	$("#js-rotating-1").Morphext({
    animation: "flipInY",
    separator: ",",
    speed: 2000,
    loop: 1000,
    complete: function () {
    }
});

</script>

<script type="text/javascript">
	
    $("#js-rotating-2").Morphext({
    animation: "flipInY",
    separator: ",",
    speed: 2000,
    loop: 1000,
    complete: function () {
    }
});

</script>

<script type="text/javascript">
    var mySwiper = new Swiper('.swiper-container', {
    navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
    },
    effect: 'cube',
    cubeEffect: {
        shadow: true,
        slideShadows: true,
        shadowOffset: 20,
        shadowScale: 0.94,
  },
})

</script>

<script type="text/javascript">
    var mySwiper = new Swiper('.swiper-container-2', {
        loop: false,
    pagination: {
        el: '.swiper-pagination'
    },
    autoplay: {
        delay: 5000,
    },
    effect: 'cube',
    cubeEffect: {
        shadow: false,
        slideShadows: true,
        shadowOffset: 20,
        shadowScale: 0.94,
    },
})

</script>


</body>
</html>

