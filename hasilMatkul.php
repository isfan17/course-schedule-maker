<!--
    Nama  : Isfan Adheltyo
    NIM   : 205150407111044
    Kelas : Pemrograman Web SI-C
-->
<?php

require 'functions.php';

$jmlhSenin = $_POST['jmlhSenin'];
$jmlhSelasa = $_POST['jmlhSelasa'];
$jmlhRabu = $_POST['jmlhRabu'];
$jmlhKamis = $_POST['jmlhKamis'];
$jmlhJumat = $_POST['jmlhJumat'];

$senin = array();
$selasa = array();
$rabu = array();
$kamis = array();
$jumat = array();

$displaySenin = "";
$displaySelasa = "";
$displayRabu = "";
$displayKamis = "";
$displayJumat = "";

for($i=0; $i<$jmlhSenin; $i++)
{
    $senin[$i] = array(
        "nama" => $_POST["seninNama$i"], 
        "mulai" => $_POST["seninMulai$i"],
        "selesai" => $_POST["seninSelesai$i"],
        "jam" => $_POST["seninMulai$i"] . " - " . $_POST["seninSelesai$i"],
        "link" => cekLink($_POST["seninLink$i"]) 
    );
}

for($i=0; $i<$jmlhSelasa; $i++)
{
    $selasa[$i] = array(
        "nama" => $_POST["selasaNama$i"], 
        "mulai" => $_POST["selasaMulai$i"],
        "selesai" => $_POST["selasaSelesai$i"],
        "jam" => $_POST["selasaMulai$i"] . " - " . $_POST["selasaSelesai$i"],
        "link" => cekLink($_POST["selasaLink$i"])
    );
}

for($i=0; $i<$jmlhRabu; $i++)
{
    $rabu[$i] = array(
        "nama" => $_POST["rabuNama$i"], 
        "mulai" => $_POST["rabuMulai$i"],
        "selesai" => $_POST["rabuSelesai$i"],
        "jam" => $_POST["rabuMulai$i"] . " - " . $_POST["rabuSelesai$i"],
        "link" => cekLink($_POST["rabuLink$i"])
    );
}

for($i=0; $i<$jmlhKamis; $i++)
{
    $kamis[$i] = array(
        "nama" => $_POST["kamisNama$i"], 
        "mulai" => $_POST["kamisMulai$i"],
        "selesai" => $_POST["kamisSelesai$i"],
        "jam" => $_POST["kamisMulai$i"] . " - " . $_POST["kamisSelesai$i"],
        "link" => cekLink($_POST["kamisLink$i"])
    );
}

