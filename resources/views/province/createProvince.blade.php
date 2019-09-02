@extends('layouts.app')
@section('content')

<div class="container">
    <h2>เพิ่มจังหวัด </h2>
    <hr />
<form method="post" action="{{url('province')}}">
    {{csrf_field()}}
    
   

    <div class="form-group">
        <label for="TeamSelect">จังหวัด</label>
        
            <input type="text" class="form-control" name="province_name">
    </div>

    
  <button type="submit" class="btn btn-primary">Submit</button>
</form></div>
@endsection