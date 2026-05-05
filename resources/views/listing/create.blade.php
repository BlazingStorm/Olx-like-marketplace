@extends('layouts.app')

@section('content')


    <div class="row justify-content-center mt-4">
        <div class="col-8">
            <div class="card shadow rounded-top">
                <div class="card-header text-white ">
                    <h5 class="text-white">
                        <i class="fa fa-plus-circle me" aria-hidden="true"></i>
                        Create Listing
                    </h5>
                </div>
                <div class="card-body p-4">
                    <form action="{{ route('listing.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" class="form-control @error('title') is-invalid @enderror" name="title"
                                id="title" value="{{ old('title') }}" placeholder="iphone 16 pro max" autofocus>
                            @error('title')
                                <div class="invalid-feedback"> {{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea name="description" id="description" class="form-control @error('description') is-invalid @enderror"
                                rows="4">{{ old('description') }}</textarea>
                            @error('description')
                                <div class="invalid-feedback"> {{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="category" class="form-label">Category</label>
                            <select name="category" id="category"
                                class="form-select @error('category') is-invalid @enderror">
                                <option value="">Choose a category</option>
                                <option value="car" {{ old('category') == 'car' ? 'selected' : ''}}>Car</option>
                                <option value="bike" {{ old('category') == 'bike' ? 'selected' : ''}}>Bike</option>
                                <option value="phone" {{ old('category') == 'car' ? 'selected' : ''}}>Smartphone</option>
                                <option value="tools" {{ old('category') == 'tools' ? 'selected' : ''}}>Tools</option>
                            </select>
                            @error('category')
                                <div class="invalid-feedback"> {{ $message }}</div>
                            @enderror
                        </div>

                        <div class="row mb-3">
                            <div class="me-auto col-4">
                                <label for="price" class="form-label">Price</label>
                                <input type="number" class="form-control @error('price') is-invalid @enderror"
                                    name="price" id="price" value="{{old('price')}}" placeholder="7500">
                                @error('price')
                                    <div class="invalid-feedback"> {{ $message }}</div>
                                @enderror
                            </div>


                            <div class="ms-auto col-5">
                                <label for="contact" class="form-label">Contact</label>
                                <input type="text" name="contact" id="contact"
                                    class="form-control p-1 @error('contact') is-invalid @enderror"
                                    value="{{old('contact')}}" placeholder="9745090757">
                                @error('contact')
                                    <div class="invalid-feedback"> {{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="images" class="form-label">Upload Images</label>
                            <input type="file" name="images[]" id="images"
                                class="form-control @error('images.*') is-invalid @enderror  @error('images') is-invalid @enderror" multiple>
                            <small class="text-muted">
                                Upload multiple images (JPG, PNG - max 2MB each)
                            </small>
                            @error('images')
                                <div class="invalid-feedback d-block"> {{ $message }} </div>
                            @enderror

                            @error('images.*')
                                <div class="invalid-feedback d-block"> {{ $message }} </div>
                            @enderror
                        </div>

                        <div class="d-flex justify-content-end">
                            <button class="btn btn-primary" type="submit" onclick="this.disabled=true;this.form.submit();">Create Listing</button>
                        </div>
                </div>
                </form>

            </div>
        </div>
    </div>
    </div>
@endsection
