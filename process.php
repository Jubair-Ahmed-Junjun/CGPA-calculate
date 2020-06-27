<!DOCTYPE html>
<html>
<head>
	<title>CGPA Calculation</title>
	<link rel="stylesheet" type="text/css" href="file/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="file/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/main_table.css">
	<script type="text/javascript" src="file/jquery.js"></script>

	<style>
		table{
			margin:0 auto;
			overflow: auto;
			background: #33CCCC;
			width: 38px;
			font-family: "helvetica,arial,sans-serif";
			font-size: 20px;
			border-collapse: collapse;
			border-radius: 16px;
		}
		th{
			text-align: center;
			height: 15px;
			background: #0099CC;
		}
		table td{
			text-align: left;
			margin-left: 50px;
			padding: 0 50px 10px
		}
		table strong{
			color: #33CCCC;
		}
		table td b{
			justify-content: center;
			text-align: justify;
		}
		button{
			float: right;

		}
		button a{
			color: #fff;
			font-size: 25px;
			font-family: "Apple Chancerey";
		}
		button a:hover{
			color: #fff;
			float: right;
		}
		footer{
	        text-align: center;
	        font-size: 22px;
	        background: black;
	        color: white;
	        display: flex;
	        justify-content: center;
	        font-family: "Apple-chancery";
	 		font-family:serif;
			width: 100%;
			height: auto;
			margin: 0 auto;
			margin-top: 260px;
		}
	</style>
