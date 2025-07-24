<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Projects - Sohana Sultana Shanta | Full-Stack Developer Portfolio</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
  <style>
    :root {
      --primary-color: #2563eb;
      --secondary-color: #1e40af;
      --accent-color: #3b82f6;
      --text-color: #1f2937;
      --light-gray: #f8fafc;
      --medium-gray: #e2e8f0;
      --dark-gray: #64748b;
      --white: #ffffff;
      --gradient: linear-gradient(135deg, var(--primary-color), var(--accent-color));
      --shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
      --shadow-hover: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
    }

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Inter', sans-serif;
      background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
      color: var(--text-color);
      line-height: 1.6;
      min-height: 100vh;
    }

    /* Navigation */
    .navbar {
      background: rgba(255, 255, 255, 0.95);
      backdrop-filter: blur(10px);
      border-bottom: 1px solid var(--medium-gray);
      padding: 1rem 2rem;
      position: sticky;
      top: 0;
      z-index: 1000;
      box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
    }

    .nav-container {
      max-width: 1200px;
      margin: 0 auto;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .logo {
      font-size: 1.5rem;
      font-weight: 700;
      background: var(--gradient);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
    }

    .nav-links {
      display: flex;
      list-style: none;
      gap: 2rem;
    }

    .nav-links a {
      text-decoration: none;
      color: var(--text-color);
      font-weight: 500;
      transition: all 0.3s ease;
      position: relative;
    }

    .nav-links a:hover {
      color: var(--primary-color);
      transform: translateY(-2px);
    }

    .nav-links a.active {
      color: var(--primary-color);
    }

    .nav-links a::after {
      content: '';
      position: absolute;
      width: 0;
      height: 2px;
      bottom: -5px;
      left: 50%;
      background: var(--gradient);
      transition: all 0.3s ease;
      transform: translateX(-50%);
    }

    .nav-links a:hover::after,
    .nav-links a.active::after {
      width: 100%;
    }

    /* Hero Section */
    .hero {
      padding: 4rem 2rem 2rem;
      text-align: center;
      color: white;
    }

    .hero h1 {
      font-size: 3rem;
      font-weight: 700;
      margin-bottom: 1rem;
      text-shadow: 0 4px 6px rgba(0, 0, 0, 0.3);
    }

    .hero p {
      font-size: 1.2rem;
      opacity: 0.9;
      max-width: 600px;
      margin: 0 auto;
    }

    /* Main Container */
    .main-container {
      max-width: 1200px;
      margin: 0 auto;
      padding: 2rem;
    }

    /* Filter Section */
    .filter-section {
      background: var(--white);
      padding: 2rem;
      border-radius: 20px;
      box-shadow: var(--shadow);
      margin-bottom: 3rem;
      text-align: center;
    }

    .filter-buttons {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 1rem;
      margin-top: 1rem;
    }

    .filter-btn {
      background: var(--light-gray);
      color: var(--text-color);
      border: none;
      padding: 0.75rem 1.5rem;
      border-radius: 25px;
      font-weight: 500;
      cursor: pointer;
      transition: all 0.3s ease;
      border: 2px solid transparent;
    }

    .filter-btn:hover,
    .filter-btn.active {
      background: var(--primary-color);
      color: white;
      transform: translateY(-2px);
      box-shadow: 0 8px 20px rgba(37, 99, 235, 0.3);
    }

    /* Projects Grid */
    .projects-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(400px, 1fr));
      gap: 2rem;
      margin-bottom: 3rem;
    }

    .project-card {
      background: var(--white);
      border-radius: 20px;
      overflow: hidden;
      box-shadow: var(--shadow);
      transition: all 0.3s ease;
      opacity: 1;
      transform: scale(1);
    }

    .project-card:hover {
      box-shadow: var(--shadow-hover);
      transform: translateY(-10px);
    }

    .project-card.hidden {
      opacity: 0;
      transform: scale(0.8);
      pointer-events: none;
    }

    .project-image {
      height: 250px;
      background: linear-gradient(45deg, var(--primary-color), var(--accent-color));
      position: relative;
      overflow: hidden;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .project-image i {
      font-size: 4rem;
      color: white;
      opacity: 0.8;
    }

    .project-overlay {
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background: rgba(0, 0, 0, 0.8);
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 1rem;
      opacity: 0;
      transition: all 0.3s ease;
    }

    .project-card:hover .project-overlay {
      opacity: 1;
    }

    .overlay-btn {
      background: var(--white);
      color: var(--text-color);
      border: none;
      padding: 0.75rem 1rem;
      border-radius: 50px;
      cursor: pointer;
      transition: all 0.3s ease;
      text-decoration: none;
      display: inline-flex;
      align-items: center;
      gap: 0.5rem;
      font-weight: 500;
    }

    .overlay-btn:hover {
      background: var(--primary-color);
      color: white;
      transform: scale(1.05);
    }

    .project-content {
      padding: 2rem;
    }

    .project-header {
      display: flex;
      justify-content: space-between;
      align-items: start;
      margin-bottom: 1rem;
    }

    .project-title {
      font-size: 1.5rem;
      font-weight: 600;
      color: var(--text-color);
      margin-bottom: 0.5rem;
    }

    .project-status {
      background: linear-gradient(135deg, #10b981, #059669);
      color: white;
      padding: 0.25rem 0.75rem;
      border-radius: 15px;
      font-size: 0.8rem;
      font-weight: 500;
    }

    .project-status.in-progress {
      background: linear-gradient(135deg, #f59e0b, #d97706);
    }

    .project-status.concept {
      background: linear-gradient(135deg, #8b5cf6, #7c3aed);
    }

    .project-description {
      color: var(--dark-gray);
      margin-bottom: 1.5rem;
      line-height: 1.6;
    }

    .project-tech {
      display: flex;
      flex-wrap: wrap;
      gap: 0.5rem;
      margin-bottom: 1.5rem;
    }

    .tech-tag {
      background: var(--light-gray);
      color: var(--text-color);
      padding: 0.25rem 0.75rem;
      border-radius: 15px;
      font-size: 0.85rem;
      font-weight: 500;
    }

    .project-stats {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 1rem;
      margin-bottom: 1.5rem;
    }

    .stat-item {
      text-align: center;
      padding: 0.75rem;
      background: var(--light-gray);
      border-radius: 10px;
    }

    .stat-value {
      font-size: 1.2rem;
      font-weight: 600;
      color: var(--primary-color);
      display: block;
    }

    .stat-label {
      font-size: 0.85rem;
      color: var(--dark-gray);
    }

    .project-links {
      display: flex;
      gap: 1rem;
    }

    .project-link {
      flex: 1;
      background: var(--gradient);
      color: white;
      text-decoration: none;
      padding: 0.75rem 1rem;
      border-radius: 10px;
      text-align: center;
      font-weight: 500;
      transition: all 0.3s ease;
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 0.5rem;
    }

    .project-link:hover {
      transform: translateY(-2px);
      box-shadow: 0 8px 20px rgba(37, 99, 235, 0.3);
    }

    .project-link.secondary {
      background: var(--light-gray);
      color: var(--text-color);
    }

    .project-link.secondary:hover {
      background: var(--medium-gray);
    }

    /* Stats Section */
    .stats-section {
      background: var(--white);
      padding: 3rem 2rem;
      border-radius: 20px;
      box-shadow: var(--shadow);
      text-align: center;
      margin-bottom: 3rem;
    }

    .stats-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
      gap: 2rem;
      margin-top: 2rem;
    }

    .stats-item {
      padding: 2rem 1rem;
      background: var(--light-gray);
      border-radius: 15px;
      transition: all 0.3s ease;
    }

    .stats-item:hover {
      background: var(--primary-color);
      color: white;
      transform: translateY(-5px);
    }

    .stats-item i {
      font-size: 3rem;
      color: var(--primary-color);
      margin-bottom: 1rem;
    }

    .stats-item:hover i {
      color: white;
    }

    .stats-number {
      font-size: 2.5rem;
      font-weight: 700;
      margin-bottom: 0.5rem;
      display: block;
    }

    .stats-label {
      font-weight: 500;
      opacity: 0.8;
    }

    /* Mobile Responsiveness */
    @media (max-width: 768px) {
      .nav-links {
        display: none;
      }

      .hero h1 {
        font-size: 2rem;
      }

      .projects-grid {
        grid-template-columns: 1fr;
      }

      .filter-buttons {
        gap: 0.5rem;
      }

      .filter-btn {
        padding: 0.5rem 1rem;
        font-size: 0.9rem;
      }

      .main-container {
        padding: 1rem;
      }

      .project-stats {
        grid-template-columns: 1fr;
      }

      .project-links {
        flex-direction: column;
      }

      .stats-grid {
        grid-template-columns: repeat(2, 1fr);
      }
    }

    /* Animations */
    @keyframes fadeInUp {
      from {
        opacity: 0;
        transform: translateY(30px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    .project-card {
      animation: fadeInUp 0.6s ease forwards;
    }

    .project-card:nth-child(1) { animation-delay: 0.1s; }
    .project-card:nth-child(2) { animation-delay: 0.2s; }
    .project-card:nth-child(3) { animation-delay: 0.3s; }
    .project-card:nth-child(4) { animation-delay: 0.4s; }
    .project-card:nth-child(5) { animation-delay: 0.5s; }
    .project-card:nth-child(6) { animation-delay: 0.6s; }
  </style>
</head>
<<body>
  <header>
    <nav class="navbar">
      <div class="nav-container">
        <div class="logo">Sohana Sultana Shanta</div>
        <ul class="nav-links">
          <li><a href="{{ url('/') }}">Welcome</a></li>
          <li><a href="{{ url('/Services') }}">Services</a></li>
          <li><a href="{{ url('/Experience') }}">Experience</a></li>
          <li><a href="{{ url('/Projects') }}" class="active">Projects</a></li>
          <li><a href="{{ url('/Education') }}">Education</a></li>
          <li><a href="{{ url('/Contact') }}">Contact</a></li>
        </ul>
      </div>
    </nav>
  </header>

  <section class="hero">
    <h1>My Projects</h1>
    <p>Exploring creativity through code - A showcase of my development journey and technical expertise</p>
  </section>

  <div class="main-container">
    <!-- Filter Section -->
    <div class="filter-section">
      <h2>Filter Projects</h2>
      <div class="filter-buttons">
        <button class="filter-btn active" data-filter="all">All Projects</button>
        <button class="filter-btn" data-filter="web">Web Development</button>
        <button class="filter-btn" data-filter="fullstack">Full-Stack</button>
        <button class="filter-btn" data-filter="frontend">Frontend</button>
        <button class="filter-btn" data-filter="backend">Backend</button>
        <button class="filter-btn" data-filter="mobile">Mobile</button>
      </div>
    </div>

    <!-- Projects Grid -->
    <div class="projects-grid">
      <!-- Project 1: E-commerce Platform -->
      <div class="project-card" data-category="fullstack web">
        <div class="project-image">
          <i class="fas fa-shopping-cart"></i>
          <div class="project-overlay">
            <a href="#" class="overlay-btn">
              <i class="fas fa-external-link-alt"></i>
              Live Demo
            </a>
            <a href="#" class="overlay-btn">
              <i class="fab fa-github"></i>
              Code
            </a>
          </div>
        </div>
        <div class="project-content">
          <div class="project-header">
            <div>
              <h3 class="project-title">E-commerce Platform</h3>
              <div class="project-status">Completed</div>
            </div>
          </div>
          <p class="project-description">
            A full-featured e-commerce platform with user authentication, payment integration, inventory management, and admin dashboard. Built with modern technologies for optimal performance.
          </p>
          <div class="project-tech">
            <span class="tech-tag">Laravel</span>
            <span class="tech-tag">PHP</span>
            <span class="tech-tag">MySQL</span>
            <span class="tech-tag">JavaScript</span>
            <span class="tech-tag">Bootstrap</span>
            <span class="tech-tag">Stripe API</span>
          </div>
          <div class="project-stats">
            <div class="stat-item">
              <span class="stat-value">3 months</span>
              <span class="stat-label">Duration</span>
            </div>
            <div class="stat-item">
              <span class="stat-value">500+</span>
              <span class="stat-label">Code Commits</span>
            </div>
          </div>
          <div class="project-links">
            <a href="#" class="project-link">
              <i class="fas fa-external-link-alt"></i>
              View Live
            </a>
            <a href="#" class="project-link secondary">
              <i class="fab fa-github"></i>
              Source Code
            </a>
          </div>
        </div>
      </div>

      <!-- Project 2: Task Management System -->
      <div class="project-card" data-category="fullstack web">
        <div class="project-image">
          <i class="fas fa-tasks"></i>
          <div class="project-overlay">
            <a href="#" class="overlay-btn">
              <i class="fas fa-external-link-alt"></i>
              Live Demo
            </a>
            <a href="#" class="overlay-btn">
              <i class="fab fa-github"></i>
              Code
            </a>
          </div>
        </div>
        <div class="project-content">
          <div class="project-header">
            <div>
              <h3 class="project-title">Task Management System</h3>
              <div class="project-status">Completed</div>
            </div>
          </div>
          <p class="project-description">
            A comprehensive project management tool with real-time collaboration, drag-and-drop task boards, team management, and detailed analytics. Perfect for agile development teams.
          </p>
          <div class="project-tech">
            <span class="tech-tag">React</span>
            <span class="tech-tag">Node.js</span>
            <span class="tech-tag">MongoDB</span>
            <span class="tech-tag">Socket.io</span>
            <span class="tech-tag">Express</span>
            <span class="tech-tag">Material-UI</span>
          </div>
          <div class="project-stats">
            <div class="stat-item">
              <span class="stat-value">2 months</span>
              <span class="stat-label">Duration</span>
            </div>
            <div class="stat-item">
              <span class="stat-value">350+</span>
              <span class="stat-label">Code Commits</span>
            </div>
          </div>
          <div class="project-links">
            <a href="#" class="project-link">
              <i class="fas fa-external-link-alt"></i>
              View Live
            </a>
            <a href="#" class="project-link secondary">
              <i class="fab fa-github"></i>
              Source Code
            </a>
          </div>
        </div>
      </div>

      <!-- Project 3: Portfolio Website -->
      <div class="project-card" data-category="frontend web">
        <div class="project-image">
          <i class="fas fa-user-tie"></i>
          <div class="project-overlay">
            <a href="#" class="overlay-btn">
              <i class="fas fa-external-link-alt"></i>
              Live Demo
            </a>
            <a href="#" class="overlay-btn">
              <i class="fab fa-github"></i>
              Code
            </a>
          </div>
        </div>
        <div class="project-content">
          <div class="project-header">
            <div>
              <h3 class="project-title">Personal Portfolio Website</h3>
              <div class="project-status">Completed</div>
            </div>
          </div>
          <p class="project-description">
            A responsive and modern portfolio website showcasing my skills, projects, and professional experience. Features smooth animations, dark/light theme toggle, and contact integration.
          </p>
          <div class="project-tech">
            <span class="tech-tag">Laravel</span>
            <span class="tech-tag">HTML5</span>
            <span class="tech-tag">CSS3</span>
            <span class="tech-tag">JavaScript</span>
            <span class="tech-tag">PHP</span>
            <span class="tech-tag">Responsive</span>
          </div>
          <div class="project-stats">
            <div class="stat-item">
              <span class="stat-value">3 weeks</span>
              <span class="stat-label">Duration</span>
            </div>
            <div class="stat-item">
              <span class="stat-value">150+</span>
              <span class="stat-label">Code Commits</span>
            </div>
          </div>
          <div class="project-links">
            <a href="#" class="project-link">
              <i class="fas fa-external-link-alt"></i>
              View Live
            </a>
            <a href="#" class="project-link secondary">
              <i class="fab fa-github"></i>
              Source Code
            </a>
          </div>
        </div>
      </div>

      <!-- Project 4: Weather App -->
      <div class="project-card" data-category="frontend web">
        <div class="project-image">
          <i class="fas fa-cloud-sun"></i>
          <div class="project-overlay">
            <a href="#" class="overlay-btn">
              <i class="fas fa-external-link-alt"></i>
              Live Demo
            </a>
            <a href="#" class="overlay-btn">
              <i class="fab fa-github"></i>
              Code
            </a>
          </div>
        </div>
        <div class="project-content">
          <div class="project-header">
            <div>
              <h3 class="project-title">Weather Forecast App</h3>
              <div class="project-status">Completed</div>
            </div>
          </div>
          <p class="project-description">
            A beautiful weather application with current conditions, 7-day forecast, location search, and interactive weather maps. Features stunning UI with dynamic backgrounds based on weather conditions.
          </p>
          <div class="project-tech">
            <span class="tech-tag">Vue.js</span>
            <span class="tech-tag">OpenWeather API</span>
            <span class="tech-tag">Chart.js</span>
            <span class="tech-tag">CSS3</span>
            <span class="tech-tag">Geolocation</span>
          </div>
          <div class="project-stats">
            <div class="stat-item">
              <span class="stat-value">2 weeks</span>
              <span class="stat-label">Duration</span>
            </div>
            <div class="stat-item">
              <span class="stat-value">120+</span>
              <span class="stat-label">Code Commits</span>
            </div>
          </div>
          <div class="project-links">
            <a href="#" class="project-link">
              <i class="fas fa-external-link-alt"></i>
              View Live
            </a>
            <a href="#" class="project-link secondary">
              <i class="fab fa-github"></i>
              Source Code
            </a>
          </div>
        </div>
      </div>

      <!-- Project 5: API Development -->
      <div class="project-card" data-category="backend">
        <div class="project-image">
          <i class="fas fa-server"></i>
          <div class="project-overlay">
            <a href="#" class="overlay-btn">
              <i class="fas fa-book"></i>
              Documentation
            </a>
            <a href="#" class="overlay-btn">
              <i class="fab fa-github"></i>
              Code
            </a>
          </div>
        </div>
        <div class="project-content">
          <div class="project-header">
            <div>
              <h3 class="project-title">RESTful API Service</h3>
              <div class="project-status">Completed</div>
            </div>
          </div>
          <p class="project-description">
            A robust RESTful API with authentication, rate limiting, caching, and comprehensive documentation. Designed for scalability with proper error handling and security measures.
          </p>
          <div class="project-tech">
            <span class="tech-tag">Laravel</span>
            <span class="tech-tag">PHP</span>
            <span class="tech-tag">JWT</span>
            <span class="tech-tag">Redis</span>
            <span class="tech-tag">MySQL</span>
            <span class="tech-tag">Swagger</span>
          </div>
          <div class="project-stats">
            <div class="stat-item">
              <span class="stat-value">6 weeks</span>
              <span class="stat-label">Duration</span>
            </div>
            <div class="stat-item">
              <span class="stat-value">400+</span>
              <span class="stat-label">Code Commits</span>
            </div>
          </div>
          <div class="project-links">
            <a href="#" class="project-link">
              <i class="fas fa-book"></i>
              Documentation
            </a>
            <a href="#" class="project-link secondary">
              <i class="fab fa-github"></i>
              Source Code
            </a>
          </div>
        </div>
      </div>

      <!-- Project 6: Mobile App -->
      <div class="project-card" data-category="mobile">
        <div class="project-image">
          <i class="fas fa-mobile-alt"></i>
          <div class="project-overlay">
            <a href="#" class="overlay-btn">
              <i class="fab fa-google-play"></i>
              Play Store
            </a>
            <a href="#" class="overlay-btn">
              <i class="fab fa-github"></i>
              Code
            </a>
          </div>
        </div>
        <div class="project-content">
          <div class="project-header">
            <div>
              <h3 class="project-title">Expense Tracker Mobile App</h3>
              <div class="project-status in-progress">In Progress</div>
            </div>
          </div>
          <p class="project-description">
            A cross-platform mobile application for tracking personal expenses with categories, budgets, analytics, and cloud sync. Features beautiful charts and financial insights.
          </p>
          <div class="project-tech">
            <span class="tech-tag">React Native</span>
            <span class="tech-tag">Firebase</span>
            <span class="tech-tag">SQLite</span>
            <span class="tech-tag">Chart.js</span>
            <span class="tech-tag">AsyncStorage</span>
          </div>
          <div class="project-stats">
            <div class="stat-item">
              <span class="stat-value">4 weeks</span>
              <span class="stat-label">Duration</span>
            </div>
            <div class="stat-item">
              <span class="stat-value">250+</span>
              <span class="stat-label">Code Commits</span>
            </div>
          </div>
          <div class="project-links">
            <a href="#" class="project-link">
              <i class="fab fa-google-play"></i>
              Play Store
            </a>
            <a href="#" class="project-link secondary">
              <i class="fab fa-github"></i>
              Source Code
            </a>
          </div>
        </div>
      </div>
    </div>

    <!-- Stats Section -->
    <div class="stats-section">
      <h2>Project Statistics</h2>
      <p>A summary of my development journey and achievements</p>
      
      <div class="stats-grid">
        <div class="stats-item">
          <i class="fas fa-code"></i>
          <span class="stats-number">15+</span>
          <span class="stats-label">Projects Completed</span>
        </div>
        <div class="stats-item">
          <i class="fas fa-users"></i>
          <span class="stats-number">10+</span>
          <span class="stats-label">Happy Clients</span>
        </div>
        <div class="stats-item">
          <i class="fas fa-clock"></i>
          <span class="stats-number">2000+</span>
          <span class="stats-label">Hours Coded</span>
        </div>
        <div class="stats-item">
          <i class="fas fa-coffee"></i>
          <span class="stats-number">500+</span>
          <span class="stats-label">Cups of Coffee</span>
        </div>
      </div>
    </div>
  </div>

  <script>
    // Project filtering functionality
    const filterButtons = document.querySelectorAll('.filter-btn');
    const projectCards = document.querySelectorAll('.project-card');

    filterButtons.forEach(button => {
      button.addEventListener('click', () => {
        // Remove active class from all buttons
        filterButtons.forEach(btn => btn.classList.remove('active'));
        // Add active class to clicked button
        button.classList.add('active');

        const filterValue = button.getAttribute('data-filter');

        projectCards.forEach(card => {
          if (filterValue === 'all') {
            card.classList.remove('hidden');
          } else {
            const categories = card.getAttribute('data-category').split(' ');
            if (categories.includes(filterValue)) {
              card.classList.remove('hidden');
            } else {
              card.classList.add('hidden');
            }
          }
        });
      });
    });

    // Animate stats on scroll
    const observerOptions = {
      threshold: 0.5,
      rootMargin: '0px 0px -100px 0px'
    };

    const statsObserver = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          const statsNumbers = entry.target.querySelectorAll('.stats-number');
          statsNumbers.forEach(stat => {
            const target = parseInt(stat.textContent);
            let current = 0;
            const increment = target / 50;
            const timer = setInterval(() => {
              current += increment;
              stat.textContent = Math.floor(current) + (stat.textContent.includes('+') ? '+' : '');
              if (current >= target) {
                stat.textContent = target + (stat.textContent.includes('+') ? '+' : '');
                clearInterval(timer);
              }
            }, 30);
          });
          statsObserver.unobserve(entry.target);
        }
      });
    }, observerOptions);

    const statsSection = document.querySelector('.stats-section');
    if (statsSection) {
      statsObserver.observe(statsSection);
    }

    // Project card hover effects
    projectCards.forEach(card => {
      card.addEventListener('mouseenter', () => {
        card.style.transform = 'translateY(-10px) scale(1.02)';
      });

      card.addEventListener('mouseleave', () => {
        card.style.transform = 'translateY(0) scale(1)';
      });
    });

    // Smooth scroll for navigation
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
      anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
          target.scrollIntoView({
            behavior: 'smooth',
            block: 'start'
          });
        }
      });
    });
  </script>

</body>
</html>