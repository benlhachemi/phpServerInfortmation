
<?php include 'server_info.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Server Information</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<h1 class="text-center">Client Server Information</h1>
		<ul class="list-group">
			<?php foreach($serverInfo as $key=>$value):?>
				<li class="list-group-item">
					<b><?php echo "$key : " ?></b>
					<?php echo $value ?>
				</li>
			<?php endforeach;?>
		</ul>
		<footer class="footer">Created By Souhail Benlhachemi &copy; 2019</footer>
	</div>
	
</body>
</html>

