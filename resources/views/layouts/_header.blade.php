<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a href="{{ route('home') }}" class="navbar-brand">Weibo App</a>
        <ul class="navbar-nav justify-content-end">
            @if(Auth::check())
                <li class="nav-item">
                    <a href="{{ route('users.index') }}" class="nav-link">用户列表</a>
                </li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{ Auth::user()->name }}
                    </a>

                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a href="{{ route('users.show', Auth::user()) }}" class="dropdown-item">个人中心</a>
                        <a href="{{ route('users.edit', Auth::user()) }}" class="dropdown-item">编辑资料</a>
                        <div class="dropdown-divider"></div>
                        <a href="logout" class="dropdown-item">
                            <form action="{{ route('logout') }}" method="post">
                                @csrf
                                {{ method_field('delete') }}

                                <button class="btn btn-block btn-danger" type="submit" name="button">退出</button>
                            </form>
                        </a>
                    </div>

                </li>
            @else
                <li class="nav-item">
                    <a href="{{ route('help') }}" class="nav-link">帮助</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('login') }}" class="nav-link">登录</a>
                </li>
            @endif
        </ul>
    </div>
</nav>
