@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @include('includes.notification')
                @foreach ($posts as $post)
                    @include('includes.posts',['post'=>$post])
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
