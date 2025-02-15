@extends('theme.master')
@section('title', 'Register')



@section('content')


    @include('theme.partials.hero', ['title' => 'Register'])

    <!-- ================ contact section start ================= -->
    <section class="section-margin--small section-margin">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <form action="{{ route('register.post') }}" class="form-contact contact_form" action="contact_process.php"
                        method="post" id="contactForm" novalidate="novalidate">
                        @csrf



                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <input class="border form-control" name="name" id="name" type="text"
                                        placeholder="Enter your name" value="{{ old('name') }}">
                                    {{-- <x-input-error :messages="$errors->get('name')" class="mt-2" /> --}}

                                    @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input class="border form-control" name="email" id="email" type="email"
                                        placeholder="Enter email address" value="{{ old('email') }}">
                                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                    @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <input class="border form-control" name="password" id="name" type="password"
                                        placeholder="Enter your password">
                                    <x-input-error :messages="$errors->get('password')" class="mt-2 text-danger" />

                                </div>
                                <div class="form-group">
                                    <input class="border form-control" name="password_confirmation" type="password"
                                        placeholder="Enter your password confirmation">
                                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />


                                </div>
                            </div>
                        </div>
                        <div class="mt-3 text-center form-group text-md-right">
                            <a href="{{ route('login') }}" class="mx-3"> Already Register?</a>
                            <button type="submit" class="button button--active button-contactForm">Register</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- ================ contact section end ================= -->


@endsection
