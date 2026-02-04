<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistem Rekomendasi Program Latihan Kebugaran</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            background: url('https://images.unsplash.com/photo-1517964603305-11c0f6f66012?q=80&w=2071&auto=format&fit=crop') 
                        no-repeat center center fixed;
            background-size: cover;
            font-family: 'Poppins', sans-serif;
            overflow-x: hidden;
        }

        /* Dark overlay */
        .overlay {
            min-height: 100vh;
            background: linear-gradient(
                rgba(0,0,0,0.65),
                rgba(0,0,0,0.75)
            );
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 2rem;
        }

        /* Glass card */
        .hero-card {
            background: rgba(255, 255, 255, 0.08);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            padding: 3rem;
            max-width: 850px;
            box-shadow: 0 20px 60px rgba(0,0,0,0.3);
            animation: fadeUp 1.2s ease forwards;
        }

        .hero-card h1 {
            font-weight: 700;
            font-size: 2.8rem;
            margin-bottom: 1rem;
        }

        .hero-card p {
            font-size: 1.15rem;
            font-weight: 300;
            line-height: 1.8;
            margin-bottom: 2.5rem;
            opacity: 0.95;
        }

        /* Buttons */
        .btn-custom {
            background: linear-gradient(135deg, #e63946, #d62828);
            border: none;
            padding: 0.8rem 2rem;
            font-weight: 600;
            border-radius: 30px;
            transition: all 0.3s ease;
        }

        .btn-custom:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 25px rgba(230,57,70,0.5);
        }

        .btn-outline-light {
            border-radius: 30px;
            padding: 0.8rem 2rem;
            transition: all 0.3s ease;
        }

        .btn-outline-light:hover {
            background-color: #ffffff;
            color: #000;
            transform: translateY(-3px);
        }

        /* Footer text */
        .footer-text {
            position: fixed;
            bottom: 30px;
            right: 40px;
            font-size: 0.85rem;
            text-align: right;
            color: rgba(255,255,255,0.7);
            letter-spacing: 0.5px;
            animation: fadeIn 2s ease forwards;
        }

        /* Animations */
        @keyframes fadeUp {
            from {
                opacity: 0;
                transform: translateY(40px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 0.7; }
        }

        /* Responsive */
        @media (max-width: 768px) {
            .hero-card h1 {
                font-size: 2.1rem;
            }
            .hero-card {
                padding: 2.2rem;
            }
        }
    </style>
</head>
<body>

<div class="overlay">
    <div class="hero-card text-center text-white">
        <h1>Sistem Rekomendasi Program Latihan Kebugaran</h1>
        <p>
            Sistem ini membantu menentukan program latihan yang optimal berdasarkan 
            tujuan kebugaran dan tingkat pengalaman pengguna menggunakan 
            metode <strong>Simple Additive Weighting (SAW)</strong>.
        </p>

        <div>
            <a href="{{ route('login') }}" class="btn btn-custom btn-lg me-3">Login</a>
            <a href="{{ route('register') }}" class="btn btn-outline-light btn-lg">Daftar</a>
        </div>
    </div>
</div>

<div class="footer-text">
    Sebagai Tugas Akhir<br>
    <strong>Al Mushhaf Fahlul Rasyid</strong>
</div>

</body>
</html>