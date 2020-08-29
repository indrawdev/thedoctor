<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <style>
            table.receipt {
                border-collapse: collapse;
            }
            table.receipt td {
                text-align: left;
                padding: 0.2em;
            }
            table.receipt td.qty {
                text-align: center;
            }
            table.receipt td.amount {
                text-align: right;
            }
            table.receipt th, table.receipt td {
                border: 1px solid black;
            }
        </style>
    </head>
    <body>
        <h3 align="center">KWITANSI</h3>
        <p>Telah terima pembayaran pasien atas nama :</p>
        <table width="100%">
            <tr>
                <td width="20%"><b>Nama</b></td>
                <td width="3%">:</td>
                <td width="77%">Indra Pramana</td>
            </tr>
            <tr>
                <td width="20%"><b>Usia</b></td>
                <td width="3%">:</td>
                <td width="77%">33 tahun</td>
            </tr>
            <tr>
                <td width="20%"><b>Alamat</b></td>
                <td width="3%">:</td>
                <td width="77%">Jl. Banten No. 81, Jagakarsa, DKI Jakarta</td>
            </tr>
        </table>
        <p>Untuk pembayaran :</p>
        <table class="receipt" width="100%">
            <thead>
                <tr>
                    <th width="40%">Tindakan</th>
                    <th width="25%">Biaya</th>
                    <th width="10%">Jumlah</th>
                    <th width="25%">Total</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Pemeriksaan</td>
                    <td class="amount">50.000</td>
                    <td class="qty">1</td>
                    <td class="amount">50.000</td>
                </tr>
                <tr>
                    <td>Ijeksi</td>
                    <td class="amount">30.000</td>
                    <td class="qty">1</td>
                    <td class="amount">30.000</td>
                </tr>
            </tbody>
        </table>
        <br>
        <table class="receipt" width="100%">
            <thead>
                <tr>
                    <th width="40%">Obat</th>
                    <th width="25%">Biaya</th>
                    <th width="10%">Jumlah</th>
                    <th width="25%">Total</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Paracetamol</td>
                    <td class="amount">5.000</td>
                    <td class="qty">5</td>
                    <td class="amount">25.000</td>
                </tr>
                <tr>
                    <td>Antibiotik</td>
                    <td class="amount">100.000</td>
                    <td class="qty">1</td>
                    <td class="amount">100.000</td>
                </tr>
            </tbody>
        </table>
        <br>
        <table class="receipt" width="100%">
            <tr>
                <td width="75%" class="amount"><b>SUBTOTAL</b></td>
                <td width="25%" class="amount">215.000</td>
            </tr>
            <tr>
                <td width="75%" class="amount"><b>Biaya Admin</b></td>
                <td width="25%" class="amount">5.000</td>
            </tr>
            <tr>
                <td width="75%" class="amount"><b>PPN (10%)</b></td>
                <td width="25%" class="amount">22.000</td>
            </tr>
            <tr>
                <td width="75%" class="amount"><b>TOTAL</b></td>
                <td width="25%" class="amount"><b>242.000</b></td>
            </tr>
        </table>
        <p>Terbilang : <i>Dua Ratus Empat Puluh Dua Ribu Rupiah</i></p>
    </body>
</html>