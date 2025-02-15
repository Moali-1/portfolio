@extends('theme.master')
@section('title', 'Login')



@section('content')


    @include('theme.partials.hero', ['title' => 'Login'])

    <!-- ================ contact section start ================= -->
    <section class="section-margin--small section-margin">
        <div class="container">
            <div class="row">
                <div class="mx-auto col-6">
                    <form action="{{ route('login') }}" class="form-contact contact_form" action="contact_process.php"
                        method="post" id="contactForm" novalidate="novalidate">
                        @csrf
                        <div class="form-group">
                            <input class="border form-control" name="email" id="email" type="email"
                                placeholder="Enter email address" value="{{ old('email') }}">
                            <x-input-error :messages="$errors->get('email')" class="mt-2 text-danger" />
                        </div>
                        <div class="form-group">
                            <input class="border form-control" name="password" id="name" type="password"
                                placeholder="Enter your password">
                            <x-input-error :messages="$errors->get('password')" class="mt-2 text-danger" />
                        </div>
                        <div class="mt-3 text-center form-group text-md-right">
                            <a href="{{ route('register') }}" class="mx-3"> sign up instead?</a>
                            <button type="submit" class="button button--active button-contactForm">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- ================ contact section end ================= -->


@endsection
