@if (session('message'))
<div class="alert alert-success fade show" role="alert">
    <div class="alert-text my-1">
        <h5 class="mb-1 font-weight-bold mt-0">All Set</h5>
        <span>{{ session('message') }}</span>
    </div>
</div>
@endif
@if($errors->any())
<div class="alert alert-danger fade show" role="alert">
    <div class="alert-text my-1">
        <h5 class="mb-1 font-weight-bold mt-0">Oh Snap!</h5>
        <span>Oh snap! {{$errors->first()}}</span>
    </div>
</div>
@endif

