<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Add New Data</title>
	<!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
	<div class="container">
		<div class="row mt-3">
			<div class="col-md-6 col-offset-3">
				
				<form action="action.php" method="POST">
				  <div class="mb-3">
				    <label for="name" class="form-label">Name</label>
				    <input type="text" class="form-control" name="name">
				  </div>
				  <div class="mb-3">
				    <label for="email" class="form-label">Email</label>
				    <input type="email" class="form-control" name="email">
				  </div>
				  <!-- <input type="submit" name="submit" value="Submit"> -->
				  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
				</form>
			</div>
		</div>
	</div>

	<!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>