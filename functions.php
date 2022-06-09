<?php 

function koneksi() {
    $conn = mysqli_connect('localhost', 'root', '', 'tubes_213040075') or die('KONEKSI GAGAL!');

    return $conn;
}

function query($query) {
    $conn = koneksi();
    $result = mysqli_query($conn, $query) or die(mysqli_error($conn));

    $rows = [];
    while($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}     

function hapus($id) {
    $conn = koneksi();
    
    mysqli_query($conn, "DELETE FROM data_profil WHERE id = $id") or die(mysqli_error($conn));

    return mysqli_affected_rows($conn);
}

function ubah($data) {
    $conn = koneksi();

    $id = $data["id"];
    $nama = htmlspecialchars($data['nama']);
    $username = htmlspecialchars($data['username']);
    $password = htmlspecialchars($data['password']);
    $email = htmlspecialchars($data['email']);
    $alamat = htmlspecialchars($data['alamat']);

    $query = "UPDATE data_profil SET 
        nama = '$nama', 
        username = '$username', 
        password = '$password',
        email = '$email',
        alamat = '$alamat' 
        WHERE id = $id "; 

    mysqli_query($conn, $query) or die(mysqli_error($conn));

    return mysqli_affected_rows($conn);
}

function tambah_produk($data) {
    $conn = koneksi();

    // jika user tidak memilih gambar
    if ($_FILES["gambar"]["error"] === 4) {
        $gambar = 'df.png'; 
    } else {
    // jalankan fungsi upload gambar
        $gambar = upload();
    // cek jika upload gagal
    if (!$gambar) {
        return false;
        }
    }

    $kategori = htmlspecialchars($data['kategori']);
    $produk = htmlspecialchars($data['nama']);
    $harga = htmlspecialchars($data['harga']);
    $deskripsi = htmlspecialchars($data['deskripsi']);
    // $gambar = htmlspecialchars($data['gambar']);


    $query = "INSERT INTO produk VALUES (null, '$kategori', '$produk', '$harga', '$deskripsi', '$gambar', '')";

    mysqli_query($conn, $query) or die(mysqli_error($conn));

    return mysqli_affected_rows($conn);
}


function ubah_produk($data) {
    $conn = koneksi();

    $id = $data["id"];
    $kategori = htmlspecialchars($data['kategori']);
    $produk = htmlspecialchars($data['nama']);
    $harga = htmlspecialchars($data['harga']);
    $deskripsi = htmlspecialchars($data['deskripsi']);
    $gambar = htmlspecialchars($data['gambar']);

    $query = "UPDATE produk SET 
        kategori = '$kategori', 
        nama_produk = '$produk', 
        harga = '$harga',
        deskripsi = '$deskripsi',
        gambar = '$gambar' 
        WHERE id_produk = $id ";  

    mysqli_query($conn, $query) or die(mysqli_error($conn));

    return mysqli_affected_rows($conn);
}

function hapus_produk($id) {
    $conn = koneksi();

    // querry produk berdasarkan id
    $p = query("SELECT * FROM produk WHERE id_produk = $id") [0];

    // hapus file gambar, kecuali gambar default
    if ($p["gambar"] !== 'df.png') {
        unlink('../tubes/img/produk/' . $p["gambar"]);
    } 
    
    mysqli_query($conn, "DELETE FROM produk WHERE id_produk = $id") or die(mysqli_error($conn));

    return mysqli_affected_rows($conn);
}

function upload() {
    // siapkan data gambar
    $filename = $_FILES["gambar"]["name"];
    $filetmpname = $_FILES["gambar"]["tmp_name"];
    $filesize = $_FILES["gambar"]["size"];
    $filetype = pathinfo($filename, PATHINFO_EXTENSION);
    $allowedtype = ["jpg", "jpeg", "png"];

    // cek apakah file bukan file yang di upload bukan gambar
    if (!in_array($filetype, $allowedtype)) {
        echo "<script>
                alert('yang anda upload bukan gambar!');
             </script>"; 
        return false;
    }

    // cek apakah gambar terlalu besar
    if ($filesize > 1000000) {
        if (!in_array($filetype, $allowedtype)) {
            echo "<script>
                    alert('ukuran gambar terlalu besar!');
                 </script>"; 
            return false;
        }
    }

    // lolos pengecekan, siap untuk upload
    $newsfilename = uniqid(); $filename;
    move_uploaded_file ($filetmpname, '../tubes/img/produk/' . $newsfilename);

    return $newsfilename;
}

function login($data) {
    $conn = koneksi();

        if( isset($_POST["login"]) ) {
    
            $username = htmlspecialchars($_POST["username"]);
            $password = htmlspecialchars($_POST["password"]);
        
            $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");
        
            // cek username
            if( mysqli_num_rows($result) === 1 ) {
        
                // cek password
                $row = mysqli_fetch_assoc($result);
                if( password_verify($password, $row["password"]) ) {
                    // set session
                    $_SESSION["login"] = true;
        
                    header("Location: index.php");
                    exit;
                }
                return [
                    'error' => true,
                    'pesan' => 'Pengguna / Kata Sandi Salah!'
                ];
            }
        
        }
}

function registrasi($data) {
    $conn = koneksi();

    $username = htmlspecialchars($data['username']);
    $password1 = mysqli_real_escape_string($conn, $data['password1']);
    $password2 = mysqli_real_escape_string($conn, $data['password2']);

    // jika username / password kosong
    if(empty($username) || empty($password1) || empty($password2)) {
        echo "<script>
               alert('Pengguna / Kata Sandi tidak boleh kosong!');
               document.location.href='registrasi.php';
             </script>";
    return false;
    }

    // jika username sudah ada
    if (query("SELECT * FROM user WHERE username = '$username'")) {
        echo "<script>
                alert('Pengguna sudah terdaftar!');
                document.location.href='registrasi.php';
             </script>";
    return false;
    }

    // jika konfirmasi password tidak sesuai
    if ($password1 !== $password2) {
        echo "<script>
                alert('konfirmasi kata sandi tidak sesuai!');
                document.location.href='registrasi.php';
             </script>";
    return false;
    }

    // jika password < 5 digit
    if (strlen($password1) < 5) {
        echo "<script>
                alert('kata sandi terlalu pendek!');
                document.location.href='registrasi.php';
             </script>";
    return false;
    }

    // jika username < 5 digit
    if (strlen($username) < 5) {
        echo "<script>
                alert('pengguna terlalu pendek!');
                document.location.href='registrasi.php';
             </script>";
    return false;
    }
    // jika username & password nya sudah sesuai
    // enkripsi password
    $password_baru = password_hash($password1, PASSWORD_DEFAULT);
    // insert ke tabel user
    $query = "INSERT INTO user
                VALUES
             (null, '$username', '$password_baru')";
    mysqli_query($conn, $query) or die(mysqli_error($conn));
    return mysqli_affected_rows($conn);
}