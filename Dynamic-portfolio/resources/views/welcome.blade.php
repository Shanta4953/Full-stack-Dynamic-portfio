<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Sohana Sultana Shanta - Full Stack Developer</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
  <style>
    :root {
      --primary-color: #2563eb;
      --secondary-color: #1e40af;
      --accent-color: #3b82f6;
      --text-primary: #1f2937;
      --bg-primary: #ffffff;
      --bg-secondary: #f8fafc;
      --border-color: #e5e7eb;
      --gradient: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
      --shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
    }

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
      background: var(--bg-secondary);
      color: var(--text-primary);
      line-height: 1.6;
    }

    /* Header & Navigation */
    .navbar {
      background: rgba(255, 255, 255, 0.95);
      backdrop-filter: blur(10px);
      border-bottom: 1px solid var(--border-color);
      padding: 1rem 0;
      position: fixed;
      top: 0;
      left: 0;
      right: 0;
      z-index: 1000;
      box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
    }

    .nav-container {
      max-width: 1200px;
      margin: 0 auto;
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 0 2rem;
    }

    .logo {
      font-size: 1.5rem;
      font-weight: 700;
      color: var(--primary-color);
      text-decoration: none;
    }

    .nav-links {
      list-style: none;
      display: flex;
      gap: 2rem;
      align-items: center;
    }

    .nav-links li a {
      text-decoration: none;
      color: var(--text-primary);
      font-weight: 500;
      transition: all 0.3s ease;
      position: relative;
      padding: 0.5rem 0;
    }

    .nav-links li a:hover {
      color: var(--primary-color);
    }

    .nav-links li a::after {
      content: '';
      position: absolute;
      width: 0;
      height: 2px;
      bottom: 0;
      left: 50%;
      background: var(--primary-color);
      transition: all 0.3s ease;
      transform: translateX(-50%);
    }

    .nav-links li a:hover::after {
      width: 100%;
    }

    /* Hero Section */
    .hero {
      max-width: 1200px;
      margin: 0 auto;
      padding: 8rem 2rem 4rem;
      display: grid;
      grid-template-columns: 1fr 300px;
      gap: 4rem;
      align-items: center;
      min-height: 100vh;
    }

    .hero-content {
      padding-right: 2rem;
    }

    .hero-badge {
      display: inline-flex;
      align-items: center;
      gap: 0.5rem;
      background: var(--accent-color);
      color: white;
      padding: 0.5rem 1rem;
      border-radius: 50px;
      font-size: 0.875rem;
      font-weight: 500;
      margin-bottom: 1.5rem;
      box-shadow: 0 4px 6px rgba(59, 130, 246, 0.3);
    }

    .hero h1 {
      font-size: 3.5rem;
      font-weight: 700;
      margin-bottom: 1rem;
      background: var(--gradient);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
      line-height: 1.2;
    }

    .hero-subtitle {
      font-size: 1.25rem;
      color: var(--text-secondary);
      margin-bottom: 1.5rem;
      font-weight: 400;
    }

    .hero-description {
      font-size: 1.1rem;
      color: var(--text-secondary);
      margin-bottom: 2rem;
      line-height: 1.7;
    }

    .hero-buttons {
      display: flex;
      gap: 1rem;
      margin-bottom: 2rem;
    }

    .btn {
      padding: 0.875rem 2rem;
      font-size: 1rem;
      font-weight: 600;
      border: none;
      border-radius: 8px;
      cursor: pointer;
      transition: all 0.3s ease;
      text-decoration: none;
      display: inline-flex;
      align-items: center;
      gap: 0.5rem;
      font-family: inherit;
    }

    .btn-primary {
      background: var(--primary-color);
      color: white;
      box-shadow: 0 4px 6px rgba(37, 99, 235, 0.3);
    }

    .btn-primary:hover {
      background: var(--secondary-color);
      transform: translateY(-2px);
      box-shadow: 0 8px 15px rgba(37, 99, 235, 0.4);
    }

    .btn-secondary {
      background: transparent;
      color: var(--text-primary);
      border: 2px solid var(--border-color);
    }

    .btn-secondary:hover {
      border-color: var(--primary-color);
      color: var(--primary-color);
      transform: translateY(-2px);
    }

    .social-links {
      display: flex;
      gap: 1rem;
    }

    .social-link {
      display: flex;
      align-items: center;
      justify-content: center;
      width: 45px;
      height: 45px;
      background: var(--bg-primary);
      border: 2px solid var(--border-color);
      border-radius: 8px;
      color: var(--text-secondary);
      text-decoration: none;
      transition: all 0.3s ease;
    }

    .social-link:hover {
      border-color: var(--primary-color);
      color: var(--primary-color);
      transform: translateY(-2px);
    }

    /* Profile Section */
    .profile-section {
      display: flex;
      flex-direction: column;
      align-items: center;
      text-align: center;
    }

    .profile-pic {
      position: relative;
      margin-bottom: 1.5rem;
    }

    .profile-pic img {
      width: 280px;
      height: 280px;
      border-radius: 20px;
      object-fit: cover;
      box-shadow: var(--shadow);
      border: 4px solid white;
    }

    /* Fallback for missing profile image */
    .profile-pic .image-placeholder {
      width: 280px;
      height: 280px;
      border-radius: 20px;
      background: var(--gradient);
      display: flex;
      align-items: center;
      justify-content: center;
      color: white;
      font-size: 4rem;
      box-shadow: var(--shadow);
      border: 4px solid white;
    }

    .profile-pic::before {
      content: '';
      position: absolute;
      top: -10px;
      left: -10px;
      right: -10px;
      bottom: -10px;
      background: var(--gradient);
      border-radius: 25px;
      z-index: -1;
    }

    .status-indicator {
      position: absolute;
      top: 20px;
      right: 20px;
      background: #10b981;
      color: white;
      padding: 0.5rem 1rem;
      border-radius: 20px;
      font-size: 0.875rem;
      font-weight: 500;
      display: flex;
      align-items: center;
      gap: 0.5rem;
      box-shadow: 0 4px 6px rgba(16, 185, 129, 0.3);
    }

    .status-dot {
      width: 8px;
      height: 8px;
      background: white;
      border-radius: 50%;
      animation: pulse 2s infinite;
    }

    @keyframes pulse {
      0%, 100% { opacity: 1; }
      50% { opacity: 0.5; }
    }

    .profile-stats {
      display: flex;
      gap: 2rem;
      margin-top: 1rem;
    }

    .stat {
      text-align: center;
    }

    .stat-number {
      font-size: 1.5rem;
      font-weight: 700;
      color: var(--primary-color);
    }

    .stat-label {
      font-size: 0.875rem;
      color: var(--text-secondary);
      font-weight: 500;
    }

    /* Skills Preview */
    .skills-preview {
      margin-top: 2rem;
      padding: 1.5rem;
      background: var(--bg-primary);
      border-radius: 12px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
    }

    .skills-title {
      font-size: 1rem;
      font-weight: 600;
      margin-bottom: 1rem;
      color: var(--text-primary);
    }

    .skills-tags {
      display: flex;
      flex-wrap: wrap;
      gap: 0.5rem;
    }

    .skill-tag {
      background: rgba(59, 130, 246, 0.1);
      color: var(--primary-color);
      padding: 0.25rem 0.75rem;
      border-radius: 20px;
      font-size: 0.875rem;
      font-weight: 500;
    }

    /* Professional Highlights */
    .highlights {
      background: var(--bg-primary);
      margin: 4rem auto;
      max-width: 1200px;
      padding: 4rem 2rem;
      border-radius: 20px;
      box-shadow: var(--shadow);
    }

    .highlights-title {
      text-align: center;
      font-size: 2.5rem;
      font-weight: 700;
      margin-bottom: 3rem;
      background: var(--gradient);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
    }

    .highlights-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
      gap: 2rem;
    }

    .highlight-card {
      background: var(--bg-secondary);
      padding: 2rem;
      border-radius: 12px;
      border: 1px solid var(--border-color);
      text-align: center;
      transition: all 0.3s ease;
    }

    .highlight-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
    }

    .highlight-icon {
      width: 60px;
      height: 60px;
      background: var(--gradient);
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      margin: 0 auto 1rem;
      color: white;
      font-size: 1.5rem;
    }

    .highlight-title {
      font-size: 1.25rem;
      font-weight: 600;
      margin-bottom: 0.5rem;
      color: var(--text-primary);
    }

    .highlight-description {
      color: var(--text-secondary);
      line-height: 1.6;
    }

    /* Call to Action */
    .cta-section {
      background: var(--gradient);
      color: white;
      text-align: center;
      padding: 4rem 2rem;
      margin: 4rem 0 0;
    }

    .cta-title {
      font-size: 2.5rem;
      font-weight: 700;
      margin-bottom: 1rem;
    }

    .cta-description {
      font-size: 1.1rem;
      margin-bottom: 2rem;
      opacity: 0.9;
    }

    .cta-buttons {
      display: flex;
      gap: 1rem;
      justify-content: center;
      flex-wrap: wrap;
    }

    .btn-white {
      background: white;
      color: var(--primary-color);
      padding: 0.875rem 2rem;
      font-size: 1rem;
      font-weight: 600;
      border: none;
      border-radius: 8px;
      cursor: pointer;
      transition: all 0.3s ease;
      text-decoration: none;
      display: inline-flex;
      align-items: center;
      gap: 0.5rem;
      font-family: inherit;
    }

    .btn-white:hover {
      transform: translateY(-2px);
      box-shadow: 0 8px 15px rgba(255, 255, 255, 0.3);
    }

    /* Responsive Design */
    @media (max-width: 768px) {
      .nav-container {
        padding: 0 1rem;
      }
      
      .nav-links {
        gap: 1rem;
      }
      
      .hero {
        grid-template-columns: 1fr;
        gap: 2rem;
        padding: 6rem 1rem 2rem;
        text-align: center;
      }
      
      .hero-content {
        padding-right: 0;
      }
      
      .hero h1 {
        font-size: 2.5rem;
      }
      
      .hero-buttons {
        flex-direction: column;
        align-items: center;
      }
      
      .profile-pic img {
        width: 220px;
        height: 220px;
      }
      
      .profile-stats {
        gap: 1rem;
      }
    }
  </style>
