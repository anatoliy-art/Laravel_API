<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>{{ $title ?? config('app.name') }}</title>
	<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
</head>
<body>

<div class="container">
	<div class="row justify-content-center">
		<div class="col-6 mt-5">

         @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

			@yield('content')

		</div>
	</div>
</div>


</body>
</html>