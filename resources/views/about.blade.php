<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>About - POS System</title>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

    <div class="container">
        <header>
            <h1 class="page-title">About This Application</h1>
            <nav>
                <a href="/">Home</a>
                <a href="/about" class="active">About</a>
                <a href="/customers">Customers</a>
                <a href="/users">Users</a>
            </nav>
        </header>

        <div class="card">
            <h2>Project Overview</h2>
            <p>Developed as part of Technical Formative Assessment (TFA6) for Web Systems Technologies. It upgrades the core MVC architecture from static arrays to a robust database-driven system.</p>

            <h3>Core Features</h3>
            <ul>
                <li>Database Migrations & Schema Definitions</li>
                <li>Database Seeders & Initial Data Population</li>
                <li>Eloquent ORM Models & Database-Driven Controllers</li>
            </ul>
        </div>
    </div>

    <footer>
        &copy; 2026 Chi | Chiriemie Keith G. Rimando | TC37
    </footer>

</body>

</html>