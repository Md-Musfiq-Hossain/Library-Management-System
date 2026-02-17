<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Report Missing Book</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body {
            background: #f8f9fa;
            min-height: 100vh;
        }
        
        .report-card {
            background: white;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0,0,0,0.1);
            margin: 2rem auto;
            max-width: 700px;
        }
        
        .form-header {
            background: #428594;
            color: white;
            border-radius: 10px 10px 0 0;
            padding: 1.5rem;
        }
        
        .required::after {
            content: "*";
            color: #dc3545;
            margin-left: 3px;
        }
        
        .form-control:focus {
            border-color: #428594;
            box-shadow: 0 0 0 0.25rem rgba(66, 133, 148, 0.25);
        }
    </style>
</head>
<body>
    <div class="container py-5">
        <div class="report-card">
            <div class="form-header">
                <h2 class="mb-0"><i class="fas fa-book-medical"></i> Request Book</h2>
                <p class="mb-0 mt-2">Can't find the book you're looking for? Let us know!</p>
            </div>
            
            <form class="p-4" id="missingBookForm">
                <div class="row g-4">
                    <!-- Book Details -->
                    <div class="col-md-6">
                        <label class="form-label required">Book Title</label>
                        <input type="text" class="form-control" required>
                    </div>
                    
                    <div class="col-md-6">
                        <label class="form-label required">Author</label>
                        <input type="text" class="form-control" required>
                    </div>
                    
                    <div class="col-md-6">
                        <label class="form-label">ISBN</label>
                        <input type="text" class="form-control" pattern="\d{10,13}">
                        <small class="text-muted">10 or 13 digit ISBN (optional)</small>
                    </div>
                    
                    <div class="col-md-6">
                        <label class="form-label">Publication Year</label>
                        <input type="number" class="form-control" min="1800" max="2023">
                    </div>
                    
                    <div class="col-12">
                        <label class="form-label required">Book Description</label>
                        <textarea class="form-control" rows="4" required></textarea>
                        <small class="text-muted">Please describe the book in detail</small>
                    </div>
                    
                    <!-- User Details -->
                    <div class="col-md-6">
                        <label class="form-label required">Your Name</label>
                        <input type="text" class="form-control" required>
                    </div>
                    
                    <div class="col-md-6">
                        <label class="form-label required">Email</label>
                        <input type="email" class="form-control" required>
                    </div>
                    
                    <div class="col-12">
                        <label class="form-label">Additional Notes</label>
                        <textarea class="form-control" rows="2"></textarea>
                        <small class="text-muted">Any extra information that might help us find the book</small>
                    </div>
                    
                    <div class="col-12 text-center mt-4">
                        <button type="submit" class="btn btn-primary px-5 py-2">
                            <i class="fas fa-paper-plane"></i> Submit Request
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- Success Message (Hidden by default) -->
    <div class="alert alert-success alert-dismissible fade show fixed-top m-3" role="alert" style="display: none;">
        Request submitted successfully!
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.getElementById('missingBookForm').addEventListener('submit', function(e) {
            e.preventDefault();
            document.querySelector('.alert').style.display = 'block';
            this.reset();
        });
    </script>
</body>
</html>