</head>
<body>
  <header>
    <nav class="navbar">
      <div class="nav-container">
        <div class="logo">Sohana Sultana Shanta</div>
        <ul class="nav-links">
          <li><a href="{{ url('/') }}">Welcome</a></li>
          <li><a href="{{ url('/Services') }}">Services</a></li>
          <li><a href="{{ url('/Experience') }}">Experience</a></li>
          <li><a href="{{ url('/Projects') }}">Projects</a></li>
          <li><a href="{{ url('/Education') }}">Education</a></li>
          <li><a href="{{ url('/Contact') }}">Contact</a></li>
        </ul>
      </div>
    </nav>
  </header>

  <section class="hero">
    <div class="hero-content">
      <div class="hero-badge">
        <i class="fas fa-rocket"></i>
        Available for new opportunities
      </div>
      
      <h1>Full Stack Developer</h1>
      
      <p class="hero-subtitle">Transforming Ideas into Digital Excellence</p>
      
      <p class="hero-description">
        Passionate full-stack developer with 3+ years of experience creating robust web applications. 
        Specialized in Laravel, PHP, JavaScript, and modern frontend frameworks. I deliver scalable, 
        high-performance solutions that drive business growth and exceptional user experiences.
      </p>
      
      <div class="hero-buttons">
        <a href="{{ url('/Contact') }}" class="btn btn-primary">
          <i class="fas fa-envelope"></i>
          Hire Me
        </a>
        <a href="{{ url('/Projects') }}" class="btn btn-secondary">
          <i class="fas fa-folder"></i>
          View Projects
        </a>
      </div>
      
      <div class="social-links">
        <a href="https://www.linkedin.com/in/sohana-sultana-shanta" class="social-link" title="LinkedIn">
          <i class="fab fa-linkedin-in"></i>
        </a>
        <a href="https://github.com/Shanta4953" class="social-link" title="GitHub">
          <i class="fab fa-github"></i>
        </a>
        <a href="mailto:sohana.sultana.shanta@gmail.com" class="social-link" title="Email">
          <i class="fas fa-envelope"></i>
        </a>
        <a href="https://wa.me/1234567890" class="social-link" title="WhatsApp">
          <i class="fab fa-whatsapp"></i>
        </a>
      </div>
    </div>
    
    <div class="profile-section">
      <div class="profile-pic">
        <!-- Profile Picture with Professional Placeholder -->
        <img src="data:image/jpeg;base64,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" 
             alt="Sohana Sultana Shanta - Full Stack Developer" 
             onerror="this.src='https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=400&h=400&fit=crop&crop=face&auto=format&q=80'; this.onerror=function(){this.src='https://via.placeholder.com/400x400/667eea/ffffff?text=SS';};" />
        
        <div class="status-indicator">
          <div class="status-dot"></div>
          Available for hire
        </div>
      </div>
      
      <div class="profile-stats">
        <div class="stat">
          <div class="stat-number">50+</div>
          <div class="stat-label">Projects</div>
        </div>
        <div class="stat">
          <div class="stat-number">3+</div>
          <div class="stat-label">Years Exp.</div>
        </div>
        <div class="stat">
          <div class="stat-number">25+</div>
          <div class="stat-label">Happy Clients</div>
        </div>
      </div>
      
      <div class="skills-preview">
        <div class="skills-title">Core Technologies</div>
        <div class="skills-tags">
          <span class="skill-tag">Laravel</span>
          <span class="skill-tag">PHP 8+</span>
          <span class="skill-tag">JavaScript ES6+</span>
          <span class="skill-tag">Vue.js</span>
          <span class="skill-tag">React</span>
          <span class="skill-tag">MySQL</span>
          <span class="skill-tag">REST APIs</span>
          <span class="skill-tag">Git</span>
          <span class="skill-tag">Docker</span>
        </div>
      </div>
    </div>
  </section>

  <!-- Professional Highlights Section -->
  <section class="highlights">
    <h2 class="highlights-title">Why Choose Me?</h2>
    <div class="highlights-grid">
      <div class="highlight-card">
        <div class="highlight-icon">
          <i class="fas fa-code"></i>
        </div>
        <h3 class="highlight-title">Clean Code</h3>
        <p class="highlight-description">
          I write maintainable, scalable code following industry best practices and modern development standards.
        </p>
      </div>
      
      <div class="highlight-card">
        <div class="highlight-icon">
          <i class="fas fa-rocket"></i>
        </div>
        <h3 class="highlight-title">Fast Delivery</h3>
        <p class="highlight-description">
          Quick turnaround times without compromising on quality. I understand the importance of meeting deadlines.
        </p>
      </div>
      
      <div class="highlight-card">
        <div class="highlight-icon">
          <i class="fas fa-users"></i>
        </div>
        <h3 class="highlight-title">Client-Focused</h3>
        <p class="highlight-description">
          Regular communication and updates throughout the project lifecycle. Your satisfaction is my priority.
        </p>
      </div>
      
      <div class="highlight-card">
        <div class="highlight-icon">
          <i class="fas fa-mobile-alt"></i>
        </div>
        <h3 class="highlight-title">Responsive Design</h3>
        <p class="highlight-description">
          Mobile-first approach ensuring your application works perfectly across all devices and screen sizes.
        </p>
      </div>
      
      <div class="highlight-card">
        <div class="highlight-icon">
          <i class="fas fa-shield-alt"></i>
        </div>
        <h3 class="highlight-title">Secure Solutions</h3>
        <p class="highlight-description">
          Implementation of security best practices to protect your application and user data from threats.
        </p>
      </div>
      
      <div class="highlight-card">
        <div class="highlight-icon">
          <i class="fas fa-chart-line"></i>
        </div>
        <h3 class="highlight-title">Performance Optimized</h3>
        <p class="highlight-description">
          Optimized applications for speed and performance, ensuring excellent user experience and SEO rankings.
        </p>
      </div>
    </div>
  </section>

  <!-- Call to Action Section -->
  <section class="cta-section">
    <h2 class="cta-title">Ready to Start Your Project?</h2>
    <p class="cta-description">
      Let's discuss how I can help bring your ideas to life with cutting-edge web technologies
    </p>
    <div class="cta-buttons">
      <a href="{{ url('/Contact') }}" class="btn-white">
        <i class="fas fa-comment"></i>
        Let's Talk
      </a>
      <a href="{{ url('/Projects') }}" class="btn-white">
        <i class="fas fa-eye"></i>
        View My Work
      </a>
    </div>
  </section>
  
</body>
</html>

