<?php 
	include_once "header.php";
	if($logged_in)
	{
		$after_login=true;
		include_once "menu.php";
?>

<?php
		if($status=="before_submission" or $status=="failure")
		{
?>
	<br>
	<center><h3 class="ui header">Please fill up the following form to add new book</h3></center>
	<br>
	<div class="ui text container">
	<form method="post" class="ui form">
		<div class="ui raised very padded text container segment">
			<center><h3 class="ui header">Book Add Form</h3></center>
			<br>
			<div class="field">
			<label for="title">Title</label>
			<input type="text" name="title" id="title" value="<?php echo $_REQUEST["title"]; ?>">
			<font color="red"><?php echo $errors["title"]; ?></font>
			</div>
			<br>
			<div class="field">
			<label for="author">Author</label>
			<input type="text" name="author" id="author" value="<?php echo $_REQUEST["author"]; ?>">
			<font color="red"><?php echo $errors["author"]; ?></font>
			</div>
			<br>
			<div class="field">
			<label for="description">Description</label>
			<input type="text" name="description" id="description" value="<?php echo $_REQUEST["description"]; ?>">
			<font color="red"><?php echo $errors["description"]; ?></font>
			</div>
			<br>
			<input type="hidden" name="page" value="book_add">
			<input type="hidden" name="caller" value="self">
			<center><input class="ui positive button" type="submit" value="Save"></center>
		</div>
	</form>
	</div>
<?php
		}
		else
		{
?>
		<br><center><h3 class="ui header">Book Saved</h3></center>
<?php
		}
	}
	else
	{
		$before_login=true;
		include_once "menu.php";
?>
<br><center><h3 class="ui header">Invalid Login!!! Try Again.</h3></center>
<?php
	}
	include_once "footer.php";
?>
