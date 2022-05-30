<!--
    Nama  : Isfan Adheltyo
    NIM   : 205150407111044
    Kelas : Pemrograman Web SI-C
-->
<?php

require 'functions.php';

//CEK APAKAH DATA PADA HALAMAN INDEX BERHASIL DISUBMIT ATAU TIDAK
if(isset($_POST["submit"]))
{   
    $jmlhSenin = cekJumlah($_POST['jmlhSenin']);
    $jmlhSelasa = cekJumlah($_POST['jmlhSelasa']);
    $jmlhRabu = cekJumlah($_POST['jmlhRabu']);
    $jmlhKamis = cekJumlah($_POST['jmlhKamis']);
    $jmlhJumat = cekJumlah($_POST['jmlhJumat']);

    //CEK APAKAH ADA DATA JUMLAH MATKUL YANG DIINPUT PADA SATU ATAU LEBIH HARI
    if($jmlhSenin == 0 && $jmlhSelasa == 0 && $jmlhRabu == 0 && $jmlhKamis == 0 && $jmlhJumat == 0)
    {
        echo 
        "
            <script>
                alert('JUMLAH MATA KULIAH KOSONG PADA SEMUA HARI! Tolong Inputkan Data dengan Benar!');
                document.location.href = 'index.php';
            </script>
        ";
    }
    else
    {
        echo 
        "
            <script>
                alert('Data BERHASIL Disubmit!');
            </script>
        ";
    }
}
else
{
    echo 
    "
        <script>
            alert('Data GAGAL Disubmit!');
        </script>
    ";
}

//CSS
$classHari = 'class="w-full font-bold mb-1 text-center"';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS -->
    <link href="dist/output.css" rel="stylesheet">

    <title>Form Input Matkul</title>
</head>

<body class="inputMatkul">

