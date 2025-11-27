<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil - Diabelens</title>

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
</head>

<body>
    <main class="bagian-fitur-utama">

        <!-- Bagian Salam Pengguna + Menu -->
        <div class="container-salam-menu">
            <div class="salam-pengguna">
                <h1 class="salam__judul">Profil Anda</h1>
                <p class="salam__deskripsi">
                    Kelola informasi akun dan perbarui detail pribadi Anda untuk pengalaman yang lebih baik.
                </p>
            </div>

            <!-- MENU -->
            <div class="page-menu">

                <div class="menu-item" onclick="window.location='{{ route('diabetes.page') }}'">
                    <img src="{{ asset('images/icon-diabetes.png') }}" alt="diabetes">
                    <span>Diabetes</span>
                </div>

                <div class="menu-item" onclick="window.location='{{ route('lifestyle.page') }}'">
                    <img src="{{ asset('images/icon-lifestyle.png') }}" alt="lifestyle">
                    <span>Lifestyle</span>
                </div>

                <div class="menu-item active" onclick="window.location='{{ route('profile.page') }}'">
                    <img src="{{ asset('images/user.png') }}" alt="profile">
                    <span>Profil</span>
                </div>

            </div>
        </div>

        <!-- Konten Profil -->
        <div class="wadah-prediksi">

            <!-- Card Profil -->
            <div class="card-container kolom-input-form" style="max-height: fit-content;">
                <h2 class="form__judul">Informasi Akun</h2>
                <p class="form__deskripsi">Perbarui data pribadi anda</p>

                <form method="POST" action="#" class="form-prediksi" id="form-profil">
                    @csrf

                    <label class="form__label">Nama Lengkap</label>
                    <input type="text" name="nama" class="form__input" placeholder="Nama Anda" required>

                    <label class="form__label">Email</label>
                    <input type="email" name="email" class="form__input" placeholder="Email Anda" required>

                    <label class="form__label">Nomor Telepon</label>
                    <input type="text" name="telepon" class="form__input" placeholder="08xxxxxxxxxx">

                    <label class="form__label">Jenis Kelamin</label>
                    <select name="gender" class="form__input">
                        <option value="">Pilih Jenis Kelamin</option>
                        <option value="L">Laki-laki</option>
                        <option value="P">Perempuan</option>
                    </select>

                    <label class="form__label">Tanggal Lahir</label>
                    <input type="date" name="tanggal_lahir" class="form__input">

                    <button type="submit" class="btn-primary" style="margin-top: 20px;">Simpan Perubahan</button>

                </form>
            </div>

            <!-- Card Gambar / Info -->
            <div class="card-container kolom-hasil-ai">
                <div class="hasil-ai__konten">
                    <h2 class="hasil-ai__judul">Profil</h2>
                    <p class="hasil-ai__deskripsi">
                        Informasi pribadi Anda digunakan untuk mempersonalisasi analisis dan rekomendasi dalam aplikasi.
                    </p>
                </div>

                <div class="hasil-ai__gambar">
                    <img src="{{ asset('images/user.png') }}" alt="Foto Profil" style="width:200px;">
                </div>
            </div>

        </div>

    </main>
</body>
</html>
