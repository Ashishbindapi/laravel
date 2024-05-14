<x-header />
<x-jscode />
<header>
    <!-- Nav tabs -->
    <x-navbar />
</header>
<main>
    <div class="modal fade" id="registrationModal" tabindex="-1" role="dialog" aria-lableledby="registrationModallable"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="registrationModallable">{{ $tittle }}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-lable="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ $url }}" method="post">
                        @csrf
                        <div class="form-group">
                            <div class="container">
                                <div class="row">
                                    <div class="col-6">
                                        <x-input type="text" name="name" lable="Name" value="{{ optional($customer)->name }}" />
                                    </div>
                                    <div class="col-6">
                                        <x-input type="email" name="email" lable="Email" value="{{ optional($customer)->email }}" />
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <lable for="gender">Address</lable>
                                            <textarea type="text" name="address" class="w-100">{{ optional($customer)->address }}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <lable for="gender">Gender</lable>
                                            <select class="form-control" name="gender" required>
                                                <option>Select Gender</option>
                                                <option value="M" {{ optional($customer)->gender == 'M' ? 'selected' : '' }}>Male</option>
                                                <option value="F" {{ optional($customer)->gender == 'F' ? 'selected' : '' }}>Female</option>
                                                <option value="O" {{ optional($customer)->gender == 'O' ? 'selected' : '' }}>Other</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <x-input type="text" name="country" lable="Country" value="{{ optional($customer)->country }}" />
                                    </div>
                                    <div class="col-6">
                                        <x-input type="text" name="state" lable="State" value="{{ optional($customer)->state }}" />
                                    </div>
                                    <div class="col-6">
                                        <x-input type="date" name="dob" lable="Date Of Birth" value="{{ optional($customer)->dob }}" />
                                    </div>
                                    <div class="col-6">
                                        <x-input type="password" name="password" lable="Password" value="" />
                                    </div>
                                    <div class="col-6">
                                        <x-input type="password" name="confirmPassword" lable="Confirm Password" value="" />
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
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
<x-bootstrap />
<x-footer />
<script>
    $(document).ready(function() {
        $('#registrationModal').modal('show');
    });
</script>
