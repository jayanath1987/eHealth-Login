<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<?php 
/*
--------------------------------------------------------------------------------
HHIMS - Hospital Health Information Management System
Copyright (c) 2011 Information and Communication Technology Agency of Sri Lanka
http: www.hhims.org
----------------------------------------------------------------------------------
This program is free software: you can redistribute it and/or modify it under the
terms of the GNU Affero General Public License as published by the Free Software 
Foundation, either version 3 of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,but WITHOUT ANY 
WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR 
A PARTICULAR PURPOSE. See the GNU Affero General Public License for more details.

You should have received a copy of the GNU Affero General Public License along 
with this program. If not, see http://www.gnu.org/licenses.
---------------------------------------------------------------------------------- 
Date : June 2016
Author: Mr. Jayanath Liyanage   jayanathl@icta.lk

Programme Manager: Shriyananda Rathnayake
URL: http://www.govforge.icta.lk/gf/project/hhims/
__________________________________________________________________________________
Private Practice configuration :

Date : July 2015		ICT Agency of Sri Lanka (www.icta.lk), Colombo
Author : Laura Lucas
Programme Manager: Shriyananda Rathnayake
Supervisors : Jayanath Liyanage, Erandi Hettiarachchi
URL: http://www.govforge.icta.lk/gf/project/hhims/
----------------------------------------------------------------------------------
*/
 ?>
 

<?php 
include_once("header.php");
    if (isset($_GET['err'])) {
        $err = $_GET['err']; 
    }
	if (isset($_GET["continue"])){
		$continue = $_GET["continue"];
	}
	else{
		$continue = '';
	}
 ?>
 

<body >
    <div class="container">
    <?php if ($this->config->item('purpose') == "PP"){
			echo "<h2 align='center'> HHIMS light for Private Practice </h2>
		"; }?>
		<form class="form-signin" action="<?php echo base_url(); ?>index.php/login/auth" method="post" accept-charset="utf-8">
	<?php if ($this->config->item('purpose') != "PP"){
			echo "<h2 class='form-signin-heading'>".$title."</h2>";
		 }else {
			 echo "<h4>v2.1</h4>";
		 } ?>
<h4>Login</h4>		
			<div class="form-group <?php if (isset($err)>0) echo "has-error"; ?>" >
				<input type="text"  name="username" class="form-control has-error" placeholder="User name" autofocus>
				<input type="password"  name="password" class="form-control" placeholder="Password">
                                <select name="workstation_type" class="form-control" placeholder="workstation">
                                <?php for($i=0; $i < count($workstation_type); ++$i){ ?>    
                                <option value="<?php echo $workstation_type[$i]["WTYPID"] ; ?>"><?php echo $workstation_type[$i]["Name"]; ?></option>
                                <?php } ?>
                                </select>
			</div>
			
			<button class="btn btn-lg btn-primary btn-block" type="submit">Log in</button>
			<input type="hidden" name='continue' id="continue" value="<?php echo isset($_GET["continue"])?($_GET["continue"]):""; ?>" >        
			<input type="hidden" name='continue' id="continue" value="<?php echo $continue; ?>" >  
			
                        

      </form>
	</div>
  <!-- /container -->
  
  <div class="col-md-12 well" >
  <div class="row ">
	<div class="col-md-6 ">	
<?php 	if ($this->config->item('purpose') == "PP"){
	echo "
<h3>What is HHIMS light ?</h3>
		<p align='justify'>
		HHIMS Lite is a Free and Open Source Health Information System descended from HHIMS (Hospital Health Information Management System) especially designed for use in private practice. This includes an Electronic Medical Record system and a pharmacy management system. The system has been developed by the ICT Agency of Sri Lanka in partnership with the Office of the Regional Director of Health Services, Kegalle. The system was adapted from a WHO-designed database.    
		</p> 
";
	 }else {
echo "
<h3>What is HHIMS</h3>
		<p>
		HHIMS Foss is a Free and Open Source Hospital Health Information Management System that includes a patient record system, a pharmacy management system and a laboratory information system. The system has been developed by the ICT Agency of Sri Lanka in partnership with the Ministry of Health, Sri Lanka. Adapted from a WHO-designed database,  it is equally at home in the out-patient clinic, the ward, the pharmacy and the laboratory as it is when producing public health reports and statistics.    
		</p> 
";
	
 }
	?>
		
		<div class="text-center">
			<!-- <div >Visit <a href="http://www.govforge.icta.lk/gf/" target="_blank" ><b>www.govforge.icta.lk</b></a> for more details..</div><br>  -->
			 <a href='http://www.gov.lk/' target='_blank'><img src="<?php echo base_url(); ?>images/logo-health-ministry.jpg"  height=50></a>
			 <a href='http://www.icta.lk/' target='_blank'><img src="<?php echo base_url(); ?>images/icta.jpeg" height=50></a>		 
			 <!-- <a href='http://www.icta.lk/' target='_blank'><img src="<?php echo base_url(); ?>images/e-samajaya-logo.jpg" width=101 height=39 ></a>  -->
			 <a href='http://ictawebstg.lgcc.gov.lk/ehealth-project/' target='_blank'><img src="<?php echo base_url(); ?>images/digital_health.png" width=101 height=50></a>
			 
				
		</div>
	</div>	
	<div class="col-md-6 ">		
		<ul>
			<li class="xlocal">
			   <h4>Fast</h4>
			   <p align='justify'>From a single-user laptop in a doctor's practice to a multi-user network in a large hospital, you can enter patient data faster than you can write, and show it on the screen quicker than you can find the patient's old card.</p>
			</li>
			<li class="xlocal">
			   <h4>User friendly</h4>
			   <p align='justify'>
			   The secret of the system is simplicity. After the half-day training course, even new computer users are able to enter patient information, and choosing from lists such as diseases, drugs or villages takes the guesswork out of data entry.
			  </p>
			</li>
			<li class="xlocal">
			   <h4>Affordable</h4>
				 <p align='justify'>
			   The software license is free. The only costs are for hardware, installation and training. 
				</p>
			</li>
		</ul>  

  
  </div>
</div>
  </div> 

</body>
</html>
