@extends('layouts.default')
@section('content')


    <div class="card">
        <form action="{{route('user.update',$user)}}" method="post">
            @csrf
            @method('PUT')

            <div class="card-header">
                修改资料
            </div>
            <div class="card-body">


                <div class="form-group">
                    <label for="name">昵称</label>
                    <input type="text" class="form-control" name="name" value="{{old('name')}}">
                </div>



                <div class="form-group">
                    <label for="password">密码</label>
                    <input type="password" class="form-control" name="password" value="{{$user['name']}}">
                </div>

                <div class="form-group">
                    <label for="password_confirmation">确认密码</label>
                    <input type="password" class="form-control" name="password_confirmation" value="{{old('password_confirmation')}}">
                </div>


            </div>


            <div class="card-footer text-muted">
                <div class="form-group">

                    <input type="submit" value="确定修改" class="form-control" name="commit">
                </div>
            </div>
        </form>
    </div>




@endsection