<?php 
//require 'functions.php';

if (isset($_POST["upload"])) {
  if (section2($_POST) > 0) {
      echo "<script>
              alert('Tugas berhasil diupload!');
              window.location.href = 'dashboard.php'; 
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
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Presensi Asdos</title>
    <script src="https://cdn.tailwind.com"></script>
    <link rel="icon" href="img/Logo_SKPB-biru.png" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
    <style>
      body {
        background-color: #bacfe6;
      }
    </style>
  </head>
  <body>
    <!--Upload Nilai-->
    <section id="formupload" class="pt-36 pb-16">
      <div class="container">
        <div class="w-full px-4 lg:w-1/2 lg:mx-auto">
          <div class="w-full px-4 border border-slate-300 rounded-xl mx-auto p-5 shadow-md font-inter" style="background-color: aliceblue;">
            <div class="max-w-xl mx-auto text-center mt-6 mb-4">
              <h4 class="font-bold text-3xl text-dark mt-6">SECTION</h4>
              <h2 class="font-bold text-xl text-slate-400">Upload Nilai</h2>
            </div>
            <div class="w-full px-4 mb-4">
                <h1>
                  Silahkan mengisi file nilai yang telah disediakan, lalu upload dalam form berikut ->
                  <a href="https://docs.google.com/document/d/15CG7knLbH1EGd4B4z8Y34ngB_lGvIKnuGxnhvVHdFqM/edit?usp=sharing" class="text-primary" style="background-color: bisque">template nilai</a>
                </h1>
                <h2>Format : NRP_Nama_Nilai Mahasiswa</h2>
                  <span class="block font-bold mb-1 text-slate-800 after:content-['*'] after:text-pink-600 after:ml-0.5">Upload File</span>
            </div>
            <form action="" method="POST" enctype="multipart/form-data">
              <div class="w-full px-4 mb-6 flex justify-end">
                <input type="file" id="section2" name="section2" value="section2" class="w-full bg-slate-200 text-dark p-2 rounded-md focus:outline-none focus:ring-primary focus:ring-1 focus:border-primary mb-2">
                <button class="text-base font-semibold text-black bg-primary py-3 px-8 rounded-full hover:shadow-lg hover:opacity-80 transition duration-300 ease-in-out" style="background-color: bisque;" type="submit" name="upload">Upload</button>
              </div>
            </form>
            <!-- <div id="navmenu">
                <ul class="navbar-nav">
                    <li class="nav item">
                        <a href="dashboard.php" class="kembali">Kembali</a>
                    </li>
                </ul>
            </div> -->
        </div>                               
        </div>
      </div>
    </section>
  </body>
</html>