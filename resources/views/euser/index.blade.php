<!DOCTYPE html>
    <html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
        <style>
        *{
            box-sizing: border-box;
        }
        h1{
            font-family: Arial, sans-serif;
            font-weight: bold;
            font-size: 55px;
            letter-spacing: 3.5px;
            color: #230800; 
            text-align: center;
        }
        body { 
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            max-width: none;
            width: 100%;
            background-image: linear-gradient(to bottom, #fff7c7, #ffffff);
            background-repeat: no-repeat;
        }
        a.head{
            color: #230800;
            text-decoration: none;
            padding: 5px;
        }
        header{
            background-color: #f9ec9d;
            width: 100%;
            max-width: 100%;
            padding: 20px;
            text-align: right;
        }
        table{ 
            margin: 30px auto;
            width: 100%; 
            border-collapse: collapse; 
            background: white;
            max-width: 850px; 
        }
        th, td{
            text-align: center;
            padding: 10px; 
            border: 1px solid #ccc;
        }
        th{ 
            background: #e9f1f2; 
        }
        </style>
    </head>
    <body>
        <header>
            <a class='head' href="{{ route('home') }}">HOME</a>
            <a class='head' href="{{ route('customer') }}">CUSTOMERS</a>
            <a class='head' href="{{ route('user') }}">USERS</a>
        </header>
        <h1>USERS</h1>
        <table>
            <thead>
            <tr><th>ID</th><th>Username</th><th>Full Name</th></tr>
            </thead>
            <tbody>
            @foreach ($eusers as $euser)
                <tr>
                <td>{{ $euser->id }}</td>
                <td>{{ $euser->username }}</td>
                <td>{{ $euser->full_name }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </body>
</html>