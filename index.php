 <?php
  include_once 'includes/dbh.ini.php';
  
 
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="./styles.css?version5">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light+Two" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
    <title>PHP ToDo List</title>
</head>
<body>
	<div id="page">
		<div class="heading">
			<h1>ToDo List</h1>
		</div>
		<div class="main">
		    <form action="includes/signup.ini.php" method="POST" id="input-form">
				<label for="toDoText">Things to do: </label><input type="text" name="toDoText" placeholder="Write here..." class="to-do-input" autocomplete="off"><br>
				<button type="submit" name="toDoSubmit" class="to-do-add">Add new item</button>
			</form>
			<div id="main-content">
				 <table id="table-of-tasks">
					<thead>
						<tr>
							<th>Number</th>
							<th>My tasks</th>
							<th>Action1</th>
							<th>Action2</th>
						</tr>
					</thead>
					<tbody>
						<?php
							$i = 1;
							while ($numberOfTasks--) {
							  $row = mysqli_fetch_array($tasks);
							  $taskID = $row['id'];
							  $taskText = $row['toDoText'];
							  $status = $row['status'];
						?>
						<tr>
							<td class="task-id"><?php echo $i; ?></td>
							<td class="task<?php echo ($status == 1) ? ' done' : ''; ?>"><?php echo $taskText; ?></td>
							<td class="delete-btn"><a href="includes/delTask.ini.php?del_task=<?php echo $taskID; ?>">Delete</a></td>
							<td class="<?php echo ($status == 1) ? 'done' : 'done-btn'; ?>"><a href="includes/done.ini.php?del_task=<?php echo $taskID; ?>">Done</a></td>
						</tr>
						<?php
								$i++;	  
							}
						?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</body>
</html>