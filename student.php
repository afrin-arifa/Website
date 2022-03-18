<?php
		include 'lib/user.php';
		include 'inc/header.php';
		Session::checkSession();
 ?>

<?php
		$loginmsg = Session::get('loginmsg');
		if (isset($loginmsg)) {
			echo $loginmsg;
		}
		Session::set('loginmsg', NULL);
?>

<link rel="stylesheet" href="style.css">

<div class="panel panel-default">
  <div class="panel-heading">
        <h2>User list <span class="pull-right">Welcome  <strong> !
					<?php
							$name = Session::get("username");
							if (isset($name)) {
								echo $name;
							}
					 ?>
				</strong></span></h2>
</div>

    <div class="panel-body">
      <table class="table table-striped">
        <tr>
        <th width="5%">Serial</th>
        <th width="10%">Name</th>
				<th width="10%">Roll</th>
				<th width="10%">Department</th>
        <th width="10%">Username</th>
        <th width="10%">Email Address</th>
        <th width="10%">Action</th>
      </tr>
	<?php
			$user = new User();
			$userdata = $user->getUserData();
			if ($userdata) {
				$i = 0;
				foreach ($userdata as $data) {
					$i++;
	 ?>
      <tr>
        <td><?php echo $i; ?></td>
        <td><?php echo $data['name']; ?></td>
				<td><?php echo $data['roll']; ?></td>
				<td><?php echo $data['department']; ?></td>
        <td><?php echo $data['username']; ?></td>
        <td><?php echo $data['email']; ?></td>
        <td>
          <a class="btn btn-primary" href="profile.php?id=<?php echo $data['id']; ?>"> Veiw</a>
        </td>
      </tr>
		<?php 	} }else{?>
					<tr>
						<td colspan="5"><h2>No User Data Found.....</h2></td>
					</tr>
		<?php } ?>
      </table>

    </div>
</div>

  <?php include 'inc/footer.php';?>
