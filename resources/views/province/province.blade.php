@extends('layouts.app')
@section('content')


    <div class="container">
        <a href="{{Url('province/create')}}"><button class ="btn btn-warning">เพิ่มจังหวัด</button></a>
        <br /><br />
            @if(!$provinces->isEmpty())
            <table id="table" class="table table-bordered text-center">
            <thead class="thead-dark text-center">
            <tr>
            <th class="text-center" scope="col">ชื่อจังหวัด</th>
            </tr>
            </thead>
            
            <tbody>
            
            @foreach($provinces as $province )
            <tr>
            <td>{{$province->province_name}}</td>
            
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