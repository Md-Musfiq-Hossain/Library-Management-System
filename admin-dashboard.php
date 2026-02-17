<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        :root {
            --primary-color: #428594;
            --secondary-color: #2b3e51;
            --success-color: #28a745;
            --warning-color: #ffc107;
        }

        body {
            background-color: #f8f9fa;
            min-height: 100vh;
        }

        .dashboard-header {
            background: var(--primary-color);
            color: white;
            padding: 2rem 0;
            margin-bottom: 2rem;
        }

        .stat-card {
            background: white;
            border-radius: 10px;
            padding: 1.5rem;
            margin-bottom: 1.5rem;
            box-shadow: 0 2px 15px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
        }

        .stat-card:hover {
            transform: translateY(-5px);
        }

        .stat-icon {
            font-size: 2.5rem;
            margin-bottom: 1rem;
        }

        .quick-actions .btn {
            width: 100%;
            margin-bottom: 1rem;
            padding: 1rem;
            font-size: 1.1rem;
        }
    </style>
</head>
<body>
    <header class="dashboard-header">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <h1><i class="fas fa-tachometer-alt"></i> Admin Dashboard</h1>
                <div class="text-end">
                    <p class="mb-0">Welcome, Admin</p>
                    <small>Last login: 2 hours ago</small>
                </div>
            </div>
        </div>
    </header>

    <main class="container">
        <!-- Stats Overview -->
        <div class="row g-4 mb-4">
            <div class="col-md-3 col-6">
                <div class="stat-card text-primary">
                    <i class="fas fa-book stat-icon"></i>
                    <h3>1,234</h3>
                    <p class="mb-0">Total Books</p>
                    <small class="text-muted">+12 this week</small>
                </div>
            </div>
            <div class="col-md-3 col-6">
                <div class="stat-card text-success">
                    <i class="fas fa-users stat-icon"></i>
                    <h3>562</h3>
                    <p class="mb-0">Active Members</p>
                    <small class="text-muted">+5 today</small>
                </div>
            </div>
            <div class="col-md-3 col-6">
                <div class="stat-card text-warning">
                    <i class="fas fa-clock stat-icon"></i>
                    <h3>89</h3>
                    <p class="mb-0">Pending Requests</p>
                    <small class="text-muted">+3 new</small>
                </div>
            </div>
            <div class="col-md-3 col-6">
                <div class="stat-card text-danger">
                    <i class="fas fa-exclamation-triangle stat-icon"></i>
                    <h3>15</h3>
                    <p class="mb-0">Overdue Books</p>
                    <small class="text-muted">2 critical</small>
                </div>
            </div>
        </div>

        <!-- Quick Actions -->
        <div class="row">
            <div class="col-lg-12">
                <div class="quick-actions">
                    <h4 class="mb-4">Quick Actions</h4>
                    <div class="row g-4">
                        <div class="col-md-3">
                            <a href="insert_book.php" class="btn btn-primary">
                                <i class="fas fa-plus-circle"></i> Add New Book
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a href="update_copies.php" class="btn btn-success">
                                <i class="fas fa-copy"></i> Update Copies
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a href="pending_book_requests.php" class="btn btn-warning">
                                <i class="fas fa-tasks"></i> Manage Requests
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a href="user-management.html" class="btn btn-info">
                                <i class="fas fa-user-cog"></i> Manage Members
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>