</head>
<body>
       <main>
       	<div class="container" id="container">
       		<center>
       			<table>
       				<form>
       					<thead>
       						<th>
       							<h1>RESULT</h1>
       						</th>
       					</thead>
       					<tbody>
       						<?php
                       if (isset($_POST['btn'])) {
                       	        $s_name = $_POST['s_name'];
                            	$s_faculty = $_POST['s_faculty'];
                            	$s_department = $_POST['s_department'];
                            	$s_level = $_POST['s_level'];
                            	$s_adm_no = $_POST['s_adm_no'];
                       	
                      
       						?>

       						<tr>
       							<td>
       								STUDENT NAME:<strong>_</strong><?php echo  $s_name;  ?>
       							</td>
       						</tr>

       						<tr>
       							<td>
       								STUDENT FACULTY:<strong>__</strong><?php echo $s_faculty;  ?>
       							</td>
       						</tr>

       						<tr>
       							<td>
       								STUDENT DEPARTMENT:<strong">__</strong><?php echo $s_department;?>
       							</td>
       						</tr>

       						<tr>
       							<td>
       								STUDENT LEVEL:<strong>_</strong><?php echo $s_level;  ?>
       							</td>
       						</tr>

       						<tr>
       							<td>
       								STUDENT ADMISSION:<strong>_</strong><?php echo $s_adm_no;  ?>
       							</td>
       						</tr>

       						<tr>
       							<td>
       								<b style="color: black;">_________________________________________________________</b>
       							</td>
       						</tr>

       						<tr>
       							<td>
       								
                                    <?php


                                      if (isset($_POST['btn'])) {
                                      	$s_name = $_POST['s_name'];
                            	        $s_s_faculty = $_POST['s_faculty'];
                            	        $s_department = $_POST['s_department'];
                            	        $s_level = $_POST['s_level'];
                            	        $s_adm_no = $_POST['s_adm_no'];

                                         }
                                        $course_code_1 = $_POST['course_code_1'];
                            	        $course_unit_1 = $_POST['course_unit_1'];
                            	        $course_grade_1= $_POST['course_grade_1'];

                            	        $course_code_2 = $_POST['course_code_2'];
                            	        $course_unit_2 = $_POST['course_unit_2'];
                            	        $course_grade_2= $_POST['course_grade_2'];

                            	        $course_code_3 = $_POST['course_code_3'];
                            	        $course_unit_3 = $_POST['course_unit_3'];
                            	        $course_grade_3 = $_POST['course_grade_3'];

                            	        $course_code_4 = $_POST['course_code_4'];
                            	        $course_unit_4 = $_POST['course_unit_4'];
                            	        $course_grade_4 = $_POST['course_grade_4'];

                            	        $course_code_5 = $_POST['course_code_5'];
                            	        $course_unit_5 = $_POST['course_unit_5'];
                            	        $course_grade_5 = $_POST['course_grade_5'];

                            	        $course_code_6 = $_POST['course_code_6'];
                            	        $course_unit_6 = $_POST['course_unit_6'];
                            	        $course_grade_6 = $_POST['course_grade_6'];

                            	        $course_code_7 = $_POST['course_code_7'];
                            	        $course_unit_7 = $_POST['course_unit_7'];
                            	        $course_grade_7 = $_POST['course_grade_7'];

                            	        $course_code_8 = $_POST['course_code_8'];
                            	        $course_unit_8 = $_POST['course_unit_8'];
                            	        $course_grade_8 = $_POST['course_grade_8'];

                            	        $course_code_9 = $_POST['course_code_9'];
                            	        $course_unit_9 = $_POST['course_unit_9'];
                            	        $course_grade_9 = $_POST['course_grade_9'];

                            	        $course_code_10 = $_POST['course_code_10'];
                            	        $course_unit_10 = $_POST['course_unit_10'];
                            	        $course_grade_10 = $_POST['course_grade_10'];

                            	        $course_code_11 = $_POST['course_code_11'];
                            	        $course_unit_11 = $_POST['course_unit_11'];
                            	        $course_grade_11 = $_POST['course_grade_11'];

                            	        $course_code_12 = $_POST['course_code_12'];
                            	        $course_unit_12 = $_POST['course_unit_12'];
                            	        $course_grade_12 = $_POST['course_grade_12'];

                            	        $course_code_13 = $_POST['course_code_13'];
                            	        $course_unit_13 = $_POST['course_unit_13'];
                            	        $course_grade_13 = $_POST['course_grade_13'];

                            	        $course_code_14 = $_POST['course_code_14'];
                            	        $course_unit_14 = $_POST['course_unit_14'];
                            	        $course_grade_14 = $_POST['course_grade_14'];

                            	        $course_code_15 = $_POST['course_code_15'];
                            	        $course_unit_15 = $_POST['course_unit_15'];
                            	        $course_grade_15 = $_POST['course_grade_15'];

                            	        $course_code_16 = $_POST['course_code_16'];
                            	        $course_unit_16 = $_POST['course_unit_16'];
                            	        $course_grade_16 = $_POST['course_grade_16'];


                            	        $course_code_17 = $_POST['course_code_17'];
                            	        $course_unit_17 = $_POST['course_unit_17'];
                            	        $course_grade_17 = $_POST['course_grade_17'];


                            	        $course_code_18 = $_POST['course_code_18'];
                            	        $course_unit_18 = $_POST['course_unit_18'];
                            	        $course_grade_18 = $_POST['course_grade_18'];

                            	        $course_code_19 = $_POST['course_code_19'];
                            	        $course_unit_19 = $_POST['course_unit_19'];
                            	        $course_grade_19 = $_POST['course_grade_19'];

                            	        $course_code_20 = $_POST['course_code_20'];
                            	        $course_unit_20 = $_POST['course_unit_20'];
                            	        $course_grade_20 = $_POST['course_grade_20'];

                            	        $T_unit =(
                            	         (int)((int)$course_unit_1+
                            	         (int)$course_unit_2+
                            	         (int)$course_unit_3+
                            	         (int)$course_unit_4+
                            	         (int)$course_unit_5+
                            	         (int)$course_unit_6+
                            	         (int)$course_unit_7+
                            	         (int)$course_unit_8+
                            	         (int)$course_unit_9+
                            	         (int)$course_unit_10+
                            	         (int)$course_unit_11+
                            	         (int)$course_unit_12+
                            	         (int)$course_unit_13+
                            	         (int)$course_unit_14+
                            	         (int)$course_unit_15+
                            	         (int)$course_unit_16+
                            	         (int)$course_unit_17+
                            	         (int)$course_unit_18+
                            	         (int)$course_unit_19+
                            	         (int)$course_unit_20
                            	     )
                            	     );

                                         $T_score =( 
                                                       ((int)$course_unit_1*(int)$course_grade_1)+
                                                      ((int)$course_unit_2*(int)$course_grade_2)+((int)$course_unit_3*   (int)$course_grade_3)+((int)$course_unit_4*   (int)$course_grade_4)+((int)$course_unit_5*   (int)$course_grade_5)+((int)$course_unit_6*   (int)$course_grade_6)+((int)$course_unit_7*   (int)$course_grade_7)+((int)$course_unit_8*   (int)$course_grade_8)+((int)$course_unit_9*   (int)$course_grade_9)+((int)$course_unit_10*  (int)$course_grade_10)+((int)$course_unit_11* (int)$course_grade_11)+((int)$course_unit_12* (int)$course_grade_12)+((int)$course_unit_13*  (int)$course_grade_13)+((int)$course_unit_14* (int)$course_grade_14)+((int)$course_unit_15* (int)$course_grade_15)+((int)$course_unit_16* (int)$course_grade_16)+((int)$course_unit_17* (int)$course_grade_17)+((int)$course_unit_18* (int)$course_grade_18)+((int)$course_unit_19* (int)$course_grade_19)+((int)$course_unit_20* (int)$course_grade_20)
                                                  );
                                   
                                     $CGPA = ((float)((float)$T_score)/(float)$T_unit);

                                    echo "Total unit = <big style = 'color:#00FF00'>'".$T_unit."'</big>";
                                    echo "<br>";




                                  if ($CGPA>=4.50 and $CGPA<=5.00) {
                                    	echo "<tr>

                                    	    <td>
                                    	        <h4>Your CGPA is:<big style='color:#00FF00;'>'".$CGPA."'</big><br>
                                    	        <big style='color:#00FF00;'>Congratulation!</big>You are at <big><i>'First Class'</i></big>Point.<big style='color:#00FF00;'><i>Keep it up...</i></big>
                                    	        </h4> 
                                    	    </td>
                                    	</tr>";
                                    }  


                                   else if ($CGPA>=3.49 and $CGPA<=4.50) {
                                    	echo "<tr>

                                    	    <td>
                                    	        <h4>Your CGPA is:<big style='color:#00FF00;'>'".$CGPA."'</big><br>
                                    	        <big style='color:#00FF00;'>Congratulation!</big>You are at <big><i>'Second Class Honour Upper divission'</i></big>Point.<big style='color:#00FF00;'><i>Keep it up...</i></big>
                                    	        </h4> 
                                    	    </td>
                                    	</tr>";
                                    }  

                                   else if ($CGPA>=2.39 and $CGPA<=3.49) {
                                    	echo "<tr>

                                    	    <td>
                                    	        <h4>Your CGPA is:<big style='color:#00FF00;'>'".$CGPA."'</big><br>
                                    	        <big style='color:#00FF00;'>Congratulation!</big>You are at <big><i>'Second Class Honour Lower divission'</i></big>Point.<big style='color:#00FF00;'><i>Keep it up...</i></big>
                                    	        </h4> 
                                    	    </td>
                                    	</tr>";
                                    }  

                                   else if ($CGPA>=1.50 and $CGPA<=2.39) {
                                    	echo "<tr>

                                    	    <td>
                                    	        <h4>Your CGPA is:<big style='color:#00FF00;'>'".$CGPA."'</big><br>
                                    	        <big style='color:#FF9900;'>Congratulation!</big>You are at <big><i>'Third Class'</i></big>Point.<big style='color:#00FF00;'><i>Keep it up...</i></big>
                                    	        </h4> 
                                    	    </td>
                                    	</tr>";
                                    }  

                                    else{
                                    	echo "<tr>

                                    	    <td>
                                    	        <h4>Your CGPA is:<big style='color:#00FF00;'>'".$CGPA."'</big><br>
                                    	        <big style='color:#00FF00;'>Sorry!</big>You are at <big><i>'You are withdrwn from the University do to certain point of grade you couldn't make..</i></big>
                                    	        </h4> 
                                    	    </td>
                                    	</tr>";
                                    }  
                             }
 ?>

       							</td>
       						</tr>


                            <tr>
       							<td>
       								<button class="btn btn-success">
       								<a href="index.php">Take it over...</a>
       								</button>
       							</td>
       						</tr>

       					</tbody>
       				</form>
       			</table>
       		</center>
       	</div>
       </main>


      <footer>
 	<div>
 		<address>
 			encoded by:Jubair Ahmed Junjun.<br>
 			copyright &copy;2020-2021 CGPA Calculator.All reserved.
 		</address>
 	</div>
 </footer>

</body>
</html>