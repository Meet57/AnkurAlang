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
  <link rel="icon" type="image/png" href="img/logo.png"/>
  <link rel="stylesheet" href="node_modules/animate.css/animate.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="node_modules/morphext/dist/morphext.css">
  <link rel="stylesheet" href="node_modules/swiper/swiper-bundle.css">
  
  <script src="libs.js" type="text/javascript"></script>
  <script src="ankur.js" type="text/javascript"></script>
  <script src="https://kit.fontawesome.com/b2706093e4.js" crossorigin="anonymous"></script>
  <script src="node_modules/wow.js/dist/wow.js" type="text/javascript"></script>
  <script src="node_modules/morphext/dist/morphext.min.js" type="text/javascript"></script>
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


<div id="contents-wrap">
  <div id="contents">
    <div id="portfolio-detail" class="content">
      <div id="photo" style="width: 94%">
            <?php
              $sql = "select * from products;";
              $result = $conn->query($sql);

              $rows = $result->fetch_all(MYSQLI_ASSOC);
            
              $cn = array();
                if($result->num_rows > 0) {
                foreach ($rows[0] as $columnName => $value) {
                array_push($cn,$columnName);
              }
              }

              // if( $_GET["model"] == null ) {
              //   $sql = "select * from products where Make='".$_GET["make"]."'";
              // }
              // else {
              //   $sql = "select * from products where Model='".$_GET["model"]."'";
              // }

              // if($_GET['model']== 'undefined'){
              //   echo "<script>window.history.back();</script>";
              // }
              $sql = "select * from products where Stock_number='".$_GET["stock"]."'";
              $result = $conn->query($sql);
                while($row = $result->fetch_assoc()){

              ?>
        
        <div class="entry-photo">
          <div class="photo">
    
          <div class="swiper-container gallery-top" style="margin-top: 20px">

            <a style="color: black" href="amanda_angle/<?php echo $row['Name']?>_1.jpg"></a>

            <div class="swiper-wrapper">

              <div class="swiper-slide" >
                <a style="color: black" href="amanda_angle/<?php echo $row['Name']?>_1.jpg">
                  <img class="product-indi-photo" style="height: 500px;border:2px solid black;border-radius: 20px;box-shadow: 10px 10px 10px 10px" src="amanda_angle/<?php echo $row['Name']?>_1.jpg" alt="as_7610w.jpg">
                    <i style="font-size: 40px;z-index:10;position: relative;top:-470px;left: 20px " class="fa fa-search-plus"></i>
                </a>
              </div>

              <div class="swiper-slide">
                <a style="color: black" href="amanda_angle/<?php echo $row['Name']?>_2.jpg"><img class="product-indi-photo" style="height: 500px;border:2px solid black;border-radius: 20px;box-shadow: 10px 10px 10px 10px"" src="amanda_angle/<?php echo $row['Name']?>_2.jpg" alt="as_7610w.jpg">
                  <i style="font-size: 40px;z-index:10;position: relative;top:-470px;left: 20px " class="fa fa-search-plus"></i>
                </a>
              </div>

              <div class="swiper-slide">
                <a style="color: black" href="amanda_angle/<?php echo $row['Name']?>_3.jpg"><img class="product-indi-photo" style="height: 500px;border:2px solid black;border-radius: 20px;box-shadow: 10px 10px 10px 10px"" src="amanda_angle/<?php echo $row['Name']?>_3.jpg" alt="as_7610w.jpg">
                  <i style="font-size: 40px;z-index:10;position: relative;top:-470px;left: 20px " class="fa fa-search-plus"></i>
                </a>
              </div>

              <div class="swiper-slide">
                <a style="color: black" href="amanda_angle/<?php echo $row['Name']?>_4.jpg"><img class="product-indi-photo" style="height: 500px;border:2px solid black;border-radius: 20px;box-shadow: 10px 10px 10px 10px"" src="amanda_angle/<?php echo $row['Name']?>_4.jpg" alt="as_7610w.jpg">
                  <i style="font-size: 40px;z-index:10;position: relative;top:-470px;left: 20px " class="fa fa-search-plus"></i>
                </a>
              </div>

              <div class="swiper-slide">
                <a style="color: black" href="amanda_angle/<?php echo $row['Name']?>_5.jpg"><img class="product-indi-photo" style="height: 500px;border:2px solid black;border-radius: 20px;box-shadow: 10px 10px 10px 10px"" src="amanda_angle/<?php echo $row['Name']?>_5.jpg" alt="as_7610w.jpg">
                  <i style="font-size: 40px;z-index:10;position: relative;top:-470px;left: 20px " class="fa fa-search-plus"></i>
                </a>
              </div>
              

            </div>

                <div class="swiper-button-next swiper-button-white"></div>
                <div class="swiper-button-prev swiper-button-white"></div>


          </div>

          <div class="swiper-container gallery-thumbs" style="margin-top: 10px">
            <div class="swiper-wrapper">

          <div class="swiper-slide"><img class="product-indi-photo-1" style="height: 150px;border:2px solid black;border-radius: 20px" src="amanda_angle/<?php echo $row['Name']?>_1.jpg" alt="as_7610w.jpg"></div>
          <div class="swiper-slide"><img class="product-indi-photo-1" style="height: 150px;border:2px solid black;border-radius: 20px" src="amanda_angle/<?php echo $row['Name']?>_2.jpg" alt="as_7610w.jpg"></div>
          <div class="swiper-slide"><img class="product-indi-photo-1" style="height: 150px;border:2px solid black;border-radius: 20px" src="amanda_angle/<?php echo $row['Name']?>_3.jpg" alt="as_7610w.jpg"></div>
          <div class="swiper-slide"><img class="product-indi-photo-1" style="height: 150px;border:2px solid black;border-radius: 20px" src="amanda_angle/<?php echo $row['Name']?>_4.jpg" alt="as_7610w.jpg"></div>
          <div class="swiper-slide"><img class="product-indi-photo-1" style="height: 150px;border:2px solid black;border-radius: 20px" src="amanda_angle/<?php echo $row['Name']?>_5.jpg" alt="as_7610w.jpg"></div>

            </div>
          </div>

          </div>  
        </div>        
      </div>

      <div id="info">
         <!-- <div class="paginate">
          <div class="list">
            <a href="index.php">
              <span>
                <i class="b1 c1"></i><i class="b1 c2"></i><i class="b1 c3"></i>
                <i class="b2 c1"></i><i class="b2 c2"></i><i class="b2 c3"></i>
                <i class="b3 c1"></i><i class="b3 c2"></i><i class="b3 c3"></i>
              </span>
            </a>
          </div>
        </div>  -->

        <div class="entry-detail mCustomScrollbar _mCS_5" >

        <div id="mCSB_5" class="mCustomScrollBox mCS-light mCSB_vertical mCSB_inside" tabindex="0">

        <div id="mCSB_5_container" class="mCSB_container" style="position:relative; top:0; left:0;" dir="ltr">
          
            <?php
                foreach($cn as $col){
                  if($col == "ID" or $col == "URL" or $col == "Type" or $col == "Discription" or $col == "Image" or $col == "Name" or $col == "sold" or $col == "new"){ continue;  }
                  if($row["$col"]!="NA" and $row["$col"]!="-99.00" and $row["$col"]!=""){
                                                   ?>
                  <div style="display: flex;flex-direction: row" class="info-php">
                    <div style="width: 50%">                 
                      <h1 style="font-size: 15px;margin: 5px;font-family: futura-pt;overflow-x: scroll" class="col-12 col-sm-6"><?php echo $col ?> </h1>
                    </div>

                    <div style="width: 50%">
                      <p style="font-size: 15px;margin:7px 0px 0px 15px" class="col-6"><?php echo $row[$col]; ?></p>
                    </div>
                  </div>
            <?php
            }
            }
        ?>
        </div>

        <form action="assets/productEnquiry.php" target="_blank" method="post" id="productEnquiry">
            <input type="hidden" value="<?php echo $row["Category"]; ?>"  name="Category">
            <input type="hidden" value="<?php echo $row["Model"]; ?>"  name="Model">
            <input type="hidden" value="<?php echo $row["Type"]; ?>"  name="Type">
            <input type="hidden" value="<?php echo $row["Make"];?>" name="Make">

            <div style="display: flex;flex-direction: column;justify-content: center" class="input-group mb-3">
                <input style="width: 200px;height: 50px;margin: 20px;border:none;border-bottom: 1px solid black;font-size: 15px" type="number" class="form-control" name="Number" id="Number" placeholder="Your Number : " required>
                                                    
                  <div style="margin-left: 45px" class="input-group-append">
                      <button style="border-radius: 10px" type="button" class="btn btn-outline-primary" value="submit" onclick="submit()">Enquiry</button>
                  </div>
            </div>
        </form>

        <div id="mCSB_5_scrollbar_vertical" class="mCSB_scrollTools mCSB_5_scrollbar mCS-light mCSB_scrollTools_vertical" style="display: block;">
          <div class="mCSB_draggerContainer">
            <div id="mCSB_5_dragger_vertical" class="mCSB_dragger" style="position: absolute; min-height: 30px; height: 0px; top: 0px; display: block;" oncontextmenu="return false;">
              <div class="mCSB_dragger_bar" style="line-height: 30px;"></div>
            </div>
              <div class="mCSB_draggerRail"></div>
            </div>
          </div>

        </div>
      </div>

      <div class="copy wfont">© ANKUR ENTERPRISE. All Rights Reserved.</div>
    </div>
    <script type="text/javascript" src=" portfolio_detail.js"></script>
    </div>
  </div>
</div>

<?php                
  }
  $conn->close();
  ?>
    

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



  <script>
    var galleryThumbs = new Swiper('.gallery-thumbs', {
      spaceBetween: 10,
      slidesPerView: 4,
      freeMode: true,
      watchSlidesVisibility: true,
      watchSlidesProgress: true,
    });
    var galleryTop = new Swiper('.gallery-top', {
      spaceBetween: 10,
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      thumbs: {
        swiper: galleryThumbs
      },
      effect: 'cube',
    cubeEffect: {
        shadow: true,
        slideShadows: true,
        shadowOffset: 20,
        shadowScale: 0.94,
    },
    });
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


</body>
</html>