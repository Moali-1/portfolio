@extends('theme.master')
@section('title', 'Edit Blog')



@section('content')


    @include('theme.partials.hero', ['title' => $blog->name])

    <!-- ================ contact section start ================= -->
    <section class="section-margin--small section-margin">
        <div class="container">
            <div class="row">
                <div class="col-12">

                    @if (session('BlogUpdateStatus'))
                        <div class="alert alert-success">
                            {{ session('BlogUpdateStatus') }}
                        </div>
                    @endif
                    <form action="{{ route('blogs.update', ['blog' => $blog]) }}" class="form-contact contact_form"
                        method="POST" id="contactForm" novalidate="novalidate" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <input class="border form-control" name="name" type="text"
                                placeholder="Enter your blog title" value=" {{ $blog->name }}">
                            {{-- <x-input-error :messages="$errors->get('name')" class="mt-2" /> --}}
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />


                            <div class="form-group">
                                <input class="border form-control" name="image" type="file">
                                {{-- <x-input-error :messages="$errors->get('name')" class="mt-2" /> --}}
                                <x-input-error :messages="$errors->get('image')" class="mt-2" />
                            </div>



                            <div class="form-group">
                                <select class="border form-control" name="category_id" placeholder=" Enter your blog title"
                                    value="{{ old('category_id') }}">
                                    <option value="">Select Category</option>
                                    @if (count($categories) > 0)
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}"
                                                @if ($category->id == $blog->category_id) selected @endif>
                                                {{ $category->name }}</option>
                                        @endforeach
                                    @endif
                                </select>
                                {{-- <x-input-error :messages="$errors->get('name')" class="mt-2" /> --}}
                                <x-input-error :messages="$errors->get('category_id')" class="mt-2" />
                            </div>


                            <div class="form-group">
                                <textarea class="form-control" name="description" placeholder="Enter your description" style="height: 200px;">{{ $blog->description }}</textarea>
                                <x-input-error :messages="$errors->get('description')" class="mt-2" />
                            </div>




                            <div class="mt-3 text-center form-group text-md-right">
                                <button type="submit" class="button button--active button-contactForm">Submit</button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- ================ contact section end ================= -->


@endsection
