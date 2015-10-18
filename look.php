<?php
require_once("views/header.php");
require_once("views/header_link.php");
require_once("defaultnavStyles.php");
$lookStyle = 'class="active"';
require_once("views/navbar.php");
//require_once("views/divider.php");
?>

 
<!-- <div class="jumbotron jumbotron-look"></div> -->
<!-- Bootstrap Carousel. Placed in a full-width container -->
 

      <div id="myCarousel" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators hidden">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
          </ol>

          <!-- Wrapper for slides -->
          <div class="carousel-inner" role="listbox">
            <div class="item active">
              <div class="jumbotron jumbotron-watch"></div>
              <!-- <img src="images/boite_3.jpg" alt="1st slide"> -->
               
            </div>

            <div class="item">
              <div class="jumbotron jumbotron-about"></div>
              <!-- <img src="images/boite_2.jpg" alt="2nd slide"> -->
              
              
            </div>

            <div class="item">
              <div class="jumbotron jumbotron-listen"></div>
              <!-- <img src="images/boite_5_crop.jpg" alt="3rd slide"> -->
              
            </div>
          </div><!-- end Wrapper -->

         <!-- Left and right controls -->
<!--         <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">-->
<!--           <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>-->
<!--           <span class="sr-only">Previous</span>-->
<!--         </a>-->
<!--         <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">-->
<!--           <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>-->
<!--           <span class="sr-only">Next</span>-->
<!--         </a>-->
      </div>

<div class="container">

        <div class="col-md-12">
            <h2><span class="header-style">Gallery..</span></h2>
        </div>

</div>
        <div class="push"></div>
    <div class="grid js-masonry"
         data-masonry-options='{ "columnWidth": 300, "itemSelector": ".grid-item" }'>

            <div class="grid-item"><img src="images/boite_5_crop.jpg"></div>
            <div class="grid-item"><img src="images/boite_4_crop.jpg"></div>
            <div class="grid-item grid-item--width2"><img src="images/boite_1_crop.jpg"></div>
            <div class="grid-item grid-item--width2"><img src="images/boite_8_crop.jpg"></div>
            <div class="grid-item grid-item--height2"><img src="images/boite_6.jpg"></div>

       </div>


<!-- Footer included -->
<?php require_once("views/footer.php"); ?>