for($i=0; $i<$jmlhJumat; $i++)
{
    $jumat[$i] = array(
        "nama" => $_POST["jumatNama$i"], 
        "mulai" => $_POST["jumatMulai$i"],
        "selesai" => $_POST["jumatSelesai$i"],
        "jam" => $_POST["jumatMulai$i"] . " - " . $_POST["jumatSelesai$i"],
        "link" => cekLink($_POST["jumatLink$i"])
    );
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS -->
    <link href="dist/output.css" rel="stylesheet">

    <title>Jadwal Mata Kuliah</title>
</head>

<body class="hasilMatkul">

    <div class="container px-5 mt-5 max-w-screen-sm">

        <div class="bg-teal-300 p-3 rounded-md">
            <h1 class="font-bold text-center text-3xl mb-3">JADWAL MATA KULIAH</h1>
            <!--HARI SENIN-->
            <?php if($jmlhSenin == 0) { $displaySenin = 'style= "display: none;" '; } ?>
            <div class="hasil mb-2" <?= $displaySenin; ?> >
                <h1 class="text-center text-lg font-bold mb-1">Hari SENIN</h1>
                <?php for($i=0; $i<$jmlhSenin; $i++) { ?>
                    <div class="jadwal border border-black rounded-md bg-senin flex p-2">
                        <div class="jam flex items-center p-2 bg-white rounded-md font-bold text-xl mr-2">
                            <p class=""><?= $senin[$i]['jam']; ?></p>
                        </div>
                        <div class="nama">
                            <div class="list h-fit">
                                <p class="text-lg font-medium"><?= $senin[$i]['nama']; ?></p>
                            </div>
                            <div class="list h-fit">
                                <!--KODE PHP UNTUK MEMERIKSA LINK KOSONG ATAU TIDAK-->
                                <?php if($senin[$i]['link'] != "") { ?>
                                    <a href="<?= $senin[$i]['link']; ?>" class="flex" target="_blank">
                                        <svg class="mr-1" style="width:24px;height:24px" viewBox="0 0 24 24">
                                            <path fill="currentColor" d="M17,10.5V7A1,1 0 0,0 16,6H4A1,1 0 0,0 3,7V17A1,1 0 0,0 4,18H16A1,1 0 0,0 17,17V13.5L21,17.5V6.5L17,10.5Z" />
                                        </svg>
                                        <p class="text-blue-700">Link Kuliah Sinkron</p>
                                    </a>
                                <?php } ?>

                                <?php if($senin[$i]['link'] == "") { ?>
                                    <p>-</p>
                                <?php } ?>        
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div> 
            
            <!--HARI SELASA-->
            <?php if($jmlhSelasa == 0) { $displaySelasa = 'style= "display: none;" '; } ?>
            <div class="hasil mb-2" <?= $displaySelasa; ?> >
                <h1 class="text-center text-lg font-bold mb-1">Hari SELASA</h1>
                <?php for($i=0; $i<$jmlhSelasa; $i++) { ?>
                    <div class="jadwal border border-black rounded-md bg-selasa flex p-2">
                        <div class="jam flex items-center p-2 bg-white rounded-md font-bold text-xl mr-2">
                            <p class=""><?= $selasa[$i]['jam']; ?></p>
                        </div>
                        <div class="nama">
                            <div class="list h-fit">
                                <p class="text-lg font-medium"><?= $selasa[$i]['nama']; ?></p>
                            </div>
                            <div class="list h-fit">
                                <!--KODE PHP UNTUK MEMERIKSA LINK KOSONG ATAU TIDAK-->
                                <?php if($selasa[$i]['link'] != "") { ?>
                                    <a href="<?= $selasa[$i]['link']; ?>" class="flex" target="_blank">
                                        <svg class="mr-1" style="width:24px;height:24px" viewBox="0 0 24 24">
                                            <path fill="currentColor" d="M17,10.5V7A1,1 0 0,0 16,6H4A1,1 0 0,0 3,7V17A1,1 0 0,0 4,18H16A1,1 0 0,0 17,17V13.5L21,17.5V6.5L17,10.5Z" />
                                        </svg>
                                        <p class="text-blue-700">Link Kuliah Sinkron</p>
                                    </a>
                                <?php } ?>

                                <?php if($selasa[$i]['link'] == "") { ?>
                                    <p>-</p>
                                <?php } ?>        
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
            
            <!--HARI RABU-->
            <?php if($jmlhRabu == 0) { $displayRabu = 'style= "display: none;" '; } ?>
            <div class="hasil mb-2" <?= $displayRabu; ?> >
                <h1 class="text-center text-lg font-bold mb-1">Hari RABU</h1>
                <?php for($i=0; $i<$jmlhRabu; $i++) { ?>
                    <div class="jadwal border border-black rounded-md bg-rabu flex p-2">
                        <div class="jam flex items-center p-2 bg-white rounded-md font-bold text-xl mr-2">
                            <p class=""><?= $rabu[$i]['jam']; ?></p>
                        </div>
                        <div class="nama">
                            <div class="list h-fit">
                                <p class="text-lg font-medium"><?= $rabu[$i]['nama']; ?></p>
                            </div>
                            <div class="list h-fit">
                                <!--KODE PHP UNTUK MEMERIKSA LINK KOSONG ATAU TIDAK-->
                                <?php if($rabu[$i]['link'] != "") { ?>
                                    <a href="<?= $rabu[$i]['link']; ?>" class="flex" target="_blank">
                                        <svg class="mr-1" style="width:24px;height:24px" viewBox="0 0 24 24">
                                            <path fill="currentColor" d="M17,10.5V7A1,1 0 0,0 16,6H4A1,1 0 0,0 3,7V17A1,1 0 0,0 4,18H16A1,1 0 0,0 17,17V13.5L21,17.5V6.5L17,10.5Z" />
                                        </svg>
                                        <p class="text-blue-700">Link Kuliah Sinkron</p>
                                    </a>
                                <?php } ?>

                                <?php if($rabu[$i]['link'] == "") { ?>
                                    <p>-</p>
                                <?php } ?>        
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div> 

            <!--HARI KAMIS-->
            <?php if($jmlhKamis == 0) { $displayKamis = 'style= "display: none;" '; } ?>
            <div class="hasil mb-2" <?= $displayKamis; ?> >
                <h1 class="text-center text-lg font-bold mb-1">Hari KAMIS</h1>
                <?php for($i=0; $i<$jmlhKamis; $i++) { ?>
                    <div class="jadwal border border-black rounded-md bg-kamis flex p-2">
                        <div class="jam flex items-center p-2 bg-white rounded-md font-bold text-xl mr-2">
                            <p class=""><?= $kamis[$i]['jam']; ?></p>
                        </div>
                        <div class="nama">
                            <div class="list h-fit">
                                <p class="text-lg font-medium"><?= $kamis[$i]['nama']; ?></p>
                            </div>
                            <div class="list h-fit">
                                <!--KODE PHP UNTUK MEMERIKSA LINK KOSONG ATAU TIDAK-->
                                <?php if($kamis[$i]['link'] != "") { ?>
                                    <a href="<?= $kamis[$i]['link']; ?>" class="flex" target="_blank">
                                        <svg class="mr-1" style="width:24px;height:24px" viewBox="0 0 24 24">
                                            <path fill="currentColor" d="M17,10.5V7A1,1 0 0,0 16,6H4A1,1 0 0,0 3,7V17A1,1 0 0,0 4,18H16A1,1 0 0,0 17,17V13.5L21,17.5V6.5L17,10.5Z" />
                                        </svg>
                                        <p class="text-blue-700">Link Kuliah Sinkron</p>
                                    </a>
                                <?php } ?>

                                <?php if($kamis[$i]['link'] == "") { ?>
                                    <p>-</p>
                                <?php } ?>        
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div> 

            <!--HARI JUMAT-->
            <?php if($jmlhJumat == 0) { $displayJumat = 'style= "display: none;" '; } ?>
            <div class="hasil mb-2" <?= $displayJumat; ?> >
                <h1 class="text-center text-lg font-bold mb-1">Hari JUMAT</h1>
                <?php for($i=0; $i<$jmlhJumat; $i++) { ?>
                    <div class="jadwal border border-black rounded-md bg-jumat flex p-2">
                        <div class="jam flex items-center p-2 bg-white rounded-md font-bold text-xl mr-2">
                            <p class=""><?= $jumat[$i]['jam']; ?></p>
                        </div>
                        <div class="nama">
                            <div class="list h-fit">
                                <p class="text-lg font-medium"><?= $jumat[$i]['nama']; ?></p>
                            </div>
                            <div class="list h-fit">
                                <!--KODE PHP UNTUK MEMERIKSA LINK KOSONG ATAU TIDAK-->
                                <?php if($jumat[$i]['link'] != "") { ?>
                                    <a href="<?= $jumat[$i]['link']; ?>" class="flex" target="_blank">
                                        <svg class="mr-1" style="width:24px;height:24px" viewBox="0 0 24 24">
                                            <path fill="currentColor" d="M17,10.5V7A1,1 0 0,0 16,6H4A1,1 0 0,0 3,7V17A1,1 0 0,0 4,18H16A1,1 0 0,0 17,17V13.5L21,17.5V6.5L17,10.5Z" />
                                        </svg>
                                        <p class="text-blue-700">Link Kuliah Sinkron</p>
                                    </a>
                                <?php } ?>

                                <?php if($jumat[$i]['link'] == "") { ?>
                                    <p>-</p>
                                <?php } ?>        
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>

        <form action="hasilMatkulBg.php" method="post" enctype="multipart/form-data">
            <!--UNTUK MENGIRIM DATA ARRAY PER HARI KE HALAMAN hasilMatkulBg.php-->
            <div class="kirim" style="display: none;">
                <!--Mengirim Data Array Senin ke Halaman hasilMatkulBg.php-->
                <input type="number" name="jmlhSenin" value=<?= $jmlhSenin ?>>
                <?php for($i=0; $i<$jmlhSenin; $i++) { ?>
                    <input type="text" name="seninNama<?= $i; ?>" value="<?= $senin[$i]['nama']; ?>">  
                    <input type="text" name="seninJam<?= $i; ?>" value="<?= $senin[$i]['jam']; ?>">
                    <input type="text" name="seninLink<?= $i; ?>" value="<?= $senin[$i]['link']; ?>">
                <?php } ?>

                <!--Mengirim Data Array Selasa ke Halaman hasilMatkulBg.php-->
                <input type="number" name="jmlhSelasa" value=<?= $jmlhSelasa ?>>
                <?php for($i=0; $i<$jmlhSelasa; $i++) { ?>
                    <input type="text" name="selasaNama<?= $i; ?>" value="<?= $selasa[$i]['nama']; ?>">  
                    <input type="text" name="selasaJam<?= $i; ?>" value="<?= $selasa[$i]['jam']; ?>">
                    <input type="text" name="selasaLink<?= $i; ?>" value="<?= $selasa[$i]['link']; ?>">
                <?php } ?>

                <!--Mengirim Data Array Rabu ke Halaman hasilMatkulBg.php-->
                <input type="number" name="jmlhRabu" value=<?= $jmlhRabu ?>>
                <?php for($i=0; $i<$jmlhRabu; $i++) { ?>
                    <input type="text" name="rabuNama<?= $i; ?>" value="<?= $rabu[$i]['nama']; ?>">  
                    <input type="text" name="rabuJam<?= $i; ?>" value="<?= $rabu[$i]['jam']; ?>">
                    <input type="text" name="rabuLink<?= $i; ?>" value="<?= $rabu[$i]['link']; ?>">
                <?php } ?>

                <!--Mengirim Data Array Kamis ke Halaman hasilMatkulBg.php-->
                <input type="number" name="jmlhKamis" value=<?= $jmlhKamis ?>>
                <?php for($i=0; $i<$jmlhKamis; $i++) { ?>
                    <input type="text" name="kamisNama<?= $i; ?>" value="<?= $kamis[$i]['nama']; ?>">  
                    <input type="text" name="kamisJam<?= $i; ?>" value="<?= $kamis[$i]['jam']; ?>">
                    <input type="text" name="kamisLink<?= $i; ?>" value="<?= $kamis[$i]['link']; ?>">
                <?php } ?>

                <!--Mengirim Data Array Jumat ke Halaman hasilMatkulBg.php-->
                <input type="number" name="jmlhJumat" value=<?= $jmlhJumat ?>>
                <?php for($i=0; $i<$jmlhJumat; $i++) { ?>
                    <input type="text" name="jumatNama<?= $i; ?>" value="<?= $jumat[$i]['nama']; ?>">  
                    <input type="text" name="jumatJam<?= $i; ?>" value="<?= $jumat[$i]['jam']; ?>">
                    <input type="text" name="jumatLink<?= $i; ?>" value="<?= $jumat[$i]['link']; ?>">
                <?php } ?>
            </div>
            
            <div class="download noprint">
                <h2 class="mt-5 mb-2 text-center text-xl font-bold">DOWNLOAD JADWAL SEBAGAI PDF : </h2>
                <div class="md:pl-20 lg:pl-20 ll:px-20">
                    <h3>1. Pada halaman ini, Pencet Tombol <b>CTRL + P</b> Pada Keyboard </h3>
                    <h3>2. Pilih <b>"Save as PDF"</b> </h3>
                    <h3>3. Klik Pilihan "More Settings" </h3>
                    <h3>4. Checklist pilihan "Background Graphics" </h3>
                    <h3>5. Klik Tombol <b>"Save"</b> </h3>
                </div>
            </div>

            <div class="upfoto noprint">
                <p class="w-full text-center text-xl font-bold mt-5 mb-2">Tambahkan Foto untuk Background Jadwal</p>
                <input class="w-full border-2 border-black rounded-md bg-white p-2" type="file" id="bg" name="bg" required>
                <p class="text-center text-lg mt-2">PASTIKAN FILE YANG DIUPLOAD ADALAH FILE FOTO (jpg / jpeg / png)</p>
                <button class="bg-teal-600 text-white font-bold p-2 mt-2 rounded-md w-full" type="submit" name="submit" onclick="return confirm('FOTO YANG SUDAH DIUPLOAD TIDAK BISA DIUBAH\nYakin File yang diupload adalah Foto?\nYakin Ingin Menambahkan Foto Sebagai Background?');" >UPLOAD FOTO</button>
            </div>
        </form>

        <form action="index.php" class="kembali noprint mb-5">
            <p class="w-full text-center text-xl font-bold mt-5 mb-1">MEMBUAT JADWAL BARU</p>
            <button class="bg-teal-600 text-white font-bold p-2 mt-2 rounded-md w-full" onclick="return confirm('DATA JADWAL INI AKAN HILANG\nYakin Ingin Membuat Jadwal Baru?');">Buat Jadwal Baru</button>
        </form>
        
    </div>

</body>

</html>