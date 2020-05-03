@if(count($errors) > 0)
    @foreach ($errors->all() as $error)
        <div class="w3-panel w3-pale-red">
            {{$error}}
        </div>
    @endforeach
@endif

@if(session('success'))
    <div class="w3-panel w3-pale-green">
        {{session('success')}}
    </div>
@endif

@if(session('error'))
    <div class="w3-panel w3-pale-red">
        {{session('error')}}
    </div>
@endif