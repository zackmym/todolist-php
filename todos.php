<?php require_once('header.php'); ?>
<?php require_once('includes/init.php'); ?>

<?php 
	
	$todo = new Todo();
	if(isset($_POST['add_task'])) {
		$task = $database->escape_string($_POST['task']);

		if(!empty($task)) {
			$todo->create_task($task);
			$error = "added successfully";
		} else {
			$error = "empty field can not be saved";
		}
	} else {
		$error = "";
	}
 ?>



<div class="col-md-8 offset-md-2">
	<br>
	
	<form action="" method="post">
		
		<div class="form-group">
			<h3 class="bg-danger"><?php echo $error; ?></h3>
			<input type="text" name="task" class="form-control">
		</div>
		<div class="form-group">
			<input type="submit" name="add_task" value="Add" class="btn btn-primary">
		</div>

	</form>

	<div class="todo-display">
		<h3>TODOS:</h3>



		<table class="table table-hover table-bordered">
			<thead>
				<th>Id</th>
				<th>Task </th>
				<th>Delete </th>
			</thead>

			<tbody>
				<tr>
				<?php 
				
					
						$result = $database->query("SELECT * FROM tasks");

						while($row = $result->fetch_assoc()){

					 ?>
					<td><?php echo $row['task_id']; ?></td>

					<td><?php echo $row['task_name']; ?></td>

					<td><a href="delete.php?id=<?php echo $row['task_id']; ?>">Delete</a></td>

					

				</tr>
				<?php } ?>
			</tbody>
			
		</table>
	</div>


	


</div>
























<?php require_once('footer.php'); ?>