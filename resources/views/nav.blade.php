<nav class="navbar navbar-expand-lg navbar-dark bg-transparent mt-3">
    <div class="container">

        <a class="navbar-brand text-warning" href="{{url('/')}}">
            CheapTalk <img src="https://cdn-icons-png.flaticon.com/512/610/610413.png" width="30" height="30" class="rounded">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item {{ Request::is('/') ? 'active' : '' }}">
                    <a class="nav-link" href="{{url('/')}}"><img src="https://cdn-icons-png.flaticon.com/512/609/609803.png" width="20" height="20" class="rounded"> Home</a>
                </li>
                @if(Auth::check())
                    <li class="nav-item {{ Request::is('dashboard') ? 'active' : '' }}">
                        <a class="nav-link" href="{{url('/dashboard')}}"><img src="https://cdn-icons-png.flaticon.com/512/3247/3247281.png" width="20" height="20" class="rounded"> Dashboard</a>
                    </li>

                    <li class="nav-item dropdown {{ Request::is('dashboard') ? 'active' : '' }}">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="https://cdn-icons-png.flaticon.com/512/718/718970.png" width="20" height="20" class="rounded"> Categories
                        </a>
                        <div class="dropdown-menu bg-secondary" aria-labelledby="navbarDropdown">
                            @foreach(\App\Models\Category::list() as $key => $category)
                                <a class="dropdown-item" href="{{url("/categories/$key")}}">{{$category}}</a>
                            @endforeach
                        </div>
                    </li>

                    <li class="nav-item dropdown {{ Request::is('authors') ? 'active' : '' }}">
                        <a class="nav-link" href="{{url('/authors')}}"><img src="https://cdn-icons-png.flaticon.com/512/1165/1165674.png" width="20" height="20" class="rounded"> Authors</a>
                    </li>

                    <li class="nav-item dropdown" style="cursor: pointer">
						<a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="{{auth()->user()->sex =='Male' ? asset('images/avatar.png') : asset('images/female.png')}}" class="rounded-circle" alt="" style="width: 30px;"> &nbsp;{{ auth()->user()->name }}</a>

						<div class="dropdown-menu dropdown-menu-right dropdown-cyan bg-secondary" aria-labelledby="navbarDropdownMenuLink-4">
							<a class="dropdown-item" href="{{url("/authors/" . auth()->user()->id)}}"><img src="https://cdn-icons-png.flaticon.com/512/4712/4712756.png" width="30" height="30" class="rounded"> My Posts</a>
							<a class="dropdown-item" href="{{url('/logout')}}"><img src="https://cdn-icons-png.flaticon.com/512/6568/6568636.png" width="30" height="30" class="rounded"> Logout</a>
						</div>
					</li>

                @else
                    <li class="nav-item {{ Request::is('login') ? 'active' : '' }}">
                        <a class="nav-link" href="{{url('/login')}}"> <img src="https://cdn-icons-png.flaticon.com/512/3580/3580148.png" width="20" height="20" class="rounded"> Login</a>
                    </li>
                    <li class="nav-item {{ Request::is('register') ? 'active' : '' }}">
                        <a class="nav-link" href="{{url('/register')}}"><img src="https://cdn-icons-png.flaticon.com/512/5174/5174586.png" width="20" height="20" class="rounded"> Register</a>
                    </li>
                @endif

            </ul>
        </div>

    </div>
</nav>
