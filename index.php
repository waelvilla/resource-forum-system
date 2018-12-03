<!DOCTYPE html>
<?php include 'db.php'; 

$sql ="select * from courses"; //write the query
$rows = $db->query($sql); // stire the records and thenn loop for than i will go table as in Step8
?>
<html>
	<head>
		<title>	Resources Forum</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	</head>
	<body>
		<!-- https://getbootstrap.com/docs/4.0/content/tables/ -->
		<!-- Task 4 Search BootStrap modal and get w3 school modal
		https://www.w3schools.com/bootstrap/bootstrap_modal.asp
		and paste the code after print button
		-->
		<div class="container">
			
			<div class="row" style="margin-top: 70px;">
				<center><h1> PSU Resources Forum </h1></center>
				<div class="col-md-10 col-md-offset-1" > <!-- Task 2 -->
					<table class="table">
						<!-- For Task 4 : data tagget will be equal to id and data toggle will be class but this is based on jquery and will not work without it-->
						<button type="button" data-target="#myModal" data-toggle="modal" class="btn btn-primary"> Add Courses</button>  <!-- Task 2 --> <!-- Task 4 : Data Target-->
						<button type="button" class="btn btn-default pull-right"> Print All</button> <!-- Task 2 -->

							<!-- Modal for button pop up copied from w3 Schools Starts Here-->
							<div id="myModal" class="modal fade" role="dialog">
							  <div class="modal-dialog">

							    <!-- Modal content-->
							    <div class="modal-content">
							      <div class="modal-header">
							        <button type="button" class="close" data-dismiss="modal">&times;</button>
							        <h4 class="modal-title">Add Book</h4> <!-- Task 5: Add tasks title changed -->
							      </div>
							      <div class="modal-body">
							      	 <!-- Task 5: Add form here -->
							      	 <!-- Step 9: form post to send the data we can post in the same .php-->
							       <form method="post" action="add.php">
								       	<div class="form-group">
								       		<label> Book Name</label>
								       		<input type="text" required name="taskindex" class="form-control"> <!-- Task 5: required for mandataory field-->
								       	</div>
									<input type="submit" name="send" value="Add" class="btn btn-success">
							       </form>
										<!-- Task 5: Add form here ends -->

							      </div>
							      <div class="modal-footer">
							        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							      </div>
							    </div>

							  </div>
							</div>
							<!-- Modal for button pop up copied from w3 Schools Ends here-->



						<hr><br>
						<thead>
							<tr>
								<th scope="col">Course ID</th>
								<th scope="col">Course Name</th>   <!-- Header  -->
								<th scope="col">College</th> 
								 
							</tr>
						</thead>
						<tbody> <!-- Step 8: tbody will be used for displaying the data -->
							<tr>
								<!-- Task 8 Loop starts here -->
								<?php while ($row = $rows->fetch_assoc()) :
								?>
								<th scope="row"><?php echo $row['course_id'] ?></th> <!-- Task 8 Print from Database -->
								<td class="col-md-10"><?php echo $row['course_name'] ?></td>  <!-- Task 3 -->
								<td class="col-md-10"><?php echo $row['college'] ?></td> 
								<td><a href="course_page.php?id=<?php echo $row['course_id'];?>" class="btn btn-success">Visit</td> <!-- Task 3 -->
								
							</tr>
						<?php endwhile; ?> <!-- Task 8 Loop ends here -->
						
						</tbody>
					</table>
					<div>
					</div>
				</div>

				<div class="col-md-12 text-center">
			<p>Search</p>
			<form action="search.php" method="post" class="form-group">
				
				<input type="text" placeholder="Search for course, resource, etc."
				 name="searchTask" class="form-control">
			</form>
		</div>
			</body>
		</html>