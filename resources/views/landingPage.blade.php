<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Diabelens - Kelola Diabetes</title>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    </head>
    <body>
        @include('navbar')
        <section class="bagian-hero" id="home">
            <div class="hero__konten">
                <h1 class="hero__judul">Kelola Diabetes Lebih Mudah, Cepat, dan Terarah dengan <span class="hero__judul-highlight">Diabelens</span></h1>
                <p class="hero__deskripsi">Sistem manajemen pasien diabetes yang membantu fasilitas kesehatan mengelola pasien secara terintegrasi dan memberikan kemudahan pasien mengakses layanan terbaik.</p>
                <button class="hero__tombol-utama btn-primary">Mulai Sekarang</button>
            </div>
            <div class="hero__gambar">
                <img src="{{ asset('images/doctor1.png') }}" alt="logo1">
                </div>
        </section>
        <section class="bagian-penjelasan section">
            <div class="penjelasan__gambar">
                <img src="{{ asset('images/doctor2.png') }}" alt="logo2">
                </div>
            <div class="penjelasan__konten">
                <!-- Judul menggunakan kelas section-title baru -->
                <h2 class="penjelasan__judul section-title">Mengapa Sistem Manajemen Diabetes Dibutuhkan?</h2>
                <p class="penjelasan__deskripsi">Pendekatan terpadu untuk pasien diabetes menuntut fasilitas kesehatan untuk memiliki sistem yang cepat, akurat, dan terintegrasi. Dengan Diabelens, kualitas layanan meningkat, dan penanganan pasien merasakan ketika dokter menggunakan teknologi AI.</p>
            </div>
        </section>
        <section class="bagian-fitur section"id="fitur">
            <!-- Judul dan Subjudul menggunakan kelas baru -->
            <h2 class="fitur__judul section-title">Fitur</h2>
            <p class="fitur__subjudul section-subtitle">Lorem ipsum is simply dummy text of the printing and typesetting industry.</p>

            <div class="fitur__wadah-kartu">
                <div class="fitur__kartu">
                    <div class="kartu__ikon-wadah">
                        <i class="fa-solid fa-bell-concierge kartu__ikon"></i> </div>
                    <h3 class="kartu__judul">Monitoring Riwayat Diabetes Pasien</h3>
                    <p class="kartu__deskripsi">Lorem ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                </div>

                <div class="fitur__kartu">
                    <div class="kartu__ikon-wadah">
                        <i class="fa-solid fa-heart-pulse kartu__ikon"></i> </div>
                    <h3 class="kartu__judul">Monitoring Gaya Hidup Pasien Diabetes</h3>
                    <p class="kartu__deskripsi">Lorem ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                </div>
            </div>
        </section>
        <section class="bagian-tutorial section section--dark" id="tutorial">
            <!-- Judul dan Subjudul menggunakan kelas baru, warna diatur oleh section--dark -->
            <h2 class="tutorial__judul section-title">Tutorial</h2>
            <p class="tutorial__subjudul section-subtitle">Lorem ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>

            <div class="tutorial__wadah-langkah">
                <div class="langkah__item">
                    <span class="langkah__nomor">1</span>
                    <h4 class="langkah__judul">Monitoring Riwayat Diabetes Pasien</h4>
                    <p class="langkah__deskripsi">Lorem ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the.</p>
                </div>
                <div class="langkah__item">
                    <span class="langkah__nomor">2</span>
                    <h4 class="langkah__judul">Monitoring Riwayat Diabetes Pasien</h4>
                    <p class="langkah__deskripsi">Lorem ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the.</p>
                </div>
                <div class="langkah__item">
                    <span class="langkah__nomor">3</span>
                    <h4 class="langkah__judul">Monitoring Riwayat Diabetes Pasien</h4>
                    <p class="langkah__deskripsi">Lorem ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the.</p>
                </div>
                <div class="langkah__item">
                    <span class="langkah__nomor">4</span>
                    <h4 class="langkah__judul">Monitoring Riwayat Diabetes Pasien</h4>
                    <p class="langkah__deskripsi">Lorem ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the.</p>
                </div>
                <div class="langkah__item">
                    <span class="langkah__nomor">5</span>
                    <h4 class="langkah__judul">Monitoring Riwayat Diabetes Pasien</h4>
                    <p class="langkah__deskripsi">Lorem ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the.</p>
                </div>
                <div class="langkah__item">
                    <span class="langkah__nomor">6</span>
                    <h4 class="langkah__judul">Monitoring Riwayat Diabetes Pasien</h4>
                    <p class="langkah__deskripsi">Lorem ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the.</p>
                </div>
            </div>
        </section>
    </body>
    <footer class="kaki-halaman">
        <div class="kaki-halaman__wadah">
            <div class="kaki-halaman__kolom">
                <h4 class="kaki-halaman__judul-kolom">Diabelens</h4>
                <p class="kaki-halaman__teks">Sistem manajemen pasien diabetes berbasis AI.</p>
                <div class="kaki-halaman__sosmed">
                    <a href="#">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                </div>
            </div>
            <div class="kaki-halaman__kolom">
                <h4 class="kaki-halaman__judul-kolom">Navigasi</h4>
                <a href="#" class="kaki-halaman__tautan">Home</a>
                <a href="#" class="kaki-halaman__tautan">Fitur</a>
                <a href="#" class="kaki-halaman__tautan">Tutorial</a>
                <a href="#" class="kaki-halaman__tautan">Ketentuan Layanan</a>
            </div>
            <div class="kaki-halaman__kolom">
                <h4 class="kaki-halaman__judul-kolom">Hubungi Kami</h4>
                <p class="kaki-halaman__teks">
                    <i class="fas fa-map-marker-alt"></i> Jl. Sehat No. 1, Jakarta
                </p>
                <p class="kaki-halaman__teks">
                    <i class="fas fa-envelope"></i> info@trackingd.com
                </p>
                <p class="kaki-halaman__teks">
                    <i class="fas fa-phone"></i> +62 812-3456-7890
                </p>
            </div>
        </div>
        <div class="kaki-halaman__hak-cipta">
            &copy; 2024 Diabelens. Semua Hak Dilindungi.
        </div>
    </footer>
    
