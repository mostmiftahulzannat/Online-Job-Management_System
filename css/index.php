<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Databse Search</title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container" style="margin-top: 50px;">
		<h2 style="text-align: center;">search here....</h2><br>
		<div class="row">
			<div class="col-md-2">
				
			</div>
			<div class="col-md-8 form-group" >
				<input type="text" name="search" id="search" class="form-control" autocomplete="off" placeholder="search here.."><br>
			</div>
			<div class="col-md-2"></div>
		</div>
		<div class="result">
			
		</div>
	</div>
</body>
</html>
<script>
	$(document).ready(function(){
		loadData();
		function loadData(query)
		{
			$.ajax({
          url: "action.php",
          type: "POST",
          cache: false,
          data: {query:query},
          success: function(response)
          {
          	$(".result").html(response);
          }
			});
		}
		$("#search").keyup(function(){
			var search = $(this).val();
		});
	});
</script>