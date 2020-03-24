<?php include "htmlheadpreamble-secondary.php" ?>
<title>Bardia Barabadi - Skills & Projects</title>
<?php include "htmlheadpostamble.html" ?>

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

table, th, td {
   border: 1px solid black;
	border-collapse: collapse;
}



</style>



<div class="box main">

<h4>Skills & Projecrs</h4>

<div class="box contact">
  <table>


<tr>

      <?php include "css/tabless.php" ?>
      
      
      <th width="25%">Top Skills<br \> <span style="color:#808080">       1: Intermediate<br \>2: Advanced<br \>3: Expert</span></th>
      <td align="justify" valign="top" white-space="pre-line">
		Python<sup>3</sup>, MATLAB<sup>3</sup>, Verilog<sup>3</sup>, VHDL<sup>2</sup>, Bash<sup>2</sup> <br \>
		C<sup>3</sup>, C++<sup>3</sup>, JAVA<sup>2</sup>, Assembly (AVR<sup>3</sup>, ARM<sup>3</sup>, x86<sup>1</sup>) <br \>
		Machine Learning Platforms (MATLAB DL Toolbox<sup>2</sup>, Tensorflow<sup>2</sup>, Keras<sup>3</sup>) <br \>
		Parallel Programming Platforms (CUDA<sup>3</sup>, Pthread<sup>3</sup>, MPI<sup>3</sup>, OpenMP<sup>3</sup>) <br \>
		FPGA Design (Vivado<sup>3</sup>, Vivado HLS<sup>1</sup>, Xilinx ISE<sup>3</sup>, Quartus II<sup>2</sup>) <br \>
		Microcontroller System Design<sup>3</sup> (AVR AT-Family & Arduino) 
		</td>
    </tr>


    <tr> 
		
      <?php include "css/tabless.php" ?>
		
      <th width="25%">Selected Projects<br \> <span style="color:#808080">       </span></th>
      <td align="justify" valign="top">
		<ul>
			<li>Super-Resolution using Deep Learning and Convolutional Neural Networks</li>
			<li>Phase Unwrapping for 2-D In-SAR imageary using Deep Learning</li>
			<li>ASIC & FPGA Implementation of IMAT, sparse signal reconstruction algorithm</li>
			<li>Critical object recognition in millimeter wave images using Machine Learning</li>
			<li>Verilog implementation of Super-scalar MIPS on Xilinx Spartan-6</li>
			<li>K-means algorithm on Xilinx Micro-Blaze soft microprocessor</li>
			<li>Design and implementation of liquid color sensor for ChemiCar contest</li>
			<li>E-Learning Design and Implementation for new employees, Monenco Co.</li>
			<li>Bird detection and classification in aerial images using YOLO Neural Network</li>
		</ul>
		
		
		
		</td>
    </tr>

    
    <tr> 

    </table>
  </div>

<?php include "footer.php" ?>
