{{-- Navigation bar --}}
<div class="w3-bar custom-nav">
    <a href="/daily-activities" class="w3-bar-item "><img src="/images/CardeaLogoSmall.png" alt="Cardea Logo"
                                                  style="width:auto;height:34px"></a>
    <a href="/home" class="w3-bar-item w3-button w3-hover-teal w3-xlarge w3-hide-small">Home</a>
    
    {{-- Dropdown list --}}
    <div class="w3-dropdown-hover">
        <button class="w3-button w3-hover-teal w3-xlarge w3-hide-small">Daily log <i class="fa fa-caret-down"></i></button>
        <div class="w3-dropdown-content w3-bar-block w3-card-4">
          <a href="/daily-activities" class="w3-bar-item w3-button w3-hover-teal w3-xlarge w3-hide-small">View log</a>
          <a href="/daily-activities/create" class="w3-bar-item w3-button w3-hover-teal w3-xlarge w3-hide-small ">Add activity</a>
        </div>
    </div>

    <a href="javascript:void(0)"
       class="w3-bar-item w3-button w3-xlarge w3-hover-teal w3-right w3-hide-large w3-hide-medium"
       onclick="myFunction()">&#9776;</a>
    <a href="logout" class="w3-right">
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button class="w3-bar-item w3-button w3-hover-teal w3-text-white w3-xlarge w3-hide-small w3-right" type="submit">Logout</button>
        </form>
    </a>
</div>

{{-- Hamburger menu --}}
<div id="hamburgerbtn" class="w3-bar-block w3-large custom-nav w3-hide w3-hide-large w3-hide-medium">
    <a href="/home" class="w3-bar-item w3-button w3-hover-teal">Home</a>
    <a href="/daily-activities" class="w3-bar-item w3-button w3-hover-teal">Daily Log</a>
</div>
