<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nota Transaksi - TRX-001</title>
    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f4f6f9;
            font-family: 'Courier New', Courier, monospace;
        }
        .struk-wrapper {
            max-width: 360px;
            margin: 30px auto;
            background: #ffffff;
            padding: 20px;
            border-radius: 6px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            color: #000;
        }
        .garis-putus {
            border-top: 1px dashed #333;
            margin: 12px 0;
        }
        .garis-ganda {
            border-top: 2px double #333;
            margin: 12px 0;
        }
        .baris-info {
            display: flex;
            justify-content: space-between;
            font-size: 13px;
            margin-bottom: 4px;
        }
        .status-badge {
            border: 1px solid #000;
            padding: 2px 8px;
            font-weight: bold;
            font-size: 13px;
            display: inline-block;
        }

        /* Aturan khusus saat struk dicetak (Print) */
        @media print {
            body {
                background-color: #ffffff;
            }
            .struk-wrapper {
                box-shadow: none;
                margin: 0;
                padding: 0;
                max-width: 100%;
                width: 80mm; /* Ukuran standar kertas thermal kasir */
            }
            .no-print {
                display: none !important;
            }
        }
    </style>
</head>
<body>

<div class="struk-wrapper">
    <!-- HEADER TOKO -->
    <div class="text-center">
        <h5 class="fw-bold mb-1">LAUNDRY APP</h5>
        <p class="mb-0" style="font-size: 12px;">Jl. Contoh Alamat No. 123, Kota</p>
        <p class="mb-0" style="font-size: 12px;">Telp: 0812-3456-7890</p>
    </div>

    <div class="garis-ganda"></div>

    <!-- INFO TRANSAKSI & PELANGGAN -->
    <div class="baris-info">
        <span>No. Nota</span>
        <span class="fw-bold">TRX-001</span>
    </div>
    <div class="baris-info">
        <span>Tanggal</span>
        <span>18/11/2026</span>
    </div>
    <div class="baris-info">
        <span>Pelanggan</span>
        <span>Budi Santoso (Member)</span>
    </div>
    <div class="baris-info">
        <span>No. HP</span>
        <span>081234567890</span>
    </div>

    <div class="garis-putus"></div>

    <!-- DETAIL LAYANAN -->
    <div style="font-size: 13px;">
        <div class="fw-bold">Cuci Komplit</div>
        <div class="baris-info">
            <span>3.5 kg x Rp 7.000</span>
            <span>Rp 24.500</span>
        </div>
    </div>

    <div class="garis-putus"></div>

    <!-- RINCIAN BIAYA -->
    <div class="baris-info">
        <span>Subtotal</span>
        <span>Rp 24.500</span>
    </div>
    <div class="baris-info">
        <span>Diskon Member (10%)</span>
        <span>- Rp 2.450</span>
    </div>

    <div class="garis-putus"></div>

    <div class="baris-info fw-bold" style="font-size: 15px;">
        <span>TOTAL BAYAR</span>
        <span>Rp 22.050</span>
    </div>

    <div class="text-center mt-3">
        <span class="status-badge">STATUS: LUNAS</span>
    </div>

    <div class="garis-ganda"></div>

    <!-- FOOTER STRUK -->
    <div class="text-center" style="font-size: 12px;">
        <p class="mb-1">Terima kasih telah mempercayakan</p>
        <p class="mb-0">cucian Anda kepada kami!</p>
    </div>

    <!-- TOMBOL AKSI (HILANG SAAT DIPRINT) -->
    <div class="d-grid gap-2 mt-4 no-print" style="font-family: sans-serif;">
        <button onclick="window.print()" class="btn btn-primary btn-sm fw-bold">Cetak Struk</button>
        <a href="kasir.php" class="btn btn-outline-secondary btn-sm">Kembali ke Kasir</a>
    </div>
</div>

</body>
</html>