<!-- -------------------------------------------------
============ (Pop-up Card) Login/Register ============
-------------------------------------------------  -->
    <div class="modal-overlay" id="auth-modal">
        <div class="auth-card">
            <button class="close-btn" id="close-modal-btn">&times;</button>
            
            <!-- Form Login -->
            <form class="form-login" id="login-form">
                <h2>Login ke Diabelens</h2>
                <div class="form-group">
                    <input type="email" class="form-input" placeholder="Alamat Email" required>
                </div>
                <div class="form-group">
                    <input type="password" class="form-input" placeholder="Kata Sandi" required>
                </div>
                <button type="submit" class="form-submit-btn btn-primary">Masuk</button>
                <div class="form-link-switch">
                    Belum punya akun? <a href="#" id="switch-to-register">Daftar Sekarang</a>
                </div>
            </form>

            <!-- Form Register -->
            <form class="form-register" id="register-form">
                <h2>Daftar Akun Baru</h2>
                <div class="form-group">
                    <input type="text" class="form-input" placeholder="Nama Lengkap" required>
                </div>
                <div class="form-group">
                    <input type="email" class="form-input" placeholder="Alamat Email" required>
                </div>
                <div class="form-group">
                    <input type="password" class="form-input" placeholder="Kata Sandi (min. 6 karakter)" required>
                </div>
                <div class="form-group">
                    <input type="password" class="form-input" placeholder="Konfirmasi Kata Sandi" required>
                </div>
                <button type="submit" class="form-submit-btn btn-primary">Daftar</button>
                <div class="form-link-switch">
                    Sudah punya akun? <a href="#" id="switch-to-login">Login</a>
                </div>
            </form>
        </div>
    </div>

    <!-- JavaScript untuk Logika Modal -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const openModalBtn = document.getElementById('open-modal-btn');
            const closeModalBtn = document.getElementById('close-modal-btn');
            const authModal = document.getElementById('auth-modal');
            const loginForm = document.getElementById('login-form');
            const registerForm = document.getElementById('register-form');
            const switchToRegisterLink = document.getElementById('switch-to-register');
            const switchToLoginLink = document.getElementById('switch-to-login');

            // --- Fungsi untuk Mengontrol Modal ---
            const openModal = () => {
                authModal.classList.add('open');
                document.body.style.overflow = 'hidden'; // Mencegah scroll pada body
            };

            const closeModal = () => {
                authModal.classList.remove('open');
                document.body.style.overflow = ''; // Mengizinkan scroll kembali
            };

            // Event Listeners untuk Buka/Tutup Modal
            openModalBtn.addEventListener('click', openModal);
            closeModalBtn.addEventListener('click', closeModal);

            // Tutup modal jika mengklik di luar card
            authModal.addEventListener('click', (e) => {
                if (e.target === authModal) {
                    closeModal();
                }
            });

            // Tutup modal jika tombol ESC ditekan
            document.addEventListener('keydown', (e) => {
                if (e.key === 'Escape' && authModal.classList.contains('open')) {
                    closeModal();
                }
            });

            // --- Fungsi untuk Mengganti Form ---
            const showLoginForm = (e) => {
                if (e) e.preventDefault();
                loginForm.style.display = 'block';
                registerForm.style.display = 'none';
            };

            const showRegisterForm = (e) => {
                if (e) e.preventDefault();
                loginForm.style.display = 'none';
                registerForm.style.display = 'block';
            };

            // Event Listeners untuk Ganti Form
            switchToRegisterLink.addEventListener('click', showRegisterForm);
            switchToLoginLink.addEventListener('click', showLoginForm);

            // Pastikan form login yang ditampilkan saat pertama kali modal dibuka
            showLoginForm();

            // --- Logika Dummy Form Submission ---
            loginForm.addEventListener('submit', (e) => {
                e.preventDefault();
                console.log("Login form submitted (Dummy)");
                alert("Login berhasil (simulasi).");
                closeModal();
            });

            registerForm.addEventListener('submit', (e) => {
                e.preventDefault();
                console.log("Register form submitted (Dummy)");
                alert("Pendaftaran berhasil (simulasi).");
                closeModal();
            });
        });
    </script>
</html>