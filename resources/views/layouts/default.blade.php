<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <link rel="stylesheet" href="/css/app.css">

</head>
<body>

<div class="container">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">后盾人</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">

                @auth
                <li class="nav-item active">
                    <a class="nav-link" href="{{route('user.index')}}">用户列表 <span class="sr-only">(current)</span></a>
                </li>

                    <li class="nav-item active">
                        <a class="nav-link" href="{{route('user.edit',auth()->user())}}">修改资料 <span class="sr-only">(current)</span></a>
                    </li>
                @endauth
            </ul>
            <form class="form-inline my-2 my-lg-0">

                @auth
                    <a class="nav-link btn btn-light mr-2" href="{{route('logout')}}">退出</a>
                @else
                    <a class="nav-link btn btn-light mr-2" href="{{route('user.create')}}">注册</a>
                    <a class="nav-link btn btn-light" href="{{route('login')}}">登录</a>
                @endauth


            </form>
        </div>
    </nav>

    @include('layouts.errors')
    @include('layouts.msg')
    @yield('content')


</div>


<script src="/js/app.js"></script>
</body>
</html>