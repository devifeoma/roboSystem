<?php include("header.php");?>
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.040854881739!2d3.379332214111657!3d6.516513195286393!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103b8cf8f9607795%3A0x9a95522f61f65093!2sNigerian+Stored+Products+Research+Institute!5e0!3m2!1sen!2sng!4v1504014127076" width="350" height="450" frameborder="0" style="border:0" allowfullscreen></iframe></p>
			</div>
			<div class="col-md-8">
				<form action="#" method="POST" role="form">
					<legend><h3>Contact Information</h3></legend>
				
					<div class="form-group">
						<label for="name">Name*</label>
						<input type="text" class="form-control" id="">
					</div>


					<div class="form-group">
						<label for="name">Email*</label>
						<input type="text" class="form-control" id="">
					</div>

					<div class="form-group">
						<label for="message">Message*</label>
						<textarea name="message" id="input" class="form-control" rows="8" required="required"></textarea><br>
					</div>
				
					<button type="submit" class="btn btn-primary">Submit</button>
				</form>
			</div>
		</div>
	</div>

<?php include("footer.php");?>