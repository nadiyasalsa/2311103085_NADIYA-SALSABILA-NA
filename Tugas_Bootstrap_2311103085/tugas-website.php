<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Sederhana</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>
<body>
    
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="#">Website</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    
    <div class="container text-center mt-5">
        <!-- Card -->
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <img src="image-caca.jpg" class="card-img-top" alt="Gambar">
                    <div class="card-body">
                        <h5 class="card-title">NADIYA SALSABILA NUR ADHANI</h5>
                        <p class="card-text">Mahasiswa Telkom University Purwokerto</p>
                        <a href="#" class="btn btn-primary" onclick="lihatSelengkapnya()">Lihat Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Tombol dengan event klik -->
        <button class="btn btn-success mt-4" onclick="tombolDitekan()">Note</button>
    </div>
    
    <script>
        function tombolDitekan() {
            alert('Haloo, semangat yaa!');
        }
          
        function lihatSelengkapnya() {
            alert('Apa hayo?!');
        }
    </script>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>