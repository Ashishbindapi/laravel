<div class="fixed">
    <nav class="nav justify-content">
        <a class="nav-link" href="{{url('/')}}/">
            @if (session()->has('user_name'))
                {{session()->get('user_name')}}
            @else
                Guest
            @endif
        </a>
        <a class="nav-link" href="{{url('/')}}/">Home</a>
        <a class="nav-link" href="{{'/'}}register">Register</a>
        <a class="nav-link" href="{{route('customer-view')}}">Customer</a>
    </nav>
</div>
