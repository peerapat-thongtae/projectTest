@extends('layouts.app')
@section('content')

<div class="container">
    <h2>เพิ่มอำเภอ </h2>
    <hr />
<form method="post" action="{{url('district')}}">
    {{csrf_field()}}
    
   
    <div class="form-group">
            
            <label for="province">จังหวัด</label>
            
                <select class="form-control" name="province" id="province">
                        @foreach($provinces as $province)
                    <option value="{{$province->province_id}}">{{$province->province_name}}</option>
                    @endforeach
                </select>
                
    </div>
    <div class="form-group">
        <label for="district_name">อำเภอ</label>
            <input type="text" class="form-control" name="district_name">
    </div>

    
  <button type="submit" class="btn btn-primary">Submit</button>
</form></div>
@endsection