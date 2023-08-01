<?php 
if (!isset($_SESSION['username']) || $_SESSION['usertype'] != 'admin') {
    header("location: ../index.php?e=Restricted Login, Different User Type");
    exit();
}

$username = $_SESSION['username'];
$full_name = $_SESSION['full_name'];
$id = $_SESSION['user_id'];
$count = $_SESSION['recipe_count'];
?>

<style type="text/css">
	.topbar{
		background-color: rgba(0,0,0,0.4);
		color: white;
		height: 90px;
		position: fixed;
		top: 0;
		left: 0;
		width: 100%;
		z-index: 9999;
	}
	.brand{
		width: 350px;
		margin-left: -30px;
	}
	.btnName{
		float: right;
		margin-top: 30px;
		margin-right: 40px;
	}
</style>

<div class="topbar">
	<a href="dashboard_admin.php"><img src="images/navlogo.png" class="brand"></a>

	<!-- Split dropstart button -->
	<div class="btn-group dropstart btnName">
	  <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
	    <span class="visually-hidden">Toggle Dropstart</span>
	  </button>
	  <ul class="dropdown-menu">
	    <!-- Dropdown menu links -->
	   	<a href="logout.php" style="text-decoration: none; color: red; margin-left: 25px;">Logout Session</a>
	  </ul>
	  <button type="button" class="btn btn-primary">
	    Welcome, <?php echo $full_name; ?> | ID #<?php echo $id; ?>
	  </button>

	</div>

</div>