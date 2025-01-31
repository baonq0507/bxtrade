@extends('layouts.app')
@section('title', 'Login')
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
                    <h5 class="text-white text-center">Login</h5>
                </div>
                <div class="card-body">
                    <form action="{{route('login')}}" method="post" id="loginForm">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="email" class="form-label text-white">Email or Username:</label>
                            <input type="text" name="email" id="email" class="form-control">
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
                        <div class="form-group mb-3">
                            <div class="row">
                                <div class="col-6">
                                    <a href="{{route('register')}}" class="text-white text-center d-block">Register</a>
                                </div>
                                <div class="col-6">
                                    <a class="text-white text-center d-block">Forgot Password</a>
                                </div>
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <button type="submit" class="btn btn-primary w-100" id="loginButton">Login</button>
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

        $('#loginForm').submit(function(e) {
            e.preventDefault();
            const formData = $(this).serialize();

            $('#loginButton').prop('disabled', true);
            $('#loginButton').html('<i class="bi bi-spinner-fill"></i> Loading...');
            $.ajax({
                url: $(this).attr('action'),
                type: 'POST',
                data: formData,
                success: function(response) {
                    if (response.error) {
                        Swal.fire({
                            icon: 'error',
                            title: 'Error',
                            text: response.error
                        });
                    } else {
                        Swal.fire({
                            icon: 'success',
                            title: 'Success',
                            text: response.success
                        }).then(() => {
                            window.location.href = "{{route('home')}}";
                        });
                    }
                },
                error: function(xhr, status, error) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: xhr.responseJSON.error
                    });
                }
            }).always(function() {
                $('#loginButton').prop('disabled', false);
                $('#loginButton').html('Login');
            });
        });
    });
</script>
@endpush
