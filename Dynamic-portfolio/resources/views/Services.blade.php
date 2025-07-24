<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Sohana Sultana Shanta - Services</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
  <style>
    :root {
      --primary-color: #2563eb;
      --secondary-color: #1e40af;
      --accent-color: #3b82f6;
      --text-primary: #1f2937;
      --text-secondary: #6b7280;
      --bg-primary: #ffffff;
      --bg-secondary: #f8fafc;
      --border-color: #e5e7eb;
      --gradient: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
      --shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
      --success-color: #10b981;
      --warning-color: #f59e0b;
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

    .nav-links li a.active {
      color: var(--primary-color);
    }

    .nav-links li a.active::after {
      width: 100%;
    }

    /* Main Content */
    .main-content {
      max-width: 1200px;
      margin: 0 auto;
      padding: 8rem 2rem 4rem;
      min-height: 100vh;
    }

    /* Header Section */
    .page-header {
      text-align: center;
      margin-bottom: 4rem;
    }

    .page-title {
      font-size: 3rem;
      font-weight: 700;
      margin-bottom: 1rem;
      background: var(--gradient);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
    }

    .page-subtitle {
      font-size: 1.25rem;
      color: var(--text-secondary);
      max-width: 600px;
      margin: 0 auto;
    }

    /* Services Grid */
    .services-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
      gap: 2rem;
      margin-bottom: 4rem;
    }

    .service-card {
      background: var(--bg-primary);
      border-radius: 16px;
      padding: 2.5rem;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
      border: 1px solid var(--border-color);
      transition: all 0.3s ease;
      position: relative;
      overflow: hidden;
    }

    .service-card::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      height: 4px;
      background: var(--gradient);
    }

    .service-card:hover {
      transform: translateY(-10px);
      box-shadow: var(--shadow);
    }

    .service-icon {
      width: 80px;
      height: 80px;
      background: var(--gradient);
      border-radius: 20px;
      display: flex;
      align-items: center;
      justify-content: center;
      margin-bottom: 1.5rem;
      color: white;
      font-size: 2rem;
    }

    .service-title {
      font-size: 1.5rem;
      font-weight: 700;
      color: var(--text-primary);
      margin-bottom: 1rem;
    }

    .service-description {
      color: var(--text-secondary);
      line-height: 1.7;
      margin-bottom: 1.5rem;
    }

    .service-features {
      list-style: none;
      margin-bottom: 2rem;
    }

    .service-features li {
      display: flex;
      align-items: center;
      margin-bottom: 0.75rem;
      color: var(--text-secondary);
    }

    .service-features li i {
      color: var(--success-color);
      margin-right: 0.75rem;
      width: 16px;
    }

    .service-price {
      display: flex;
      align-items: center;
      gap: 0.5rem;
      margin-bottom: 1.5rem;
    }

    .price-label {
      color: var(--text-secondary);
      font-size: 0.875rem;
    }

    .price-value {
      font-size: 1.25rem;
      font-weight: 700;
      color: var(--primary-color);
    }

    .service-btn {
      width: 100%;
      padding: 0.875rem;
      background: var(--primary-color);
      color: white;
      border: none;
      border-radius: 8px;
      font-size: 1rem;
      font-weight: 600;
      cursor: pointer;
      transition: all 0.3s ease;
      text-decoration: none;
      display: inline-block;
      text-align: center;
    }

    .service-btn:hover {
      background: var(--secondary-color);
      transform: translateY(-2px);
    }

    /* Process Section */
    .process-section {
      background: var(--bg-primary);
      border-radius: 20px;
      padding: 4rem;
      margin-top: 4rem;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
    }

    .process-title {
      text-align: center;
      font-size: 2.5rem;
      font-weight: 700;
      margin-bottom: 3rem;
      color: var(--text-primary);
    }

    .process-steps {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 2rem;
    }

    .process-step {
      text-align: center;
      position: relative;
    }

    .step-number {
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
      font-weight: 700;
    }

    .step-title {
      font-size: 1.25rem;
      font-weight: 600;
      margin-bottom: 0.5rem;
      color: var(--text-primary);
    }

    .step-description {
      color: var(--text-secondary);
      line-height: 1.6;
    }

    /* CTA Section */
    .cta-section {
      background: var(--gradient);
      color: white;
      text-align: center;
      padding: 4rem 2rem;
      margin-top: 4rem;
      border-radius: 20px;
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
      
      .main-content {
        padding: 6rem 1rem 2rem;
      }
      
      .page-title {
        font-size: 2.5rem;
      }
      
      .services-grid {
        grid-template-columns: 1fr;
      }
      
      .process-section {
        padding: 2rem;
      }
      
      .process-steps {
        grid-template-columns: 1fr;
      }
      
      .cta-buttons {
        flex-direction: column;
        align-items: center;
      }
    }
  </style>
