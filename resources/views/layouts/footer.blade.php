<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footer dengan Ikon Sosial Media</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        html, body {
            height: 100%;
            margin: 0;
        }
        .wrapper {
            display: flex;
            flex-direction: column;
        }
        .content {
            flex: 1;
        }
        footer {
            background: #343a40;
            padding: 10px 0;
        }
        .social-icons a {
            font-size: 1.5rem;
            transition: color 0.3s;
        }
        .social-icons a:hover {
            color: #007bff;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="content">
            <!-- Your main content goes here -->
        </div>
        <footer class="bg-dark text-white py-4">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <p>&copy;Copyright ZidanAhmad 2024</p>
                        <br>
                        <div class="social-icons">
                            <a href="https://www.facebook.com" class="text-white mr-3">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="https://www.twitter.com" class="text-white mr-3">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="https://www.instagram.com" class="text-white mr-3">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="https://www.linkedin.com" class="text-white">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>