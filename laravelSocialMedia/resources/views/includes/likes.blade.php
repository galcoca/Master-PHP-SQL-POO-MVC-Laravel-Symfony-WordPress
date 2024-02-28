
<div class="likes">
    <?php $userLike = false; ?>
    @foreach ($post->likes as $like)
        @if ($like->user->id == Auth::user()->id)
            <?php $userLike = true; ?>
        @endif  
    @endforeach
    
    <i class="bi btn p-0 likeButton btn-lg {{ $userLike ? 'bi-heart-fill text-danger btnDislike' : 'bi-heart btnLike' }}" id="controller{{$post->id}}" data-id="{{ $post->id }}"></i>
    <span id="counterPost{{$post->id}}">
        {{ count($post->likes) }}
    </span>
</div>