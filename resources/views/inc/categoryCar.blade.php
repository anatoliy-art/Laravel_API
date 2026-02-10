<nav class="navbar navbar-expand-lg navbar-light bg-light">
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Модель
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          @foreach($brands as $brand)
            <a class="dropdown-item" href="{{ route('site.cars.brand', ['id' => $brand->id]) }}">{{ $brand->title }}</a>
          @endforeach
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Год выпуска
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            @foreach($years as $year)
              <a class="dropdown-item" href="{{ route('site.car.year', ['id' => $year]) }}">{{ $year }}</a>
            @endforeach
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Мощность двигателя
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            
              <a class="dropdown-item" href="{{ route('site.car.engine', ['id' => 0]) }}">менее 50 л.с.</a>
              <a class="dropdown-item" href="{{ route('site.car.engine', ['id' => 50]) }}">50-100 л.с.</a>
              <a class="dropdown-item" href="{{ route('site.car.engine', ['id' => 100]) }}">100-150 л.с.</a>
              <a class="dropdown-item" href="{{ route('site.car.engine', ['id' => 150]) }}">150-200 л.с.</a>
              <a class="dropdown-item" href="{{ route('site.car.engine', ['id' => 200]) }}">200-250 л.с.</a>
              <a class="dropdown-item" href="{{ route('site.car.engine', ['id' => 250]) }}">250-300 л.с.</a>
              <a class="dropdown-item" href="{{ route('site.car.engine', ['id' => 300]) }}">более 300 л.с.</a>
            
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Пробег
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            
              <a class="dropdown-item" href="{{ route('site.car.mileage', ['id' => 0]) }}">0 тыс.км</a>
              <a class="dropdown-item" href="{{ route('site.car.mileage', ['id' => 100]) }}">0-100 тыс.км</a>
              <a class="dropdown-item" href="{{ route('site.car.mileage', ['id' => 300]) }}">100-300 тыс.км</a>
              <a class="dropdown-item" href="{{ route('site.car.mileage', ['id' => 500]) }}">300-500 тыс.км</a>
              <a class="dropdown-item" href="{{ route('site.car.mileage', ['id' => 700]) }}">500-700 тыс.км</a>
              <a class="dropdown-item" href="{{ route('site.car.mileage', ['id' => 900]) }}">700-900 тыс.км</a>
              <a class="dropdown-item" href="{{ route('site.car.mileage', ['id' => 1000]) }}">более 900 тыс.км</a>
            
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Собственник
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          @foreach($users as $user)
            <a class="dropdown-item" href="{{ route('site.car.user', ['id' => $user->id]) }}">{{ $user->name }}</a>
          @endforeach
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
            
    </ul>
  </div>
</nav>