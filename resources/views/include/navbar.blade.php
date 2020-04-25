{{-- <nav class="navbar navbar-expand-md navbar-laravel navbar-dark bg-dark">
    <a class="navbar-brand" href="/index"><img src="/images/CardeaLogoSmall.png" alt="Cardea Logo" style="width:50px;height:50px"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="/dashboard">Home</a>
      </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Daily Log</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Report</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Assessment</a>
      </li>
      </ul>
    </div>
</nav> --}}
<div class="w3-bar custom-nav">
  <a href="/dashboard" class="w3-bar-item"><img src="/images/CardeaLogoSmall.png" alt="Cardea Logo" style="width:auto;height:34px"></a>
  <a href="/dashboard" class="w3-bar-item w3-button w3-hover-teal w3-xlarge w3-hide-small">Home</a>
  <a href="#" class="w3-bar-item w3-button w3-hover-teal w3-xlarge w3-hide-small">Daily Log</a>
  <a href="#" class="w3-bar-item w3-button w3-hover-teal w3-xlarge w3-hide-small">Report</a>
  <a href="#" class="w3-bar-item w3-button w3-hover-teal w3-xlarge w3-hide-small">Assessment</a>
  <a href="javascript:void(0)" class="w3-bar-item w3-button w3-xlarge w3-hover-teal w3-right w3-hide-large w3-hide-medium" onclick="myFunction()">&#9776;</a>
</div>

<div id="hamburgerbtn" class="w3-bar-block w3-large custom-nav w3-hide w3-hide-large w3-hide-medium">
  <a href="/dashboard" class="w3-bar-item w3-button w3-hover-teal">Home</a>
  <a href="#" class="w3-bar-item w3-button w3-hover-teal">Daily Log</a>
  <a href="#" class="w3-bar-item w3-button w3-hover-teal">Report</a>
  <a href="#" class="w3-bar-item w3-button w3-hover-teal">Assessment</a>
</div>