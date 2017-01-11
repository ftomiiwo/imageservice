<!DOCTYPE html>
<html>
	<head>
	    <meta charset="UTF-8">
	    <title>Image Service</title>
	    <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	</head>

	<body>
		<form class="form-horizontal col-md-offset-2 col-md-8" action="/StoreImage" method="POST" id="searchform" enctype="multipart/form-data">
		{{ csrf_field() }}
		<h1 style="text-align: center;">Image Upload</h1>
			<div class="form-group">
				<label for="title"> Title : </label>
				<input id="title" class="form-control" type="text" name="title" />
				<small id="Description" class="form-text text-muted">Kindly make this unique.</small>
			</div>
			<div class="form-group">
			    <label for="description">Image Description</label>
			    <textarea class="form-control" id="title" name="title" placeholder="...e.g.  'This is my first image'. "></textarea>
			</div>
			<div class="form-group">
			    <label for="image">Select Image:</label>
			    <input class="form-control" type="file" name="image" id="image" aria-describedby="uploadHelp"/>
			    <small id="uploadHelp" class="form-text text-muted">Images should be in jpeg,png,jpg,gif or svg format, with size not more than 2MB.</small>
			</div>
			<div class="form-group">
			    <button class="btn btn-success pull-right pull-left col-md-12">Upload</button>
			</div>








			{{---- <fieldset>
				<legend>Image Upload Form</legend>
			    <div class="col-md-12 form-group">
			    	<label class="col-md-12">Title:</label><br>
			        <input class="col-md-6" type="text" name="title" /><br>
			        <label class="col-md-12">Description:</label><br>
			        <textarea class="col-md-6" type="text" name="description" rows="3"></textarea><br>
			        <label class="col-md-12">Select Image:</label><br>
			        <input class="col-md-6" type="file" name="image" /><br>
			    </div> 
			    <div>
			    	<hr>
					<button class="btn btn-success pull-right col-md-6 pull-left">Upload</button>
			    </div>
			</fieldset> ----}}
		</form>
	</body>
</html>