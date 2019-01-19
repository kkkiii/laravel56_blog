@extends('layouts.default')
@section('content')
    <div class="card">
        <div class="card-header">
            用户列表
        </div>
        <div class="card-body">

            <table class="table">
                <thead>
                <tr>
                    <th>编号</th>
                    <th>昵称</th>
                    <th width="20%">操作</th>
                </tr>
                </thead>
                <tbody>
               @foreach($users as $user)

                <tr>
                    <td scope="row">{{$user['id']}}</td>
                    <td>{{$user['name']}}</td>
                    <td>
                        <div class="btn-group" role="group" aria-label="Basic example">

                            <a href="{{route('user.show',$user)}}" type="button" class="btn btn-secondary">查看</a>

                            <form action="{{route('user.destroy',$user)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">删除</button>
                            </form>


                        </div>
                    </td>
                </tr>
                @endforeach

                </tbody>
            </table>
            
            
        </div>

        <div class="card-footer text-muted">
            {{$users->links()}}
        </div>

    </div>






@endsection