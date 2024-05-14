<x-header />
<x-jscode />
<header>
    <!-- Nav tabs -->
    <x-navbar />
</header>
<main>
    <div class="d-flex justify-content-start mt-3">
        <a href="{{ route('customer-popup') }}" class="btn btn-primary ml-2">Add Customer</a>
        <a href="{{ route('customer-trash') }}" class="btn btn-danger ml-2">Go To Trash</a>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Gender</th>
                <th>Address</th>
                <th>Country</th>
                <th>State</th>
                <th>Date Of Birth</th>
                <th>Status</th>
                <th>Trash/Edit</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1 ?>
            @foreach ($customers as $customer)
                <tr>
                    <td>{{ $i++ }}</td>
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
                        <a href="{{url('customer/delete/')}}/{{$customer->customer_id}}" class="btn btn-danger">Trash</a>
                        <a href="{{route('customer-edit',['id' => $customer->customer_id])}}" class="btn btn-primary mt-2">Edit</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</main>
<x-css />
<x-bootstrap />
<x-footer />
