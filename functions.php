<!--
    Nama  : Isfan Adheltyo
    NIM   : 205150407111044
    Kelas : Pemrograman Web SI-C
-->
<?php

//FUNCTION UNTUK MENGECEK URL LINK SINRKON YANG DIINPUT USER
function cekLink($link) {
    $awal = substr($link, 0, 8);
    $awal = strtolower($awal);

    if($awal == "https://")
    {
        return $link;
    }
    else
    {
        $link = "https://$link";
        return $link;
    }

}

//FUNCTION UNTUK MEMPERBAIKIN VALUE JUMLAHMATKUL DARI INPUT TYPE NUMBER PADA HALAMAN INDEX
function cekJumlah($jumlah) {
    if($jumlah == "")
    {
        $jumlah = 0;
    }
    return $jumlah;
}

//FUNCTION UNTUK MENGECEK FILE FOTO YANG DIUPLOAD
function upload() {
    $namaFile = $_FILES['bg']['name'];
    $ukuranFile = $_FILES['bg']['size'];
    $error = $_FILES['bg']['error'];
    $tmpName = $_FILES['bg']['tmp_name'];

    //cek apakah yang diupload adalah gambar
    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));

    if( !in_array($ekstensiGambar, $ekstensiGambarValid) )
    {
        echo 
        "
        <script>
            alert('File yang anda upload bukan gambar');
        </script>
        "
        ;

        return false;
    }

    //mengubah nama file menjadi 'bg' sehingga tidak terjadi penumpukkan file pada folder img

    //jika lolos pengecekkan, gambar siap diupload
    move_uploaded_file($tmpName, 'img/'. "bg.$ekstensiGambar");
    return "bg.$ekstensiGambar";
}

?>