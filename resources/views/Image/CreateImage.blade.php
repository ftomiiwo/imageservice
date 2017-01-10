<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title></title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

</head>

	<body>

	<h1 class="well well-lg">All Image List</h1>
	<form class="form-horizontal" action="/StoreImage" method="POST" id="searchform" enctype="multipart/form-data">
	{{ csrf_field() }}
		<fieldset>
			<legend>Image Upload Form</legend>
		    <div class="col-md-12 form-group">
		    	<label class="col-md-12">Title</label><br>
		        <input class="col-md-6" type="text" name="title" /><br>
		        <label class="col-md-12">Description</label><br>
		        <textarea class="col-md-6" type="text" name="description" rows="3"></textarea><br>
		        <label class="col-md-12">Select Image</label><br>
		        <input class="col-md-6" type="file" name="image" /><br>
				<button class="btn btn-warning pull-right col-md-12">Upload</button>
		    </div>
		</fieldset>
	</form>
</body>
</html>