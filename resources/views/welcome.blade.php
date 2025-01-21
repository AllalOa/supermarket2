<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Styles / Scripts -->

    </head>
    <body class="font-sans antialiased dark:bg-black dark:text-white/50">
       
        <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to the Supermarket</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to the Supermarket</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
            body {
            background-image: url('https://media.istockphoto.com/id/1412353022/fr/photo/all%C3%A9e-vide-dans-un-supermarch%C3%A9.jpg?s=612x612&w=0&k=20&c=UE33JWhIxASjArU3cSauxJ6AOlOe2dOH-CdteBl7684='); /* Replace with your image URL */
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            filter: blur(0px); /* Apply blur to the background */
            overflow: hidden;
        }
        
        .container {
            position: relative;
            text-align: center;
            background: rgba(255, 255, 255, 0.9); /* Semi-transparent white background */
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            z-index: 99; /* Ensure the content is above the blurred background */
        }
        h1 {
            font-size: 2.5rem;
            margin-bottom: 20px;
            color: #28a745; /* Change heading color */
        }
        .lead {
            font-size: 1.2rem;
            margin-bottom: 30px;
            color: #333;
        }
        .btn-primary {
            background-color: #28a745;
            border-color: #28a745;
        }
        .btn-primary:hover {
            background-color: #218838;
            border-color: #1e7e34;
        }
        .btn-secondary {
            background-color: #6c757d;
            border-color: #6c757d;
        }
        .btn-secondary:hover {
            background-color: #5a6268;
            border-color: #545b62;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Welcome to our Supermarket System</h1>
    <p class="lead">Please select your role to continue:</p>

    <div>
        <!-- Button for Supervisor Login -->
        <a href="{{ route('login')}}" class="btn btn-primary">I am a Supervisor</a>

        <!-- Button for Cashier Login -->
        <a href="{{ route('login')}}" class="btn btn-secondary">I am a Cashier</a>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>







    </body>
</html>






















