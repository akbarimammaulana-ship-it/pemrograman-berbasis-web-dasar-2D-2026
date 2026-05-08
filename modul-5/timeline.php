<?php
function highlight($tahun, $target)
{
    if ($tahun == $target) {
        return "<span class='bg-red-500 text-white px-3 py-1 rounded-full text-sm font-semibold'>$tahun</span>";
    }
    return "<span class='bg-gray-200 text-gray-700 px-3 py-1 rounded-full text-sm'>$tahun</span>";
}

$data = [
    [
        "tahun" => "2025",
        "kegiatan" => "Masuk Kuliah",
        "deskripsi" => "Mengikuti ospek, beradaptasi dengan lingkungan kampus, dan mulai mengenal dunia perkuliahan."
    ],
    [
        "tahun" => "2025",
        "kegiatan" => "Awal Belajar Pemrograman Dasar",
        "deskripsi" => "Mulai memahami logika dasar seperti variabel, percabangan, dan perulangan."
    ],
    [
        "tahun" => "2025",
        "kegiatan" => "Belajar HTML",
        "deskripsi" => "Membuat struktur website menggunakan elemen dasar HTML seperti heading dan paragraf."
    ],
    [
        "tahun" => "2026",
        "kegiatan" => "Belajar CSS",
        "deskripsi" => "Mempercantik tampilan website dengan warna, layout, dan desain responsive."
    ],
    [
        "tahun" => "2026",
        "kegiatan" => "Belajar JavaScript",
        "deskripsi" => "Mulai membuat website menggunakan JavaScript dan mengolah data dari user."
    ],
    [
        "tahun" => "2026",
        "kegiatan" => "Belajar PHP",
        "deskripsi" => "Mulai membuat website dinamis menggunakan PHP dan mengolah data dari user."
    ]
];
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Timeline Developer</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gradient-to-br from-blue-500 via-purple-500 to-pink-500 min-h-screen">

<div class="max-w-3xl mx-auto px-4 mt-10">

    <div class="text-center text-white mb-8">
        <h2 class="text-3xl font-bold ">Timeline Belajar Coding</h2>
        <p class="opacity-80">Perjalanan dari awal sampai sekarang</p>
    </div>

    
    <div class="relative border-l-4 border-white/40 pl-6 space-y-6">

        <?php foreach ($data as $item): ?>
            <div class="relative">
                <div class="absolute -left-3 top-2 w-5 h-5 bg-white rounded-full border-4 border-purple-500"></div>
                <div class="bg-white/80 backdrop-blur rounded-xl p-4 shadow-md">
                    <div class="mb-2">
                        <?= highlight($item['tahun'], "2026"); ?>
                    </div>

                    <h3 class="font-bold text-lg text-gray-800">
                        <?= $item['kegiatan']; ?>
                    </h3>

                    <p class="text-gray-600 text-sm mt-1">
                        <?= $item['deskripsi']; ?>
                    </p>Masuk Kuliah

                </div>

            </div>
        <?php endforeach; ?>

    </div>

    <div class="text-center mt-10 text-white space-x-4 mb-10">
        <a href="index.php" class="hover:underline">← Kembali ke Profil</a>
        <a href="blog.php" class="hover:underline">Menuju Blog →</a>
    </div>

</div>

</body>
</html>