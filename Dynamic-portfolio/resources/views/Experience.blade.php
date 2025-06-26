<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Experience</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #ffffff;
      margin: 0;
      padding: 2rem;
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
      transition: color 0.2s;
    }

    .nav-links li a:hover,
    .nav-links .active {
      color: #007bff;
      text-decoration: underline;
    }

    .experience-box {
      max-width: 800px;
      margin: auto;
      padding: 2rem;
      border: 3px solid #333;
      border-radius: 10px;
      background-color: #fdfdfd;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .experience-box h2 {
      text-align: center;
      margin-bottom: 2rem;
      font-size: 2rem;
      color: #333;
      text-decoration: underline;
    }

    .experience-item {
      margin-bottom: 1.5rem;
    }

    .experience-item h3 {
      margin-bottom: 0.4rem;
      color: #222;
    }

    .experience-item p {
      color: #555;
      line-height: 1.5;
    }

    .back-button {
      display: block;
      width: fit-content;
      margin: 2rem auto 0;
      text-align: center;
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
        <li><a href="{{ url('/Projects') }}"class="active">Projects</a></li>
        <li><a href="{{ url('/Education') }}"class="active">Education</a></li>
        <li><a href="{{ url('/Contact') }}"class="active">Contact</a></li>
      </ul>
    </nav>
  </header>

  <div class="experience-box">
    <h2>Experience</h2>

    <div class="experience-item">
      <h3>Web Developer Intern – CodersPoint</h3>
      <p>Built responsive websites using HTML, CSS, JavaScript. Learned Git and worked in team-based projects.</p>
    </div>

    <div class="experience-item">
      <h3>UI/UX Designer – DesignHive</h3>
      <p>Designed wireframes with Figma, conducted usability testing and enhanced visual flows.</p>
    </div>

    <div class="experience-item">
      <h3>Campus Ambassador – TechFest</h3>
      <p>Represented university, promoted tech events, managed social media engagement and outreach.</p>
    </div>

   
  </div>

</body>
</html>