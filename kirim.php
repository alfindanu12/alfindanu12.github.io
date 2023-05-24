<?php
    if (isset($_POST['submit'])){
        $name =$_POST['nama'];
        $email =$_POST['email'];
        $telp =$_POST['telp'];
        $kategori =$_POST['kategori'];
        $jk =$_POST['jk'];
        $pesan =$_POST['pesan'];
        header("location:https://api.whatsapp.com/send?phone=$telp&text=Assalamualaikum%20%0D%20%0DPerkenalkan%20%0DNama%20:%20$name%20%0DEmail%20:%20$email%20%0DNo%20:%20$telp%20%0DKategori%20:%20$kategori%20%0DJenis%20Kelamin%20:%20$jk%20%0DPesan%20:%20$pesan%20%0D%20%0DTerimakasih");
    } else {
        echo "
        <script>
            window.location=history.go(-1);
        </script>
        ";
    }

?>