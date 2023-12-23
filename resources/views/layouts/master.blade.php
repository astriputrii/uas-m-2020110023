<!DOCTYPE html>
<html>
<head>
    <title>Application Transaction</title>
</head>
<body>
    <header>
        <div class="container">
            <h1>Application Transaction</h1>
            <nav>
                <ul>
                    <li><a href="/account">Account List</a></li>
                    <li><a href="/transaction">Transaction List</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <div class="container">
        @yield('content')
    </div>
    <footer>
        <div class="container">
            <p>Copyright &copy; 2023 Application Transaction</p>
        </div>
    </footer>
</body>
</html>
