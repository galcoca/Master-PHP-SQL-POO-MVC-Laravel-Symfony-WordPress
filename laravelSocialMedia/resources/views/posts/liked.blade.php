@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @if(count($liked) == 0)
                    <h1>You did not like any image</h1>
                @else
                    <h1>Favorite Images</h1>
                    @foreach ($liked as $like)
                        @include('includes.posts',['post'=>$like->image])               
                    @endforeach

                    <div class="clearfix"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                {{ $liked->links() }}
                            </div>
                        </div>
                    </div>

                @endif
            </div>
        </div>
    </div>
@endsection
