@foreach(session()->get('quizz_res') as $result)
{{ $result }}
@endforeach
{{Form::open(['method'=>'POST', 'route' => 'user_info_store'])}}
<p>
    Име: {{ Form::text('fname', old('name')) }}
    @if ($errors->has('fname'))
        <span class="help-block">
       
            <strong>{{ $errors->first('fname') }}</strong>
         
        </span>
    @endif
</p> 
<p>
    Фамилия: {{ Form::text('lname', old('lname')) }}
    @if ($errors->has('lname'))
        <span class="help-block">
            <strong>{{ $errors->first('lname') }}</strong>
        </span>
    @endif
</p>    
<p>
    email: {{ Form::text('email', old('email')) }}
    @if ($errors->has('email'))
        <span class="help-block">
            <strong>{{ $errors->first('email') }}</strong>
        </span>
    @endif
</p>    
<p>
    email на приятел: {{ Form::text('femail', old('femail')) }}
    @if ($errors->has('femail'))
        <span class="help-block">
            <strong>{{ $errors->first('femail') }}</strong>
        </span>
    @endif
</p>     
 {{Form::submit('Изпрати', ['class'=>'btn btn-primary'])}}      
             
 {{Form::close()}}

