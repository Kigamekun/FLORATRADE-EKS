<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SURAT PERNYATAAN KEBENARAN DOKUMEN</title>

    <style>
        .container {
            padding-right: 15px;
            padding-left: 15px;
            margin-right: auto;
            margin-left: auto;
        }
            @media (min-width: 768px) {
            .container {
                width: 750px;
            }
        }
            @media (min-width: 992px) {
            .container {
                width: 970px;
            }
        }
            @media (min-width: 1200px) {
            .container {
                width: 1170px;
            }
        }
        *,h1,h2,h3,h4,h5,h6,p{
            font-family: "Times New Roman", Times, serif;
            margin: 0;
        }
        .wrapperPDF .container .headPDF p {
            font-size: 14px;
        }
        .wrapperPDF .container .headPDF .stempel {
            position: absolute;
            left: 0%;
            top: 2%;
        }
        .wrapperPDF .container .headPDF .stempel img {
            width: 100%;
            max-width: 100px;
        }
        .wrapperPDF .container {
            position: relative;
        }
    </style>

    <div class="wrapperPDF">
        <div class="container">
            <div class="headPDF" style="border-bottom: 4px solid #333; padding: 1.5rem 0; position: relative;">
                <div class="stempel">
                    <img src="./assets/img/Planterish-ICON.png" alt="">
                </div>
                <div style="text-align: center; position: relative; z-index: 2;">
                    <h4 style="font-weight: 600; margin-bottom: .5rem;">CV. PLANTERINDO ASRI</h4>
                    <p >Jl. Cijahe No.46 RT.003 RW.001, Kel. Curugmekar, Kec. Bogor Barat</p>
                    <p>Kota Bogor Jawa Barat 16113</p>
                    <p>Telp: +62 811-1193545, +62 851-5640-5248</p>
                    <p>Email: admin@planterindoasri.com</p>
                </div>
            </div>

            <div class="bodyPDF" style="padding: 1.5rem;">
                <div style="margin-bottom: 2.5rem; text-align: center;">
                    <p style="font-weight: 600;">SURAT PERNYATAAN KEBENARAN DOKUMEN</p>
                    <p>No: {{$pengajuan->pengajuan_id}}</p>
                </div>
                <div class="contentPDF">
                    <p style="margin-bottom: 1.5rem;">Saya yang bertanda tangan dibawah ini :</p>
                    <table style="margin-bottom: 1.5rem;">
                        <tbody>
                            <tr>
                                <td>Nama</td>
                                <td>: Ajat Supriatna</td>
                            </tr>
                            <tr>
                                <td>Alamat</td>
                                <td>: Kp. Cijahe RT.004 RW.002, Kel. Curugmekar, Kec. Bogor Barat, Kota Bogor 16113</td>
                            </tr>
                            <tr>
                                <td>Jabatan</td>
                                <td>: Direktur</td>
                            </tr>
                        </tbody>
                    </table>
                    <p style="margin-bottom: 1.5rem;">Dengan ini menyatakan bahwa semua dokumen yang disampaikan sebagai persyaratan permohonan Pemasukan/Pengeluaran Benih Hortikultura adalah benar dan sah.</p>
                    <p style="margin-bottom: 1.5rem;">Apabila dikemudian hari ternyata melanggar atau pernyataan ini tidak benar, maka kami siap menerima sanksi yang berlaku. Demikian surat pernyataan ini kami buat dengan sebenarnya untuk dipergunakan sebagaimana mesti</p>
                    <div style="width: 100%; display: flex; justify-content: start; align-items: flex-start;">
                        <div class="wrapperSignature">
                            <p style="margin: 0;" class="date">Bogor,{{ date('d F Y', strtotime(now())) }}</p>
                            <div id="signature" style="padding: 3rem 0;"></div>
                            <p style="margin: 0;">Ajat Supriatna</p>
                            <p style="margin: 0;">(Direktur)</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</head>
<body>


</body>
</html>
