<?php 
	
	class Todo {

		


		public function create_task($task) {

			global $database;

			$sql = "INSERT INTO tasks (task_name) VALUES('$task')";

			$result = $database->query($sql);

			return $result; 

		}

		public function delete($id) {
			global $database;

			$result = $database->query("DELETE FROM tasks WHERE task_id = $id LIMIT 1");

			return $result;

		}

		// public function display() {
		// 	$sql = "SELECT * FROM tasks";

		// 	$result = $database->query($sql);

		// 	while($row = mysqli_fetch_assoc($result)) {
		// 		$tasks = $row['task_name'];
		// 	}
		// 	return $tasks;
		// }


	}
 ?>