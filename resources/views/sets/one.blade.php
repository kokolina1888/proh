
<div class="container">
  @include('includes.form_error')
  <h3>{{ $question }}</h3>
  {{Form::open(['method'=>'POST', 'action' => 'QuizzController@res_set_one'])}}
  
  @for($i = 0; $i < 4; $i++ )
 
  <!-- TO DO to be REQUIRED -->
  <p>{{ Form::radio('answer', $i) }}{{ $answers[$i] }}</p>
 
  @endfor
  
  <div class="form-group">
   {{Form::submit('Напред', ['class'=>'btn btn-primary'])}}
 </div>
 {{Form::close()}}

</div>

