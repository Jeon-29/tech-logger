<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tech Logger | @yield('title')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(135deg, #a8edea 0%, #fed6e3 100%);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .app-title {
            position: absolute;
            top: 40px;
            font-weight: 900;
            color: white;
            text-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        .glass-container {
            background: rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(15px);
            border: 1px solid rgba(255, 255, 255, 0.3);
            border-radius: 25px;
            padding: 40px;
            width: 100%;
            max-width: 420px;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
        }

        .form-control {
            background: rgba(255, 255, 255, 0.3);
            border: none;
            border-radius: 12px;
            padding: 12px;
        }

        /* Custom Toast Style Alert */
        .glass-alert {
            background: rgba(255, 59, 59, 0.25);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            color: white;
            border-radius: 15px;
        }
        .link:hover {
            text-decoration: underline;
        }
        .link {
            transition: all 0.2s ease;
            text-decoration: none;
        }
    </style>
</head>

<body>

    <h1 class="app-title text-uppercase">Tech Logger</h1>

    <div class="glass-container">
        @if ($errors->any())
        <div class="alert glass-alert small mb-4">
            <ul class="mb-0 list-unstyled">
                @foreach ($errors->all() as $error)
                <li><i class="bi bi-x-circle-fill me-2"></i>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        @yield('content')
    </div>

</body>

</html>