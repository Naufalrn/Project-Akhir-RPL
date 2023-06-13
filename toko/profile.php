<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Signika:wght@300;400;500;600;700&display=swap"
      rel="stylesheet"
    />
    <script src="https://cdn.tailwindcss.com"></script>
  </head>
  <body class="bg-gradient-to-t from-cyan-500 to-blue-500 min-h-screen">
    <h1 class="text-5xl font-bold text-center mt-8 text-white drop-shadow-2xl">
      Profile
    </h1>
    <?php
    include('koneksi.php');
    $sql	= "SELECT * FROM profile WHERE id = 1";
    $query	= mysqli_query($connect, $sql);
    while ($data = mysqli_fetch_array($query)) {
    ?>
    <div class="box-content h-32 w-32 p-4 border-8 mx-auto mt-9 rounded-2xl border-blue-800">
      <img src="foto/<?= $data['foto']; ?>" alt="">
    </div>
        
    <div class="flex text-center mt-20">
      <div class="grow h-14"> </div>
      <div class="grow-0 h-10 space-y-6">
        <table class="">
          <tbody>
            <tr class="h-16">
              <td><span class="font-semibold text-2xl text-white">Nama<br>Owner</span></td>
              <td><div class="rounded-full bg-white p-2 pl-10 text-xl text-sky-800 w-64 font-bold tracking-wide text-left border border-sky-900 ml-5"><?= $data['owner']; ?></div></td>
            </tr>
            <tr class="h-16">
              <td><span class="font-semibold text-2xl text-white">Nama<br>Toko</span></td>
              <td><div class="rounded-full bg-white p-2 pl-10 text-xl text-sky-800 w-64 font-bold tracking-wide text-left border border-sky-900 ml-5"><?= $data['toko']; ?></div></td>
            </tr>
            <tr class="h-16">
              <td><span class="font-semibold text-2xl text-white">Alamat</span></td>
              <td><div class="rounded-full bg-white p-2 pl-10 text-xl text-sky-800 w-64 font-bold tracking-wide text-left border border-sky-900 ml-5"><?= $data['alamat']; ?></div></td>
            </tr>
            <tr class="h-16">
              <td><span class="font-semibold text-2xl text-white">Cabang</span></td>
              <td><div class="rounded-full bg-white p-2 pl-10 text-xl text-sky-800 w-64 font-bold tracking-wide text-left border border-sky-900 ml-5"><?= $data['cabang']; ?></div></td>
            </tr>
          </tbody>
        </table>
        <div>
          <a href="setting.php">
            <button class="bg-blue-800 p-2 rounded-full text-white font-semibold w-80 hover:bg-blue-700">
              Edit Profile?
            </button>
          </a>
        </div>
        <div>
          <a href="index.html">
            <button class="bg-blue-800 p-2 rounded-full text-white font-semibold w-80 hover:bg-blue-700">
              Back To Menu
            </button>
          </a>
        </div>
      </div>
      <div class="grow h-14"></div>
      <?php } ?>
   
  </body>
</html>
