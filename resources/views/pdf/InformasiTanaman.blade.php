<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document Informasi Tanaman</title>

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

        * {
            font-family: "Times New Roman", Times, serif;
        }

        table tbody tr td {
            vertical-align: top;
            font-size: 14px;
        }

        table tbody .head td {
            padding-left: 0;
            font-weight: 600;
        }

        table tbody tr .p-left {
            padding-left: .8rem;
        }

        table tbody tr .p-left-2 {
            padding-left: 2.4rem;
        }

        table tbody tr td .haveNumber {
            padding-left: .8rem;
        }

        table tbody tr .choice p {
            margin: 0;
        }

        table tbody tr .choice p .valueChoice {
            padding-left: .1rem;
        }

        table tbody .informTanaman td {
            padding: .7rem 0 .7rem .7rem;
        }

        table tbody .informTanaman td:nth-child(2) {
            padding: .7rem 0;
        }

        .wrapperTable table {
            border: 1px solid #353535;
        }

        .wrapperTable table tr td {
            border-bottom: 1px solid #353535;
            padding: .3rem 0;
        }

        .wrapperTable table tr:last-child td {
            border-bottom: none;
        }

        .wrapperTable {
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
            width: 100%;
            padding: 2.5rem 0;
        }

    </style>
</head>

<body>
    <div class="wrapperPDF">
        <div class="container">
            <p style="font-weight :700; text-align: center;">FORMULIR INFORMASI TANAMAN YANG AKAN DIKELUARKAN</p>

            <table style="width: fit-content;">
                <tbody>
                    <tr class="head">
                        <td style="padding: 1.5rem 0;">Informasi Pemohon</td>
                    </tr>
                    <tr>
                        <td class="p-left">1.<span class="haveNumber">Nama Produsen</span></td>
                        <td>: CV PLANTERINDO ASRI</td>
                    </tr>
                    <tr>
                        <td class="p-left">2.<span class="haveNumber">Nama Pemilik</span></td>
                        <td>: Ajat Supriatna</td>
                    </tr>
                    <tr>
                        <td class="p-left">3.<span class="haveNumber">Nomor Identitas (KTP/SIM)</span></td>
                        <td>: 3271040906970009</td>
                    </tr>
                    <tr>
                        <td class="p-left">4.<span class="haveNumber">Alamat</span></td>
                    </tr>
                    <tr>
                        <td class="p-left-2">Jalan</td>
                        <td>: Jl. Cijahe No.46 RT.03 RW.01</td>
                    </tr>
                    <tr>
                        <td class="p-left-2">Kelurahan</td>
                        <td>: Curugmekar</td>
                    </tr>
                    <tr>
                        <td class="p-left-2">Kecamatan</td>
                        <td>: Bogor Barat</td>
                    </tr>
                    <tr>
                        <td class="p-left-2">Kab/Kota</td>
                        <td>: Kota Bogor</td>
                    </tr>
                    <tr>
                        <td class="p-left-2">Provinsi</td>
                        <td>: Jawa Barat</td>
                    </tr>
                    <tr>
                        <td class="p-left-2">Kode Pos</td>
                        <td>: 16113</td>
                    </tr>
                    <tr>
                        <td class="p-left">5.<span class="haveNumber">No. Telepon/HP</span></td>
                        <td>: 085156405248</td>
                    </tr>
                    <tr>
                        <td class="p-left">6.<span class="haveNumber">Alamat Email</span></td>
                        <td>: admin@planterindoasri.com</td>
                    </tr>
                    <tr class="head">
                        <td style="padding: 1.5rem 0;">Informasi tanaman yang akan dikeluarkan</td>
                    </tr>
                    <tr class="informTanaman">
                        <td class="p-left">1.<span class="haveNumber">Tujuan Pengeluaran</span></td>
                        <td class="choice">
                            <p>: <span class="valueChoice">Komersial</span></p>
                            <p><span class="valueChoice" style="padding-left: .6rem !important;">Non Komersial</span>
                            </p>
                        </td>
                    </tr>
                    <tr class="informTanaman">
                        <td class="p-left">2.<span class="haveNumber">Nama Tanaman yang Dikeluarkan</span>
                        </td>
                        <td>: Terlampir</td>
                    </tr>
                    <tr class="informTanaman">
                        <td class="p-left">3.<span class="haveNumber">Asal Usul Tanaman</span></td>
                        <td class="choice">
                            <p>: <span class="valueChoice">Penangkaran (Budidaya)</span></p>
                            <p><span class="valueChoice" style="padding-left: .6rem !important;">Kultur
                                    Jaringan</span></p>
                            <p><span class="valueChoice" style="padding-left: .6rem !important;">Hutan</span></p>
                        </td>
                    </tr>
                    <tr class="informTanaman">
                        <td class="p-left">4.<span class="haveNumber">Lokasi Pengambilan Tanaman</span></td>
                        <td>: Jl. Cijahe No.46 RT.03 RW.01, Kel. Curugmekar, Kec. Bogor Barat,Kota Bogor, Jawa Barat
                            16113</td>
                    </tr>
                    <tr class="informTanaman">
                        <td class="p-left">5.<span class="haveNumber">Nama Nursery</span></td>
                        <td>: CV.PLANTERINDO ASRI</td>
                    </tr>
                </tbody>
            </table>

            <div class="announce" style="padding-top : 1rem;">
                <p style="margin-bottom: 0; font-size : 14px;" class="mb-4">Dengan ini kami sampaikan
                    informasi jenis tanaman yang akan dikeluarkan. Kami menyatakan bahwa informasi yang kami sampaikan
                    adalah benar. Apabila dikemudian hari ada kekeliruan atau ketidaksesuaian dengan informasi tersebut
                    maka kami bersedia menerima konsekuensi sesuai dengan aturan yang berlaku.</p>
                <p style="font-size : 14px;">Terimakasih</p>
            </div>


            <div class="signaturee" style="width :100%; display:block; float:right;">
                <div class="wrapperSignature" style="padding: 1rem 5rem 1rem 1rem; float:right; text-align:center;">
                    <p style="margin: 0; font-size : 14px;" class="date">Bogor,
                        {{ date('d F Y', strtotime(now())) }}</p>
                    <div id="signature" style="padding: 3rem 0;"></div>
                    <p style="margin: 0; font-size : 14px;">Nama : Ajat Supriatna</p>
                    <p style="margin: 0; font-size : 14px;">Jabatan : Direktur</p>
                </div>
            </div>

            <br>
            <br>
            <br>
            <br>
            <br>
            <div class="wrapperTable">
                <table style="width: 100%;">
                    <tbody>
                        <tr>
                            <td style="text-align: center; font-weight: 600;">Nama Tanaman</td>
                        </tr>
                        @foreach ($sub_pengajuan as $item)

                            <tr>
                                <td>{{ DB::table('base_plants')->where('id', $item->tanaman_id)->first()->name_latin }}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>


</body>

</html>
