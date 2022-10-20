<?php include("../shared/header.php"); ?> 
	<link rel="stylesheet" href=
"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
		integrity=
"sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
		crossorigin="anonymous">
	<h2>GeeksforGeeks</h2>
		
	
<p><b>Click on the button to see image</b></p>

		
	<!-- Button to launch a modal -->
	<button type="button"
		class="btn btn-primary"
		data-toggle="modal"
		data-target="#exampleModal">
		Show image
	</button>

	<!-- Modal -->
	<div class="modal fade"
		id="exampleModal"
		tabindex="-1"
		role="dialog"
		aria-labelledby="exampleModalLabel"
		aria-hidden="true">
		
		<div class="modal-dialog" role="document">
			<div class="modal-content">
			
				<!-- Add image inside the body of modal -->
				<div class="modal-body">
					<img id="image" src=
"../assets/images/successful.jpeg"
						alt="Click on button" />
				</div>

				<div class="modal-footer">
					<button type="button"
						class="btn btn-secondary"
						data-dismiss="modal">
						Close
				</button>
				</div>
			</div>
		</div>
	</div>

	<!-- Adding scripts to use bootstrap -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
			integrity=
"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
			crossorigin="anonymous">
	</script>
	<script src=
"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
			integrity=
"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
			crossorigin="anonymous">
	</script>
	<script src=
"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
			integrity=
"sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
			crossorigin="anonymous">
	</script>
</body>

<?php include("../shared/footer.php"); ?>