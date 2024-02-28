@if (session('success') || session('error'))
    <div class="alert alert-dismissible {{ session('success') ? 'alert-success' : 'alert-danger' }}" role="alert">
        {{ session('success') ? session('success') : session('error') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
