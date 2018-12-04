<?php 
include 'db.php';
$id=$_GET['id'];
$sql="select * from resources";
$rows=$db->query($sql);
?>

<html>
	<head>
		<title>	<?php echo $id; ?></title>
		<script src="dist/jquery.min.js"></script>
		<script src="dist/bootstrap.min.js" ></script>
		<link rel="stylesheet" href="dist/bootstrap.min.css">
	</head>
	<body>
		<div class="container">
			
			<div class="row" style="margin-top: 70px;">
				<center><h1> <?php echo $id; ?> Course Page </h1></center>
				<div class="col-md-10 col-md-offset-1" > <!-- Task 2 -->
					<table class="table">
						
						<button type="button" data-target="#myModal" data-toggle="modal" class="btn btn-primary"> Add Courses</button>  <!-- Task 2 --> <!-- Task 4 : Data Target-->

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
							       <form method="post" action="add.php">
								       	<div class="form-group">
								       		<label> Book Name</label>
								       		<input type="text" required name="taskindex" class="form-control"> <!-- Task 5: required for mandataory field-->
								       	</div>
									<input type="submit" name="send" value="Add" class="btn btn-success">
							       </form>

							      </div>
							      <div class="modal-footer">
							        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							      </div>
							    </div>

							  </div>
							</div>

						<hr><br>

						<tbody> 
							<thead><tr><h3>Past Exams</h3></tr></thead>
							<tr>
								<?php while ($row = $rows->fetch_assoc()) :
								?>
								<th scope="row"><?php echo $row['id'] ?></th> 
								<td class="col-md-10"><?php echo $row['title'] ?></td> 
								<td class="col-md-10"><?php echo $row['category'] ?></td>
								<td class="col-md-10"><?php echo $row['uploader'] ?></td> 
								<td><a href="course_page.php?id=<?php echo $row['course_id'];?>" class="btn btn-success">Visit</td> <!-- Task 3 -->
								
							</tr>
						<?php endwhile; ?>				
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