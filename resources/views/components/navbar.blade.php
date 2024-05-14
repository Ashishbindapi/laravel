<div class="fixed-top">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="{{url('/')}}/">
            @if (session()->has('user_name'))
                {{session()->get('user_name')}}
            @else
                Guest
            @endif
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/')}}/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/register')}}">Register</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('customer-view')}}">Customer</a>
                </li>
            </ul>
        </div>
    </nav>
</div>
