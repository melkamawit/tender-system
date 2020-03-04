@extends('layouts.nav')
  
     @section('content')

     <div class="col-sm-3">
          <h1 class="btn btn-lg  btn-block mb-xl" >Business Areas</h1>
  
  <div class="list-group inbox-menu list-group-alternate">
      <a href="#" class="list-group-item active"><i class=""></i>Accounting and Auditing </a>
      <a href="#" class="list-group-item"><i></i>Agriculture </a>
      <a href="#" class="list-group-item"><i></i>Building Materials  </a>
      <a href="#" class="list-group-item"><i ></i>Computer And Accessories </a>
 

      <a href="#" class="list-group-item"><i ></i>Construction & Construction Machinery</a>
      <a href="#" class="list-group-item"><i></i>Education & Training</a>
      <a href="#" class="list-group-item"><i></i>Engineering Services & Equipment</a>
      <a href="#" class="list-group-item"><i></i> Film,Music & Entertainment</a>
      <a href="#" class="list-group-item"><i></i>  Food & Beverage </a>
      <a href="#" class="list-group-item"><i></i>  Furnishings & Fixtures</a>
      <a href="#" class="list-group-item"><i></i> Health </a>
      <a href="#" class="list-group-item"><i></i> Maintenance </a> 
      <a href="#" class="list-group-item"><i></i> Public Relations & Advertising  </a>
     <a href="#" class="list-group-item"><i></i>  Security & Protection  </a>
  
     <a href="#" class="list-group-item"><i></i>    Software & Networking  </a>
     
     <a href="#" class="list-group-item"><i></i>    Tour, Travel & Hotels  </a>
     
     <a href="#" class="list-group-item"><i></i>    Vehicle & Spare Part   </a>
     <a href="#" class="list-group-item"><i></i>    Warehouse & Store  </a>
    
  </div>
</div><!-- col-sm-3 -->
<div class="col-sm-9">
     <div class="row">
          <h1 class="btn btn-lg  btn-block mb-xl" >tenders</h1>
  
               
                    <div class="panel panel-default">
                         <div class="panel-body">
                              <div>
                                   <table class="table table-hover table-responsive  ">
                                       <tbody>
          
@if(count($cheretas)>0)
@foreach($cheretas as $chereta)

                                 <tr>
    <td style="text-align: justify; min-width: 240px; max-width: 240px; font-size: 12px;"><span class="text-justify;  text-muted"><b><a style="color: #3a7cb1;" href="/tenders/{{$chereta->id}}"> {{$chereta->title}}</a></b><br>
    <span class="text-muted small">Category:{{$chereta->category}}</span><br>
    <span class="text-muted small"><small>Posted Date: {{$chereta->created_at}} </small></span><br>
     <span class="text-muted small"><small>Dead Line:{{$chereta->deadline}}</small></span><br>
</span>
    </td>
                                 </tr>
</div>
               </div>
          </div>
@endforeach
   <!--for pagination --->
 {{$cheretas->links()}} 
@else
<p>no posts found</p>
   
@endif
         
     </div>
     
</div>
     

     @endsection