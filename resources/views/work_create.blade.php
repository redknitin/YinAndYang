<!doctype html><html>
<head></head>
<body>

{!! Form::open(['action'=>'WorkController@process', 'method'=>'post']) !!}
	{!! Form::label('Name') !!}
	{!! Form::text('name', 'John Doe', array('placeholder'=>'Name')) !!}

	{!! Form::submit('Save') !!}
{!! Form::close() !!}

</body>
</html>