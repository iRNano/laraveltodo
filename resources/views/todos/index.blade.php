<div class="row">
	<div class="col-lg-6 offset-lg-3">
		<h1>Todos</h1>

		<div class="todolist d-flex justify-content-center">
			<ul>
				@foreach($todos as $todo)
					<li class="d-flex" style="{{$todo->isCompleted?"text-decoration: line-through; background-color: lightgreen" : null}};">
							{{$todo->name}}
						@if($todo->isCompleted == 0)
							<span>
								<a href="/todos/{{$todo->id}}/edit">Edit</a>
							
							<form method="POST" action="/todos/{{$todo->id}}">
								@csrf
								{{method_field('DELETE')}}
								{{-- <input type="hidden" name="action" value="{{$todo->id}}"> --}}
								<button type="submit" class="btn btn-danger">Delete</button>	
							</form>
							<form method="POST" action="/todos/{{$todo->id}}/complete">
								@csrf
								{{method_field('PUT')}}
								{{-- <input type="hidden" name="completed" value="1"> --}}
								<button type="submit" class="btn btn-success">Complete</button>	
							</form>
							</span>
						@endif
						
					</li>
				@endforeach
			</ul>
		</div>
		<a href="/todos/create" class="btn btn-primary">Add todo</a>
	</div>
</div>
