<form action="{{ route('post.comment', $post->id) }}" method="post">
    @csrf
    <div class="form-group row mb-4 justify-content-center align-items-center">
        <div class="col-md-12">
            <textarea id="comment" placeholder="Comment" type="file" class="form-control @error('comment') is-invalid @enderror" name="comment" required></textarea>
            @error('comment')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-6 d-grid gap-2">
            <button type="submit" class="btn btn-primary">
                New Comment
            </button>
        </div>
    </div>
</form>