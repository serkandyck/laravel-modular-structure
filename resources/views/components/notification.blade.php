@if(count(auth()->user()->apps) < 1)
    <div class="alert alert-warning" role="alert">
        Please, <a href="#">connect</a> your Stripe Account
    </div>
@endif

@if ($errors->any())
    <div class="alert alert-danger" role="alert">
        <div class="font-weight-bold">Oops! Please, fix the following errors:</div>
        <ul class="mb-0">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
@endif