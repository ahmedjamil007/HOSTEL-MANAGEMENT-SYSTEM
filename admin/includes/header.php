
<?php if($_SESSION['id'])
{ ?><div class="brand clearfix" style="background-color: #0B2558;">
		<a href="#" class="logo" style="font-size:16px;background-color: #091C46;color: whitesmoke;" >Hostel Management System</a>
		<span class="menu-btn"><i class="fa fa-bars"></i></span>
		<ul class="ts-profile-nav">
			<li class="ts-account">
				<a href="#"><img src="img/png-clipart-male-portrait-avatar-computer-icons-icon-design-avatar-flat-face-icon-people-head.png" class="ts-avatar hidden-side" alt=""> Account <i class="fa fa-angle-down hidden-side"></i></a>
				<ul>
					<li><a href="my-profile.php">My Account</a></li>
					<li><a href="logout.php">Logout</a></li>
				</ul>
			</li>
		</ul>
	</div>

<?php
} else { ?>
<div class="brand clearfix"style="background-color: #0B2558;">
		<a href="#" class="logo" style="font-size:16px;background-color: #091C46;color: whitesmoke;">Hostel Management System</a>
		<span class="menu-btn"><i class="fa fa-bars"></i></span>
		
	</div>
	<?php } ?>