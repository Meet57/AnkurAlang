<!doctype html>
<html lang="en">
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
    <link rel="icon" type="image/png" href="img/logo.png"/>
	<link rel="stylesheet" href="node_modules/animate.css/animate.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<link rel="stylesheet" href="node_modules/morphext/dist/morphext.css">

    <script src="libs.js" type="text/javascript"></script>
    <script src="https://kit.fontawesome.com/b2706093e4.js" crossorigin="anonymous"></script>
    <script src="ankur.js" type="text/javascript"></script>
    <script src="node_modules/wow.js/dist/wow.js" type="text/javascript"></script>
    <script src="node_modules/morphext/dist/morphext.min.js" type="text/javascript"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    
    <script type="text/javascript">
        'use strict';

        var searchBox = document.querySelectorAll('.search-box input[type="text"] + span');

        searchBox.forEach((elm) => {
        elm.addEventListener('click', () => {
        elm.previousElementSibling.value = '';
        });
        });

    </script>

</head>
<body id="ankur" class="sub">

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

<section class="searcher">

    <div class="search-box">
        <input id="tags" type="text" placeholder=" "/><span></span>
    </div>

</section>

<section>

	<div class="mainer" style="background-color: #fff">

    <div class="containerr">

      <div class="ankur_title">
        <span class="ankur_subtitle animated fadeInLeft" style="animation-delay: 2s;font-family: futura-pt">A</span>
        <span class="ankur_subtitle animated fadeInUp" style="animation-delay: 3s;font-family: futura-pt">N</span>
        <span class="ankur_subtitle animated fadeInUp" style="animation-delay: 3s;font-family: futura-pt">K</span>
        <span class="ankur_subtitle animated fadeInUp" style="animation-delay: 3s;font-family: futura-pt">U</span>
        <span class="ankur_subtitle animated fadeInUp" style="animation-delay: 3s;font-family: futura-pt">R</span>
        <br/>
        <span class="ankur_subtitle animated fadeInUp" style="animation-delay: 3s;font-family: futura-pt">&nbsp E</span>
        <span class="ankur_subtitle animated fadeInUp" style="animation-delay: 3s;font-family: futura-pt">N</span>
        <span class="ankur_subtitle animated fadeInUp" style="animation-delay: 3s;font-family: futura-pt">T</span>
        <span class="ankur_subtitle animated fadeInUp" style="animation-delay: 3s;font-family: futura-pt">E</span>
        <span class="ankur_subtitle animated fadeInUp" style="animation-delay: 2s;font-family: futura-pt">R</span>
        <span class="ankur_subtitle animated fadeInUp" style="animation-delay: 2s;font-family: futura-pt">P</span>
        <span class="ankur_subtitle animated fadeInUp" style="animation-delay: 2s;font-family: futura-pt">R</span>
        <span class="ankur_subtitle animated fadeInUp" style="animation-delay: 2s;font-family: futura-pt">I</span>
        <span class="ankur_subtitle animated fadeInUp" style="animation-delay: 2s;font-family: futura-pt">S</span>
        <span class="ankur_subtitle animated fadeInRight" style="animation-delay: 3s;font-family: futura-pt">E</span>

      </div>
        
        <div class="contenter">
            <h4 class="motto  animated fadeInLeft" style="animation-delay: 1s">Delivering &nbsp Excellence</h4>
 
            <div class="buttoner animated fadeInUp" style="animation-delay: 3s;z-index: 10" id="button-5">
    			<div id="translate"></div>
    			<a href="full_stock.php" class="hreff">View stock</a>
  			</div>
        
    </div>
   </div> 

   <div class="img-container">
    	<img class="cmage animated fadeOutDown" style="animation-delay: 3s" src="img/lathe-landing.png" alt="lathe machine">
    	<img class="cmage-1 animated fadeInRight" style="animation-delay: 5s" src="img/img-c3.png" alt="lathe machine">
    </div>

 </div>
</section>

<section style="margin-top: 50px">
      <div class="col-features">
      	<div class="boot-col">
              <div class="vision-fitonline-1">
                <div class="quote-box">
                  <i style="font-size: 30px" class="fa fa-quote-right quote"></i>
                </div>
                <h1 style="font-family: cookie;font-size: 30px; text-align: : center;">Best Quality Guaranteed</h1>
                <p class="vfo1-para">
                    We deal with best products that are an epitome of exceptional qualities and build strength, designed to deliver the best results.
                </p>
            </div>
        </div>

        	<div class="boot-col-1">
              <div class="vision-fitonline-2">
                <div class="quote-box-1">
                  <i style="font-size: 30px" class="fa fa-quote-right quote-1"></i>
                </div>
                <h1 style="font-family: cookie;font-size: 30px">We love our customers</h1>
                <p class="vfo2-para">
                    Customers are the glue that holds our business together and we aim to maximize customer satisfication by delievering best products.
                </p>
              </div>  
            </div>
            
            <div class="boot-col">
              <div class="vision-fitonline-1">
                <div class="quote-box">
                  <i style="font-size: 30px" class="fa fa-quote-right quote"></i>
                </div>
                <h1 style="font-family: cookie;font-size: 30px">Order from anywhere</h1>
                <p class="vfo1-para">
                    Order locally or overseas, we will always be at your duty with state of the art machines delievered right at your doorsteps.
                </p>
              </div>
          </div>
        </div>  
</section>




