@layout('main')
@section('container')
	<h1>Hopital</h1>
	{{ Form::open('/') }}
    {{Form::label('name','Name')}}
	{{ Form::text('name') }}

	 {{Form::label('address','Address')}}
	{{ Form::text('address') }}

{{Form::label('tpno','Telephone No')}}
	{{ Form::text('tpno') }}

    {{ Form::submit('Submit') }}
	{{ Form::close() }}

	{{ $errors->first('url', '<p class="error">:message</p>') }}

	
@endsection