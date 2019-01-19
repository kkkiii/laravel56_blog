@extends('layouts.default')

@section('content')




    <div class="card">
        <form action="{{route('login.store')}}" method="post">



            <div class="card-header">
                用户登录陆
            </div>
            <div class="card-body">

                @csrf


                <div class="form-group">
                    <label for="email">邮箱</label>
                    <input type="email" class="form-control" name="email"  value="{{old('email')}}">
                </div>

                <div class="form-group">
                    <label for="password">密码</label>
                    <input type="password" class="form-control" name="password" value="{{old('password')}}">
                </div>




            </div>


            <div class="card-footer text-muted">
                <div class="form-group">

                    <input type="submit" value="登陆" class="form-control" name="commit">
                </div>
            </div>

        </form>
    </div>


@endsection\