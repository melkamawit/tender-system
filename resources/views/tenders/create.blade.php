@extends('layouts.nav')
  
     @section('content')
     
     
<div data-widget-group="group1">
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h2>Tender Post</h2>
					<div class="panel-ctrls"></div>
				</div>
			
				<div class="panel-footer"></div>
			</div>
		</div>
	</div>
</div>
     
<div data-widget-group="group2">
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-heading">
     
     
{!! Form::open(['action' => 'TendersController@store','method'=>'POST']) !!}
<div class="row">

</div>
<div class="form-group col-xs-8">
     {{Form::label('category','Category')}}
     {{Form::select( 'category',
           ['Accounting & Auditing'=>'Accounting & Auditing',
           
 'agr'=>'Agriculture',
 'Bank'=>'Bank Related',
 'Buil'=>'Building Materials',
 'Cl'=>'Cleaning & Janitorial',
 'he'=>'Health',
 'co'=>'computer and accessories',
 'cons'=>'construction'],
 null,['placeholder' => 'Pick a category...']
 )}}
    
 
     </div>

<div class="form-group col-xs-8">
     
{{Form::label('title','Title')}}
{{Form::text('title','',['class'=>'form-control','placeholder'=>'Title'])}}

</div>

<div class="form-group col-xs-8">
    {{Form::label('body','Body')}}
    {{Form::textarea('body','',['class'=>'form-control','placeholder'=>'Body Text'])}}
    
    </div>
   

    <div class="form-group col-xs-8 ">
        <span>deadline</span><br>
             <input type="text" class="form-control" id="datepicker" name="deadline">
   </div>

<div class="form-group col-xs-8">
{{Form::label('reference','Reference')}}
{{Form::text('reference','',['class'=>'form-control','placeholder'=>'Reference'])}}

</div>

<div class="form-group col-xs-8">
     {{Form::label('website','Website')}}
     {{Form::text('website','',['class'=>'form-control','placeholder'=>'Website'])}}
     
     </div>
     <div class="form-group col-xs-8">
          {{Form::label('phonnumber','Phone Number')}}
          {{Form::text('phonnumber','',['class'=>'form-control','placeholder'=>'Phon Number'])}}
          
          </div>
          <div class="form-group col-xs-8">
    {{Form::submit('post',['class'=>'btn btn-primary'])}}
          </div>

{!! Form::close() !!}

</div>
			
<div class="panel-footer"></div>
</div>
</div>
</div>
</div>
     @endsection