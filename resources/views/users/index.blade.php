<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>User Accounts</title>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

    <div class="container">
        <header>
            <h1 class="page-title">User Accounts</h1>
            <nav>
                <a href="/">Home</a>
                <a href="/about">About</a>
                <a href="/customers">Customers</a>
                <a href="/users" class="active">Users</a>
            </nav>
        </header>

        <div class="card">
            <h2>System Users List</h2>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Username</th>
                        <th>Role</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->username }}</td>
                        <td>{{ $user->full_name }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <footer>
        &copy; 2026 Chi | Chiriemie Keith G. Rimando | TC37
    </footer>

</body>

</html>