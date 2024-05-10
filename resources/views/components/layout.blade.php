<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- SEO Meta Tags -->
    <meta name="author" content="Natan Costa">

    <!-- Webpage Title -->
    <title>Formulário de Candidatura</title>
    
    <!-- Styles -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;0,700;1,400&family=Poppins:wght@600&display=swap" rel="stylesheet">
    
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/css/bootstrap.css', 'resources/css/fontawesome-all.css', 'resources/js/jquery.min.js', 'resources/js/bootstrap.min.js'])
	
</head>

<body class="bg-light">

    @if ($errors->any())
        @foreach ($errors->all() as $error)

            <div class="alert alert-danger alert-dismissible fade show mx-4 mt-2" role="alert">
                <strong>Algo Deu Errado!</strong>
                {{ $error }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

        @endforeach
    @endif

    @session('success_msg')
    <div class="alert alert-success alert-dismissible fade show mx-4 mt-2" role="alert">
        <strong>Tudo Certo!</strong>
        {{ session('success_msg') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endsession
    
    {{ $slot }}

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/fc412dfb62.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.1.3/js/jasny-bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js" integrity="sha512-pHVGpX7F/27yZ0ISY+VVjyULApbDlD0/X0rgGbTqCE7WFW5MezNTWG/dnhtbBuICzsd0WQPgpE4REBLv+UqChw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>