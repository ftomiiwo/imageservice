<form >

</form>

<form class="form-horizontal" action="/StoreImage" method="POST" id="searchform" enctype="multipart/form-data">
{{ csrf_field() }}
	<fieldset>
	<!-- Form Name -->
		<legend>Image Upload Form</legend>
	    <div class="col-md-12 form-group form-color">
	        <label class="col-md-12">Select Image</label>
	        <input class="col-md-6" type="file" name="image" />
			<button class="btn btn-warning pull-right col-md-12">Upload</button>
	    </div>
	</fieldset>
</form>
