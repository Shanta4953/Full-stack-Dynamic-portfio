<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Sohana Sultana Shanta - Experience</title>
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

    /* Experience Timeline */
    .experience-timeline {
      position: relative;
      max-width: 900px;
      margin: 0 auto;
    }

    .experience-timeline::before {
      content: '';
      position: absolute;
      left: 50%;
      top: 0;
      bottom: 0;
      width: 2px;
      background: var(--border-color);
      transform: translateX(-50%);
    }

    .experience-item {
      position: relative;
      margin-bottom: 4rem;
      display: flex;
      align-items: center;
    }

    .experience-item:nth-child(odd) {
      flex-direction: row;
    }

    .experience-item:nth-child(even) {
      flex-direction: row-reverse;
    }

    .experience-content {
      width: calc(50% - 2rem);
      background: var(--bg-primary);
      padding: 2rem;
      border-radius: 12px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      border: 1px solid var(--border-color);
      transition: all 0.3s ease;
    }

    .experience-content:hover {
      transform: translateY(-5px);
      box-shadow: var(--shadow);
    }

    .experience-timeline-dot {
      position: absolute;
      left: 50%;
      top: 2rem;
      width: 20px;
      height: 20px;
      background: var(--primary-color);
      border-radius: 50%;
      transform: translateX(-50%);
      border: 4px solid var(--bg-secondary);
      z-index: 2;
    }

    .experience-icon {
      position: absolute;
      left: 50%;
      top: 1.5rem;
      width: 30px;
      height: 30px;
      background: var(--gradient);
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      transform: translateX(-50%);
      color: white;
      font-size: 0.875rem;
      z-index: 3;
    }

    .experience-company {
      font-size: 1.5rem;
      font-weight: 700;
      color: var(--text-primary);
      margin-bottom: 0.5rem;
    }

    .experience-role {
      font-size: 1.125rem;
      font-weight: 600;
      color: var(--primary-color);
      margin-bottom: 0.5rem;
    }

    .experience-duration {
      display: inline-block;
      background: rgba(59, 130, 246, 0.1);
      color: var(--primary-color);
      padding: 0.25rem 0.75rem;
      border-radius: 20px;
      font-size: 0.875rem;
      font-weight: 500;
      margin-bottom: 1rem;
    }

    .experience-description {
      color: var(--text-secondary);
      line-height: 1.7;
      margin-bottom: 1rem;
    }

    .experience-skills {
      display: flex;
      flex-wrap: wrap;
      gap: 0.5rem;
    }

    .skill-tag {
      background: var(--bg-secondary);
      color: var(--text-primary);
      padding: 0.25rem 0.75rem;
      border-radius: 20px;
      font-size: 0.75rem;
      font-weight: 500;
      border: 1px solid var(--border-color);
    }

    /* Stats Section */
    .stats-section {
      background: var(--bg-primary);
      border-radius: 20px;
      padding: 3rem;
      margin-top: 4rem;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .stats-title {
      text-align: center;
      font-size: 2rem;
      font-weight: 700;
      margin-bottom: 2rem;
      color: var(--text-primary);
    }

    .stats-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
      gap: 2rem;
    }

    .stat-item {
      text-align: center;
    }

    .stat-number {
      font-size: 3rem;
      font-weight: 700;
      color: var(--primary-color);
      display: block;
    }

    .stat-label {
      font-size: 1rem;
      color: var(--text-secondary);
      font-weight: 500;
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
      
      .experience-timeline::before {
        left: 1rem;
      }
      
      .experience-item {
        flex-direction: column !important;
        align-items: flex-start;
        margin-left: 2rem;
      }
      
      .experience-content {
        width: 100%;
      }
      
      .experience-timeline-dot,
      .experience-icon {
        left: 1rem;
        transform: translateX(-50%);
      }
      
      .stats-section {
        padding: 2rem;
      }
      
      .stats-grid {
        grid-template-columns: repeat(2, 1fr);
        gap: 1rem;
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
          <li><a href="{{ url('/Services') }}">Services</a></li>
          <li><a href="{{ url('/Experience') }}" class="active">Experience</a></li>
          <li><a href="{{ url('/Projects') }}">Projects</a></li>
          <li><a href="{{ url('/Education') }}">Education</a></li>
          <li><a href="{{ url('/Contact') }}">Contact</a></li>
        </ul>
      </div>
    </nav>
  </header>

  <main class="main-content">
    <div class="page-header">
      <h1 class="page-title">Professional Experience</h1>
      <p class="page-subtitle">
        My journey through various roles that shaped my expertise in web development, design, and technology leadership.
      </p>
    </div>

    <div class="experience-timeline">
      <div class="experience-item">
        <div class="experience-content">
          <div class="experience-company">CodersPoint</div>
          <div class="experience-role">Web Developer Intern</div>
          <div class="experience-duration">
            <i class="fas fa-calendar"></i>
            Jun 2023 - Aug 2023
          </div>
          <div class="experience-description">
            Gained hands-on experience in full-stack web development, working on responsive websites and learning modern development practices. Collaborated with senior developers on real-world projects and enhanced my technical skills.
          </div>
          <div class="experience-skills">
            <span class="skill-tag">HTML5</span>
            <span class="skill-tag">CSS3</span>
            <span class="skill-tag">JavaScript</span>
            <span class="skill-tag">Git</span>
            <span class="skill-tag">Team Collaboration</span>
            <span class="skill-tag">Agile</span>
          </div>
        </div>
        <div class="experience-icon">
          <i class="fas fa-code"></i>
        </div>
      </div>

      <div class="experience-item">
        <div class="experience-content">
          <div class="experience-company">DesignHive</div>
          <div class="experience-role">UI/UX Designer</div>
          <div class="experience-duration">
            <i class="fas fa-calendar"></i>
            Sep 2022 - May 2023
          </div>
          <div class="experience-description">
            Designed intuitive user interfaces and enhanced user experiences for web applications. Conducted usability testing, created wireframes, and collaborated with development teams to implement design solutions.
          </div>
          <div class="experience-skills">
            <span class="skill-tag">Figma</span>
            <span class="skill-tag">Adobe XD</span>
            <span class="skill-tag">Wireframing</span>
            <span class="skill-tag">Prototyping</span>
            <span class="skill-tag">User Research</span>
            <span class="skill-tag">Usability Testing</span>
          </div>
        </div>
        <div class="experience-icon">
          <i class="fas fa-palette"></i>
        </div>
      </div>

      <div class="experience-item">
        <div class="experience-content">
          <div class="experience-company">University TechFest</div>
          <div class="experience-role">Campus Ambassador</div>
          <div class="experience-duration">
            <i class="fas fa-calendar"></i>
            Jan 2022 - Dec 2022
          </div>
          <div class="experience-description">
            Represented the university at technology events, promoted tech initiatives, and managed social media campaigns. Built networks within the tech community and organized workshops for fellow students.
          </div>
          <div class="experience-skills">
            <span class="skill-tag">Event Management</span>
            <span class="skill-tag">Social Media</span>
            <span class="skill-tag">Public Speaking</span>
            <span class="skill-tag">Leadership</span>
            <span class="skill-tag">Networking</span>
            <span class="skill-tag">Marketing</span>
          </div>
        </div>
        <div class="experience-icon">
          <i class="fas fa-users"></i>
        </div>
      </div>
    </div>

    <div class="stats-section">
      <h2 class="stats-title">Career Highlights</h2>
      <div class="stats-grid">
        <div class="stat-item">
          <span class="stat-number">3+</span>
          <span class="stat-label">Years Experience</span>
        </div>
        <div class="stat-item">
          <span class="stat-number">15+</span>
          <span class="stat-label">Projects Completed</span>
        </div>
        <div class="stat-item">
          <span class="stat-number">3</span>
          <span class="stat-label">Companies Worked</span>
        </div>
        <div class="stat-item">
          <span class="stat-number">10+</span>
          <span class="stat-label">Technologies Mastered</span>
        </div>
      </div>
    </div>
  </main>
</body>
</html>