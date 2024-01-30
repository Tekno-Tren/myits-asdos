
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Presensi Asdos</title>

    <style>
      header {
        background-color: #bacfe6;
        padding: 10px;
        text-align: left;
        font-size: 10px;
        color: black;
        margin-top: 20px;
        margin-right: 10px;
        margin-left: 10px;
      }
      article {
        padding: 10px;
        background-color: white;
        margin-right: 10px;
        margin-left: 10px;
      }
      footer {
        background-color: white;
        padding: 30px;
        text-align: center;
        margin-top: 10px;
        margin-right: 60px;
        margin-left: 60px;
      }

      nav {
        background-color: white;
        padding: 30px;
        margin-top: 10px;
        margin-right: 60px;
        margin-left: 60px;
      }

      nav ul {
        list-style-type: none;
        overflow: hidden;
      }

      nav li {
        float: left;
      }

      nav li a {
        text-align: center;
        padding: 16px;
        text-decoration: none;
      }

      nav li a:hover {
        background-color: white;
      }
      ul {
        list-style-type: none;
        margin: 0;
        padding: 10;
        overflow: hidden;
      }
      li {
        float: left;
      }

      .hisa-button{
        width: 30px; height: 30px; background-color: #bacfe6; border-radius: 50%; cursor: pointer;
      }
    </style>
   <script>
        // Fungsi untuk merubah warna tombol dalam grup
        function changeColor(button, group) {
            // Mendapatkan elemen yang menjadi parent tombol
            var parentElement = button.parentElement;

            // Mendapatkan koleksi tombol dalam grup
            var buttonsInGroup = parentElement.querySelectorAll('.hisa-button');

            // Toggle: mengembalikan warna semua tombol dalam grup ke warna asal jika tombol yang diklik sudah berwarna hijau
            if (button.style.backgroundColor === 'green') {
                buttonsInGroup.forEach(function(btn) {
                    btn.style.backgroundColor = '';
                });
            } else {
                // Mengembalikan warna semua tombol dalam grup ke warna asal
                buttonsInGroup.forEach(function(btn) {
                    btn.style.backgroundColor = '';
                });

                // Mengubah warna latar belakang tombol yang diklik menjadi hijau
                button.style.backgroundColor = 'green';
            }
        }
    </script>
  </head>
  <body style="background-color: lightgray">
    <header>
      <h1 style="font-size: 20px">Daftar Presensi</h1>
    </header>
          <nav class="navbar navbar-expand">
            <div class="container">
                <a href="#" class="navbar-brand"></a>

                <div id="navmenu">
                    <ul class="navbar-nav">
                        <li class="nav item">
                          <a href="dashboard.php" class="kembali">Kembali</a>
                        </li>
                    </ul>
                </div>
            </div>
    </nav>

    <section>
      <article>
        <h1 style="font-size: 20px">Nama Matakuliah</h1>
        <p style="font-size: 20px">Nama Dosen</p>
      </article>
    </section>

    <nav>
      <table border="0" width="100%" style="border-collapse: collapse">
        <tr>
          <th style="color: green; font-size: 20px">Hadir</th>
          <th style="color: blue; font-size: 20px">Izin</th>
          <th style="color: yellow; font-size: 20px">Sakit</th>
          <th style="color: red; font-size: 20px">Alpha</th>
          <th style="font-size: 20px">Total Tatap Muka Kehadiran</th>
        </tr>
        <tr>
          <td style="font-size: 20px" align="center">8</td>
          <td style="font-size: 20px" align="center">0</td>
          <td style="font-size: 20px" align="center">0</td>
          <td style="font-size: 20px" align="center">0</td>
          <td style="font-size: 20px" align="center">8</td>
        </tr>
      </table>
    </nav>
    <footer>
      <table border="0" width="100%" style="border-collapse: collapse">
        <tr>
          <th>TATAP MUKA</th>
          <th>JADWAL</th>
          <th>STATUS KEHADIRAN</th>
          <th>KETERANGAN</th>
        </tr>
        <tr>
          <td rowspan="3" align="center">1</td>
          <td align="center">Senin, 26 Februari 2024</td>
          <td rowspan="3" align="left">
          <ul>
              <li><a href=""></a></li>
              <button class="hisa-button" onclick="changeColor(this, 1)">H</button>
              <li><a href=""></a></li>
              <button class="hisa-button" onclick="changeColor(this, 1)">I</button>
              <li><a href=""></a></li>
              <button class="hisa-button" onclick="changeColor(this, 1)" >S</button>
              <li><a href=""></a></li>
              <button class="hisa-button" onclick="changeColor(this, 1)">A</button>
            </ul>
          </td>

          <td rowspan="3" align="center">
            <ul>
              <li><a href=""></a></li>
              <button style="width: 125px; margin-bottom: 5px; background-color: #bacfe6"><a href="materi.php">Materi</button>
              <br />
              <li><a href=""></a></li>
              <button style="width: 125px; background-color: #bacfe6"><a href="bukti.php">Foto Kehadiran</button>
            </ul>
          </td>
        </tr>
        <tr>
          <td align="center">09.00-10.50</td>
        </tr>
        <tr>
          <td align="center">TW1-803</td>
        </tr>

        <tr>
          <td rowspan="3" align="center">2</td>
          <td align="center">Senin, 27 Februari 2024</td>
          <td rowspan="3" align="left">
            <ul>
              <li><a href=""></a></li>
              <button class="hisa-button" onclick="changeColor(this, 2)">H</button>
              <li><a href=""></a></li>
              <button class="hisa-button" onclick="changeColor(this, 2)">I</button>
              <li><a href=""></a></li>
              <button class="hisa-button"  onclick="changeColor(this, 2)" >S</button>
              <li><a href=""></a></li>
              <button class="hisa-button"  onclick="changeColor(this, 2)">A</button>
            </ul>
          </td>
          <td rowspan="3" align="center">
            <ul>
              <li><a href=""></a></li>
              <button style="width: 125px; margin-bottom: 5px; background-color: #bacfe6"><a href="materi.php">Materi</button>
              <br />
              <li><a href=""></a></li>
              <button style="width: 125px; background-color: #bacfe6"><a href="bukti.php">Foto Kehadiran</button>
            </ul>
          </td>
        </tr>
        <tr>
          <td align="center">09.00-10.50</td>
        </tr>
        <tr>
          <td align="center">TW1-803</td>
        </tr>

        <tr>
          <td rowspan="3" align="center">3</td>
          <td align="center">Senin, 28 Februari 2024</td>
          <td rowspan="3" align="left">
          <ul>
              <li><a href=""></a></li>
              <button class="hisa-button"  onclick="changeColor(this, 3)">H</button>
              <li><a href=""></a></li>
              <button class="hisa-button"  onclick="changeColor(this, 3)">I</button>
              <li><a href=""></a></li>
              <button class="hisa-button"  onclick="changeColor(this, 3)">S</button>
              <li><a href=""></a></li>
              <button class="hisa-button"  onclick="changeColor(this, 3)">A</button>
            </ul>
          </td>
          <td rowspan="3" align="center">
            <ul>
              <li><a href=""></a></li>
              <button style="width: 125px; margin-bottom: 5px; background-color: #bacfe6"><a href="materi.php">Materi</button>
              <br />
              <li><a href=""></a></li>
              <button style="width: 125px; background-color: #bacfe6"><a href="bukti.php">Foto Kehadiran</button>
            </ul>
          </td>
        </tr>
        <tr>
          <td align="center">09.00-10.50</td>
        </tr>
        <tr>
          <td align="center">TW1-803</td>
        </tr>

        <tr>
          <td rowspan="3" align="center">4</td>
          <td align="center">Senin, 29 Februari 2024</td>
          <td rowspan="3" align="left">
          <ul>
              <li><a href=""></a></li>
              <button class="hisa-button"  onclick="changeColor(this, 4)">H</button>
              <li><a href=""></a></li>
              <button class="hisa-button"  onclick="changeColor(this, 4)">I</button>
              <li><a href=""></a></li>
              <button class="hisa-button"  onclick="changeColor(this, 4)">S</button>
              <li><a href=""></a></li>
              <button class="hisa-button"  onclick="changeColor(this, 4)">A</button>
            </ul>
          </td>
          <td rowspan="3" align="center">
            <ul>
              <li><a href=""></a></li>
              <button style="width: 125px; margin-bottom: 5px; background-color: #bacfe6"><a href="materi.php">Materi</button>
              <br />
              <li><a href=""></a></li>
              <button style="width: 125px; background-color: #bacfe6"><a href="bukti.php">Foto Kehadiran</button>
            </ul>
          </td>
        </tr>
        <tr>
          <td align="center">09.00-10.50</td>
        </tr>
        <tr>
          <td align="center">TW1-803</td>
        </tr>

        <tr>
          <td rowspan="3" align="center">5</td>
          <td align="center">Senin, 1 Maret 2024</td>
          <td rowspan="3" align="left">
          <ul>
              <li><a href=""></a></li>
              <button class="hisa-button"  onclick="changeColor(this, 5)">H</button>
              <li><a href=""></a></li>
              <button class="hisa-button"  onclick="changeColor(this, 5)">I</button>
              <li><a href=""></a></li>
              <button class="hisa-button"  onclick="changeColor(this, 5)">S</button>
              <li><a href=""></a></li>
              <button class="hisa-button"  onclick="changeColor(this, 5)">A</button>
            </ul>
          </td>
          <td rowspan="3" align="center">
            <ul>
              <li><a href=""></a></li>
              <button style="width: 125px; margin-bottom: 5px; background-color: #bacfe6"><a href="materi.php">Materi</button>
              <br />
              <li><a href=""></a></li>
              <button style="width: 125px; background-color: #bacfe6"><a href="bukti.php">Foto Kehadiran</button>
            </ul>
          </td>
        </tr>
        <tr>
          <td align="center">09.00-10.50</td>
        </tr>
        <tr>
          <td align="center">TW1-803</td>
        </tr>

        <tr>
          <td rowspan="3" align="center">6</td>
          <td align="center">Senin, 2 Maret 2024</td>
          <td rowspan="3" align="left">
          <ul>
              <li><a href=""></a></li>
              <button class="hisa-button"  onclick="changeColor(this, 6)">H</button>
              <li><a href=""></a></li>
              <button class="hisa-button"  onclick="changeColor(this, 6)">I</button>
              <li><a href=""></a></li>
              <button class="hisa-button"  onclick="changeColor(this, 6)">S</button>
              <li><a href=""></a></li>
              <button class="hisa-button"  onclick="changeColor(this, 6)">A</button>
            </ul>
          </td>
          <td rowspan="3" align="center">
            <ul>
              <li><a href=""></a></li>
              <button style="width: 125px; margin-bottom: 5px; background-color: #bacfe6"><a href="materi.php">Materi</button>
              <br />
              <li><a href=""></a></li>
              <button style="width: 125px; background-color: #bacfe6"><a href="bukti.php">Foto Kehadiran</button>
            </ul>
          </td>
        </tr>
        <tr>
          <td align="center">09.00-10.50</td>
        </tr>
        <tr>
          <td align="center">TW1-803</td>
        </tr>

        <tr>
          <td rowspan="3" align="center">7</td>
          <td align="center">Senin, 3 Maret 2024</td>
          <td rowspan="3" align="left">
          <ul>
              <li><a href=""></a></li>
              <button class="hisa-button"  onclick="changeColor(this, 7)">H</button>
              <li><a href=""></a></li>
              <button class="hisa-button"  onclick="changeColor(this, 7)">I</button>
              <li><a href=""></a></li>
              <button class="hisa-button"  onclick="changeColor(this, 7)">S</button>
              <li><a href=""></a></li>
              <button class="hisa-button"  onclick="changeColor(this, 7)">A</button>
            </ul>
          </td>
          <td rowspan="3" align="center">
            <ul>
              <li><a href=""></a></li>
              <button style="width: 125px; margin-bottom: 5px; background-color: #bacfe6"><a href="materi.php">Materi</button>
              <br />
              <li><a href=""></a></li>
              <button style="width: 125px; background-color: #bacfe6"><a href="bukti.php">Foto Kehadiran</button>
            </ul>
          </td>
        </tr>
        <tr>
          <td align="center">09.00-10.50</td>
        </tr>
        <tr>
          <td align="center">TW1-803</td>
        </tr>

        <tr>
          <td rowspan="3" align="center">8</td>
          <td align="center">Senin, 4 Maret 2024</td>
          <td rowspan="3" align="left">
          <ul>
              <li><a href=""></a></li>
              <button class="hisa-button"  onclick="changeColor(this, 8)">H</button>
              <li><a href=""></a></li>
              <button class="hisa-button"  onclick="changeColor(this, 8)">I</button>
              <li><a href=""></a></li>
              <button class="hisa-button"  onclick="changeColor(this, 8)">S</button>
              <li><a href=""></a></li>
              <button class="hisa-button"  onclick="changeColor(this, 8)">A</button>
            </ul>
          </td>
          <td rowspan="3" align="center">
            <ul>
              <li><a href=""></a></li>
              <button style="width: 125px; margin-bottom: 5px; background-color: #bacfe6"><a href="materi.php">Materi</button>
              <br />
              <li><a href=""></a></li>
              <button style="width: 125px; background-color: #bacfe6"><a href="bukti.php">Foto Kehadiran</button>
            </ul>
          </td>
        </tr>
        <tr>
          <td align="center">09.00-10.50</td>
        </tr>
        <tr>
          <td align="center">TW1-803</td>
        </tr>
      </table>
    </footer>

  </body>
</html>