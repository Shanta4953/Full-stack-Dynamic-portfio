<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Dynamic Portfolio</title>
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
            --success-color: #10b981;
            --warning-color: #f59e0b;
            --error-color: #ef4444;
            --shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
            --shadow-lg: 0 20px 25px -5px rgba(0, 0, 0, 0.1);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            background: var(--bg-secondary);
            color: var(--text-primary);
            line-height: 1.6;
        }

        .dashboard-container {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        /* Header */
        .dashboard-header {
            background: var(--bg-primary);
            border-bottom: 1px solid var(--border-color);
            padding: 1rem 2rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: var(--shadow);
        }

        .header-left {
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .logo {
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--primary-color);
            text-decoration: none;
        }

        .dashboard-title {
            font-size: 1.25rem;
            font-weight: 600;
            color: var(--text-primary);
        }

        .header-right {
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .user-info {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            padding: 0.5rem 1rem;
            background: var(--bg-secondary);
            border-radius: 8px;
            border: 1px solid var(--border-color);
        }

        .user-avatar {
            width: 32px;
            height: 32px;
            background: var(--primary-color);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: 600;
            font-size: 0.875rem;
        }

        .user-details {
            display: flex;
            flex-direction: column;
        }

        .user-name {
            font-weight: 500;
            font-size: 0.875rem;
            color: var(--text-primary);
        }

        .user-email {
            font-size: 0.75rem;
            color: var(--text-secondary);
        }

        .btn {
            padding: 0.5rem 1rem;
            border-radius: 6px;
            border: none;
            font-size: 0.875rem;
            font-weight: 500;
            cursor: pointer;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            transition: all 0.2s ease;
        }

        .btn-primary {
            background: var(--primary-color);
            color: white;
        }

        .btn-primary:hover {
            background: var(--secondary-color);
            transform: translateY(-1px);
        }

        .btn-outline {
            background: transparent;
            color: var(--text-secondary);
            border: 1px solid var(--border-color);
        }

        .btn-outline:hover {
            background: var(--bg-secondary);
            color: var(--text-primary);
        }

        .btn-danger {
            background: var(--error-color);
            color: white;
        }

        .btn-danger:hover {
            background: #dc2626;
            transform: translateY(-1px);
        }

        /* Main Content */
        .dashboard-main {
            flex: 1;
            padding: 2rem;
        }

        .welcome-section {
            background: var(--bg-primary);
            border-radius: 12px;
            padding: 2rem;
            margin-bottom: 2rem;
            box-shadow: var(--shadow);
            border: 1px solid var(--border-color);
        }

        .welcome-title {
            font-size: 2rem;
            font-weight: 700;
            color: var(--text-primary);
            margin-bottom: 0.5rem;
        }

        .welcome-subtitle {
            color: var(--text-secondary);
            font-size: 1.125rem;
            margin-bottom: 1.5rem;
        }

        .dashboard-stats {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 1.5rem;
            margin-bottom: 2rem;
        }

        .stat-card {
            background: var(--bg-primary);
            border-radius: 12px;
            padding: 1.5rem;
            box-shadow: var(--shadow);
            border: 1px solid var(--border-color);
            transition: transform 0.2s ease;
        }

        .stat-card:hover {
            transform: translateY(-2px);
        }

        .stat-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1rem;
        }

        .stat-title {
            font-size: 0.875rem;
            font-weight: 500;
            color: var(--text-secondary);
            text-transform: uppercase;
            letter-spacing: 0.05em;
        }

        .stat-icon {
            width: 40px;
            height: 40px;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1.125rem;
        }

        .stat-icon.projects { background: var(--primary-color); }
        .stat-icon.skills { background: var(--success-color); }
        .stat-icon.education { background: var(--warning-color); }
        .stat-icon.experience { background: #8b5cf6; }

        .stat-value {
            font-size: 2rem;
            font-weight: 700;
            color: var(--text-primary);
            margin-bottom: 0.25rem;
        }

        .stat-description {
            font-size: 0.875rem;
            color: var(--text-secondary);
        }

        .quick-actions {
            background: var(--bg-primary);
            border-radius: 12px;
            padding: 1.5rem;
            box-shadow: var(--shadow);
            border: 1px solid var(--border-color);
        }

        .quick-actions-title {
            font-size: 1.25rem;
            font-weight: 600;
            color: var(--text-primary);
            margin-bottom: 1rem;
        }

        .actions-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 1rem;
        }

        .action-card {
            padding: 1rem;
            border: 1px solid var(--border-color);
            border-radius: 8px;
            text-decoration: none;
            color: var(--text-primary);
            transition: all 0.2s ease;
            background: var(--bg-secondary);
        }

        .action-card:hover {
            border-color: var(--primary-color);
            transform: translateY(-1px);
            background: var(--bg-primary);
        }

        .action-icon {
            font-size: 1.5rem;
            color: var(--primary-color);
            margin-bottom: 0.5rem;
        }

        .action-title {
            font-weight: 500;
            margin-bottom: 0.25rem;
        }

        .action-description {
            font-size: 0.875rem;
            color: var(--text-secondary);
        }

        /* Responsive */
        @media (max-width: 768px) {
            .dashboard-header {
                flex-direction: column;
                gap: 1rem;
                padding: 1rem;
            }

            .header-left, .header-right {
                width: 100%;
                justify-content: space-between;
            }

            .dashboard-main {
                padding: 1rem;
            }

            .dashboard-stats {
                grid-template-columns: 1fr;
            }

            .actions-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <div class="dashboard-container">
        <!-- Header -->
        <header class="dashboard-header">
            <div class="header-left">
                <a href="{{ url('/') }}" class="logo">
                    <i class="fas fa-portfolio"></i>
                    Portfolio
                </a>
                <h1 class="dashboard-title">Admin Dashboard</h1>
            </div>
            
            <div class="header-right">
                <div class="user-info">
                    <div class="user-avatar">
                        {{ substr($user->name, 0, 1) }}
                    </div>
                    <div class="user-details">
                        <div class="user-name">{{ $user->name }}</div>
                        <div class="user-email">{{ $user->email }}</div>
                    </div>
                </div>
                
                <a href="{{ url('/') }}" class="btn btn-outline">
                    <i class="fas fa-home"></i>
                    View Portfolio
                </a>
                
                <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                    @csrf
                    <button type="submit" class="btn btn-danger">
                        <i class="fas fa-sign-out-alt"></i>
                        Logout
                    </button>
                </form>
            </div>
        </header>

        <!-- Main Content -->
        <main class="dashboard-main">
            <!-- Welcome Section -->
            <section class="welcome-section">
                <h2 class="welcome-title">Welcome back, {{ $user->name }}! 👋</h2>
                <p class="welcome-subtitle">
                    Manage your dynamic portfolio from this admin dashboard. You can update your projects, skills, education, and more.
                </p>
                <div style="display: flex; gap: 1rem; flex-wrap: wrap;">
                    <a href="{{ url('/') }}" class="btn btn-primary">
                        <i class="fas fa-eye"></i>
                        View Live Portfolio
                    </a>
                    <a href="#" class="btn btn-outline">
                        <i class="fas fa-chart-bar"></i>
                        View Analytics
                    </a>
                </div>
            </section>

            <!-- Dashboard Stats -->
            <section class="dashboard-stats">
                <div class="stat-card">
                    <div class="stat-header">
                        <span class="stat-title">Total Projects</span>
                        <div class="stat-icon projects">
                            <i class="fas fa-project-diagram"></i>
                        </div>
                    </div>
                    <div class="stat-value">0</div>
                    <div class="stat-description">Active projects in portfolio</div>
                </div>

                <div class="stat-card">
                    <div class="stat-header">
                        <span class="stat-title">Skills</span>
                        <div class="stat-icon skills">
                            <i class="fas fa-cogs"></i>
                        </div>
                    </div>
                    <div class="stat-value">0</div>
                    <div class="stat-description">Technical & soft skills</div>
                </div>

                <div class="stat-card">
                    <div class="stat-header">
                        <span class="stat-title">Education</span>
                        <div class="stat-icon education">
                            <i class="fas fa-graduation-cap"></i>
                        </div>
                    </div>
                    <div class="stat-value">0</div>
                    <div class="stat-description">Educational qualifications</div>
                </div>

                <div class="stat-card">
                    <div class="stat-header">
                        <span class="stat-title">Experience</span>
                        <div class="stat-icon experience">
                            <i class="fas fa-briefcase"></i>
                        </div>
                    </div>
                    <div class="stat-value">0</div>
                    <div class="stat-description">Work experiences</div>
                </div>
            </section>

            <!-- Quick Actions -->
            <section class="quick-actions">
                <h3 class="quick-actions-title">Quick Actions</h3>
                <div class="actions-grid">
                    <a href="#" class="action-card">
                        <div class="action-icon">
                            <i class="fas fa-plus-circle"></i>
                        </div>
                        <div class="action-title">Add New Project</div>
                        <div class="action-description">Showcase your latest work</div>
                    </a>

                    <a href="#" class="action-card">
                        <div class="action-icon">
                            <i class="fas fa-user-edit"></i>
                        </div>
                        <div class="action-title">Update Profile</div>
                        <div class="action-description">Edit personal information</div>
                    </a>

                    <a href="#" class="action-card">
                        <div class="action-icon">
                            <i class="fas fa-tools"></i>
                        </div>
                        <div class="action-title">Manage Skills</div>
                        <div class="action-description">Add or update your skills</div>
                    </a>

                    <a href="#" class="action-card">
                        <div class="action-icon">
                            <i class="fas fa-school"></i>
                        </div>
                        <div class="action-title">Education Records</div>
                        <div class="action-description">Update educational background</div>
                    </a>

                    <a href="#" class="action-card">
                        <div class="action-icon">
                            <i class="fas fa-trophy"></i>
                        </div>
                        <div class="action-title">Add Achievement</div>
                        <div class="action-description">Record your accomplishments</div>
                    </a>

                    <a href="#" class="action-card">
                        <div class="action-icon">
                            <i class="fas fa-cog"></i>
                        </div>
                        <div class="action-title">Settings</div>
                        <div class="action-description">Configure dashboard preferences</div>
                    </a>
                </div>
            </section>
        </main>
    </div>

    <script>
        // Add some interactivity
        document.addEventListener('DOMContentLoaded', function() {
            // Confirm logout
            const logoutForm = document.querySelector('form[action*="logout"]');
            if (logoutForm) {
                logoutForm.addEventListener('submit', function(e) {
                    if (!confirm('Are you sure you want to logout?')) {
                        e.preventDefault();
                    }
                });
            }

            // Add loading state to action cards
            const actionCards = document.querySelectorAll('.action-card');
            actionCards.forEach(card => {
                card.addEventListener('click', function(e) {
                    if (this.getAttribute('href') === '#') {
                        e.preventDefault();
                        alert('This feature will be implemented soon!');
                    }
                });
            });
        });
    </script>
</body>
</html>