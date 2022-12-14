
<nav class="navbar navbar-expand-lg d-flec flex-column sticky-top pb-0" style="background: var(--darkerShade);">
  <div class="container">
    <a class="navbar-brand text-white font-weight-bold" href="{{route('index')}}"><img src="{{asset('public/img/favicon.png')}}" style="height:40px;display:inline;"/>&nbsp;&nbsp;{{env('BRAND_NAME')}}</a>
   
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon">
        <i class="fas fa-bars text-muted" style="1.4em"></i>
      </span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">

      </ul>
    <form class="d-flex" action="{{route('search')}}">
        <input class="form-control me-2" name="q" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
  <div class="progress-container">
    <div class="progress-bar" id="myBar"></div>
  </div>

</nav>