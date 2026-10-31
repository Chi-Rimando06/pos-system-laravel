<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Customer Accounts</title>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

    <div class="container">
        <header>
            <h1 class="page-title">Customer Accounts</h1>
            <nav>
                <a href="/">Home</a>
                <a href="/about">About</a>
                <a href="/customers" class="active">Customers</a>
                <a href="/users">Users</a>
            </nav>
        </header>

        <div class="card">
            <h2>Customer List</h2>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($customers as $customer)
                    <tr>
                        <td>{{ $customer['id'] }}</td>
                        <td>{{ $customer['name'] }}</td>
                        <td>{{ $customer['email'] }}</td>
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