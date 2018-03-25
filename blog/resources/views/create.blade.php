<h1> Create new post</h1>
<div class="row">
<div class="col-lg-10">
	<form action="{{route{'post.store'}}}" method ="post">
		{{csrf_filed()}}
			<input name ="_method" type="hidden" value="PUT">
		<div class="from-group">
<label  for="title_input">Title</label>
<input type="text" class="from-control" name="title_input">
</div>
	<div class="from-group">
<label  for="content_input">body</label>
<textarea row="4" class="from-control" name="body_input"></textarea>
</div>

<div  for="from-group"> 
	<button typr="submit" class="btn btn-primary">save</button>
</div>
</form>
</div>
</div>