</head>
<body>
  <header>
    <nav class="navbar">
      <div class="nav-container">
        <a href="{{ url('/') }}" class="logo">Sohana Sultana Shanta</a>
        <ul class="nav-links">
          <li><a href="{{ url('/') }}">Welcome</a></li>
          <li><a href="{{ url('/Services') }}" class="active">Services</a></li>
          <li><a href="{{ url('/Experience') }}">Experience</a></li>
          <li><a href="{{ url('/Projects') }}">Projects</a></li>
          <li><a href="{{ url('/Education') }}">Education</a></li>
          <li><a href="{{ url('/Contact') }}">Contact</a></li>
        </ul>
      </div>
    </nav>
  </header>
  
  <main class="main-content">
    <div class="page-header">
      <h1 class="page-title">Professional Services</h1>
      <p class="page-subtitle">
        Comprehensive web development solutions tailored to bring your digital vision to life with cutting-edge technologies and industry best practices.
      </p>
    </div>

    <div class="services-grid">
      <div class="service-card">
        <div class="service-icon">
          <i class="fas fa-paint-brush"></i>
        </div>
        <h3 class="service-title">Web Design & UI/UX</h3>
        <p class="service-description">
          Create stunning, user-friendly interfaces with modern design principles. From wireframes to final designs, I craft experiences that engage and convert.
        </p>
        <ul class="service-features">
          <li><i class="fas fa-check"></i>Responsive Design</li>
          <li><i class="fas fa-check"></i>User Experience Design</li>
          <li><i class="fas fa-check"></i>Figma & Adobe XD</li>
          <li><i class="fas fa-check"></i>Wireframing & Prototyping</li>
          <li><i class="fas fa-check"></i>Mobile-First Approach</li>
        </ul>
        <div class="service-price">
          <span class="price-label">Starting from</span>
          <span class="price-value">$299</span>
        </div>
        <a href="{{ url('/Contact') }}" class="service-btn">Get Quote</a>
      </div>

      <div class="service-card">
        <div class="service-icon">
          <i class="fas fa-code"></i>
        </div>
        <h3 class="service-title">Frontend Development</h3>
        <p class="service-description">
          Build dynamic, interactive websites using modern JavaScript frameworks and libraries. Clean code, optimized performance, and seamless user interactions.
        </p>
        <ul class="service-features">
          <li><i class="fas fa-check"></i>React & Vue.js Development</li>
          <li><i class="fas fa-check"></i>JavaScript ES6+</li>
          <li><i class="fas fa-check"></i>HTML5 & CSS3</li>
          <li><i class="fas fa-check"></i>Animation & Interactions</li>
          <li><i class="fas fa-check"></i>Performance Optimization</li>
        </ul>
        <div class="service-price">
          <span class="price-label">Starting from</span>
          <span class="price-value">$499</span>
        </div>
        <a href="{{ url('/Contact') }}" class="service-btn">Get Quote</a>
      </div>

      <div class="service-card">
        <div class="service-icon">
          <i class="fas fa-server"></i>
        </div>
        <h3 class="service-title">Backend Development</h3>
        <p class="service-description">
          Robust server-side solutions with secure APIs, database design, and scalable architecture. Laravel and PHP expertise for enterprise-grade applications.
        </p>
        <ul class="service-features">
          <li><i class="fas fa-check"></i>Laravel Framework</li>
          <li><i class="fas fa-check"></i>PHP 8+ Development</li>
          <li><i class="fas fa-check"></i>REST API Development</li>
          <li><i class="fas fa-check"></i>MySQL Database Design</li>
          <li><i class="fas fa-check"></i>Authentication & Security</li>
        </ul>
        <div class="service-price">
          <span class="price-label">Starting from</span>
          <span class="price-value">$699</span>
        </div>
        <a href="{{ url('/Contact') }}" class="service-btn">Get Quote</a>
      </div>

      <div class="service-card">
        <div class="service-icon">
          <i class="fas fa-globe"></i>
        </div>
        <h3 class="service-title">Full-Stack Solutions</h3>
        <p class="service-description">
          Complete web applications from concept to deployment. End-to-end development with modern tech stack and best practices for scalable solutions.
        </p>
        <ul class="service-features">
          <li><i class="fas fa-check"></i>Complete Web Applications</li>
          <li><i class="fas fa-check"></i>E-commerce Development</li>
          <li><i class="fas fa-check"></i>CMS Development</li>
          <li><i class="fas fa-check"></i>Third-party Integrations</li>
          <li><i class="fas fa-check"></i>Deployment & Hosting</li>
        </ul>
        <div class="service-price">
          <span class="price-label">Starting from</span>
          <span class="price-value">$1299</span>
        </div>
        <a href="{{ url('/Contact') }}" class="service-btn">Get Quote</a>
      </div>

      <div class="service-card">
        <div class="service-icon">
          <i class="fas fa-mobile-alt"></i>
        </div>
        <h3 class="service-title">Website Optimization</h3>
        <p class="service-description">
          Enhance your existing website's performance, SEO, and user experience. Speed optimization, mobile responsiveness, and search engine visibility.
        </p>
        <ul class="service-features">
          <li><i class="fas fa-check"></i>Performance Optimization</li>
          <li><i class="fas fa-check"></i>SEO Implementation</li>
          <li><i class="fas fa-check"></i>Mobile Responsiveness</li>
          <li><i class="fas fa-check"></i>Security Audits</li>
          <li><i class="fas fa-check"></i>Analytics Setup</li>
        </ul>
        <div class="service-price">
          <span class="price-label">Starting from</span>
          <span class="price-value">$399</span>
        </div>
        <a href="{{ url('/Contact') }}" class="service-btn">Get Quote</a>
      </div>

      <div class="service-card">
        <div class="service-icon">
          <i class="fas fa-tools"></i>
        </div>
        <h3 class="service-title">Maintenance & Support</h3>
        <p class="service-description">
          Ongoing website maintenance, updates, and technical support. Keep your website secure, updated, and running smoothly with regular monitoring.
        </p>
        <ul class="service-features">
          <li><i class="fas fa-check"></i>Regular Updates</li>
          <li><i class="fas fa-check"></i>Security Monitoring</li>
          <li><i class="fas fa-check"></i>Backup Management</li>
          <li><i class="fas fa-check"></i>Bug Fixes</li>
          <li><i class="fas fa-check"></i>24/7 Support</li>
        </ul>
        <div class="service-price">
          <span class="price-label">Starting from</span>
          <span class="price-value">$99/month</span>
        </div>
        <a href="{{ url('/Contact') }}" class="service-btn">Get Quote</a>
      </div>
    </div>

    <div class="process-section">
      <h2 class="process-title">My Development Process</h2>
      <div class="process-steps">
        <div class="process-step">
          <div class="step-number">1</div>
          <h3 class="step-title">Discovery & Planning</h3>
          <p class="step-description">
            Understanding your requirements, goals, and target audience to create a comprehensive project plan.
          </p>
        </div>
        <div class="process-step">
          <div class="step-number">2</div>
          <h3 class="step-title">Design & Prototyping</h3>
          <p class="step-description">
            Creating wireframes, mockups, and interactive prototypes to visualize the final product.
          </p>
        </div>
        <div class="process-step">
          <div class="step-number">3</div>
          <h3 class="step-title">Development & Testing</h3>
          <p class="step-description">
            Building the application with clean code, rigorous testing, and quality assurance processes.
          </p>
        </div>
        <div class="process-step">
          <div class="step-number">4</div>
          <h3 class="step-title">Launch & Support</h3>
          <p class="step-description">
            Deploying your project and providing ongoing support to ensure optimal performance.
          </p>
        </div>
      </div>
    </div>

    <div class="cta-section">
      <h2 class="cta-title">Ready to Start Your Project?</h2>
      <p class="cta-description">
        Let's discuss your ideas and create something amazing together. Get a free consultation and project quote.
      </p>
      <div class="cta-buttons">
        <a href="{{ url('/Contact') }}" class="btn-white">
          <i class="fas fa-comment"></i>
          Start a Project
        </a>
        <a href="{{ url('/Projects') }}" class="btn-white">
          <i class="fas fa-eye"></i>
          View Portfolio
        </a>
      </div>
    </div>
  </main>
</body>
</html>