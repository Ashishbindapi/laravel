<x-header />
<header>
    <!-- Nav tabs -->
    <x-navbar />
</header>
<main>
    <div class="modal fade" id="registrationModal" tabindex="-1" role="dialog" aria-labelledby="registrationModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="registrationModalLabel">Registration Form</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="" method="post">
                        @csrf
                        <div class="form-group">
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
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>
<footer>
    <!-- place footer here -->
</footer>
<x-css />
<x-footer />
<script>
    $('#registrationModal').modal('show');
</script>
