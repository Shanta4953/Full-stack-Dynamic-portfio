<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Contact Me</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: Arial, sans-serif;
      background-color: #f2f2f2;
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


    .contact-container {
      max-width: 500px;
      margin: 50px auto;
      background-color: white;
      padding: 30px;
      border: 2px solid #333;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }

    .contact-container h2 {
      text-align: center;
      margin-bottom: 20px;
      font-size: 24px;
      color: #333;
    }

    form {
      display: flex;
      flex-direction: column;
    }

    label {
      font-weight: bold;
      margin-bottom: 5px;
    }

    input, textarea {
      padding: 10px;
      margin-bottom: 15px;
      border: 1px solid #aaa;
      border-radius: 5px;
      font-size: 16px;
    }

    textarea {
      resize: vertical;
    }

    button {
      background-color: #333;
      color: white;
      border: none;
      padding: 10px 20px;
      font-size: 16px;
      border-radius: 5px;
      cursor: pointer;
      align-self: center;
      transition: background-color 0.3s;
    }

    button:hover {
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

  <div class="contact-container">
    <h2>Contact Me</h2>
    <form>
      <label for="name">Full Name</label>
      <input type="text" id="name" name="name" placeholder="Enter your full name" required>

      <label for="email">E-mail</label>
      <input type="email" id="email" name="email" placeholder="Enter your email" required>

      <label for="phone">Phone No</label>
      <input type="tel" id="phone" name="phone" placeholder="Enter your phone number" required>

      <label for="subject">Subject</label>
      <input type="text" id="subject" name="subject" placeholder="Subject of your message" required>

      <label for="message">Your Message</label>
      <textarea id="message" name="message" rows="5" placeholder="Write your message here..." required></textarea>

      <button type="submit">Send Message</button>
    </form>
  </div>

</body>
</html>