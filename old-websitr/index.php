<?php include "htmlheadpreamble-index.php" ?>
<title>Bardia Barabadi - Home</title>
<?php include "htmlheadpostamble.php" ?>


<style>

.img-responsive.mobile {
  display: none;
}

@media only screen and (max-device-width: 480px) {
  .img-responsive {
    display: none;
  }
  .img-responsive.mobile {
    display: block;
  }
}

</style>

<!-- -*- html -*- -->
<div class="container">
  <div class="wrapper">

    <div class="tightbox header", style="width:100%">
     <img class="fit rounded-corners img-responsive" src="images/header.png" alt="Bardia Barabadi">
     <img class="fit rounded-corners img-responsive mobile" src="images/phone_header.png" alt="Bardia Barabadi">
     
<div class="box links">
   <?php include "navigation-links.html" ?>
  </div>

   </div>
<style>
/* css local to this page */
/* <a class="toprightname">Bardia Barabadi</a> */
     /*<div class="toprightcredentials"> */
     /*	  M.A.Sc., University of Victoria<br /> */
  	 /* Electrical Engineering<br /> */
     /* </div> */
   

/* For example, how to change the colors which display your name and credentials against your chosen background */
/* The first changes the color for your name; the second for your credentials */
/* rgba(r,g,b,d)  0\le r,g,b \le 255,  0\le d \le 1  (red, green, blue values and an intensity*/

/*
.toprightname {
color: rgba(0, 1, 1, .9);
}
.toprightcredentials {
color: rgba(255, 255, 0, 0.8);

div.boxtalk {
width: 10%;
height: 80%;
align: left;
}
div.boxImg {
width: 30%;
height: 80%;
align: right;
}

}

header {
	width:5%;
}
content {
	width:95%;
}

@media only screen and (max-width: 768px) {
	
	header {
	width:10%;
}
}
@media only screen and (max-width: 768px) {
content {
	width:90%;
}
}

@media only screen and (max-width: 320px) {
	
	header {
	width:10%;
}
}
@media only screen and (max-width: 320px) {
content {
	width:90%;
}
}

*/
</style>



<topright style>

</topright>

  

<div class="box contact" style="width:100%;float:left">
	

  <table>

    <tr>
      <th class="header" align="left" valign="top">About Me:</th>
      <td class="content" align="right" >Hello and welcome to my website. My name is Bardia. I am currently a MASc student at the University of Victoria, studying Electrical Engineering. My research interest is Machine Learning algorithms (specifically CNNs) and their hardware and FPGA implementations. I received my Bachelor's degree from Sharif University of technology in 2017, and I expect to finish my master's by 2020.
      <br /><br />Right now,  I am working as a TA and RA at UVic. My ongoing research is on exploring the potentials of CNNs for video encoding enhancement and super-resolution. My next goal is to get into Canada's tech industry, find the opportunities that match my abilities and interests and make the life of humankind better. 
      </td>
    </tr>

    <tr>
      <th class="header"  align="left">Address:</th>
      <td class="content">A358 Engineering Lab Wing
        <br />
        University of Victoria, BC, Canada
        <br />
        V8P 3E6, Check the <a href="https://goo.gl/maps/D88HoehFtevzu5DVA" target="_blank">map</a>
        
      </td>
    </tr>

    

    <tr>
      <th class="header"  align="left">Email:</th>
      <td class="content">
        <b>bardiabarabadi [at] uvic [dot] ca</b>
      </td>
    </tr>
    
    <tr>
      <th class="header"  align="left"></th>
      <td class="content">
        <a href="https://scholar.google.ca/citations?user=_lS23qsAAAAJ&hl=en&oi=ao"><b>Google Scholar Profile</b></a>
      
    </tr>
    
    <tr>
      <th class="header"  align="left"></th>
    </td>
      <td class="content">
        <a href="https://www.linkedin.com/in/bardiabarabadi/"><b>LinkedIn Profile</b></a>
      </td>
      
    </tr>

    </table>
  </div>

<style>
box {
	width:60%;
}
	@media only screen and (max-width: 768px) {
  box {
    width:100%;
  }
}


</style>
<div class="box" style="margin-left:auto; margin-right:0;margin-top:0;valign:top">
	
	<table>
	<tr>
	<button onclick="location.href='images/cv.pdf'" type="button" style="width:100%;align: center;display: block;">
         Download my CV</button>
	
	</tr>
	<tr>
	    <div class="tightbox photo" style="width:100%">
		<img width="100%" height="100%" object-fit="contain" class="fit rounded-corners" src="images/Bardia.jpg" alt="my photo">
   </div>
	</tr>
	</table>
	
 
</div>


  <div class="box links">
   <?php include "navigation-links.html" ?>
  </div>



<?php include "footer.php" ?>
