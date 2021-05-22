<?php
    $konek = mysqli_connect("localhost", "root", "", "be_cipcer");

    function read($query){
        global $konek;

        $result = mysqli_query($konek, $query);

        $rows = [];

        while($data = mysqli_fetch_assoc($result)){
            $rows[] = $data;
        }

        return $rows;
    }

    function tambah_admin($data){
        global $konek;
        
        $username = htmlspecialchars($data["username"]);
        $password = htmlspecialchars($data["password"]);

        $query = "INSERT INTO admin VALUES ('$username','$password');";

        mysqli_query($konek, $query);
        return mysqli_affected_rows($konek);
    }

    function tambah_departemen($data){
        global $konek;

        $id_dept = $data["id_dept"];
        $nama = htmlspecialchars($data["nama"]);
        $singkatan = htmlspecialchars($data["singkatan"]);
        $logo = $_FILES["logo"]["name"];

        $query = "INSERT INTO departemen VALUES ('$id_dept','$nama','$singkatan','$logo');";

        mysqli_query($konek, $query);

        return mysqli_affected_rows($konek);
    }

    function tambah_staff($data){
        global $konek;

        $npm = htmlspecialchars($data["npm"]);
        $nama = htmlspecialchars($data["nama"]);
        $dept = htmlspecialchars($data["dept"]);
        $foto = $_FILES["foto"]["name"];

        $query = "INSERT INTO staff VALUES ('$npm','$nama','$dept','$foto');";

        mysqli_query($konek, $query);

        return mysqli_affected_rows($konek);
    }

    function tambah_pimpinan($data){
        global $konek;

        $npm = htmlspecialchars($data["npm"]);
        $nama = htmlspecialchars($data["nama"]);
        $jabatan = htmlspecialchars($data["jabatan"]);
        $dept = htmlspecialchars($data["dept"]);
        $foto = $_FILES["foto"]["name"];

        $query = "INSERT INTO pimpinan VALUES ('$npm','$nama','$jabatan','$dept','$foto');";

        mysqli_query($konek, $query);

        return mysqli_affected_rows($konek);
    }

    function tambah_proker($data){
        global $konek;

        $nama = htmlspecialchars($data["nama"]);
        $dept = htmlspecialchars($data["dept"]);

        $query = "INSERT INTO proker 
                  VALUES ('$nama','$dept');";

        mysqli_query($konek, $query);

        return mysqli_affected_rows($konek);
    }

    function hapus($pk, $key, $table){
        global $konek;

        $query = "DELETE FROM $table WHERE $pk = '$key';";

        mysqli_query($konek, $query);

        return mysqli_affected_rows($konek);
    }

    function edit_departemen($data, $oldData){
        global $konek;

        $oldKey = $oldData["id_dept"];
        
        $id = $data["id_dept"];
        $nama = htmlspecialchars($data["nama"]);
        $singkatan = htmlspecialchars($data["singkatan"]);
        $logo = $_FILES["logo"]["name"];

        $query = "UPDATE departemen SET 
                  id_dept='$id',
                  nama='$nama', 
                  singkatan='$singkatan',
                  logo='$logo'
                  WHERE id_dept='$oldKey';
        ";

        mysqli_query($konek, $query);

        return mysqli_affected_rows($konek);
    }

    function edit_pimpinan($data, $oldData){
        global $konek;

        $oldKey = $oldData["npm"];

        $npm = $data["npm"];
        $nama = htmlspecialchars($data["nama"]);
        $jabatan = htmlspecialchars($data["jabatan"]);
        $dept = $data["dept"];
        $foto = $_FILES["foto"]["name"];

        $query = "UPDATE pimpinan SET
                  npm='$npm',
                  nama='$nama',
                  jabatan='$jabatan',
                  dept='$dept',
                  foto='$foto'
                  WHERE npm='$oldKey';
        ";

        mysqli_query($konek, $query);

        return mysqli_affected_rows($konek);
    }

    function edit_staff($data, $oldData){
        global $konek;

        $oldKey = $oldData["npm"];

        $npm = $data["npm"];
        $nama = htmlspecialchars($data["nama"]);
        $dept = $data["dept"];
        $foto = $_FILES["foto"]["name"];

        $query = "UPDATE staff SET
                  npm='$npm',
                  nama='$nama',
                  dept='$dept',
                  foto='$foto'
                  WHERE npm='$oldKey';
        ";

        mysqli_query($konek, $query);

        return mysqli_affected_rows($konek);
    }

    function edit_komponen($data, $oldData){
        global $konek;

        $oldName = $oldData["nama"];

        $namaKabinet = htmlspecialchars($data["nama"]);
        $visi = htmlspecialchars($data['visi']);
        $misi = htmlspecialchars($data['misi']);
        $logo = $_FILES['logo']['name'];
        $maknaLogo = $data["makna_logo"];

        $query = "UPDATE komponen SET
                  nama='$namaKabinet',
                  visi='$visi',
                  misi='$misi',
                  logo='$logo',
                  makna_logo='$maknaLogo'
                  WHERE nama='$oldName';
                  ";

        mysqli_query($konek, $query);

        return mysqli_affected_rows($konek);
    }

    function edit_proker($data, $oldData){
        global $konek;

        $oldName = $oldData["nama"];
        $oldDept = $oldData["dept"];

        $name = $data['nama'];
        $dept = $data["dept"];

        $query = "UPDATE proker SET
                  nama='$name',
                  dept='$dept'
                  WHERE nama='$oldName' AND dept='$oldDept';
                  ";

        mysqli_query($konek, $query);

        return mysqli_affected_rows($konek);
    }

    function edit_admin($data, $oldData){
        global $konek;

        $oldUsername = $oldData;

        $username = $data["username"];
        $password = $data["password"];

        $query = "UPDATE admin SET
                  username='$username',
                  password='$password'
                  WHERE username=$oldUsername;
        ";

        mysqli_query($konek, $query);
    
        return mysqli_affected_rows($konek);
    }
?>

<?php
    function admin(){
        $akunAdmin = read("SELECT * FROM admin");
        foreach($akunAdmin as $akun){
            if(
                $_POST['username'] === $akun['username']
                &&
                $_POST['password'] === $akun['password']
            ){
                return true;
            }
        }
        return false;
    }


    // ===== KHUSUS HALAMAN SETTING ======
    function success($kata){
        return "
            <script>
                alert('Data berhasil $kata');
                document.location.href = '../setting.php';
            </script>
        ";
    }

    function fail($kata){
        return "
            <script>
                alert('Data tidak berhasil $kata');
            </script>
        ";
    }

    function return_to_setting($tmp, $folder, $kata){
        if(move_uploaded_file($tmp, $folder)){
            return success($kata);
        }
        return fail($kata);
    }
    // ==================================
?>

<?php
    $departemen = read("SELECT * FROM departemen");
    $organisasi = read("SELECT * FROM komponen;")[0];
?>