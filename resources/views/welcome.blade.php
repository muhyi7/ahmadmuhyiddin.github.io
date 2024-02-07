<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Profil Saya</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            font-family: 'figtree', sans-serif;
            background-color: #f3f4f6;
            color: #1a202c;
            line-height: 1.5;
        }

        .profile-container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            margin-top: 50px;
        }

        .profile-header {
            text-align: center;
            margin-bottom: 20px;
        }

        .profile-header img {
            border-radius: 50%;
            width: 150px;
            height: 150px;
            object-fit: cover;
            margin-bottom: 10px;
        }

        .profile-name {
            font-size: 1.5rem;
            font-weight: 600;
            color: #2d3748;
        }

        .profile-bio {
            font-size: 1.1rem;
            color: #4a5568;
            margin-bottom: 20px;
        }

        .profile-details {
            display: flex;
            justify-content: space-between;
            font-size: 1.1rem;
            color: #4a5568;
            margin-bottom: 20px;
        }

        .profile-details div {
            flex: 1;
            text-align: center;
        }

        .profile-social {
            text-align: center;
            margin-top: 20px;
        }

        .social-link {
            display: inline-block;
            margin: 0 10px;
            color: #4299e1;
            text-decoration: none;
            font-size: 1.5rem;
        }
    </style>
</head>

<body>
    <div class="profile-container">
        <div class="profile-header">
            {{-- <img src="{{ asset('images/awikwok.jpg') }}" alt="Profile Picture"> --}}
            <div class="profile-name">Ahmad Muhyiddin</div>
            <div class="profile-bio">Jawir Developer | Jawascript</div>
        </div>

        <div class="profile-details">
            <div>
                <div>Email</div>
                <div>jawir@gmail.com</div>
            </div>
            <div>
                <div>Location</div>
                <div>Mars</div>
            </div>
            <div>
                <div>Kampus</div>
                <div>SMK Mastrip</div>
            </div>
        </div>
{{-- 
        <div class="profile-social">
            <a href="https://twitter.com/johndoe" class="social-link" target="_blank" rel="noopener noreferrer">
                <i class="fab fa-twitter"></i>
            </a>
            <a href="https://linkedin.com/in/johndoe" class="social-link" target="_blank" rel="noopener noreferrer">
                <i class="fab fa-linkedin"></i>
            </a>
            <a href="https://github.com/muhyi7" class="social-link" target="_blank" rel="noopener noreferrer">
                <i class="fab fa-github"></i>
            </a>
        </div> --}}
    </div>
</body>

</html>
