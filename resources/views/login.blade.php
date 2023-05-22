@extends('components.layouts')

@section('content')
    <section title="formulir masuk" class="auth-wrapper">
        <h2>Masuk</h2>
        <div class="form-wrapper">
            <form>
                <div class="label-input">
                    <label for="email">Email</label>
                    <input type="text" placeholder="Email Address">
                </div>
                <div class="label-input">
                    <label for="password">Password</label>
                    <input type="password">
                </div>
                <div class="remember">
                    <input type="checkbox"><span>Remember Me</span>
                </div>
                <div class="button-form">
                    <button type="submit">Login</button>
                </div>
            </form>
        </div>
        <div class="register-link">
            <span>Belum punya akun?</span><a href="#">buat akun</a>
        </div>
    </section>
@endsection