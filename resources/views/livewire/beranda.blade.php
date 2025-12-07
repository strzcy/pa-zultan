<div class="container mt-4">

    <div class="row">
        <div class="col-12 text-center mb-4">
            <h2 class="fw-bold" style="color:#ff4fa3;">
                💗 Selamat Datang di Dashboard Toko PinkCute 💗
            </h2>
            <p style="color:#cc4f8b;">
                Kelola transaksi, produk, laporan, dan pengguna dengan cepat & mudah~
            </p>
        </div>
    </div>

    <div class="row">

        <!-- Card Transaksi -->
        <div class="col-md-3 mb-3">
            <div class="card shadow-sm border-0" style="border-radius:15px;">
                <div class="card-body text-center">
                    <h4 style="color:#ff6fb5;">🛍 Transaksi</h4>
                    <p>Mulai transaksi baru dan kelola belanja pelanggan.</p>
                    <a href="{{ route('transaksi') }}" class="btn btn-primary w-100">Lihat</a>
                </div>
            </div>
        </div>

        <!-- Card Produk -->
        <div class="col-md-3 mb-3">
            <div class="card shadow-sm border-0" style="border-radius:15px;">
                <div class="card-body text-center">
                    <h4 style="color:#ff6fb5;">📦 Produk</h4>
                    <p>Kelola data produk mulai dari stok hingga harga.</p>
                    <a href="{{ route('produk') }}" class="btn btn-primary w-100">Lihat</a>
                </div>
            </div>
        </div>

        <!-- Card Pengguna -->
        <div class="col-md-3 mb-3">
            <div class="card shadow-sm border-0" style="border-radius:15px;">
                <div class="card-body text-center">
                    <h4 style="color:#ff6fb5;">👤 Pengguna</h4>
                    <p>Atur akun kasir maupun admin di sistem.</p>
                    <a href="{{ route('user') }}" class="btn btn-primary w-100">Lihat</a>
                </div>
            </div>
        </div>

        <!-- Card Laporan -->
        <div class="col-md-3 mb-3">
            <div class="card shadow-sm border-0" style="border-radius:15px;">
                <div class="card-body text-center">
                    <h4 style="color:#ff6fb5;">📄 Laporan</h4>
                    <p>Cek laporan transaksi harian, mingguan, atau bulanan.</p>
                    <a href="{{ route('laporan') }}" class="btn btn-primary w-100">Lihat</a>
                </div>
            </div>
        </div>

    </div>

</div>
