<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@2.46.0/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Extractor Daily Report Kampus Merdeka</title>
</head>

<body data-theme="light">
    <form action="/extractor" method="POST">
        @csrf
        <div class="mx-8 pt-16 flex flex-col justify-end gap-4 md:mx-40 lg:mx-56 xl:mx-80 border rounded-md shadow-md border rounded-md shadow-md p-12">
            <p class="text-red-500">Silahkan pelajari cara menggunakan aplikasi ini dengan membaca <a class="text-blue-400 font-semibold underscore" href="#tutorial">tutorial di bawah ini</a></p>
            <div class="m-1 grid grid-cols-3">
                <label class="col-span-1" for="id_reg">ID Kegiatan</label>
                <input class="col-span-2 rounded border border-gray-300 bg-gray-200 p-2" type="text" id="id_reg" name="id_reg" required placeholder="xxxxxxx" />
            </div>
            <div class="m-1 grid grid-cols-3">
                <label class="col-span-1" for="token">Token</label>
                <textarea class="col-span-2 rounded border border-gray-300 bg-gray-200 p-2" rows="12" id="token" name="token" required></textarea>
            </div>
            <div class="bg-slate-300">
                <button class="w-full rounded bg-teal-400 p-2 text-white hover:bg-teal-500" type="submit">Download Report</button>
            </div>
        </div>
    </form>

    <section class="mx-8 py-16 flex flex-col justify-end gap-12 md:mx-40 lg:mx-56 xl:mx-80">
        <div class="mt-8">
            <h2 class="text-2xl font-semibold">Perhatian</h2>
        </div>
        <div class="flex">
            <div class="bg-amber-100 rounded-md p-6">
                <p class="p-2 text-md text-gray-700 my-6">
                    Laporan hasil download pada Worksheet 1 merupakan laporan harian dengan kolom: 
                    <ul style="list-disc">
                        <li>A: Minggu ke-</li>
                        <li>B: Tanggal</li>
                        <li>C: Laporan</li>
                        <li>D: Urutan hari perminggu. <span class="text-gray-400">Ex. Senin = 1</span></li>
                    </ul>
                    <br>
                    Pada Worksheet 1 merupakan laporan mingguan dengan kolom: 
                    <ul style="list-disc">
                        <li>A: Minggu ke-</li>
                        <li>B: Tanggal</li>
                    </ul>
                </p>
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mt-8">
                    <div class="inline w-fit h-fit rounded">
                        <img src="img/5.png" alt="">
                    </div>
                    <div class="inline w-fit h-fit rounded">
                        <img src="img/6.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div id="tutorial" class="mt-16">
            <h2 class="text-2xl font-semibold">Tutorial</h2>
        </div>
        <div class="flex">
            <span class="text-4xl p-4 bg-gray-200 rounded-full mr-6">1</span>
            <div class="">
                <p class="p-2 text-md text-gray-700">
                    Login ke website kampus merdeka dan buka tab kegiatanku, pilih kegiatan aktif dan pilih kegiatan yang akan di unduh laporannya.
                </p>
                <div class="w-full h-fit rounded mt-6">
                    <img src="img/1.png" alt="">
                </div>
            </div>
        </div>
        <div class="flex">
            <span class="text-4xl p-4 bg-gray-200 rounded-full mr-6">2</span>
            <div class="">
                <p class="p-2 text-md text-gray-700">
                    Setelah kegiatan terpilih maka di url akan tampil <b>ID KEGIATAN</b>. Dalam contoh id kegiatannya 3713052.
                </p>
                <div class="w-full h-fit rounded mt-6">
                    <img src="img/2.png" alt="">
                </div>
            </div>
        </div>
        <div class="flex">
            <span class="text-4xl p-4 bg-gray-200 rounded-full mr-6">3</span>
            <div class="">
                <p class="p-2 text-md text-gray-700">
                    Klik kanan pada laman kampus merdeka, pilih <span class="font-semibold">Inspect</span> buka <span class="font-semibold">Console</span>. Paste kode berikut kedalam console.
                </p>
                <div class="mockup-code">
                    <pre><code>document.cookie.split(';').forEach(e => (e.includes('mbkmtoken')) ? console.log(e.split('=')[1]) : '') </code></pre>

                </div>
                <p class="p-2 text-md text-gray-700 my-6">
                    Copy <b>Token</b> hasil dari kode tersebut.
                </p>
                <div class="w-full h-fit rounded">
                    <img src="img/3.png" alt="">
                </div>
            </div>
        </div>
        <div class="flex">
            <span class="text-4xl p-4 bg-gray-200 rounded-full mr-6">4</span>
            <div class="">
                <p class="p-2 text-md text-gray-700">
                    Isikan <b>ID Kegiatan</b> dan <b>Token</b> ke form diatas. Jika laporan tidak dapat didownload pastikan ID Kegiatan dan token benar/ulangi 1 sampai 3.
                </p>
                <div class="w-full h-fit rounded mt-6">
                    <img src="img/4.png" alt="">
                </div>
            </div>
        </div>
    </section>
</body>

</html>