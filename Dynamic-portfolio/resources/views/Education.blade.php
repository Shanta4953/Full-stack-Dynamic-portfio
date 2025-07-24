<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Education - Sohana Sultana Shanta | Academic Journey & Certifications</title>
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
      --success: #10b981;
      --warning: #f59e0b;
      --purple: #8b5cf6;
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

    /* Education Timeline */
    .timeline-section {
      margin-bottom: 4rem;
    }

    .section-header {
      text-align: center;
      margin-bottom: 3rem;
    }

    .section-header h2 {
      font-size: 2.5rem;
      font-weight: 700;
      color: var(--white);
      margin-bottom: 1rem;
    }

    .section-header p {
      font-size: 1.1rem;
      color: rgba(255, 255, 255, 0.9);
    }

    .timeline {
      position: relative;
      padding: 2rem 0;
    }

    .timeline::before {
      content: '';
      position: absolute;
      left: 50%;
      transform: translateX(-50%);
      top: 0;
      bottom: 0;
      width: 4px;
      background: var(--gradient);
      border-radius: 2px;
    }

    .timeline-item {
      position: relative;
      margin-bottom: 3rem;
      display: flex;
      align-items: center;
    }

    .timeline-item:nth-child(odd) {
      flex-direction: row;
    }

    .timeline-item:nth-child(even) {
      flex-direction: row-reverse;
    }

    .timeline-content {
      background: var(--white);
      border-radius: 20px;
      padding: 2rem;
      box-shadow: var(--shadow);
      width: calc(50% - 2rem);
      transition: all 0.3s ease;
      position: relative;
    }

    .timeline-content:hover {
      box-shadow: var(--shadow-hover);
      transform: translateY(-5px);
    }

    .timeline-item:nth-child(odd) .timeline-content {
      margin-right: 2rem;
    }

    .timeline-item:nth-child(even) .timeline-content {
      margin-left: 2rem;
    }

    .timeline-content::before {
      content: '';
      position: absolute;
      top: 50%;
      width: 0;
      height: 0;
      border: 15px solid transparent;
    }

    .timeline-item:nth-child(odd) .timeline-content::before {
      right: -30px;
      border-left-color: var(--white);
      transform: translateY(-50%);
    }

    .timeline-item:nth-child(even) .timeline-content::before {
      left: -30px;
      border-right-color: var(--white);
      transform: translateY(-50%);
    }

    .timeline-marker {
      position: absolute;
      left: 50%;
      transform: translateX(-50%);
      width: 60px;
      height: 60px;
      background: var(--gradient);
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      color: white;
      font-size: 1.5rem;
      box-shadow: 0 8px 20px rgba(37, 99, 235, 0.3);
      z-index: 2;
    }

    .education-header {
      display: flex;
      justify-content: space-between;
      align-items: start;
      margin-bottom: 1rem;
    }

    .degree-title {
      font-size: 1.5rem;
      font-weight: 600;
      color: var(--text-color);
      margin-bottom: 0.5rem;
    }

    .institution {
      font-size: 1.1rem;
      color: var(--primary-color);
      font-weight: 500;
      margin-bottom: 0.5rem;
    }

    .duration {
      background: var(--light-gray);
      color: var(--text-color);
      padding: 0.5rem 1rem;
      border-radius: 15px;
      font-size: 0.9rem;
      font-weight: 500;
    }

    .gpa {
      background: var(--success);
      color: white;
      padding: 0.25rem 0.75rem;
      border-radius: 10px;
      font-size: 0.85rem;
      margin-top: 0.5rem;
      display: inline-block;
    }

    .description {
      color: var(--dark-gray);
      margin: 1rem 0;
      line-height: 1.6;
    }

    .subjects {
      display: flex;
      flex-wrap: wrap;
      gap: 0.5rem;
      margin-top: 1rem;
    }

    .subject-tag {
      background: var(--light-gray);
      color: var(--text-color);
      padding: 0.25rem 0.75rem;
      border-radius: 12px;
      font-size: 0.85rem;
      font-weight: 500;
    }

    /* Certifications Section */
    .certifications-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
      gap: 2rem;
      margin-bottom: 4rem;
    }

    .certification-card {
      background: var(--white);
      border-radius: 20px;
      padding: 2rem;
      box-shadow: var(--shadow);
      transition: all 0.3s ease;
      text-align: center;
    }

    .certification-card:hover {
      box-shadow: var(--shadow-hover);
      transform: translateY(-5px);
    }

    .cert-icon {
      width: 80px;
      height: 80px;
      background: var(--gradient);
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      margin: 0 auto 1.5rem;
      font-size: 2rem;
      color: white;
    }

    .cert-title {
      font-size: 1.3rem;
      font-weight: 600;
      color: var(--text-color);
      margin-bottom: 0.5rem;
    }

    .cert-issuer {
      color: var(--primary-color);
      font-weight: 500;
      margin-bottom: 1rem;
    }

    .cert-date {
      color: var(--dark-gray);
      font-size: 0.9rem;
      margin-bottom: 1rem;
    }

    .cert-skills {
      display: flex;
      flex-wrap: wrap;
      gap: 0.5rem;
      justify-content: center;
    }

    .skill-tag {
      background: var(--light-gray);
      color: var(--text-color);
      padding: 0.25rem 0.75rem;
      border-radius: 12px;
      font-size: 0.8rem;
    }

    /* Skills Overview */
    .skills-section {
      background: var(--white);
      border-radius: 20px;
      padding: 3rem 2rem;
      box-shadow: var(--shadow);
      margin-bottom: 4rem;
    }

    .skills-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 2rem;
      margin-top: 2rem;
    }

    .skill-category {
      text-align: center;
    }

    .skill-category h3 {
      font-size: 1.3rem;
      font-weight: 600;
      color: var(--text-color);
      margin-bottom: 1rem;
    }

    .skill-list {
      display: flex;
      flex-wrap: wrap;
      gap: 0.5rem;
      justify-content: center;
    }

    .skill-item {
      background: var(--light-gray);
      color: var(--text-color);
      padding: 0.5rem 1rem;
      border-radius: 15px;
      font-size: 0.9rem;
      font-weight: 500;
      transition: all 0.3s ease;
    }

    .skill-item:hover {
      background: var(--primary-color);
      color: white;
      transform: translateY(-2px);
    }

    /* Academic Stats */
    .stats-section {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
      gap: 2rem;
      margin-bottom: 4rem;
    }

    .stat-card {
      background: var(--white);
      border-radius: 20px;
      padding: 2rem;
      box-shadow: var(--shadow);
      text-align: center;
      transition: all 0.3s ease;
    }

    .stat-card:hover {
      box-shadow: var(--shadow-hover);
      transform: translateY(-5px);
    }

    .stat-icon {
      width: 60px;
      height: 60px;
      background: var(--gradient);
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      margin: 0 auto 1rem;
      font-size: 1.5rem;
      color: white;
    }

    .stat-number {
      font-size: 2rem;
      font-weight: 700;
      color: var(--primary-color);
      margin-bottom: 0.5rem;
    }

    .stat-label {
      color: var(--dark-gray);
      font-weight: 500;
    }

    /* Mobile Responsiveness */
    @media (max-width: 768px) {
      .nav-links {
        display: none;
      }

      .hero h1 {
        font-size: 2rem;
      }

      .timeline::before {
        left: 2rem;
      }

      .timeline-item {
        flex-direction: row !important;
      }

      .timeline-content {
        width: calc(100% - 4rem);
        margin-left: 4rem !important;
        margin-right: 0 !important;
      }

      .timeline-content::before {
        left: -30px !important;
        border-right-color: var(--white) !important;
        border-left-color: transparent !important;
      }

      .timeline-marker {
        left: 2rem;
      }

      .main-container {
        padding: 1rem;
      }

      .certifications-grid {
        grid-template-columns: 1fr;
      }

      .stats-section {
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

    .timeline-item {
      animation: fadeInUp 0.6s ease forwards;
    }

    .timeline-item:nth-child(1) { animation-delay: 0.1s; }
    .timeline-item:nth-child(2) { animation-delay: 0.3s; }
    .timeline-item:nth-child(3) { animation-delay: 0.5s; }
    .timeline-item:nth-child(4) { animation-delay: 0.7s; }
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
          <li><a href="{{ url('/Education') }}" class="active">Education</a></li>
          <li><a href="{{ url('/Contact') }}">Contact</a></li>
        </ul>
      </div>
    </nav>
  </header>

  <section class="hero">
    <h1>Educational Journey</h1>
    <p>A comprehensive overview of my academic achievements, certifications, and continuous learning path</p>
  </section>

  <div class="main-container">
    <!-- Academic Stats -->
    <div class="stats-section">
      <div class="stat-card">
        <div class="stat-icon">
          <i class="fas fa-graduation-cap"></i>
        </div>
        <div class="stat-number">3.75</div>
        <div class="stat-label">Overall CGPA</div>
      </div>
      <div class="stat-card">
        <div class="stat-icon">
          <i class="fas fa-medal"></i>
        </div>
        <div class="stat-number">8+</div>
        <div class="stat-label">Certifications</div>
      </div>
      <div class="stat-card">
        <div class="stat-icon">
          <i class="fas fa-book"></i>
        </div>
        <div class="stat-number">4</div>
        <div class="stat-label">Years Study</div>
      </div>
      <div class="stat-card">
        <div class="stat-icon">
          <i class="fas fa-trophy"></i>
        </div>
        <div class="stat-number">5+</div>
        <div class="stat-label">Awards</div>
      </div>
    </div>

    <!-- Education Timeline -->
    <div class="timeline-section">
      <div class="section-header">
        <h2>Academic Timeline</h2>
        <p>My educational journey from school to university</p>
      </div>

      <div class="timeline">
        <!-- Bachelor's Degree -->
        <div class="timeline-item">
          <div class="timeline-marker">
            <i class="fas fa-graduation-cap"></i>
          </div>
          <div class="timeline-content">
            <div class="education-header">
              <div>
                <h3 class="degree-title">Bachelor of Science in Computer Science</h3>
                <div class="institution">Daffodil International University</div>
                <div class="gpa">CGPA: 3.75/4.00</div>
              </div>
              <div class="duration">2019 - 2023</div>
            </div>
            <div class="description">
              Completed a comprehensive 4-year program focusing on software engineering, algorithms, data structures, 
              web development, and database management. Participated in multiple programming competitions and tech conferences.
            </div>
            <div class="subjects">
              <span class="subject-tag">Data Structures & Algorithms</span>
              <span class="subject-tag">Software Engineering</span>
              <span class="subject-tag">Web Development</span>
              <span class="subject-tag">Database Systems</span>
              <span class="subject-tag">Object-Oriented Programming</span>
              <span class="subject-tag">Computer Networks</span>
              <span class="subject-tag">Machine Learning</span>
              <span class="subject-tag">Mobile App Development</span>
            </div>
          </div>
        </div>

        <!-- HSC -->
        <div class="timeline-item">
          <div class="timeline-marker">
            <i class="fas fa-school"></i>
          </div>
          <div class="timeline-content">
            <div class="education-header">
              <div>
                <h3 class="degree-title">Higher Secondary Certificate (HSC)</h3>
                <div class="institution">Kushtia Government College</div>
                <div class="gpa">GPA: 5.00/5.00</div>
              </div>
              <div class="duration">2016 - 2018</div>
            </div>
            <div class="description">
              Completed HSC in Science group with outstanding results. Focused on Mathematics, Physics, Chemistry, 
              and Computer Science. Actively participated in science olympiad and programming competitions.
            </div>
            <div class="subjects">
              <span class="subject-tag">Mathematics</span>
              <span class="subject-tag">Physics</span>
              <span class="subject-tag">Chemistry</span>
              <span class="subject-tag">Biology</span>
              <span class="subject-tag">English</span>
              <span class="subject-tag">ICT</span>
            </div>
          </div>
        </div>

        <!-- SSC -->
        <div class="timeline-item">
          <div class="timeline-marker">
            <i class="fas fa-user-graduate"></i>
          </div>
          <div class="timeline-content">
            <div class="education-header">
              <div>
                <h3 class="degree-title">Secondary School Certificate (SSC)</h3>
                <div class="institution">Police Lines School and College</div>
                <div class="gpa">GPA: 5.00/5.00</div>
              </div>
              <div class="duration">2014 - 2016</div>
            </div>
            <div class="description">
              Completed SSC with excellent academic performance in Science group. Developed strong foundation in 
              mathematics and sciences. Participated in various co-curricular activities and academic competitions.
            </div>
            <div class="subjects">
              <span class="subject-tag">Mathematics</span>
              <span class="subject-tag">General Science</span>
              <span class="subject-tag">English</span>
              <span class="subject-tag">Bengali</span>
              <span class="subject-tag">Social Science</span>
              <span class="subject-tag">Religion</span>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Certifications -->
    <div class="timeline-section">
      <div class="section-header">
        <h2 style="color: var(--text-color);">Professional Certifications</h2>
        <p style="color: var(--dark-gray);">Industry-recognized certifications and continuous learning achievements</p>
      </div>

      <div class="certifications-grid">
        <div class="certification-card">
          <div class="cert-icon">
            <i class="fab fa-laravel"></i>
          </div>
          <h3 class="cert-title">Laravel Certified Developer</h3>
          <div class="cert-issuer">Laravel Official</div>
          <div class="cert-date">Issued: March 2024</div>
          <div class="cert-skills">
            <span class="skill-tag">Eloquent ORM</span>
            <span class="skill-tag">Blade Templates</span>
            <span class="skill-tag">Artisan Commands</span>
            <span class="skill-tag">API Development</span>
          </div>
        </div>

        <div class="certification-card">
          <div class="cert-icon">
            <i class="fab fa-js-square"></i>
          </div>
          <h3 class="cert-title">JavaScript Professional</h3>
          <div class="cert-issuer">Microsoft Learn</div>
          <div class="cert-date">Issued: January 2024</div>
          <div class="cert-skills">
            <span class="skill-tag">ES6+</span>
            <span class="skill-tag">Async/Await</span>
            <span class="skill-tag">DOM Manipulation</span>
            <span class="skill-tag">Node.js</span>
          </div>
        </div>

        <div class="certification-card">
          <div class="cert-icon">
            <i class="fab fa-react"></i>
          </div>
          <h3 class="cert-title">React Developer Certification</h3>
          <div class="cert-issuer">Meta (Facebook)</div>
          <div class="cert-date">Issued: December 2023</div>
          <div class="cert-skills">
            <span class="skill-tag">Hooks</span>
            <span class="skill-tag">Redux</span>
            <span class="skill-tag">Context API</span>
            <span class="skill-tag">Testing</span>
          </div>
        </div>

        <div class="certification-card">
          <div class="cert-icon">
            <i class="fas fa-database"></i>
          </div>
          <h3 class="cert-title">Database Management Specialist</h3>
          <div class="cert-issuer">Oracle University</div>
          <div class="cert-date">Issued: October 2023</div>
          <div class="cert-skills">
            <span class="skill-tag">SQL</span>
            <span class="skill-tag">MySQL</span>
            <span class="skill-tag">PostgreSQL</span>
            <span class="skill-tag">Database Design</span>
          </div>
        </div>

        <div class="certification-card">
          <div class="cert-icon">
            <i class="fas fa-cloud"></i>
          </div>
          <h3 class="cert-title">Cloud Computing Fundamentals</h3>
          <div class="cert-issuer">AWS</div>
          <div class="cert-date">Issued: September 2023</div>
          <div class="cert-skills">
            <span class="skill-tag">AWS Services</span>
            <span class="skill-tag">Cloud Architecture</span>
            <span class="skill-tag">DevOps</span>
            <span class="skill-tag">Serverless</span>
          </div>
        </div>

        <div class="certification-card">
          <div class="cert-icon">
            <i class="fab fa-git-alt"></i>
          </div>
          <h3 class="cert-title">Version Control with Git</h3>
          <div class="cert-issuer">GitHub Learning Lab</div>
          <div class="cert-date">Issued: August 2023</div>
          <div class="cert-skills">
            <span class="skill-tag">Git Commands</span>
            <span class="skill-tag">Branching</span>
            <span class="skill-tag">Collaboration</span>
            <span class="skill-tag">CI/CD</span>
          </div>
        </div>
      </div>
    </div>

    <!-- Skills Overview -->
    <div class="skills-section">
      <div class="section-header" style="margin-bottom: 2rem;">
        <h2 style="color: var(--text-color);">Technical Skills</h2>
        <p style="color: var(--dark-gray);">Comprehensive skill set acquired through education and professional development</p>
      </div>

      <div class="skills-grid">
        <div class="skill-category">
          <h3>Programming Languages</h3>
          <div class="skill-list">
            <span class="skill-item">PHP</span>
            <span class="skill-item">JavaScript</span>
            <span class="skill-item">Python</span>
            <span class="skill-item">Java</span>
            <span class="skill-item">C++</span>
            <span class="skill-item">TypeScript</span>
          </div>
        </div>

        <div class="skill-category">
          <h3>Web Technologies</h3>
          <div class="skill-list">
            <span class="skill-item">Laravel</span>
            <span class="skill-item">React</span>
            <span class="skill-item">Vue.js</span>
            <span class="skill-item">Node.js</span>
            <span class="skill-item">HTML5</span>
            <span class="skill-item">CSS3</span>
          </div>
        </div>

        <div class="skill-category">
          <h3>Databases</h3>
          <div class="skill-list">
            <span class="skill-item">MySQL</span>
            <span class="skill-item">PostgreSQL</span>
            <span class="skill-item">MongoDB</span>
            <span class="skill-item">Redis</span>
            <span class="skill-item">SQLite</span>
          </div>
        </div>

        <div class="skill-category">
          <h3>Tools & Platforms</h3>
          <div class="skill-list">
            <span class="skill-item">Git</span>
            <span class="skill-item">Docker</span>
            <span class="skill-item">AWS</span>
            <span class="skill-item">Linux</span>
            <span class="skill-item">VS Code</span>
            <span class="skill-item">Postman</span>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script>
    // Animate stats on scroll
    const observerOptions = {
      threshold: 0.5,
      rootMargin: '0px 0px -100px 0px'
    };

    const statsObserver = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          const statNumber = entry.target.querySelector('.stat-number');
          if (statNumber) {
            const target = parseFloat(statNumber.textContent);
            let current = 0;
            const increment = target / 50;
            const isFloat = target % 1 !== 0;
            
            const timer = setInterval(() => {
              current += increment;
              if (isFloat) {
                statNumber.textContent = current.toFixed(2);
                if (current >= target) {
                  statNumber.textContent = target.toFixed(2);
                  clearInterval(timer);
                }
              } else {
                statNumber.textContent = Math.floor(current) + (statNumber.textContent.includes('+') ? '+' : '');
                if (current >= target) {
                  statNumber.textContent = target + (statNumber.textContent.includes('+') ? '+' : '');
                  clearInterval(timer);
                }
              }
            }, 30);
          }
          statsObserver.unobserve(entry.target);
        }
      });
    }, observerOptions);

    // Observe all stat cards
    document.querySelectorAll('.stat-card').forEach(card => {
      statsObserver.observe(card);
    });

    // Timeline animation on scroll
    const timelineObserver = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.style.opacity = '1';
          entry.target.style.transform = 'translateY(0)';
        }
      });
    }, { threshold: 0.1 });

    document.querySelectorAll('.timeline-item').forEach(item => {
      item.style.opacity = '0';
      item.style.transform = 'translateY(30px)';
      item.style.transition = 'all 0.6s ease';
      timelineObserver.observe(item);
    });

    // Certification cards hover effect
    document.querySelectorAll('.certification-card').forEach(card => {
      card.addEventListener('mouseenter', () => {
        card.style.transform = 'translateY(-10px) scale(1.02)';
      });

      card.addEventListener('mouseleave', () => {
        card.style.transform = 'translateY(0) scale(1)';
      });
    });

    // Skill items hover effect
    document.querySelectorAll('.skill-item').forEach(skill => {
      skill.addEventListener('click', () => {
        skill.style.background = 'var(--success)';
        skill.style.color = 'white';
        setTimeout(() => {
          skill.style.background = 'var(--light-gray)';
          skill.style.color = 'var(--text-color)';
        }, 1000);
      });
    });
  </script>

</body>
</html>