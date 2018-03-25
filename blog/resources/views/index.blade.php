



<h1> All Posts </h1>
<a herf = "{{route{'post.create'}}}" class="bt bt-sm btn-primary">create new post </a></h1>
<div class="row">
	<div class="col-lg-10">
		<table class="table table-bordered">
			<tr>
				<th>id</th>
				<th>title</th>
				<th>body</th>
			</tr>
			@foreach (posts as $rs)
			<tr>
				<td>{{$rs->post_id}}</td>
				<td>{{$rs->title}}</td>
				<td>{{$rs->body}}</td>
				<td><a class="btn-sm btn-primart" href="{{route{'post.edit',$rs->post_id}}}"> Edit </a></td>
				<td>
	<form action="{{route{'post.destroy',$post->post_id}}}" method ="post">
{{csrf_filed()}}
<input type="hidden" name="_method" value="PUT">
<input type="submit" value= "delete" class="btn-xs btn-danger">
</form>

				</td>
			</tr>
			@endforeach
		</table>
	</div>
</div>
