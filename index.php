<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="file/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="file/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/main_table.css">
	<script type="text/javascript" src="file/jquery.js"></script>
	<title>CGPA Calculate</title>
</head>
<body>
       <header>
       	<nav>
       		<div class="container" id="container">
       			<h1 class="text text-center">Cumulative Grade Point Average<br>(CGPA) Calculation</h1>
       		</div>
       	</nav>
       </header> 

       <main>
          <div>
      	 	 <center>
       		  <p><b>Note:</b><i>In order to insert your grade,you will need to use:</i></p>
       		    <table class="col" id="tablemain">
       			<tr>
       				<td>5</td>
       				<td>as</td>
       				<td>A</td>
       			</tr>

       			 <tr>
       				<td>4</td>
       				<td>as</td>
       				<td>B</td>
       			</tr>

       			<tr>
       				<td>3</td>
       				<td>as</td>
       				<td>C</td>
       			</tr>

       			<tr>
       				<td>2</td>
       				<td>as</td>
       				<td>D</td>
       			</tr>

       			<tr>
       				<td>1</td>
       				<td>as</td>
       				<td>1</td>
       			</tr>

       			 <tr>
       				<td>0</td>
       				<td>as</td>
       				<td>F</td>
       			</tr>


       		</table>
         	</center>
      </div>


<div class="container" id="container">
<div>
<center>
		<table class="gridtable" id="tablemain">
			<form action="process.php" method="post">
				<div>
					<thead>
						<th class="text text-center" style="color: black; font-family: sans-serif;font-size: 18px;">Student Details</th>
					</thead>
				</div>
				<div>
					<tbody>
						<div>
							<tr class="breakrow form-group">
								<td  style="text-align: center; font-size: 18px;">
									<label>CLICK TO INSERT YOUR DETAILS</label>
								</td>
							</tr>
						</div>


                       
                         <div>
							<tr class="datarow form-group" id="item">
								<td>
									<label>Student Name:</label>
									<input class="form-control" type="text" name="s_name" placeholder="Enter Your Name" >
								</td>
							</tr>
						</div>


				     <div>
							<tr class="datarow form-group" id="item">
								<td>
									<label>Student Faculty:</label>
									<input class="form-control"  type="text" name="s_faculty"placeholder="Enter Your Faculty" >
								</td>
							</tr>
						</div>

					<div>
							<tr class="datarow form-group" id="item">
								<td>
									<label>Student Department:</label>
									<input class="form-control"  type="text" name="s_department" placeholder="Enter Your Department">
								</td>
							</tr>
						</div>

					<div>
							<tr class="datarow form-group" id="item">
								<td>
									<label>Student Level:</label>
									<input class="form-control"  type="text" name="s_level" placeholder="Enter Your Level">
								</td>
							</tr>
						</div>



					 <div>
							<tr class="datarow form-group" id="item">
								<td>
									<label>Student Admission Number</label>
									<input class="form-control"  type="text" name="s_adm_no" placeholder="Enter Your Admission Number">
								</td>
							</tr>
						</div>


					</tbody>
				</div>
				
		
		</table>
	</center>
</div>
</div>

   <div class="container" id="container">
   	<?php include('includes/main_table.php') ?>
               
   </div>                   
</main>

<script>
	$(document).ready(function(){
		$('.breakrow').click(function(){
			$(this).nextUntil('tr.breakrow').slideToggle(200);
		});
	});
</script>

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