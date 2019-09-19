@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
      	<form method="post" action="/createpost" name="post-create">
      		@csrf
	      	<p>Title</p>
	      	<input type="text" name="title" style="width:100%;" id="text-title">
	      	<p>Content</p>
	      	<input name="content" type="hidden">
	      	<div id="toolbar">
			  <button class="ql-bold">Bold</button>
			  <button class="ql-italic">Italic</button>
			</div>
	        <div id="editor">
			  <p>Hello World!</p>
			</div>
			<hr>
			<div class="clearfix" style="float:right">
	          <button href="#" id="create-post" class="btn btn-primary" type="submit">Create Post</a>
	        </div>
    	</form>
      </div>
    </div>
</div>

@endsection

@section('scripts')
<script src="//cdn.quilljs.com/1.3.6/quill.min.js"></script>

<script>

	var editor = new Quill('#editor', {
    modules: { toolbar: '#toolbar' },
    theme: 'snow'
	});

	var form = document.querySelector('form[name=post-create]');

	form.onsubmit = function() {

		var content = document.querySelector('input[name=content]');
		content.value = JSON.stringify(editor.getContents());

	}

</script>

<script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
  <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
@endsection