<div class="container px-10 mt-10">
    <form class="bg-teal-300 p-5 rounded-md max-w-[420px] mx-auto" action="hasilMatkul.php" method="post">
        <!--INPUT DATA MATKUL HARI SENIN-->
        <?php 
            if($jmlhSenin != 0) {echo "<h3 $classHari >MASUKKAN DATA MATKUL HARI SENIN</h3>";}
        ?>

        <?php for($i=0; $i<$jmlhSenin; $i++) { ?>
            <p class="mb-1 text-center">DATA MATKUL <?= $i+1; ?></p>
            <div class="bg-senin py-1 px-2 rounded-md mb-3">
                <div class="mb-2">
                    <label for="seninNama<?= $i; ?>">Nama Matkul</label>
                    <input type="text" class="inputNama w-full rounded-md px-1" name="seninNama<?= $i; ?>" id="seninNama<?= $i; ?>" required> 
                </div>
                <div class="flex justify-between mb-2">
                    <div class="w-full">
                        <label for="seninMulai<?= $i; ?>" class="block w-full">Jam Mulai Matkul</label>
                        <input type="time" name="seninMulai<?= $i; ?>" class="px-1 w-full rounded-md" id="seninMulai<?= $i; ?>" required> 
                    </div>
                    <div class="w-fit mx-3">
                        <p class="h-1/2"></p>
                        <p class="h-1/2 text-center text-md font-bold align-middle">—</p>
                    </div>
                    <div class="w-full">
                        <label for="seninSelesai<?= $i; ?>" class="block w-full">Jam Selesai Matkul</label>
                        <input type="time" name="seninSelesai<?= $i; ?>" class="px-1 w-full rounded-md" id="seninSelesai<?= $i; ?>" required> 
                    </div>
                </div>
                <div class="mb-2">
                    <label for="seninLink<?= $i; ?>">Link Sinkron</label>
                    <input type="text" class="inputLink w-full rounded-md px-1" placeholder="kosongkan jika tidak ada" name="seninLink<?= $i; ?>" id="seninLink<?= $i; ?>"> 
                </div>
            </div>
        <?php } ?>
        
        <!--INPUT DATA MATKUL HARI SELASA-->
        <?php 
            if($jmlhSelasa != 0) {echo "<h3 $classHari >MASUKKAN DATA MATKUL HARI SELASA</h3>";}
        ?>
        
        <?php for($i=0; $i<$jmlhSelasa; $i++) { ?>
            <p class="mb-1 text-center">DATA MATKUL <?= $i+1; ?></p>
            <div class="bg-selasa py-1 px-2 rounded-md mb-3">
                <div class="mb-2">
                    <label for="selasaNama<?= $i; ?>">Nama Matkul</label>
                    <input type="text" class="inputNama w-full rounded-md px-1" name="selasaNama<?= $i; ?>" id="selasaNama<?= $i; ?>" required> 
                </div>
                <div class="flex justify-between mb-2">
                    <div class="w-full">
                        <label for="selasaMulai<?= $i; ?>" class="block w-full">Jam Mulai Matkul</label>
                        <input type="time" name="selasaMulai<?= $i; ?>" class="px-1 w-full rounded-md" id="selasaMulai<?= $i; ?>" required> 
                    </div>
                    <div class="w-fit mx-3">
                        <p class="h-1/2"></p>
                        <p class="h-1/2 text-center text-md font-bold align-middle">—</p>
                    </div>
                    <div class="w-full">
                        <label for="selasaSelesai<?= $i; ?>" class="block w-full">Jam Selesai Matkul</label>
                        <input type="time" name="selasaSelesai<?= $i; ?>" class="px-1 w-full rounded-md" id="selasaSelesai<?= $i; ?>" required> 
                    </div>
                </div>
                <div class="mb-2">
                    <label for="selasaLink<?= $i; ?>">Link Sinkron</label>
                    <input type="text" class="inputLink w-full rounded-md px-1" placeholder="kosongkan jika tidak ada" name="selasaLink<?= $i; ?>" id="selasaLink<?= $i; ?>"> 
                </div>
            </div>
        <?php } ?>
        
        <!--INPUT DATA MATKUL HARI RABU-->
        <?php 
            if($jmlhRabu != 0) {echo "<h3 $classHari >MASUKKAN DATA MATKUL HARI RABU</h3>";}
        ?>
            
        <?php for($i=0; $i<$jmlhRabu; $i++) { ?>
            <p class="mb-1 text-center">DATA MATKUL <?= $i+1; ?></p>
            <div class="bg-rabu py-1 px-2 rounded-md mb-3">
                <div class="mb-2">
                    <label for="rabuNama<?= $i; ?>">Nama Matkul</label>
                    <input type="text" class="inputNama w-full rounded-md px-1" name="rabuNama<?= $i; ?>" id="rabuNama<?= $i; ?>" required> 
                </div>
                <div class="flex justify-between mb-2">
                    <div class="w-full">
                        <label for="rabuMulai<?= $i; ?>" class="block w-full">Jam Mulai Matkul</label>
                        <input type="time" name="rabuMulai<?= $i; ?>" class="px-1 w-full rounded-md" id="rabuMulai<?= $i; ?>" required> 
                    </div>
                    <div class="w-fit mx-3">
                        <p class="h-1/2"></p>
                        <p class="h-1/2 text-center text-md font-bold align-middle">—</p>
                    </div>
                    <div class="w-full">
                        <label for="rabuSelesai<?= $i; ?>" class="block w-full">Jam Selesai Matkul</label>
                        <input type="time" name="rabuSelesai<?= $i; ?>" class="px-1 w-full rounded-md" id="rabuSelesai<?= $i; ?>" required> 
                    </div>
                </div>
                <div class="mb-2">
                    <label for="rabuLink<?= $i; ?>">Link Sinkron</label>
                    <input type="text" class="inputLink w-full rounded-md px-1" placeholder="kosongkan jika tidak ada" name="rabuLink<?= $i; ?>" id="rabuLink<?= $i; ?>"> 
                </div>
            </div>
        <?php } ?>
        
        <!--INPUT DATA MATKUL HARI KAMIS-->
        <?php 
            if($jmlhKamis != 0) {echo "<h3 $classHari >MASUKKAN DATA MATKUL HARI KAMIS</h3>";}
        ?>
            
        <?php for($i=0; $i<$jmlhKamis; $i++) { ?>
            <p class="mb-1 text-center">DATA MATKUL <?= $i+1; ?></p>
            <div class="bg-kamis py-1 px-2 rounded-md mb-3">
                <div class="mb-2">
                    <label for="kamisNama<?= $i; ?>">Nama Matkul</label>
                    <input type="text" class="inputNama w-full rounded-md px-1" name="kamisNama<?= $i; ?>" id="kamisNama<?= $i; ?>" required> 
                </div>
                <div class="flex justify-between mb-2">
                    <div class="w-full">
                        <label for="kamisMulai<?= $i; ?>" class="block w-full">Jam Mulai Matkul</label>
                        <input type="time" name="kamisMulai<?= $i; ?>" class="px-1 w-full rounded-md" id="kamisMulai<?= $i; ?>" required> 
                    </div>
                    <div class="w-fit mx-3">
                        <p class="h-1/2"></p>
                        <p class="h-1/2 text-center text-md font-bold align-middle">—</p>
                    </div>
                    <div class="w-full">
                        <label for="kamisSelesai<?= $i; ?>" class="block w-full">Jam Selesai Matkul</label>
                        <input type="time" name="kamisSelesai<?= $i; ?>" class="px-1 w-full rounded-md" id="kamisSelesai<?= $i; ?>" required> 
                    </div>
                </div>
                <div class="mb-2">
                    <label for="kamisLink<?= $i; ?>">Link Sinkron</label>
                    <input type="text" class="inputLink w-full rounded-md px-1" placeholder="kosongkan jika tidak ada" name="kamisLink<?= $i; ?>" id="kamisLink<?= $i; ?>"> 
                </div>
            </div>
        <?php } ?>
           
        <!--INPUT DATA MATKUL HARI JUMAT-->
        <?php 
            if($jmlhJumat != 0) {echo "<h3 $classHari >MASUKKAN DATA MATKUL HARI JUMAT</h3>";}
        ?>
        
        <?php for($i=0; $i<$jmlhJumat; $i++) { ?>
            <p class="mb-1 text-center">DATA MATKUL <?= $i+1; ?></p>
            <div class="bg-jumat py-1 px-2 rounded-md mb-3">
                <div class="mb-2">
                    <label for="jumatNama<?= $i; ?>">Nama Matkul</label>
                    <input type="text" class="inputNama w-full rounded-md px-1" name="jumatNama<?= $i; ?>" id="jumatNama<?= $i; ?>" required> 
                </div>
                <div class="flex justify-between mb-2">
                    <div class="w-full">
                        <label for="jumatMulai<?= $i; ?>" class="block w-full">Jam Mulai Matkul</label>
                        <input type="time" name="jumatMulai<?= $i; ?>" class="px-1 w-full rounded-md" id="jumatMulai<?= $i; ?>" required> 
                    </div>
                    <div class="w-fit mx-3">
                        <p class="h-1/2"></p>
                        <p class="h-1/2 text-center text-md font-bold align-middle">—</p>
                    </div>
                    <div class="w-full">
                        <label for="jumatSelesai<?= $i; ?>" class="block w-full">Jam Selesai Matkul</label>
                        <input type="time" name="jumatSelesai<?= $i; ?>" class="px-1 w-full rounded-md" id="jumatSelesai<?= $i; ?>" required> 
                    </div>
                </div>
                <div class="mb-2">
                    <label for="jumatLink<?= $i; ?>">Link Sinkron</label>
                    <input type="text" class="inputLink w-full rounded-md px-1" placeholder="kosongkan jika tidak ada" name="jumatLink<?= $i; ?>" id="jumatLink<?= $i; ?>"> 
                </div>
            </div>
        <?php } ?>
            
        <!-- UNTUK MENGIRIM JUMLAH MATA KULIAH TIAP HARINYA DARI HALAMAN index.php KE HALAMAN hasilMatkul.php -->
        <div class="kirim" style="display: none;">
            <input type="number" name="jmlhSenin" value=<?= $jmlhSenin ?>>
            <input type="number" name="jmlhSelasa" value=<?= $jmlhSelasa ?>>
            <input type="number" name="jmlhRabu" value=<?= $jmlhRabu ?>>
            <input type="number" name="jmlhKamis" value=<?= $jmlhKamis ?>>
            <input type="number" name="jmlhJumat" value=<?= $jmlhJumat ?>>
        </div>
            
        <button class="bg-teal-600 text-white font-bold p-2 mt-2 rounded-md w-full" type="submit" name="submit" onclick= "return confirm('DATA YANG SUDAH DINPUT TIDAK BISA DIUBAH\nYakin Data yang Diinput SUDAH BENAR?');" >SUBMIT DATA</button>
    </form>
</div>

</body>

</html>