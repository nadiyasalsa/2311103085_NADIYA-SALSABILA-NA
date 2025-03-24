<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Profil</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <style>
        body {
            background: url('https://source.unsplash.com/1600x900/?technology,nature') no-repeat center center/cover;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }
        .profile-card {
            background: rgba(255, 255, 255, 0.85);
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
            max-width: 800px;
            text-align: center;
            backdrop-filter: blur(10px);
        }
        .profile-img {
            width: 160px;
            height: 160px;
            object-fit: cover;
            border: 5px solid #fff;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.3);
        }
        .btn-custom {
            background: #ff6f61;
            border: none;
            transition: all 0.3s ease-in-out;
            padding: 10px 20px;
            font-size: 1.1em;
            border-radius: 25px;
        }
        .btn-custom:hover {
            background: #e64a45;
        }
    </style>
</head>

<body>
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="profile-card">
            <img src="image-caca.jpg" class="img-fluid rounded-circle profile-img" alt="Foto Profil">
            <h2 class="mt-3 text-uppercase">Nadiya Salsabila Nur Adhani</h2>
            <p class="text-muted">Mahasiswa Telkom University Purwokerto, Jurusan Sistem Informasi, Angkatan 2023.</p>
            <p>Saya memiliki pribadi yang selalu tertarik mencoba hal baru dan senang belajar dari berbagai pengalaman.</p>
            <a href="https://linkedin.com/in/nadiyasalsa" target="_blank" class="btn btn-custom btn-lg">LinkedIn</a>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
