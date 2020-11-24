
<?php
include 'header.php';
?>


<!-- <style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}

body, html {
  height: 100%;
  line-height: 1.8;
}

/* Full height image header */
.bgimg-1 {
  background-position: center;
  background-size: cover;
  background-image: url("https://scontent-atl3-1.xx.fbcdn.net/v/t1.0-9/96708683_3209227409111244_7269840126870552576_n.jpg?_nc_cat=104&ccb=2&_nc_sid=110474&_nc_ohc=tQk32eMh2s0AX-mdoRN&_nc_ht=scontent-atl3-1.xx&oh=84b68c0d6184ba29f9870b01e16e134b&oe=5FDB3BBA");
  min-height: 100%;
}

.w3-bar .w3-button {
  padding: 16px;
}
</style>
-->

<!-- Navbar (sit on top) -->


<!-- Sidebar on small screens when clicking the menu icon -->
<nav class="w3-sidebar w3-bar-block w3-black w3-card w3-animate-left w3-hide-medium w3-hide-large" style="display:none" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16">Close ×</a>
  <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button">ABOUT</a>
  <a href="#team" onclick="w3_close()" class="w3-bar-item w3-button">TEAM</a>
  <a href="#work" onclick="w3_close()" class="w3-bar-item w3-button">WORK</a>
 <!-- <a href="#pricing" onclick="w3_close()" class="w3-bar-item w3-button">PRICING</a>  -->
  <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button">CONTACT</a>
</nav>

<!-- Header with full-height image -->
<header class="bgimg-1 w3-display-container w3-grayscale-min" id="home">
  <div class="w3-display-left w3-text-white" style="padding:48px">
    <span class="w3-jumbo w3-hide-small">Never Fail</span><br>
    <span class="w3-xxlarge w3-hide-large w3-hide-medium">Never Fail </span><br>
    <span class="w3-large">Join Us Below</span>
    <p><a href="/group-project-mello-faith-jhonathan/login.php" class="w3-button w3-white w3-padding-large w3-large w3-margin-top w3-opacity w3-hover-opacity-off">Enter</a></p>
  </div> 
  <div class="w3-display-bottomleft w3-text-grey w3-large" style="padding:24px 48px">
      <a href="https://www.facebook.com/Faulkner-University-Mens-Soccer-520019721365373/"  class="fa fa-facebook-official w3-hover-opacity"></a> 
      <a href= "https://www.instagram.com/faulknersoc/"  class="fa fa-instagram w3-hover-opacity"></a>
    <a href="https://twitter.com/faulknermsoc?lang=fr"   class="fa fa-snapchat w3-hover-opacity"></a>

  </div>
</header>

<!-- About Section -->
<div class="w3-container" style="padding:128px 16px" id="about">
  <h3 class="w3-center">Our Core Values </h3>
<!--   <p class="w3-center w3-large">Key features of our company</p> -->
  <div class="w3-row-padding w3-center" style="margin-top:64px">
    <div class="w3-quarter">
      <i class="glyphicon glyphicon-education w3-margin-bottom w3-jumbo w3-center"></i>
      <p class="w3-large">Studious</p>
      <p>A student of the game is the player who only wants to get better. The player who loves instruction and correction. The player with more heart than ego. </p>
    </div>
    <div class="w3-quarter">
      <i class="fa fa-heart w3-margin-bottom w3-jumbo"></i>
      <p class="w3-large">Passion</p>
      <p>It is passion and purpose (intrinsic motivation) that helps us overcome life obstacles,focus on our goals, and outwork the competition.</p>
    </div>
    <div class="w3-quarter">
      <i class="glyphicon glyphicon-time w3-margin-bottom w3-jumbo"></i>
      <p class="w3-large">Ponctual</p>
      <p>Being on time will set the tone for what you expect from your players. Managing your time efficiently will profoundly impact the team in ways they don't even realize.</p>
    </div>
    <div class="w3-quarter">
      <i class="fa fa-cog w3-margin-bottom w3-jumbo"></i>
      <p class="w3-large">Hardwork</p>
      <p>Through hard work even the mediocre can achieve success. There is never any short cuts to success, but hard work complimented with the desire to achieve, determination, it makes success becomes bigger.</p>
    </div>
  </div>
</div>

<!-- Promo Section - "We know design" -->
<div class="w3-container w3-light-grey" style="padding:128px 16px">
  <div class="w3-row-padding">
    <div class="w3-col m6">
     <!-- <h3>You can't score a goal, <br> if you don't take a shot.</h3>
      <p>-Johan Cruijff</p> --> 
        
        <h3> The contest lasts for moments<br>
