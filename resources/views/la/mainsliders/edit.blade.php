@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/mainsliders') }}">MainSlider</a> :
@endsection
@section("contentheader_description", $mainslider->$view_col)
@section("section", "MainSliders")
@section("section_url", url(config('laraadmin.adminRoute') . '/mainsliders'))
@section("sub_section", "Edit")

@section("htmlheader_title", "MainSliders Edit : ".$mainslider->$view_col)

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
				{!! Form::model($mainslider, ['route' => [config('laraadmin.adminRoute') . '.mainsliders.update', $mainslider->id ], 'method'=>'PUT', 'id' => 'mainslider-edit-form']) !!}
					@la_form($module)
					
					{{--
					@la_input($module, 'test')
					@la_input($module, 'image')
					@la_input($module, 'sort')
					--}}
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/mainsliders') }}">Cancel</a></button>
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
	$("#mainslider-edit-form").validate({
		
	});
});
</script>
@endpush
