<?php
    require "../func.php";
    
    $primaryKey = $_GET['pk'];
    $penanda = $_GET['key'];
    $table = $_GET['table'];
    $foto = null;
    $namaFoto = null;

    switch($table){
        case 'pimpinan':
        case 'staff':
        case 'departemen':
            $foto = read("SELECT * from $table WHERE $primaryKey='$penanda';")[0];
            $namaFoto = ($table === 'departemen') ? $foto["logo"] : $foto["foto"];
            $folder = ($table === 'departemen') ? "../img/logo/".$namaFoto : "../img/pengurus/".$namaFoto;
            if(!unlink($folder)){
                echo "
                    <script>
                        alert('Foto tidak dapat dihapuskan');
                    </script>
                ";
            }
            break;
    }

    if(hapus($primaryKey, $penanda, $table) > 0){
        echo "
            <script>
                alert('Data berhasil dihapus');
                document.location.href = '../setting.php';
            </script>
        ";
    }
    else{
        echo "
            <script>
                alert('Data tidak berhasil dihapus');
                document.location.href = '../setting.php';
            </script>
        ";
    }
?>