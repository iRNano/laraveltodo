<h1>Edit Todo</h1>
<form action="/todos/{{$todo->id}}" method="POST">
	@csrf
	@method('PUT')
	<input type="text" name="name" value="{{$todo->name}}">
	<button type="submit">Update</button>
</form>