Though the training's taken years,<br>
It wasn't the winning alone that<br>
Was worth the work and the tears<br>
The applause will be forgotten<br>
The prize will be misplaced<br>
But the long hard hours of practice<br>
Will never be a waste<br>
For in trying to win<br>
You build a skill You learn that winning<br>
Depends on will<br>
You never grow by how much you win<br>
You only grow by how much you put in<br>
So any new challenge<br>
You've just begun<br>
Put forth your best<br>
And you've already won.</h3>
        <p>- Bill Clennan</p>
      <!-- <p><a href="#work" class="w3-button w3-black"><i class="fa fa-th"> </i> View Our Works</a></p>  -->
    </div> 
    <div class="w3-col m6">
      <img class="w3-image w3-round-large" src="https://www.wsfa.com/resizer/oYztnC4K8W7SwR2eUMO5Prkwv7U=/1200x900/cloudfront-us-east-1.images.arcpublishing.com/raycom/XCXXBGM5C5BIJB23MUDYKDSQ2E.jpg" alt="Buildings" width="700" height="394">
    </div>
  </div>
</div>





<!-- Work Section -->
<div class="w3-container" style="padding:128px 16px" id="work">
  <h3 class="w3-center">Galery</h3>
  <p class="w3-center w3-large">Some of our favorite pictures</p>

  <div class="w3-row-padding" style="margin-top:64px">
    <div class="w3-col l3 m6">
      <img src="https://www.wsfa.com/resizer/oYztnC4K8W7SwR2eUMO5Prkwv7U=/1200x900/cloudfront-us-east-1.images.arcpublishing.com/raycom/XCXXBGM5C5BIJB23MUDYKDSQ2E.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="A microphone">
    </div>
    <div class="w3-col l3 m6">
      <img src="https://www.wsfa.com/resizer/oYztnC4K8W7SwR2eUMO5Prkwv7U=/1200x900/cloudfront-us-east-1.images.arcpublishing.com/raycom/XCXXBGM5C5BIJB23MUDYKDSQ2E.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="A phone">
    </div>
    <div class="w3-col l3 m6">
      <img src="https://www.wsfa.com/resizer/oYztnC4K8W7SwR2eUMO5Prkwv7U=/1200x900/cloudfront-us-east-1.images.arcpublishing.com/raycom/XCXXBGM5C5BIJB23MUDYKDSQ2E.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="A drone">
    </div>
    <div class="w3-col l3 m6">
      <img src="https://www.wsfa.com/resizer/oYztnC4K8W7SwR2eUMO5Prkwv7U=/1200x900/cloudfront-us-east-1.images.arcpublishing.com/raycom/XCXXBGM5C5BIJB23MUDYKDSQ2E.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Soundbox">
    </div>
  </div>

  <div class="w3-row-padding w3-section">
    <div class="w3-col l3 m6">
      <img src="https://www.wsfa.com/resizer/oYztnC4K8W7SwR2eUMO5Prkwv7U=/1200x900/cloudfront-us-east-1.images.arcpublishing.com/raycom/XCXXBGM5C5BIJB23MUDYKDSQ2E.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="A tablet">
    </div>
    <div class="w3-col l3 m6">
      <img src="https://www.wsfa.com/resizer/oYztnC4K8W7SwR2eUMO5Prkwv7U=/1200x900/cloudfront-us-east-1.images.arcpublishing.com/raycom/XCXXBGM5C5BIJB23MUDYKDSQ2E.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="A camera">
    </div>
    <div class="w3-col l3 m6">
      <img src="https://www.wsfa.com/resizer/oYztnC4K8W7SwR2eUMO5Prkwv7U=/1200x900/cloudfront-us-east-1.images.arcpublishing.com/raycom/XCXXBGM5C5BIJB23MUDYKDSQ2E.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="A typewriter">
    </div>
    <div class="w3-col l3 m6">
      <img src="https://www.wsfa.com/resizer/oYztnC4K8W7SwR2eUMO5Prkwv7U=/1200x900/cloudfront-us-east-1.images.arcpublishing.com/raycom/XCXXBGM5C5BIJB23MUDYKDSQ2E.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="A tableturner">
    </div>
  </div>
    
    <div class="w3-col m6">
     
      
      <p><a href="/group-project-mello-faith-jhonathan/photos.php" class="w3-button w3-black"><i class="fa fa-th"> </i> See more</a></p>
    </div>
</div>

<!-- Modal for full size images on click-->
<div id="modal01" class="w3-modal w3-black" onclick="this.style.display='none'">
  <span class="w3-button w3-xxlarge w3-black w3-padding-large w3-display-topright" title="Close Modal Image">×</span>
  <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
    <img id="img01" class="w3-image">
    <p id="caption" class="w3-opacity w3-large"></p>
  </div>
</div>
    
    
    
    <script>
// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}


// Toggle between showing and hiding the sidebar when clicking the menu icon
var mySidebar = document.getElementById("mySidebar");

function w3_open() {
  if (mySidebar.style.display === 'block') {
    mySidebar.style.display = 'none';
  } else {
    mySidebar.style.display = 'block';
  }
}

// Close the sidebar with the close button
function w3_close() {
    mySidebar.style.display = "none";
}
</script>

