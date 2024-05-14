<x-header />
<header>
    <!-- Nav tabs -->
    <x-navbar />
</header>
<main>
    <div class="container">
        <div class="d-flex justify-content-end mt-3">
            <a href="{{ route('customer-popup') }}" class="btn btn-primary">Add Customer</a>
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
                </tr>
            </thead>
            <tbody>
                @foreach ($customers as $customer)
                    <tr>
                        <td scope="row">{{ $customer['name'] }}</td>
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
                        <td>{{ $customer['dob'] }}</td>
                        <td>
                            @if ($customer['status'] == 1)
                                Active
                            @else
                                Inactive
                            @endif
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
<x-footer />
