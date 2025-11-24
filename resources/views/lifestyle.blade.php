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
                    <div class="menu-item" onclick="window.location='{{ route('diabetes.page') }}'">
                        <img src="{{ asset('images/icon-diabetes.png') }}" alt="diabetes">
                        <span>Diabetes</span>
                    </div>

                    <div class="menu-item active" onclick="window.location='{{ route('lifestyle.page') }}'">
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
                    <form action="#" method="POST" class="form-prediksi" id="form-prediksi">
                        <h2 class="form__judul">Formulir Gaya Hidup</h2>
                        <p class="form__deskripsi">
                            Pilih data gaya hidup kamu untuk dianalisis oleh sistem.
                        </p>

                        <!-- CHECKBOX -->
                        <label class="form__label">Makanan yang Dikonsumsi</label>
                        <div class="checkbox-group">
                            <label><input type="checkbox" name="makanan[]" value="Sayuran"> Sayuran</label>
                            <label><input type="checkbox" name="makanan[]" value="Buah-buahan"> Buah-buahan</label>
                            <label><input type="checkbox" name="makanan[]" value="Nasi Putih"> Nasi Putih</label>
                            <label><input type="checkbox" name="makanan[]" value="Makanan Manis"> Makanan Manis</label>
                            <label><input type="checkbox" name="makanan[]" value="Makanan Cepat Saji"> Makanan Cepat Saji</label>
                        </div>
                        <br>

                        <label class="form__label">Olahraga yang Dilakukan</label>
                        <div class="checkbox-group">
                            <label><input type="checkbox" name="makanan[]" value="Lari"> Sayuran</label>
                            <label><input type="checkbox" name="makanan[]" value="Jalan Kaki"> Buah-buahan</label>
                            <label><input type="checkbox" name="makanan[]" value="Senam Ringan"> Nasi Putih</label>
                            <label><input type="checkbox" name="makanan[]" value="Berenang"> Makanan Manis</label>
                            <label><input type="checkbox" name="makanan[]" value="Tidak Berolahraga"> Makanan Cepat Saji</label>
                        </div>
                        <br>

                        <label class="form__label">Aktivitas Harian</label>
                        <div class="checkbox-group">
                            <label><input type="checkbox" name="makanan[]" value="Berkerja didepan komputer"> Sayuran</label>
                            <label><input type="checkbox" name="makanan[]" value="Banyak duduk"> Buah-buahan</label>
                            <label><input type="checkbox" name="makanan[]" value="Aktif bergerak"> Nasi Putih</label>
                            <label><input type="checkbox" name="makanan[]" value="Pekerjaan Fisik"> Makanan Manis</label>
                            <label><input type="checkbox" name="makanan[]" value="Kombinasi aktivitas"> Makanan Cepat Saji</label>
                        </div>
                        <br>
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
                    <button type="submit" form="form-prediksi" class="hasil-ai__tombol-generate btn-primary">Generate</button>
                </div>
            </div>
        </main>
    </body>
</html>