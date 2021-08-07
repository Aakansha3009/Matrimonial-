<?php include_once("includes/basic_includes.php");?>
<?php include_once("functions.php"); ?>
<?php require_once("includes/dbconn.php");?>
<?php
if(isloggedin()){
 //do nothing stay here
} else{
   header("location:login.php");
}
 
$id=$_GET['id'];
writepartnerprefs($id);

///reading partnerprefs from db

		$sql="SELECT * FROM partnerprefs WHERE custId = $id";
		$result=mysqlexec1($sql);
		if($result)
		{
			$row=mysqli_fetch_assoc($result);
			$agemin=$row['agemin'];
			$agemax=$row['agemax'];
			$marital_status=$row['maritalstatus'];
			$complexion=$row['complexion'];
			$height=$row['height'];
			$diet=$row['diet'];
			$religion=$row['religion'];
			$caste=$row['caste'];
			$sub_caste=$row['subcaste'];
			$mother_tounge=$row['mothertounge'];
			$education=$row['education'];
			$occupation=$row['occupation'];
			$country=$row['country'];
			$descr=$row['descr'];
			
		}
		else{
			echo mysqli_error($conn);
		}
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Partner Prefs</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href='//fonts.googleapis.com/css?family=Oswald:300,400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Ubuntu:300,400,500,700' rel='stylesheet' type='text/css'>
<!--font-Awesome-->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!--font-Awesome-->
<script>
$(document).ready(function(){
    $(".dropdown").hover(            
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
            $(this).toggleClass('open');       
        }
    );
});
</script>
</head>
<body>
<!-- ============================  Navigation Start =========================== -->
 <?php include_once("includes/navigation.php");?>
