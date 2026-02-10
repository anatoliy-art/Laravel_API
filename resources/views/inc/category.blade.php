<nav class="navbar navbar-expand-lg navbar-light bg-light">
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Недвижимость
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          @foreach($categories as $category)
            <a class="dropdown-item" href="{{ route('category', ['id' => $category->id]) }}">{{ $category->title }}</a>
          @endforeach
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Этаж
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          @foreach($floors as $floor)
            <a class="dropdown-item" href="{{ route('floor', ['id' => $floor->id]) }}">{{ $floor->title }}</a>
          @endforeach
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Материал
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          @foreach($materials as $material)
            <a class="dropdown-item" href="{{ route('material', ['id' => $material->id]) }}">{{ $material->title }}</a>
          @endforeach
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Кол-во комнат
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          @foreach($rooms as $room)
            <a class="dropdown-item" href="{{ route('room', ['id' => $room->id]) }}">{{ $room->title }}</a>
          @endforeach
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
            <a class="dropdown-item" href="{{ route('user', ['id' => $user->id]) }}">{{ $user->name }}</a>
          @endforeach
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>            



    </ul>
  </div>
</nav>