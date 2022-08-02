<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!-- Bootstrap 4 -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.5/umd/popper.min.js" integrity="sha512-8cU710tp3iH9RniUh6fq5zJsGnjLzOWLWdZqBMLtqaoZUA6AWIE34lwMB3ipUNiTBP5jEZKY95SfbNnQ8cCKvA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

	<!-- Latest Compiled JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.0/js/bootstrap.min.js" integrity="sha512-8Y8eGK92dzouwpROIppwr+0kPauu0qqtnzZZNEF8Pat5tuRNJxJXCkbQfJ0HlUG3y1HB3z18CSKmUo7i2zcPpg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body>
	<div class="container"><br>
		<h1 class="text-center">Insert Data using AJAX PHP and MySQLi</h1>
		<br>
		<div class="col-lg-8 m-auto">
			<form id="myform" action="indexphp.php" method="post">
				<div class="form-group">
					<label>Username :</label>
					<input type="text" name="username" class="form-control">
				</div>

				<div class="form-group">
					<label>Password :</label>
					<input type="password" name="password" class="form-control">
				</div>

				<input type="submit" name="submit" id="submit" value="Submit" class="btn btn-success">
			</form>
		</div >

		<div>
			<br><br>
			<h1 class="text-center bg-dark text-white">Dispay Data using AJAX</h1>
			<br>
			<button id="displaydata" class="btn btn-danger ">Display</button>

			<table class="table table-striped table-border text-center">
				<thead>
					<th> Id </th>
					<th> Name </th>
					<th> Password </th>
				</thead>

				<tbody id="response">
					
				</tbody>

			</table>

		</div>
	</div>

	<script type="text/javascript">
		$(document).ready(function(){
			var form = $('#myform');
			$('#submit').click(function(){
				$.ajax({
					url: form.attr("action"),
					type: 'post',
					data: $('#myform input').serialize(),

					success: function(data){
						console.log(data);
					}
				});
			});
			$('#displaydata').click(function(){
				$.ajax({
					url: 'displayajax.php',
					type: 'post',
					success: function(responsedata){
						$('#response').html(responsedata);
					}
				});
			});
		});


	</script>
</body>
</html>