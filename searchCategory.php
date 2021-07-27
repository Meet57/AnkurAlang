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
  <link rel="stylesheet" href="node_modules/morphext/dist/morphext.css">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  
  <script src="libs.js" type="text/javascript"></script>
  <script src="https://kit.fontawesome.com/b2706093e4.js" crossorigin="anonymous"></script>
  <script src="ankur.js" type="text/javascript"></script>
  <script src="node_modules/wow.js/dist/wow.js" type="text/javascript"></script>
  <script src="node_modules/morphext/dist/morphext.min.js" type="text/javascript"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  
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

<section>
  <div class="searchcategory-description">

    <div class="searcher-category">
      <div class="search-box">
        <input id="tags" type="text" placeholder=" "/><span></span>
      </div>
    </div>

    <h1 class="searchcategory-title">
        <?php
                        include_once("assets/conn.php");
                        $sql = "SELECT `Name` FROM `category` WHERE Name ='".$_GET["cat"]."'";
                        $result = $conn->query($sql);
                        while($row = $result->fetch_assoc()){
                            echo $row["Name"];
                        }

                   ?>
    </h1>
    <p class="searchcategory-text">
                   <?php
                        include_once("assets/conn.php");
                        $sql = "SELECT `Discription` FROM `category` WHERE Name ='".$_GET["cat"]."'";
                        $result = $conn->query($sql);
                        while($row = $result->fetch_assoc()){
                            echo $row["Discription"];
                        }

                   ?>
               </p>
  </div>
</section>

<div id="contents-wrap">
    <div id="contents" style="padding: 30px 0px 30px 0px">
      <div id="portfolio" style="width: 90%;margin: auto;" class="content flow-grid">

        <script type="text/javascript" src="flow_grid_init.js"></script>
        <?php
          include_once("assets/conn.php");
          $sql = "select * from products where Category='".$_GET["cat"]."'";
          $result = $conn->query($sql);
          while($row = $result->fetch_assoc()){

        ?>
              <div class="entry" style="border-radius: 20px;background-color: #ffff">
                  
                  <a href="product-indi.php?stock=<?php echo $row['Stock_number'];?>">　

                  <div class="thumb" style="display: flex;justify-content: center" data-original-width="400" data-original-height="246"> 
                            
                  <img style="position:relative; width: 70%;height: 150px;margin:40px 0px 0px 0px;border-radius: 20px;box-shadow: 5px 5px 5px 5px;color: black" src="img/<?php echo $row['Image']?>">
                    <?php
                      if($row['sold']=="yes"){
                        echo '<img style="position: absolute; top: 30px; right: 25px; height:50%; width:auto;" src="./assets/soldtag.png" >';
                      }
                    ?>
                  </div>

                    <div class="meta">
                        <div class="date"><?php echo $row["Make"]; ?></div>
                        <h2 class="title"><?php echo $row["Type"]; ?></h2>
                    </div>

                    <div class="body product-body">
                        <h2 style="text-align: center;font-family: verdana;letter-spacing:1px;font-size: 15px" class="title"><?php echo $row["Type"]; ?></h2>
                        <h2 style="text-align: center;font-family: verdana;letter-spacing:1px;font-size: 15px" class="title"><?php echo $row["Make"]; ?></h2>
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
</div>


<div id="menu">
  <nav id="gnavi-links" class="nav-links">
    <ul>
      <li><a href="index.php"><span class="not-hover">HOME</span></a></li>
      <li><a href="about.php"><span class="not-hover">ABOUT</span></a></li>
      <li><a href="newproducts.php"><span class="not-hover">NEW ARRIVALS</span></a></li>
      <li><a href="ccontact.php"><span class="not-hover">CONTACT</span></a></li>
      <li><a style="margin-left: 12px"   href="enquiry.php"><span class="not-hover">ENQUIRY</span></a></li>
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

<?php
  include_once("searchhint.php");
?>


</body>
</html>