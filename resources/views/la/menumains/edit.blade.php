@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/menumains') }}">MenuMain</a> :
@endsection
@section("contentheader_description", $menumain->$view_col)
@section("section", "MenuMains")
@section("section_url", url(config('laraadmin.adminRoute') . '/menumains'))
@section("sub_section", "Edit")

@section("htmlheader_title", "MenuMains Edit : ".$menumain->$view_col)

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
				{!! Form::model($menumain, ['route' => [config('laraadmin.adminRoute') . '.menumains.update', $menumain->id ], 'method'=>'PUT', 'id' => 'menumain-edit-form']) !!}
					@la_form($module)
					
					{{--
					@la_input($module, 'menu_title')
					@la_input($module, 'slug')
					@la_input($module, 'sort_menu')
					@la_input($module, 'parent')
					--}}
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/menumains') }}">Cancel</a></button>
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
	$("#menumain-edit-form").validate({
		
	});
});
</script>
@endpush
