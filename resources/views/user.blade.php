@extends('layouts.app')
@section('content')

<div class="container">
        <div class="inline">
        @if (Auth::check())
        
    <a href="{{ url('user/create') }}"><button class="btn btn-primary">Add User</button></a> 
    <a href="{{Url('user')}}"><button type="submit" class="btn btn-primary ml-2">ดูทั้งหมด</button></a>

        @endif
        </div>
    <!--<input type="text" id="search" placeholder="  live search"></input>  -->        
    <form action="{{ url('user/search') }}" method="post">
        @csrf 
        <div class="form-inline  mt-5">
        <div class="form-group ml-2">
        <label for="type">ค้นหาจาก : </label>
        <select class="form-control ml-2 @error('type') is-invalid @enderror" name="type" required>
            
            <option value="firstname">ชื่อ</option>
            <option value="surname">นามสกุล</option>
            <option value="phone">เบอร์โทร</option>
            <option value="email">อีเมล์</option>
            

        </select>
        @error('type')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
        
    </div>
    <div class="form-group ml-2">
        
        <input class="form-control @error('search') is-invalid @enderror" type="text" name="search" required >
        @error('search')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
    </div>
    <button type="submit" class="btn btn-primary ml-2">ค้นหา</button>
    
</div>
    
    </form>

    <br /><br />

<br /><br />
@if(!$users->isEmpty())
<table id="table" class="table table-bordered text-center">
<thead class="thead-dark text-center">
<tr class=betmoney>
<th class="text-center" scope="col">ชื่อ </th>
<th class="text-center" scope="col">นามสกุล</th>
<th class="text-center" scope="col">เบอร์โทร</th>
<th class="text-center" scope="col">อีเมล์</th>
<th class="text-center" scope="col">ที่อยู่</th>


</tr>
</thead>

<tbody>

@foreach($users as $user )
<tr>
<td>{{$user->firstname}}</td>
<td>{{$user->surname}}</td>
<td>{{$user->phone}}</td>
<td>{{$user->email}}</td>
<td>{{$user->address}}</td>


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