<?php
require_once("views/header.php");
require_once("views/header_link.php");
require_once("defaultnavStyles.php");
$listenStyle = 'class="active"';
require_once("views/navbar.php");
?>
<div class="jumbotron jumbotron-listen"></div>     
 <div class="container">
  <div class="row"> 

    <div class="col-xs-12 col-md-12">
      <h2><span class="header-style">Soundcloud...</span></h2>
        <iframe width="100%" height="50%" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/218320115&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true"></iframe>
    </div>
  </div>
</div>
    <div class="divider">
        <img src="images/g4012.png" alt="divider line">
    </div>
<!-- Footer included -->
<?php require_once("views/footer.php"); ?>