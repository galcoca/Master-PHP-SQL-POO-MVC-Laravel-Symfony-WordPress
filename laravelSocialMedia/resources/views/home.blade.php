@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @include('includes.notification')
                @foreach ($posts as $post)
                    <div class="card">
                        <div class="card-header">
                            <div class="container-fluid">
                                <div class="row align-items-center">
                                    <div class="col-8">
                                        <div class="d-flex align-items-center fw-normal">
                                            <div class="postsAvatar">
                                                @if ($post->user->image)
                                                    <img class="rounded-circle img-fluid"
                                                        src="{{ route('user.avatar', ['filename' => $post->user->image]) }}"
                                                        alt="{{ $post->user->nick }}">
                                                @else
                                                    <img class="rounded-circle img-fluid"
                                                        src="https://via.placeholder.com/500/500"
                                                        alt="{{ $post->user->nick }}">
                                                @endif
                                            </div>
                                            <strong>{{ $post->user->name . ' ' . $post->user->surname }}</strong>&nbsp;|
                                            {{ \FormatTime::LongTimeFilter($post->created_at) }}
                                        </div>

                                    </div>
                                    <div class="col-4">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card-body p-0 m-0">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-12 p-0">
                                        <div class="imageHome">
                                            @if ($post->image_path)
                                                <img class="img-fluid"
                                                    src="{{ route('home.images', ['filename' => $post->image_path]) }}"
                                                    alt="{{ $post->user->nick }}">
                                            @else
                                                <img class="img-fluid" src="https://via.placeholder.com/500/500"
                                                    alt="{{ $post->user->nick }}">
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card-footer p-3">
                            <div class="container-fluid">
                                <div class="row justify-content-between align-items-center">
                                    <div class="col-6">
                                        <div class="d-flex justify-content-start align-items-center fw-normal description">
                                            <span class="fw-bold me-1">{{ $post->user->nick }}</span>
                                            {{ $post->description }}
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="d-flex justify-content-end align-items-center fw-normal description">
                                            <div class="comments me-2">
                                                <a class="btn btn-primary btn-sm" href="{{ route('post.detail', $post->id) }}"> Comments </a>
                                            </div>
                                            @include('includes.likes')
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                @endforeach

                <div class="clearfix"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            {{ $posts->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
