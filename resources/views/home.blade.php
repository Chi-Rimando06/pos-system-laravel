<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>POS System - Home</title>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

    <div class="container">
        <header>
            <h1 class="page-title">POS System Dashboard</h1>
            <nav>
                <a href="/" class="active">Home</a>
                <a href="/about">About</a>
                <a href="/customers">Customers</a>
                <a href="/users">Users</a>
            </nav>
        </header>

        <div class="card">
            <h2>Welcome to Laravel POS Foundations</h2>

            <img src="{{ asset('images/hi.gif') }}" alt="Hi GIF" class="home-gif">

            <p class="home-content">This system replicates our initial CodeIgniter Point-of-Sale structure using Laravel 12 architecture, featuring controller routing, views, and static array data rendering.</p>
        </div>
    </div>

    <footer>
        &copy; 2026 Chi | Chiriemie Keith G. Rimando | TC37
    </footer>

</body>

</html>