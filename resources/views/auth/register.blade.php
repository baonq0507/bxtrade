@extends('layouts.app')
@section('title', 'Register')
@section('content')
<a href="{{route('home')}}" class="btn btn-outline-light mx-3 mt-3"><i class="bi bi-arrow-left"></i> Back</a>
<div class="container d-flex align-items-center justify-content-center" style="min-height: 80vh;">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="logo text-center mb-3">
                <img src="{{$config->logo ? asset('storage/' . $config->logo) : asset('assets/icon/bx-logo-full.png')}}" alt="{{$config->name}}" class="img-fluid">
            </div>
            <div class="card">
                <div class="card-header">
                    <h5 class="text-white text-center">Register</h5>
                </div>
                <div class="card-body">
                    <form action="{{route('register')}}" method="post" id="registerForm">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="username" class="form-label text-white">Username:</label>
                            <input type="text" name="username" id="username" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="email" class="form-label text-white">Email:</label>
                            <input type="email" name="email" id="email" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="password" class="form-label text-white">Password:</label>
                            <div class="input-group">
                                <input type="password" name="password" id="password" class="form-control">
                                <button class="btn btn-outline-light" type="button" id="togglePassword">
                                    <i class="bi bi-eye"></i>
                                </button>
                            </div>
                        </div>
                        <!-- password confirm -->
                        <div class="form-group mb-3">
                            <label for="password_confirmation" class="form-label text-white">Password Confirm:</label>
                            <div class="input-group">
                                <input type="password" name="password_confirmation" id="password_confirmation" class="form-control">
                                <button class="btn btn-outline-light" type="button" id="togglePasswordConfirm">
                                    <i class="bi bi-eye"></i>
                                </button>
                            </div>
                        </div>
                        <!-- invite code -->
                        <div class="form-group mb-3">
                            <label for="invite_code" class="form-label text-white">Invite Code:</label>
                            <input type="text" name="invite_code" id="invite_code" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <div class="row">
                                <div class="col-12">
                                    <a href="{{route('login')}}" class="text-white text-center d-block">Login</a>
                                </div>
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <button type="submit" class="btn btn-primary w-100" id="registerButton">Register</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('js')
<script>
    $(document).ready(function() {
        $('#togglePassword').click(function() {
            const passwordInput = $('#password');
            const icon = $(this).find('i');
            passwordInput.attr('type', passwordInput.attr('type') === 'password' ? 'text' : 'password');
            icon.toggleClass('bi-eye bi-eye-slash');
        });
        $('#togglePasswordConfirm').click(function() {
            const passwordConfirmInput = $('#password_confirmation');
            const icon = $(this).find('i');
            passwordConfirmInput.attr('type', passwordConfirmInput.attr('type') === 'password' ? 'text' : 'password');
            icon.toggleClass('bi-eye bi-eye-slash');
        });

        $('#registerForm').submit(function(e) {
            e.preventDefault();
            const formData = $(this).serialize();

            $('#registerButton').prop('disabled', true);
            // thêm loading
            $('#registerButton').html('<i class="bi bi-spinner-fill"></i> Loading...');
            $.ajax({
                url: $(this).attr('action'),
                type: 'POST',
                data: formData,
                success: function(response) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Success',
                        text: response.success
                    }).then(() => {
                        window.location.href = "{{route('login')}}";
                    });
                }, error: function(xhr, status, error) {
                    console.log(xhr.responseJSON.error);
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: xhr.responseJSON.error
                    });
                }
            }).always(function() {
                $('#registerButton').prop('disabled', false);
                $('#registerButton').html('Register');
            });
        });
    });
</script>
@endpush