<!-- ============================  Navigation End ============================ -->
<div class="grid_3">
  <div class="container">
   <div class="breadcrumb1">
     <ul>
        <a href="index.php"><i class="fa fa-home home_1"></i></a>
        <span class="divider">&nbsp;|&nbsp;</span>
        <li class="current-page">Partner Prefernce</li>
     </ul>
   </div>
   <div class="profile">
   	 <div class="col-md-12 profile_left">   	 	
		<div class="col_4">
		    <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
			   <ul id="myTab" class="nav nav-tabs nav-tabs1" role="tablist">
				  <li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">Partner Preference</a></li>
			   </ul>
			   <form action="" method="post" name="partner">
			   <div id="myTabContent" class="tab-content">
				  <div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
				    <div class="tab_box">
				    	<h1>My Ideal Partner would be</h1>
				    	<p><textarea name="descr" rows="5" cols="150"><?php echo $descr;?></textarea></p>
				    </div>
				    <div class="basic_1-left">
				    	  <table class="table_working_hours">
				        	<tbody>
				        		<tr class="opened">
									<td class="day_label">Age   :</td>
									<td class="day_value">
									 </div>
									<input type="text" name="agemin" value="<?php echo $agemin; ?>">to <input type="text" name ="agemax" value="<?php echo $agemax; ?>"> 
									</td>
								</tr>
      </div>									
								</td>
								</tr>
				        		<tr class="opened">
									<td class="day_label">Marital Status :</td>
									<td class="day_value">
										<div class="select-block1">
										<select name="maritalstatus">
						                    <option value="<?php if($marital_status="Single"){echo "Single";} elseif ($marital_status="Married") {echo "Married";} else{echo "Divorced";}?>"><?php echo $marital_status;?></option>
								  <option value="Marital Status"></option>
						                  <option value="Single">Single</option>
						               	  <option value="Divorsed">Divorsed</option>
						                </select>
						                </div>
								</td>
								</tr>
							    <tr class="opened">
									<td class="day_label">Complexion :</td>
									<td class="day_value closed">
									<div class="select-block1">
						                <select name="colour">
									<option value="Complextion<"></option>
						                    <option value="Black">Black</option>
						                    <option value="Fair">Fair</option> 
						               	    <option value="Normal">Normal</option> 
						                </select>
								    </div>
								    </td>
								</tr>
								<tr class="opened">
									<td class="day_label">Height</td>
									<td class="day_value closed"><input type="text"  id="edit-name" name="height" value="<?php echo $height;?>" size="60" maxlength="60" class="form-text">ft.</td>
								</tr>
								<tr class="opened">
									<td class="day_label">Diet :</td>
									<td class="day_value closed"><div class="select-block1">
					                <select name="diet">
								<option value="Diet"></option>
					                    <option value="Veg">Veg</option>
					                    <option value="Non Veg">Non Veg</option> 
					                </select>
							    	</div>
							    	</td>
								</tr>
								<tr class="opened">
									<td class="day_label">Religion :</td>
									<td class="day_value closed"><span>
									<div class="select-block1">
					        	                <select name="religion" onchange="showTextBox()">
									
								 		       	  <option value="Religion"></option>
						                    			  <option value="Not Applicable">Not Applicable</option>
											  <option value="Hindu">Hindu</option>
											  <option value="Sikh">Sikh</option>
											  <option value="Christian">Christian</option>		                    
											  <option value="Jain-All">Jain-All</option>
                                              						  <option value="Jain-Digambar">Jain-Digambar</option>
                                              						  <option value="Jain-Others">Jain-Others</option>
                              						                  <option value="Muslim-All">Muslim-All</option> 
                             						                  <option value="Muslim-Shia">Muslim-Shia</option> 
                                              						  <option value="Muslim-Sunni">Muslim-Sunni</option> 
											  <option value="Muslim-Others">Muslim-Others</option> 
											  <option value="Christian-All">Christian-All</option> 
											  <option value="Christian-Catholic">Christian-Catholic</option>
											  <option value="Inter-Religion">Inter-Religion</option> 
											
					                    </select>
	                 				</div></span>
	                  			</td>
								</tr>
								<tr class="opened">
									<td class="day_label">Caste :</td>
									<td class="day_value closed">
									<div class="select-block1">
	                    				<select name="caste">
									<option value="Caste"></option>
									
									<option value="Maratha">Maratha</option>
			                   				<option value="SC">SC</option>
						                        <option value="OBC">OBC</option>
						                        <option value="Penthecost">Penthecost</option>
						                        <option value="Thiyya">Thiyya</option>  
								        
									</select>
		                 			</div></td>
								</tr>
								<tr class="opened">
									<td class="day_label">Mother Tongue :</td>
									<td class="day_value closed">
									<div class="select-block1">
						                	<select name="mothertounge">
											<option value="mothertounge"></option>					
						                    			<option value="English">English</option>
											<option value="Marathi">Marathi</option>
											<option value="Hindi">Hindi</option>
											<option value="Telugu">Telugu</option>
											<option value="Bengali">Bengali</option>
											<option value="Bihari">Bihari</option>
											<option value="Tamil">Tamil</option> 
											<option value="Urdu">Urdu</option> 
											
								    </div>
								    </td>
								</tr>
								<tr class="opened">
									<td class="day_label">Education :</td>
									<td class="day_value closed"><div class="select-block1">
						                <select name="education">
						                    	<option value="education"></option>		
						                    	<option value="Tenth level">Tenth level</option> 
						               		<option value="+2">+2</option> 
						               		<option value="Degree">Degree</option> 
						               		<option value="PG">PG</option> 
									<option value="Business">Business</option> 
						               		<option value="Doctorate">Doctorate</option> 
									<option value="Other">Other</option> 
						                </select>
								    </div>
								    </td>
								</tr>
								<tr class="opened">
								<td class="day_label">Occupation :</td>
								<td class="day_value closed"> <input type="text" id="edit-name" name="occupation" value="" size="100" maxlength="60" value="<?php
		 						echo $occupation;?>" class="form-text"></td>
								</tr>
								<tr class="opened">
									<td class="day_label">Country of Residence :</td>
									<td class="day_value closed">
									<div class="select-block1">
						                    <select name="country">
							                    <option value="country"></option>
							                    <option value="India">India</option>
						                    </select>
						                 </div>
						            </td>
								</tr>
							 </tbody>
				          </table>
				        </div>
				  
				  </div><br>
				 <input type="submit" value="Update Preferences">
		     </div>
		     </form>
		  </div>
	   </div>
   	 </div>
       <div class="clearfix"> </div>
    </div>
  </div>
</div>


<?php include_once("footer.php");?>

