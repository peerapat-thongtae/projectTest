@extends('layouts.app')
@section('content')

<div class="container">
    <h2>เพิ่มอำเภอ </h2>
    <hr />
<form method="post" action="{{url('district')}}">
    {{csrf_field()}}
    
   

    <div class="form-group">
        <label for="district_name">อำเภอ</label>
        
            <input type="text" class="form-control" name="district_name">
    </div>

    
  <button type="submit" class="btn btn-primary">Submit</button>
</form></div>
@endsection