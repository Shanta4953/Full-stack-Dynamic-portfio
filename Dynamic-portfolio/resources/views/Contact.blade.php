<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Contact - Sohana Sultana Shanta | Full-Stack Developer</title>
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
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 3rem;
      align-items: start;
    }

    /* Contact Form */
    .contact-form {
      background: var(--white);
      padding: 3rem;
      border-radius: 20px;
      box-shadow: var(--shadow);
      transition: all 0.3s ease;
    }

    .contact-form:hover {
      box-shadow: var(--shadow-hover);
      transform: translateY(-5px);
    }

    .form-header {
      text-align: center;
      margin-bottom: 2rem;
    }

    .form-header h2 {
      font-size: 2rem;
      font-weight: 600;
      color: var(--text-color);
      margin-bottom: 0.5rem;
    }

    .form-header p {
      color: var(--dark-gray);
      font-size: 1.1rem;
    }

    .form-group {
      margin-bottom: 1.5rem;
    }

    .form-row {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 1rem;
    }

    label {
      display: block;
      font-weight: 500;
      color: var(--text-color);
      margin-bottom: 0.5rem;
      font-size: 0.95rem;
    }

    input, textarea, select {
      width: 100%;
      padding: 1rem;
      border: 2px solid var(--medium-gray);
      border-radius: 10px;
      font-family: inherit;
      font-size: 1rem;
      transition: all 0.3s ease;
      background: var(--light-gray);
    }

    input:focus, textarea:focus, select:focus {
      outline: none;
      border-color: var(--primary-color);
      background: var(--white);
      box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.1);
    }

    textarea {
      resize: vertical;
      min-height: 120px;
    }

    .submit-btn {
      background: var(--gradient);
      color: white;
      border: none;
      padding: 1rem 2rem;
      font-size: 1.1rem;
      font-weight: 600;
      border-radius: 10px;
      cursor: pointer;
      transition: all 0.3s ease;
      width: 100%;
      box-shadow: 0 4px 15px rgba(37, 99, 235, 0.3);
    }

    .submit-btn:hover {
      transform: translateY(-2px);
      box-shadow: 0 8px 25px rgba(37, 99, 235, 0.4);
    }

    /* Contact Info */
    .contact-info {
      display: flex;
      flex-direction: column;
      gap: 2rem;
    }

    .info-card {
      background: var(--white);
      padding: 2rem;
      border-radius: 20px;
      box-shadow: var(--shadow);
      transition: all 0.3s ease;
    }

    .info-card:hover {
      box-shadow: var(--shadow-hover);
      transform: translateY(-5px);
    }

    .info-card h3 {
      font-size: 1.5rem;
      font-weight: 600;
      color: var(--text-color);
      margin-bottom: 1rem;
    }

    .contact-item {
      display: flex;
      align-items: center;
      gap: 1rem;
      margin-bottom: 1.5rem;
      padding: 1rem;
      background: var(--light-gray);
      border-radius: 10px;
      transition: all 0.3s ease;
    }

    .contact-item:hover {
      background: var(--primary-color);
      color: white;
      transform: translateX(5px);
    }

    .contact-item i {
      font-size: 1.5rem;
      color: var(--primary-color);
      width: 30px;
      text-align: center;
    }

    .contact-item:hover i {
      color: white;
    }

    .contact-item div h4 {
      font-weight: 600;
      margin-bottom: 0.25rem;
    }

    .contact-item div p {
      color: var(--dark-gray);
      font-size: 0.95rem;
    }

    .contact-item:hover div p {
      color: rgba(255, 255, 255, 0.9);
    }

    /* Social Links */
    .social-links {
      display: flex;
      gap: 1rem;
      justify-content: center;
      margin-top: 1.5rem;
    }

    .social-link {
      display: flex;
      align-items: center;
      justify-content: center;
      width: 50px;
      height: 50px;
      background: var(--light-gray);
      border-radius: 50%;
      color: var(--primary-color);
      text-decoration: none;
      transition: all 0.3s ease;
      font-size: 1.2rem;
    }

    .social-link:hover {
      background: var(--primary-color);
      color: white;
      transform: translateY(-3px);
      box-shadow: 0 8px 20px rgba(37, 99, 235, 0.3);
    }

    /* Availability Status */
    .availability {
      background: linear-gradient(135deg, #10b981, #059669);
      color: white;
      padding: 1.5rem;
      border-radius: 15px;
      text-align: center;
      margin-bottom: 2rem;
    }

    .availability h4 {
      font-size: 1.2rem;
      margin-bottom: 0.5rem;
    }

    .availability p {
      opacity: 0.9;
    }

    .status-dot {
      display: inline-block;
      width: 10px;
      height: 10px;
      background: #22c55e;
      border-radius: 50%;
      margin-right: 0.5rem;
      animation: pulse 2s infinite;
    }

    @keyframes pulse {
      0% { box-shadow: 0 0 0 0 rgba(34, 197, 94, 0.7); }
      70% { box-shadow: 0 0 0 10px rgba(34, 197, 94, 0); }
      100% { box-shadow: 0 0 0 0 rgba(34, 197, 94, 0); }
    }

    /* Mobile Responsiveness */
    @media (max-width: 768px) {
      .nav-links {
        display: none;
      }

      .hero h1 {
        font-size: 2rem;
      }

      .main-container {
        grid-template-columns: 1fr;
        gap: 2rem;
        padding: 1rem;
      }

      .contact-form {
        padding: 2rem;
      }

      .form-row {
        grid-template-columns: 1fr;
      }

      .nav-container {
        padding: 0;
      }
    }

    /* Success Message */
    .success-message {
      background: linear-gradient(135deg, #10b981, #059669);
      color: white;
      padding: 1rem;
      border-radius: 10px;
      margin-bottom: 1rem;
      text-align: center;
      display: none;
    }

    .success-message.show {
      display: block;
      animation: slideIn 0.5s ease;
    }

    @keyframes slideIn {
      from {
        opacity: 0;
        transform: translateY(-20px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }
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
          <li><a href="{{ url('/Projects') }}">Projects</a></li>
          <li><a href="{{ url('/Education') }}">Education</a></li>
          <li><a href="{{ url('/Contact') }}" class="active">Contact</a></li>
        </ul>
      </div>
    </nav>
  </header>

  <section class="hero">
    <h1>Let's Work Together</h1>
    <p>Ready to bring your vision to life? Get in touch and let's discuss your next project.</p>
  </section>

  <div class="main-container">
    <div class="contact-form">
      <div class="form-header">
        <h2>Send Me a Message</h2>
        <p>Fill out the form below and I'll get back to you within 24 hours</p>
      </div>

      <div class="success-message" id="successMessage">
        <i class="fas fa-check-circle"></i>
        Thank you! Your message has been sent successfully. I'll get back to you soon!
      </div>

      <form id="contactForm">
        <div class="form-row">
          <div class="form-group">
            <label for="firstName">First Name *</label>
            <input type="text" id="firstName" name="firstName" placeholder="John" required>
          </div>
          <div class="form-group">
            <label for="lastName">Last Name *</label>
            <input type="text" id="lastName" name="lastName" placeholder="Doe" required>
          </div>
        </div>

        <div class="form-group">
          <label for="email">Email Address *</label>
          <input type="email" id="email" name="email" placeholder="john@example.com" required>
        </div>

        <div class="form-row">
          <div class="form-group">
            <label for="phone">Phone Number</label>
            <input type="tel" id="phone" name="phone" placeholder="+1 (555) 123-4567">
          </div>
          <div class="form-group">
            <label for="company">Company</label>
            <input type="text" id="company" name="company" placeholder="Your Company">
          </div>
        </div>

        <div class="form-group">
          <label for="projectType">Project Type *</label>
          <select id="projectType" name="projectType" required>
            <option value="">Select a project type</option>
            <option value="web-design">Web Design</option>
            <option value="frontend-dev">Frontend Development</option>
            <option value="backend-dev">Backend Development</option>
            <option value="full-stack">Full-Stack Development</option>
            <option value="optimization">Website Optimization</option>
            <option value="maintenance">Website Maintenance</option>
            <option value="consultation">Consultation</option>
            <option value="other">Other</option>
          </select>
        </div>

        <div class="form-group">
          <label for="budget">Project Budget</label>
          <select id="budget" name="budget">
            <option value="">Select your budget range</option>
            <option value="under-1k">Under $1,000</option>
            <option value="1k-5k">$1,000 - $5,000</option>
            <option value="5k-10k">$5,000 - $10,000</option>
            <option value="10k-25k">$10,000 - $25,000</option>
            <option value="25k-plus">$25,000+</option>
          </select>
        </div>

        <div class="form-group">
          <label for="timeline">Project Timeline</label>
          <select id="timeline" name="timeline">
            <option value="">Select your timeline</option>
            <option value="asap">ASAP</option>
            <option value="1-month">Within 1 month</option>
            <option value="2-3-months">2-3 months</option>
            <option value="3-6-months">3-6 months</option>
            <option value="flexible">Flexible</option>
          </select>
        </div>

        <div class="form-group">
          <label for="message">Project Details *</label>
          <textarea id="message" name="message" placeholder="Tell me about your project, goals, and any specific requirements..." required></textarea>
        </div>

        <button type="submit" class="submit-btn">
          <i class="fas fa-paper-plane"></i>
          Send Message
        </button>
      </form>
    </div>

    <div class="contact-info">
      <div class="availability">
        <h4><span class="status-dot"></span>Currently Available</h4>
        <p>Taking on new projects and consultations</p>
      </div>

      <div class="info-card">
        <h3>Get in Touch</h3>
        
        <div class="contact-item">
          <i class="fas fa-envelope"></i>
          <div>
            <h4>Email</h4>
            <p>sohana.shanta@example.com</p>
          </div>
        </div>

        <div class="contact-item">
          <i class="fas fa-phone"></i>
          <div>
            <h4>Phone</h4>
            <p>+880 123 456 7890</p>
          </div>
        </div>

        <div class="contact-item">
          <i class="fas fa-map-marker-alt"></i>
          <div>
            <h4>Location</h4>
            <p>Dhaka, Bangladesh</p>
          </div>
        </div>

        <div class="contact-item">
          <i class="fas fa-clock"></i>
          <div>
            <h4>Response Time</h4>
            <p>Within 24 hours</p>
          </div>
        </div>

        <div class="social-links">
          <a href="#" class="social-link" title="LinkedIn">
            <i class="fab fa-linkedin-in"></i>
          </a>
          <a href="#" class="social-link" title="GitHub">
            <i class="fab fa-github"></i>
          </a>
          <a href="#" class="social-link" title="Twitter">
            <i class="fab fa-twitter"></i>
          </a>
          <a href="#" class="social-link" title="Behance">
            <i class="fab fa-behance"></i>
          </a>
        </div>
      </div>

      <div class="info-card">
        <h3>Why Work With Me?</h3>
        
        <div class="contact-item">
          <i class="fas fa-rocket"></i>
          <div>
            <h4>Fast Delivery</h4>
            <p>Quick turnaround without compromising quality</p>
          </div>
        </div>

        <div class="contact-item">
          <i class="fas fa-comments"></i>
          <div>
            <h4>Clear Communication</h4>
            <p>Regular updates throughout the project</p>
          </div>
        </div>

        <div class="contact-item">
          <i class="fas fa-shield-alt"></i>
          <div>
            <h4>Quality Guaranteed</h4>
            <p>100% satisfaction with revisions included</p>
          </div>
        </div>

        <div class="contact-item">
          <i class="fas fa-headset"></i>
          <div>
            <h4>Ongoing Support</h4>
            <p>Post-launch support and maintenance</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script>
    // Form submission handling
    document.getElementById('contactForm').addEventListener('submit', function(e) {
      e.preventDefault();
      
      // Show success message
      const successMessage = document.getElementById('successMessage');
      successMessage.classList.add('show');
      
      // Reset form
      this.reset();
      
      // Hide success message after 5 seconds
      setTimeout(() => {
        successMessage.classList.remove('show');
      }, 5000);
    });

    // Form validation and enhancement
    const inputs = document.querySelectorAll('input, textarea, select');
    inputs.forEach(input => {
      input.addEventListener('focus', function() {
        this.parentElement.classList.add('focused');
      });
      
      input.addEventListener('blur', function() {
        this.parentElement.classList.remove('focused');
      });
    });

    // Mobile menu toggle (if needed)
    const navLinks = document.querySelector('.nav-links');
    if (window.innerWidth <= 768) {
      // Mobile navigation logic can be added here
    }
  </script>

</body>
</html>