<x-header />
<header>
    <!-- Nav tabs -->
    <x-navbar />
</header>
<main>
    <div class="container">
        <h1 class="text-center">Registration</h1>
        <form action="{{ url('/') }}/register" method="post">
            @php
                $demo = 5;
            @endphp
            @csrf
            <x-input type="text" name="name" lable="Please enter name" :demo="$demo" />
            <x-input type="text" name="email" lable="Please enter email" />
            <x-input type="text" name="password" lable="Please enter Password" />
            <x-input type="text" name="cnfpassword" lable="Please enter Confirom Password" />
            <button class="btn btn-primary" type="submit">Submit</button>
        </form>
    </div>
</main>
<footer>
    <!-- place footer here -->
</footer>
<x-css />
<x-footer />
