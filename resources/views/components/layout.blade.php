<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My Webpage')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        * {
            text-decoration: none;
            margin: 0;
            padding: 0;
            box-sizing: border-box; 
        }

        body {
            display: flex;
            flex-direction: column;
            height: 100vh;
            background: linear-gradient(-45deg, #ee7752, #e73c7e, #23a6d5, #23d5ab);
            background-size: 400% 400%;
            animation: gradient 15s ease infinite;
            font-family: Arial, sans-serif;
        }

        @keyframes gradient {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        .navbar {
            background: crimson;
            padding: 10px 15px;
        }

        .navdiv {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .logo a {
            font-size: 35px;
            font-weight: 600;
            color: white;
        }

        .navbar ul {
            display: flex;
            align-items: center;
        }

        .navbar li {
            list-style: none;
            margin-right: 25px;
        }

        .navbar li a {
            color: white;
            font-size: 18px;
            font-weight: bold;
        }

        .navbar button {
            background-color: black;
            border-radius: 10px;
            padding: 10px;
            width: 90px;
            border: none;
            color: white; 
            font-weight: bold; 
            font-size: 15px;
            cursor: pointer; 
        }

        main {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
            margin: 20px 0; 
        }

        .container {
            max-width: 600px;
            width: 100%;
            background-color: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

       
        .container ul {
            list-style: none;
            padding: 0;
            margin: 20px 0;
        }

        .container li {
            margin-bottom: 10px;
        }

        footer {
            text-align: center;
            padding: 20px 0;
            background: crimson;
            color: white;
        }    

        .form-container {
            background-color: rgba(255, 255, 255, 0.9);
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
            text-align: center;
        }

        input {
            width: 80%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            background-color: crimson;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: darkred;
        }

        .error {
            color: red;
            margin-bottom: 15px;
        }

        .section-title {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 10px;    
        }

        .custom-btn {
            background-color: crimson;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            font-weight: bold;
        }

        .custom-btn:hover {
            background-color: darkred;
        }
       
        .container-about {
            max-width: 1000px;
            background-color: rgba(255, 255, 255, 0.9);
            border-radius: 12px;
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.1);
            padding: 30px;
            text-align: center;
        }

        .container-about h2 {
            color: #333;
            font-weight: bold;
            margin-bottom: 20px;
        }

       
        .container-about .section-title {
            margin: 30px 0 15px;
            font-size: 22px;
            font-weight: bold;
            color: #444;
            border-bottom: 2px solid #ddd;
            padding-bottom: 8px;
        }

    
        .container-about .list-group-item {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 15px;
            font-size: 18px;
            transition: background-color 0.3s, transform 0.2s;
        }

        .container-about .list-group-item:hover {
            background-color: #e9ecef;
            transform: scale(1.02);
            cursor: pointer;
        }


        .container-about .list-group-item i {
            font-size: 28px;
            margin-right: 15px;
            transition: color 0.3s;
        }

            .container-about .list-group-item i.bi-spotify { color: #1DB954; }
            .container-about .list-group-item i.bi-instagram { color: #C13584; }
            .container-about .list-group-item i.bi-facebook { color: #1877F2; }
            .container-about .list-group-item i.bi-steam { color: #00adee; }
            .container-about .list-group-item i.bi-controller { color: #ff4655; }
            .container-about .list-group-item i.bi-currency-dollar { color: #28a745; }

        {
            background-color: #28a745;
            color: white;
            padding: 12px 24px;
            font-size: 18px;
            border-radius: 50px;
            border: 2px solid #28a745;
            text-transform: uppercase;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .container-about .custom-btn:hover {
            background-color: darkgreen;
            border-color: darkgreen;
        }
       

        .card-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr); 
          gap: 20px;
    }

        .card {
            position: relative;
            overflow: hidden;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2); 
            border-radius: 15px;
            border: 2px solid rgba(0, 0, 0, 0.1); 
            background-color: rgba(255, 255, 255, 0.75); 
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        .card.home img {
            width: 100%;          
            height: 300px;         
            object-fit: cover;    
            border-radius: 10px 10px 0 0;
        }

        .card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 10px 10px 0 0;
        }

        .card-content {
            padding: 16px;
            text-align: center;
        }

        .card-title {
            font-size: 1rem;
            margin-bottom: 8px;
            color: #333;
        }

        .card-text {
            font-size: 1rem;
            color: #555;
        }

        .card-link {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 1;
            cursor: pointer;
            text-decoration: none;
        }
        .container-home {
            max-width: 800px; 
            background-color: rgba(255, 255, 255, 0.75); 
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin: 20px auto; 
            text-align: center; 
        }

    </style>
</head>

<body>
    <header>
    <nav class="navbar">
        <div class="navdiv">
            <div class="logo"><a href="{{ url('/') }}">ZarWho</a></div>
                <ul>
                </ul>
         </div>
    </nav>
    </header>


    <main>
        @yield('content')
    </main>

    <!-- Footer Section -->
    <footer>
        <p>&copy; 2024 My WebDev Portfolio. All Rights Reserved.</p>
    </footer>
</body>
</html>
