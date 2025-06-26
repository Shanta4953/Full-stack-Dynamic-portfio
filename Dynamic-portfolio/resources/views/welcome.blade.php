<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Portfolio</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: Arial, sans-serif;
      background-color: #f0f0f0;
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

    .hero {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 3rem 2rem;
      background-color: white;
    }

    .about h2 {
      font-size: 1.8rem;
      margin-bottom: 0.5rem;
    }

    .about p {
      font-size: 1.2rem;
      margin-bottom: 1rem;
    }

    .buttons {
      display: flex;
      gap: 1rem;
    }

    button {
      padding: 0.5rem 1rem;
      font-size: 1rem;
      cursor: pointer;
      border: 2px solid #333;
      background-color: transparent;
      transition: 0.3s;
    }

    button:hover {
      background-color: #333;
      color: white;
    }

    .profile-pic img {
      width: 150px;
      height: 150px;
      border-radius: 50%;
      border: 3px dashed #333;
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
        <li><a href="{{ url('/Projects') }}"class="active">Projects</a></li>
        <li><a href="{{ url('/Education') }}"class="active">Education</a></li>
        <li><a href="{{ url('/Contact') }}"class="active">Contact</a></li>
      </ul>
    </nav>
  </header>

  <section class="hero">
    <div class="about">
      <h2>Hi, I am Shanta</h2>
      <p>About Me</p>
      <p>I am a passionate web developer with a keen interest in creating dynamic and responsive web applications. I love coding and enjoy the challenge of solving complex problems.</p>
      <div class="buttons">
        <button>Hire Me</button>
        <button>Experience</button>
      </div>
    </div>
    <div class="profile-pic">
      <img src="data:image/jpeg;base64,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" alt="Profile Picture" />
    </div>
  </section>
  
</body>
</html>

