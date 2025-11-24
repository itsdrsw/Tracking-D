<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Fitur - Diabelens | Prediksi AI</title>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    </head>
    <body>
        <main class="bagian-fitur-utama">
            <div class="container-salam-menu">
                <div class="salam-pengguna">
                    <h1 class="salam__judul">Selamat Datang, <span class="hero__judul-highlight">Shabri</span></h1>
                    <p class="salam__deskripsi">Lorem ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text</p>
                </div>
                <div class="page-menu">
                    <div class="menu-item active" onclick="window.location='{{ route('diabetes.page') }}'">
                        <img src="{{ asset('images/icon-diabetes.png') }}" alt="diabetes">
                        <span>Diabetes</span>
                    </div>

                    <div class="menu-item" onclick="window.location='{{ route('lifestyle.page') }}'">
                        <img src="{{ asset('images/icon-lifestyle.png') }}" alt="lifestyle">
                        <span>Lifestyle</span>
                    </div>

                    <div class="menu-item" onclick="window.location='{{ route('profile.page') }}'">
                        <img src="{{ asset('images/user.png') }}" alt="profile">
                        <span>Profil</span>
                    </div>
                </div>
            </div>
            <div class="wadah-prediksi">
                <div class="kolom-input-form card-container">
                    <form action="#" method="POST" class="form-prediksi">
                        <h2 class="form__judul">Formulir Diabetes</h2>
                        <p class="form__deskripsi">Isi form sesuai dengan hasil terakhir pengecekan dari dokter agar sistem dapat membantu memanajemen kondisi tubuh untuk pasien diabetes</p>
                        <input type="number" step="0.01" name="glukosa" placeholder="Glukosa" required class="form__input">
                        <input type="number" step="0.01" name="tekanan_darah" placeholder="Tekanan Darah" required class="form__input">
                        <input type="number" step="0.01" name="skinthickness" placeholder="SkinThickness" required class="form__input">
                        <input type="number" name="pregnancies" placeholder="Pregnancies" required class="form__input">
                        <input type="number" step="0.01" name="insulin" placeholder="Insulin" required class="form__input">
                        <input type="number" step="0.01" name="bmi" placeholder="BMI" required class="form__input">
                        <input type="number" step="0.01" name="riwayat_diabetes" placeholder="Riwayat Diabetes" required class="form__input">
                        <input type="number" name="usia" placeholder="Usia" required class="form__input">
                    </form> 
                </div>
                <div class="kolom-hasil-ai card-container">
                    <div class="hasil-ai__konten">
                        <h2 class="hasil-ai__judul">Bagus!!</h2>
                        <p class="hasil-ai__deskripsi">Lorem ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text</p>
                    </div>
                    <div class="hasil-ai__gambar">
                        <img src="{{ asset('images/good.jpg') }}" alt="Karakter Dokter AI"> 
                    </div>
                    <!-- Tombol generate: Menggunakan kelas btn-primary yang sudah diatur di CSS -->
                    <button type="submit" form="form-prediksi" class="hasil-ai__tombol-generate btn-primary">Generate</button>
                </div>
            </div>
        </main>
    </body>
</html>