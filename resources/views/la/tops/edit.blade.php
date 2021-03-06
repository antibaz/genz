@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/tops') }}">Top</a> :
@endsection
@section("contentheader_description", $top->$view_col)
@section("section", "Tops")
@section("section_url", url(config('laraadmin.adminRoute') . '/tops'))
@section("sub_section", "Edit")

@section("htmlheader_title", "Tops Edit : ".$top->$view_col)

@section("main-content")

@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="box">
	<div class="box-header">
		
	</div>
	<div class="box-body">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				{!! Form::model($top, ['route' => [config('laraadmin.adminRoute') . '.tops.update', $top->id ], 'method'=>'PUT', 'id' => 'top-edit-form']) !!}
					@la_form($module)
					
					{{--
					@la_input($module, 'title')
					@la_input($module, 'slug')
					@la_input($module, 'sort_top')
					--}}
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/tops') }}">Cancel</a></button>
					</div>
				{!! Form::close() !!}
			</div>
		</div>
	</div>
</div>

@endsection

@push('scripts')
<script>
$(function () {
	$("#top-edit-form").validate({
		
	});
});
</script>
@endpush
