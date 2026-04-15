<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menus Project</title>
    <style>
        body { font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif; margin: 0; padding: 0; display: flex; flex-direction: column; min-height: 100vh; }
        nav { background-color: #333; padding: 1rem; text-align: center; }
        nav a { color: white; text-decoration: none; margin: 0 15px; padding: 5px 10px; border-radius: 5px; }
        
        /* Highlight rule for the active menu option */
        nav a.active { background-color: #007aff; font-weight: bold; }
        
        main { flex: 1; padding: 2rem; text-align: center; }
        footer { background-color: #f1f1f1; padding: 1rem; text-align: center; border-top: 1px solid #ccc; }
    </style>
</head>
<body>

    <nav>
        <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Home</a>
        <a href="{{ route('photos') }}" class="{{ request()->routeIs('photos') ? 'active' : '' }}">Photos</a>
        <a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a>
    </nav>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>Activity performed by: [Your Name Here] | Software Engineering Student</p>
    </footer>

</body>
</html>