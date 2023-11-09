<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Registration Form</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<style>
    body { 
        padding-top: 0px; 
    }
    .registration-form {
        background: #f7f7f7;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 5px 10px rgba(0,0,0,0.15);
    }
    .form-control {
        border-radius: 5px;
    }
    .btn-submit {
        background: #5cb85c;
        border-color: #4cae4c;
    }
    h1 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }

        .form-icon {
            width: 100%;
            height: auto;
            margin-bottom: 20px;
        }

        .form-icon img {
            width: 100%;
            height: auto;
            max-width: 100%;
        }

        form {
            max-width: 500px;
        }

        form label {
            display: block;
            margin-top: 10px;
            color: #666;
        }

        form input[type="text"],
        form input[type="date"],
        form input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        form input[type="submit"] {
            background-color: #5cb85c;
            color: white;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        form input[type="submit"]:hover {
            background-color: #4cae4c;
        }

        .navbar {
            margin-bottom: 20px; /* Add margin-bottom to the navbar */
        }
</style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">
            <img src="<?= base_url('assets/img/kemdikbud.png') ?>" alt="Logo" style="max-width: 50px; max-height: 50px;">
            PPDB Online (Valdo-PBKK A)
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Pengumuman</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#">Mendaftar <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Contact</a>
                </li>
            </ul>
        </div>
    </nav>
<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <form class="registration-form">
                <h2 class="text-center mb-4">Pendaftaran Tahun Ajaran 2021/2022</h2>
                <!-- Input fields -->
                <div class="form-group">
                    <label for="nisn">NISN</label>
                    <input type="text" class="form-control" id="nisn" required>
                </div>
                <div class="form-group">
                    <label for="fullName">Nama Lengkap</label>
                    <input type="text" class="form-control" id="fullName" required>
                </div>
                <div class="form-group">
                    <label for="birthPlace">Tempat Lahir</label>
                    <input type="text" class="form-control" id="birthPlace" required>
                </div>
                <!-- Date of birth select -->
                <div class="form-group">
                    <label for="birthDate">Tanggal Lahir</label>
                    <input type="date" select class="form-control" id="birthDate">
                        <!-- Options -->
                    </select>
                </div>
                <!-- Submit button -->
                <button type="submit" class="btn btn-primary btn-block btn-submit">Submit</button>
            </form>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
