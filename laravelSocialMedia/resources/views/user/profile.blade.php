@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                
                <div class="data-user">
                    <div class="container text-center">
                        <div class="row justify-content-start">
                            <div class="col-3 d-flex align-items-end align-self-center flex-column mb-3">
                                <div class="avatar">
                                    @if ($user->image)
                                        <img class="rounded-circle img-fluid" src="{{ route('user.avatar', ['filename' => $user->image]) }}" alt="{{ $user->nick }}">
                                    @else
                                        <img class="rounded-circle img-fluid" src="https://via.placeholder.com/500/500" alt="{{ $post->user->nick }}">
                                    @endif
                                </div>
                            </div>
                            <div class="col-9 d-flex align-items-start align-self-center flex-column mb-3">
                                <div class="p-2">
                                    <span>{{ '@'.$user->nick }}</span>
                                </div>
                                <div class="p-2">
                                    <span>{{ $user->name.' '.$user->surname }}</span>
                                </div>
                                <div class="p-2">
                                    <span>{{ \FormatTime::LongTimeFilter($user->created_at) }}</span>
                                </div>
                            </div>
                        </div>
                    </div>                   
                </div>
                <hr>
                <br>

                @foreach ($user->images as $post)
                    @include('includes.posts',['post'=>$post])
                @endforeach

                <div class="clearfix"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
