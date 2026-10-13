<!DOCTYPE html>
<html>
<head>
    <title>Dashboard - LaraPress</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f4f6f9;
        }

        .navbar {
            background: #2563eb;
            color: white;
            padding: 18px 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .navbar h2 {
            margin: 0;
        }

        .navbar a {
            color: white;
            text-decoration: none;
            margin-left: 20px;
        }

        .container {
            padding: 30px;
        }

        .cards {
            display: flex;
            gap: 20px;
            flex-wrap: wrap;
        }

        .card {
            background: white;
            padding: 25px;
            border-radius: 10px;
            flex: 1;
            min-width: 180px;
            box-shadow: 0 2px 8px #00000010;
        }

        .card h3 {
            color: #555;
            margin-top: 0;
        }

        .card p {
            font-size: 24px;
            font-weight: bold;
            color: #2563eb;
        }

        .content {
            background: white;
            padding: 25px;
            margin-top: 25px;
            border-radius: 10px;
        }
    </style>
</head>
<body>

    <div class="navbar">
        <h2>LaraPress</h2>

        <div>
            <a href="/dashboard">Dashboard</a>
            <a href="/">Halaman Utama</a>
        </div>
    </div>

    <div class="container">
        <h1>Dashboard</h1>
        <p>Selamat datang di Dashboard LaraPress!</p>

        <div class="cards">
            <div class="card">
                <h3>Total Artikel</h3>
                <p>0</p>
            </div>

            <div class="card">
                <h3>Total Kategori</h3>
                <p>0</p>
            </div>

            <div class="card">
                <h3>Total Pengguna</h3>
                <p>1</p>
            </div>
        </div>

        <div class="content">
            <h2>Selamat Datang!</h2>
            <p>
                Ini adalah halaman dashboard LaraPress.
                Kamu dapat mengembangkan fitur pengelolaan artikel,
                kategori, dan pengguna di halaman ini.
            </p>
        </div>
    </div>

</body>
</html>