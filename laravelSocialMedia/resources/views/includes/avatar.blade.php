@if (isset(Auth::user()->image))
    <div class="container text-center">
        <div class="row justify-content-center">
            <div class="col-3 align-self-center">
                <div class="avatar">
                    <img class="rounded-circle img-thumbnail img-fluid" src="{{ route('user.avatar', ['filename' => Auth::user()->image]) }}" alt="{{ Auth::user()->nick }}">
                </div>
            </div>
        </div>
    </div>
    <br>
@endif
