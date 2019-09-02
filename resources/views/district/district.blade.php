@extends('layouts.app')
@section('content')


    <div class="container">
        <a href="{{Url('district/create')}}"><button class ="btn btn-primary">เพิ่มอำเภอ</button></a>
        <br /><br />
            @if(!$districts->isEmpty())
            <table id="table" class="table table-bordered text-center">
            <thead class="thead-dark text-center">
            <tr>
            <th class="text-center" scope="col">จังหวัด </th>
            <th class="text-center" scope="col">ชื่ออำเภอ </th>
            
            
            
            </tr>
            </thead>
            
            <tbody>
            
            @foreach($districts as $district )
            <tr>
            
            <td>{{$district->province_name}}</td>
            
            <td>{{$district->district_name}}</td>
            
            
            
            </tr>
            @endforeach
            </tbody>
            
            
            </thead>
            
            </table>
             @else
            <div class="alert alert-danger">ไม่พบข้อมูล</div>
            @endif
            
            
            
    </div>
@endsection