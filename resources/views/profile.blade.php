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
                    <h1 class="hero__judul-highlight">Profile</h1>
                    <p class="salam__deskripsi">Lorem ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text</p>
                </div>
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
            <div class="wadah-prediksi">
                <div class="kolom-input-form card-container">
                    <form action="#" method="POST" class="form-prediksi">
                        <h2 class="form__judul">Informasi Profile</h2>
                        <p class="form__deskripsi">Isi form sesuai dengan hasil terakhir pengecekan dari dokter agar sistem dapat membantu memanajemen kondisi tubuh untuk pasien diabetes</p>
                        <input type="text" name="nama" placeholder="Nama Lengkap" required class="form__input">
                        <input type="email" name="email" placeholder="Email" required class="form__input">
                        <input type="tel" name="telepon" placeholder="Nomor Telepon" required class="form__input">
                        <select name="gender" class="form__select" required>
                            <option value="" disabled selected>Pilih Jenis Kelamin</option>
                            <option value="male">Laki-laki</option>
                            <option value="female">Perempuan</option>
                        </select>
                        <div class="form-group-with-icon">
                            <input type="password" name="password" id="password_input" placeholder="Password" class="form__input">
                            <i class="fas fa-eye-slash password-toggle-icon" onclick="togglePasswordVisibility()"></i>  
                        </div>
                        <button type="submit" class="btn-primary btn-simpan">Simpan</button>
                    </form> 
                </div>
                <div class="kolom-hasil-ai card-container">
                    <div class="hasil-ai__gambar">
                        <img src="{{ asset('images/user.png') }}" alt="Karakter Dokter AI"> 
                    </div>
                    <button type="submit" form="form-prediksi" class="hasil-ai__tombol-generate btn-primary">Ganti Profile</button>
                    <button type="submit" form="form-prediksi" class="btn_ganti-password btn-mid">Ubah Password</button>
                    <button type="button" class="btn-logout" title="Keluar Akun" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="fa-solid fa-arrow-right-from-bracket"></i>
                    </button>
                </div>
            </div>
        </main> 
        <script>
            function togglePasswordVisibility() {
                const passwordInput = document.getElementById('password_input');
                const toggleIcon = document.querySelector('.password-toggle-icon');

                if (passwordInput.type === 'password') {
                    passwordInput.type = 'text';
                    toggleIcon.classList.remove('fa-eye-slash');
                    toggleIcon.classList.add('fa-eye');
                } else {
                    passwordInput.type = 'password';
                    toggleIcon.classList.remove('fa-eye');
                    toggleIcon.classList.add('fa-eye-slash');
                }
            }
        </script>
    </body>
</html>