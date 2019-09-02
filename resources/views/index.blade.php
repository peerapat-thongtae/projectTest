@extends('layouts.app')
@section('content')
    <div class="container">

            <a href="{{Url('user')}}"><button class="btn btn-success">ระบบสมาชิก</button></a>
            <a href="{{Url('province')}}"><button class="btn btn-success">ระบบจัดการจังหวัด</button></a>
            <a href="{{Url('district')}}"><button class="btn btn-success">ระบบจัดการอำเภอ</button></a>
    </div>
@endsection