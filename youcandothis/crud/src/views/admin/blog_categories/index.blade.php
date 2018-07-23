@extends('layouts.admin')
@section('title','Blog Categories')
@section('content')
<div class="min-height-200px">
	<!-- Contextual classes Start -->
	<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
		<div class="clearfix mb-20">
			<div class="pull-left">
				<h4 class="text-blue">Blog Categories</h4>
			</div>
			<div class="pull-right">
				<a href="{!! route('blog_categories.create') !!}" class="btn btn-primary btn-sm scroll-click" rel="content-y" role="button"><i class="fa fa-plus"></i> Add Blog Category</a>
			</div>
		</div>
		<div class="table-responsive">
			@if(count($blog_categories) > 0)
			<table class="table table-striped"  id="blog_categories" class="display" cellspacing="0" width="100%">
				<thead>
					<tr>
						<th scope="col">Name</th>
						<th scope="col">Action</th>
					</tr>
				</thead>
				<tbody>
					@foreach($blog_categories as $blog_category)
					<tr>													
						<td>{!! $blog_category->name !!}</td>
						<td><a href="{!!route('blog_categories.edit',['id'=>$blog_category->id])!!}" class="btn btn-success"><i class="fa fa-pencil"></i></a> <a href="{!!route('blog_categories.destroy',['id'=>$blog_category->id])!!}" class="btn btn-danger"><i class="fa fa-trash"></i></a></td>
					</tr>
					@endforeach
				</tbody>
			</table>
			@else
			<p>No Blog Category Found.</p>
			@endif
			<div class="pull-right">{{ $blog_categories->links() }}</div>	
		</div>
	</div>
</div>
@endsection