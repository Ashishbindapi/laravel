<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <div class="container">
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
                    <td scope="row">{{$customer['name']}}</td>
                    <td>{{$customer['email']}}</td>
                    <td>
                        @if ($customer['gender'] == 'M')
                        Male
                        @elseif ($customer['gender'] == 'F')
                        Female
                        @else
                        Other
                        @endif
                    </td>
                    <td>{{$customer['address']}}</td>
                    <td>{{$customer['state']}}</td>
                    <td>{{$customer['country']}}</td>
                    <td>{{$customer['dob']}}</td>
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
  </body>
</html>
