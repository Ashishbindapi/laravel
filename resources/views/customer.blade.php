<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bootstrap Form</title>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <form action="" method="post">
    @csrf
    <div class="container mt-5">
      <div class="row justify-content-center">
        <div class="col-md-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Registration Form</h5>
                <x-input type="text" name="name" lable="Name" />
                <x-input type="email" name="email" lable="Email" />
              <div class="form-group">
                <label for="gender">Gender</label>
                <select class="form-control" name="gender" required>
                  <option>Select Gender</option>
                  <option value="M">Male</option>
                  <option value="F">Female</option>
                  <option value="O">Other</option>
                </select>
              </div>
                <x-input type="text" name="address" lable="Address" />
                <x-input type="text" name="country" lable="Country" />
                <x-input type="text" name="state" lable="State" />
                <x-input type="date" name="dob" lable="Date Of Birth" />
                <x-input type="text" name="password" lable="Password" />
                <x-input type="text" name="confirmPassword" lable="Confirm Password" />
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </form>
</body>
</html>
