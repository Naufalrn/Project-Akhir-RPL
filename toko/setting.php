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
      Setting
    </h1>
    <form action="set_proses.php" method="post"  enctype="multipart/form-data">
        <div class="box-content h-32 w-32 p-4 border-8 mx-auto mt-9 rounded-2xl border-blue-800">
        <input type="file" name="foto" id="foto" style="visibility:hidden;"  accept="image/*" required>
        <label for="foto">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="w-16 h-16 text-white mx-auto" stroke-width="1.5" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5m-13.5-9L12 3m0 0l4.5 4.5M12 3v13.5" />
        </svg>

        </label>
        </div>

        
        <div class="flex text-center mt-20">
        <div class="grow h-14"> </div>
        <div class="grow-0 h-10 space-y-6">
            <table class="">
            <tbody>
                <tr class="h-16">
                <td><span class="font-semibold text-2xl text-white">Nama<br>Owner</span></td>
                <td><input name="owner" type="text" class="rounded-full bg-white p-2 pl-10 text-xl text-sky-800 w-64 font-bold tracking-wide text-left border border-sky-900 ml-5" required=""></td>
                </tr>
                <tr class="h-16">
                <td><span class="font-semibold text-2xl text-white">Nama<br>Toko</span></td>
                <td><input name="toko" type="text" class="rounded-full bg-white p-2 pl-10 text-xl text-sky-800 w-64 font-bold tracking-wide text-left border border-sky-900 ml-5" required=""></td>
                </tr>
                <tr class="h-16">
                <td><span class="font-semibold text-2xl text-white">Alamat</span></td>
                <td><input name="alamat" type="text" class="rounded-full bg-white p-2 pl-10 text-xl text-sky-800 w-64 font-bold tracking-wide text-left border border-sky-900 ml-5" required=""></td>
                </tr>
                <tr class="h-16">
                <td><span class="font-semibold text-2xl text-white">Cabang</span></td>
                <td><input name="cabang" type="text" class="rounded-full bg-white p-2 pl-10 text-xl text-sky-800 w-64 font-bold tracking-wide text-left border border-sky-900 ml-5" required=""></td>
                </tr>
            </tbody>
            </table>
            <div>
                <button type="submit" class="bg-blue-800 p-2 rounded-full text-white font-semibold w-80 hover:bg-blue-700">
                Save
                </button>
            </div>
            <div>
            <a href="index.html">
                <div class="bg-blue-800 p-2 rounded-full text-white font-semibold w-80 hover:bg-blue-700 mx-auto">
                Back To Menu
                </div>
            </a>
            </div>
        </div>
        <div class="grow h-14"></div>
    </form>
    
      
   
  </body>
</html>
