<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Services</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: Arial, sans-serif;
      background-color: #ffffff;
    }

    
    .navbar {
      display: flex;
      justify-content: space-between;
      align-items: center;
      background-color: #333;
      padding: 1rem 2rem;
      color: #fff;
    }

    .nav-links {
      list-style: none;
      display: flex;
      gap: 1rem;
    }

    .nav-links li a {
      text-decoration: none;
      color: white;
      font-weight: bold;
    }

    .nav-links li a:hover {
      color: #f0a500;
    }

    
    .services-section {
      max-width: 900px;
      margin: 3rem auto;
      padding: 2rem;
      border: 3px solid #333;
      border-radius: 10px;
      background-color: #fdfdfd;
      text-align: center;
    }

    .services-section h2 {
      font-size: 2rem;
      margin-bottom: 2rem;
      text-decoration: underline;
      color: #333;
    }

    .service-box {
      width: 300px;
      height: 120px;
      margin: 0 auto;
      background-color: #e0e0e0;
      border: 2px solid #333;
      border-radius: 8px;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 1.2rem;
      font-weight: bold;
      color: #333;
    }

    .back-button {
      display: inline-block;
      margin-top: 2rem;
      padding: 0.5rem 1.5rem;
      background-color: #333;
      color: white;
      text-decoration: none;
      border-radius: 5px;
    }

    .back-button:hover {
      background-color: #555;
    }
  </style>
</head>
<body>

  <header>
    <nav class="navbar">
      <div class="logo">Sohana Sultana Shanta</div>
      <ul class="nav-links">
        <li><a href="{{ url('/') }}" class="active">Welcome</a></li>
        <li><a href="{{ url('/Services') }}" class="active">Services</a></li>
        <li><a href="{{ url('/Experience') }}" class="active">Experience</a></li>
        <li><a href="{{ url('/Projects') }}">Projects</a></li>
        <li><a href="{{ url('/Education') }}"class="active">Education</a></li>
        <li><a href="{{ url('/Contact') }}"class="active">Contact</a></li>
      </ul>
    </nav>
  </header>
  
  <section class="services-section">
    <h2>Services</h2>
    <div class="service-box">Web Design</div>
    
  </section>

</body>
</html>