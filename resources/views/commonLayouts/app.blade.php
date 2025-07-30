<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ToDo List App</title>
    @yield('style')
</head>
<body>

    <!-- yield is used for displaying @ sections -->
    @yield('title')
    <div>
        @if (session('success'))
            <div class="success">
                {{ session('success') }}
            </div>
        @endif
        @yield('content')
    </div>
    
</body>
</html>