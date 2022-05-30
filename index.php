<!--
    Nama  : Isfan Adheltyo
    NIM   : 205150407111044
    Kelas : Pemrograman Web SI-C
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS -->
    <link href="dist/output.css" rel="stylesheet">
    
    <title>Form Jumlah Matkul</title>
</head>

<body>
    <div class="container px-10 mt-10">
        <form class="formJmlh bg-teal-300 p-5 rounded-md mb-5 max-w-[420px] mx-auto" action="inputMatkul.php" method="post">
            <h1 class="w-full text-center font-extrabold text-lg mb-5">MASUKKAN JUMLAH MATA KULIAH PER HARI</h1>

            <div class="inputJmlh px-2 flex justify-between items-center mb-1">
                <label class="w-fit text-lg font-medium" for="jmlhSenin">Jumlah Mata Kuliah Hari <span class="font-semibold">SENIN : </span></label>
                <input class="w-1/5 rounded-md px-1" type="number" name="jmlhSenin" id="jmlhSenin" value="0" min="0">
            </div>
                
            <div class="inputJmlh px-2 flex justify-between items-center mb-1">
                <label class="w-fit text-lg font-medium" for="jmlhSelasa">Jumlah Mata Kuliah Hari <span class="font-semibold"> SELASA : </span></label>
                <input class="w-1/5 rounded-md px-1" type="number" name="jmlhSelasa" id="jmlhSelasa" value="0" min="0">
            </div>
                
            <div class="inputJmlh px-2 flex justify-between items-center mb-1">
                <label class="w-fit text-lg font-medium" for="jmlhRabu">Jumlah Mata Kuliah Hari <span class="font-semibold"> RABU : </span></label>
                <input class="w-1/5 rounded-md px-1" type="number" name="jmlhRabu" id="jmlhRabu" value="0" min="0">
            </div>
                
            <div class="inputJmlh px-2 flex justify-between items-center mb-1">
                <label class="w-fit text-lg font-medium" for="jmlhKamis">Jumlah Mata Kuliah Hari <span class="font-semibold"> KAMIS : </span></label>
                <input class="w-1/5 rounded-md px-1" type="number" name="jmlhKamis" id="jmlhKamis" value="0" min="0">
            </div>

            <div class="inputJmlh px-2 flex justify-between items-center mb-5">
                <label class="w-fit text-lg font-medium" for="jmlhJumat">Jumlah Mata Kuliah Hari <span class="font-semibold"> JUMAT : </span></label>
                <input class="w-1/5 rounded-md px-1" type="number" name="jmlhJumat" id="jmlhJumat" value="0" min="0">
            </div>

            <button class="bg-teal-600 text-white font-bold p-2 rounded-md w-full" type="submit" name="submit">SUBMIT DATA</button>
        </form>

        <div class="peringatan text-center">
            <h1 class="w-full font-medium">Untuk print jadwal sebagai PDF dengan Foto Background,</h1>
            <h1 class="w-full font-medium">Gunakan Browser <span class="font-bold text-rose-600">Google Chrome</span></h1>   
        </div>
    </div>
</body>

</html>