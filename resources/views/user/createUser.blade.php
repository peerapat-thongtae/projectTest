@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ url('user') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="firstname" class="col-md-4 col-form-label text-md-right">ชื่อ</label>

                            <div class="col-md-6">
                                <input id="firstname" type="text" class="form-control @error('firstname') is-invalid @enderror" name="firstname" value="{{ old('firstname') }}" required autocomplete="Firstname" autofocus>

                                @error('firstname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="surname" class="col-md-4 col-form-label text-md-right">นามสกุล</label>

                            <div class="col-md-6">
                                <input id="surname" type="text" class="form-control @error('surname') is-invalid @enderror" name="surname" value="{{ old('surname') }}" required autocomplete="name" autofocus>

                                @error('surname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="phone" class="col-md-4 col-form-label text-md-right">โทรศัพท์</label>

                            <div class="col-md-6">
                                <input id="phone" type="number" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus>

                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">อีเมล์</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="address" class="col-md-4 col-form-label text-md-right">ที่อยู่</label>

                            <div class="col-md-6">
                                <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" required autocomplete="address" autofocus>

                                @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        
                        
                        <div class="form-group row">
                            <label for="province" class="col-md-4 col-form-label text-md-right">จังหวัด</label>

                            
                            <div class="col-md-6">
                                
                                <select class="form-control  @error('province') is-invalid @enderror" id="province" name="province" required autocomplete="province" autofocus>
                                        <option value="" selected>เลือกจังหวัด</option>
                                    @foreach($provinces as $province)
                                        <option value="{{$province->province_id}}" >{{$province->province_name}}</option>
                                        
                                       
                                        @endforeach
                                       
                                        
                                        
                            
                                    </select>
                                @error('province')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                                <label for="district" class="col-md-4 col-form-label text-md-right">อำเภอ</label>
    
                                <div class="col-md-6">
                                    
                                    <select class="form-control  @error('district') is-invalid @enderror" id="district" name="district" required autocomplete="district" autofocus>
                                        
                                           
                                            
                                    </select>
    
                                    @error('district')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        
                              
                        <div class="form-group row">
                            <label for="zipcode" class="col-md-4 col-form-label text-md-right">รหัสไปรษณีย์</label>

                            <div class="col-md-6">
                                <input id="zipcode" type="number" class="form-control @error('zipcode') is-invalid @enderror" name="zipcode" value="{{ old('zipcode') }}" required autocomplete="zipcode" autofocus>

                                @error('zipcode')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>



                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
    $(document).ready(function(){
  $("select[name=province]").on('change',function(){
    var province_id = $(this).val();
    if(province_id) {
        $.ajax({
            url: '/api/getDistrict/'+province_id,
            type:'GET',
            dataType: 'json',
            
            success : function(data){

                console.log(data);
                $("select[name=district]").empty();
                $("select[name=district").append
                    ('<option value="" selected>เลือกอำเภอ</option>');
                $.each(data,function(key,value){
                    $("select[name=district").append
                    ('<option value="'+key+'">'+ value + '</option>');
                });
                
 
            }
        })
    }
  });
});
    
</script>

@endsection
