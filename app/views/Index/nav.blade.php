
<html>


    {{ Form::open(array('url' => 'nav/add')) }}

    {{Form::text('name', '')}}

    {{Form::submit('Click Me!');}}

    {{ Form::close() }}

</html>