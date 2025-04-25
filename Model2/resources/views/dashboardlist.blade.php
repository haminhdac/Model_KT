<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách user</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        
        .container {
            width: 100%;
            max-width: 800px;
            border: 1px solid #ccc;
            padding: 20px;
        }
        
        .nav-bar {
            border: 1px solid #ccc;
            padding: 10px;
            margin-bottom: 15px;
            text-align: center;
        }
        
        .nav-bar a {
            text-decoration: none;
            color: #000;
            margin: 0 5px;
        }
        
        .user-list-title {
            text-align: center;
            color: #555;
            margin: 20px 0;
        }
        
        .user-table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        
        .user-table th, .user-table td {
            border: 1px solid #ccc;
            padding: 8px;
            text-align: left;
        }
        
        .user-table th {
            background-color: #f2f2f2;
        }
        
        .user-table tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        
        .action-links a {
            text-decoration: none;
            color: #000;
            margin: 0 5px;
        }
        
        .pagination {
            display: flex;
            justify-content: center;
            margin: 20px 0;
        }
        
        .pagination a, .pagination span {
            padding: 8px 12px;
            margin: 0 5px;
            border: 1px solid #ddd;
            color: #0d6efd;
            text-decoration: none;
        }
        
        .pagination span.active {
            background-color: #0d6efd;
            color: white;
            border-color: #0d6efd;
        }

        .registration-form {
            border: 1px solid #ccc;
            width: 60%;
            margin: 0 auto;
            padding: 20px;
            box-sizing: border-box;
        }
        
        .registration-form h2 {
            text-align: center;
            color: #555;
            margin-bottom: 30px;
        }

        .form-group {
            margin-bottom: 15px;
            display: flex;
            align-items: center;
        }
        
        .form-group label {
            width: 30%;
            text-align: right;
            padding-right: 15px;
        }

        .form-group input[type="text"],
        .form-group input[type="password"],
        .form-group input[type="email"] {
            width: 70%;
            padding: 8px;
            border: 1px solid #ccc;
        }

        .button-group {
            display: flex;
            justify-content: space-between;
            margin-top: 15px;
            align-items: center;
        }
        
        .have-account {
            color: #0d6efd;
            text-decoration: none;
        }
        
        .footer {
            border: 1px solid #ccc;
            padding: 10px;
            margin-top: 15px;
            text-align: center;
            font-size: 14px;
            color: #555;
            width: 100%;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="nav-bar">
            <a href="#">Home</a > | <a href="#">Đăng xuất</a>
    </div>
    @yield('content')
</body>
</html>