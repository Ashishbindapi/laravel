<x-header />
<x-jscode />
<header>
    <!-- Nav tabs -->
    <x-navbar />
</header>
<main>
    <div class="container">
        <div class="d-flex justify-content-end mt-3">
            <a href="{{ route('customer-trash') }}" class="btn btn-primary">Add Customer</a>
        </div>
        <div class="d-flex justify-content-end mt-3">
            <a href="{{ route('customer-view') }}" class="btn btn-primary">Customer View </a>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Gender</th>
                    <th>Address</th>
                    <th>Country</th>
                    <th>State</th>
                    <th>Date Of Birth</th>
                    <th>Status</th>
                    <th>Delete</th>
                    <th>Edit</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($customers as $customer)
                    <tr>
                        <td>{{ $customer['user_name'] }}</td>
                        <td>{{ $customer['email'] }}</td>
                        <td>
                            @if ($customer['gender'] == 'M')
                                Male
                            @elseif ($customer['gender'] == 'F')
                                Female
                            @else
                                Other
                            @endif
                        </td>
                        <td>{{ $customer['address'] }}</td>
                        <td>{{ $customer['state'] }}</td>
                        <td>{{ $customer['country'] }}</td>
                        <td>{{get_formatted_date($customer['dob'], "d-M-Y")}}</td>
                        <td>
                            @if ($customer['status'] == 1)
                                <p class="text-light bg-info">Active</p>
                            @else
                                <p class="text-danger bg-warning">Inactive</p>
                            @endif
                        </td>
                        <td>
                            <a href="{{url('customer/force-delete/')}}/{{$customer->customer_id}}" class="btn btn-danger">Delete</a>
                        </td>
                        <td>
                            <a href="{{route('customer-restore',['id' => $customer->customer_id])}}" class="btn btn-primary">Restore</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</main>
<footer>
    <!-- place footer here -->
</footer>
<x-css />
<x-bootstrap />
<x-footer />
