<div class="row">
	<div class="col-lg-6 offset-lg-3">
		<h1>Add Todo</h1>
			<form action="/todos" method="POST">
				@csrf
				<input type="text" name="name">
				<button class="btn btn-primary">Submit</button>
			</form>
	</div>
</div>