<section class="intro-section">
	<div id="introabout" class="intro-about">
		<div class="intro-para hover-effect animate__animated animate__fadeInRight">
			<ol class="info-text">
				<li class="head-container">We <span style="color: darkblue" id="js-rotating">sell,stock</span> magnificient working machines.</li>
				<li class="head-container">We cater to <span style="color: darkblue" id="js-rotating-1">small,large,enterprise</span> business holdings.</li>
				<li class="head-container">Our inventory includes top notch machinery like <span style="color:darkblue" id="js-rotating-2">Lathe.,Cylindrical Grinder.,Milling., Surface Grinder.,VTL.,CNC Turning.,Radial Drill.</span> </h1>
			</ol>	
		</div>

		<div class="intro-image animate__animated animate__bounce">
			<img class="intro-image-src" src="img/milling-png.png" alt="milling machine"> 
		</div>

        <div class="bubble-1"></div>
        <div class="bubble-2"></div>
        <div class="bubble-3"></div>
        <div class="bubble-4"></div>
        <div class="bubble-5"></div>
        <div class="bubble-6"></div>
        <div class="bubble-7"></div>

	</div>

</section>

<section id="bale">
<div id="contents-wrap">
	<div id="contents" style="padding: 30px 0px 30px 0px">
		<div id="portfolio" style="width: 90%;margin: auto;" class="content flow-grid">

			<?php
                include_once("assets/conn.php");
                $sql = "select * from category;";
                $result = $conn->query($sql);
                while($row = $result->fetch_assoc()){
            ?>


            <div class="entry" style="border-radius: 20px;background-color: white">
                <a href="searchCategory.php?cat=<?php echo $row['Name'];?>">
                    　  <div class="thumb"  data-original-width="400" data-original-height="246" style="display: flex;justify-content: center">
                            
                        <img style="max-width: 100%;height: 150px;margin-top: 40px;box-shadow: 5px 5px 5px 5px;color: black;width: 70%;border-radius: 20px" src="landing_page_images/<?php echo $row['Image']?>">
                            
                    </div>
                        
                    <div class="meta">
                        <!--<div class="date">15 Jun 2020</div> -->
                        <h2 class="title"><?php echo $row["Name"]; ?></h2>
                    </div>

                    <div class="body product-body">
                        <h2 style="text-align: center;letter-spacing:1px;font-family: verdana;font-size: 15px" class="title"><?php echo $row["Name"]; ?></h2>
                    </div>

                </a>
            </div>
			
		
				
			<?php                
            }
            $conn->close();
            ?>
    
			</div>
		</div>
	</div>
    <script type="text/javascript" src="flow_grid_init.js"></script>
</section>


<section>

    <div class="company-logo-slider">

        <div class="company-para">
            <p class="company-text">
                Let Ankur Enterprise help your business reach new levels of production, speed and versatility with machines from these popular manufacturers: Haas , Tos, acer, chevalier, kent, okk, feeler, Rambaudi, ELB, Jones& shipman , Brown and sharpe, SIP, Induma.
            </p>
        </div>

        <div class="slider-container">
        <div class="slider">
            <div class="slide-track">
                <div class="slide" style="margin: 15px">
                    <img src="img/company-logo/haas.png" height="80" width="250" alt="" />
                </div>

                <div class="slide">
                    <img src="img/company-logo/okk.png" height="100" width="250" alt="" />
                </div>

                <div class="slide">
                    <img src="img/company-logo/rambaudi.png" height="100" width="250" alt="" />
                </div>
       
                <div class="slide" style="margin: 10px">
                    <img src="img/company-logo/tos.png" height="70" width="150" alt="" />
                </div>

                <div class="slide">
                    <img src="img/company-logo/reishauer.svg" height="100" width="150" alt="" />
                </div>

                <div class="slide" style="margin: 15px">
                    <img src="img/company-logo/haas.png" height="80" width="250" alt="" />
                </div>

                <div class="slide">
                    <img src="img/company-logo/okk.png" height="100" width="250" alt="" />
                </div>

                <div class="slide">
                    <img src="img/company-logo/rambaudi.png" height="100" width="250" alt="" />
                </div>
       
                <div class="slide" style="margin: 10px">
                    <img src="img/company-logo/tos.png" height="70" width="150" alt="" />
                </div>

                <div class="slide">
                    <img src="img/company-logo/reishauer.svg" height="100" width="150" alt="" />
                </div>

            </div>
        </div>
    </div>
</div>
</section>

    





<div id="menu">

    <nav id="gnavi-links" class="nav-links">

        <ul>

            <li><a style="margin-top: 10px" href="index.php"><span class="not-hover">HOME</span></a></li>
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
            	<li><a href="ccontact.php">Contact</a></li>
            </ul>	

            </div>

            <div class="footer-social-links">

            	<ul class="footer-social-links-list">

            		<li class="s1"><a href="https://www.youtube.com/channel/UC5wwofLXwypENiQbjmABZdg" class="fa fa-youtube-play"></a></li>
            		<li class="s1"><a href="https://www.facebook.com/114080283759335/" class="fa fa-facebook"></a></li>
            		<li class="s1"><a href="https://www.instagram.com/p/CFPDsJgBNSt/?igshid=1qrpghgx45jut" class="fa fa-instagram"></a></li>

            	</ul>

            </div>

            <div class="footer-links-2">

                <ul class="footer-links-2-list">
                	<li><a href="index.php">Products</a></li>
                	<li><a href="enquiry.php">Enquiry</a></li>
                	<li><a href="ccontact.php">Address</a></li>
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
    complete: function () {    }
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
<?php
  include_once("searchhint.php");
?>

</body>
</html>

