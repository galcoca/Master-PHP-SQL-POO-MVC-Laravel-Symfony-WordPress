@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Upload New Image</div>
                <div class="card-body">
                    <form action="{{ route('image.save') }}" enctype="multipart/form-data" method="post">
                        @csrf
                        <div class="form-group row mb-4">
                            <label for="image_path" class="col-md-3 col-form-label text-md-end">{{ __('Image') }}</label>

                            <div class="col-md-7">
                                <input id="image_path" type="file" class="form-control @error('image_path') is-invalid @enderror" name="image_path" required>

                                @error('image_path')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="description" class="col-md-3 col-form-label text-md-end">{{ __('Description') }}</label>

                            <div class="col-md-7">
                                <textarea id="description" type="file" class="form-control @error('description') is-invalid @enderror" name="description" required></textarea>
                                @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row justify-content-center">
                            <div class="col-md-6 d-grid gap-2">
                                <button type="submit" class="btn btn-primary">
                                    Post
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

