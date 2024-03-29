MATERI

<?php 
// session_start();
require 'functions.php';

// if (isset($_POST["login"])) {
//     $nrp = isset($_SESSION['nrp']) ? $_SESSION['nrp'] : null;
// }

if (isset($_POST["upload"])) {
    if (materi($_POST) > 0) {
        echo "<script>
                alert('Materi berhasil diupload!');
                window.location.href = 'matkul.php'; 
              </script>";
        exit; 
    } else {
        echo mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Presensi Asdos</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" href="img/Logo_SKPB-biru.png" >
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
    <style>
        body{
            background-color: #BACFE6;
        }
    </style>
</head>
<body>
    <section id="formupload" class="pt-36 pb-16">
        <div class="container" >
            <div class="w-full px-4 lg:w-1/2 lg:mx-auto" >
                <div class="w-full px-4 border border-slate-300 rounded-xl mx-auto p-5 shadow-md font-inter" style="background-color: aliceblue">
                <div class="max-w-xl mx-auto text-center mt-6 mb-4"> 
                    <h4 class="font-bold text-3xl text-dark mt-6">Berita Acara</h4>
                </div>
                <form action="materi.php" method="post">
                    <div class="w-full px-4 mb-8">
                        <label for="nama" class="text-base font-bold ">Nama :</label>
                        <input type="text" id="nama" name="nama" class="w-full bg-slate-200 text-dark p-2 rounded-md  focus:outline-none  focus:ring-primary focus:ring-1 focus:border-primary"/>
                    </div>                  
                    <div class="w-full px-4 mb-8">
                        <label for="matkul" class="text-base font-bold ">Mata Kuliah :</label>
                        <input type="text" id="matkul" name="matkul" class="w-full bg-slate-200 text-dark p-2 rounded-md  focus:outline-none  focus:ring-primary focus:ring-1 focus:border-primary"/>
                    </div> 
                    <div class="w-full px-4 mb-8">
                        <label for="materi" class="text-base font-bold ">Materi yang diberikan :</label>
                        <input type="text" id="materi" name="materi" class="w-full bg-slate-200 text-dark p-2 rounded-md  focus:outline-none  focus:ring-primary focus:ring-1 focus:border-primary"/>
                    </div>                 
                    <div class="w-full px-4 mb-6 flex justify-between" >
                    <button class="text-base font-semibold text-black bg-primary py-3 px-8 rounded-full hover:shadow-lg hover:opacity-80 transition duration-300 ease-in-out" style="background-color: bisque;" type="submit" name="upload">Submit</button>
                    </div>    
                </form>
            </div>
        </div>
   </section>
<!--Upload Surat end-->
</body>
</html>