<?php
$artikel = [
    "html" => [
        "judul" => "Belajar HTML Pertama Kali",
        "tanggal" => "05 maret 2026",
        "isi" => "Sempat rancu dengan berbagai tag HTML, perlahan-lahan menangkap pola struktur dasar website.",
        "gambar" => "contoh.png",
        "link" => "https://classroom.google.com/c/ODQ3NjE1OTM0MjM1/a/ODE5NTQwOTMxNTk2/details"
    ],
    "error" => [
        "judul" => "Error Pertama dalam Coding",
        "tanggal" => "05 maret 2026",
        "isi" => "Sering error bikin jengkel, tapi justru dari kegagalan itu saya mulai paham cara membaca pesan error.",
        "gambar" => "error.png",
        "link" => "https://classroom.google.com/c/ODQ3NjE1OTM0MjM1/a/ODE5NTQwOTMxNTk2/details"
    ],

];
$key = $_GET['artikel'] ?? null;
$dataDipilih = $artikel[$key] ?? null;

$quotes = [
    "Setiap developer hebat pernah jadi pemula.",
    "Kalau ga error, ya ga berkembang.",
];
$quoteRandom = $quotes[array_rand($quotes)];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Blog Developer</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-purple-300 font-sans">
<div class="max-w-5xl mx-auto p-6">
    <h1 class="text-2xl font-bold text-center mb-6"><u>
        Blog Reflektif Developer
    </u></h1>
    <div class="grid md:grid-cols-3 gap-6">
         <div class="bg-white/20 backdrop-blur-md border border-white/30 rounded-xl shadow-lg p-4 hover:shadow-2xl">
            <h2 class="font-bold mb-3">Daftar Artikel</h2>

            <?php foreach ($artikel as $key => $item): ?>
                <a href="?artikel=<?= $key ?>" 
                   class="block mb-2 text-gray-800 hover:underline">
                    • <?= $item['judul'] ?>
                </a>
            <?php endforeach; ?>
        </div>
        <div class="md:col-span-2 bg-white/20 backdrop-blur-md border border-white/30 rounded-xl shadow-lg p-4 hover:shadow-2xl">
            <?php if ($dataDipilih): ?>
                <h2 class="text-xl font-bold mb-2">
                    <?= $dataDipilih['judul'] ?>
                </h2>
                <p class="text-sm text-gray-500 mb-3">
                     <?= $dataDipilih['tanggal'] ?>
                </p>
                <img src="<?= $dataDipilih['gambar'] ?>" 
                     class="rounded mb-3 w-full h-48 object-cover">
                <p class="mb-3">
                    <?= $dataDipilih['isi'] ?>
                </p>
                <div class="bg-indigo-100 p-3 rounded mb-3 italic"> "<?= $quoteRandom ?>" </div>
                <a href="<?= $dataDipilih['link'] ?>" 
                   target="_blank"
                   class="text-blue-500 underline">
                   Tempat Belajar
                </a>
            <?php else: ?>
                <p class="text-gray-500">
                    Pilih artikel di sebelah kiri untuk melihat detail.
                </p>
            <?php endif; ?>
        </div>
    </div>
    <div class="mt-6 flex justify-between">
        <a href="timeline.php" 
           class="bg-gray-300 px-4 py-2 rounded hover:bg-gray-400">
            Kembali ke Timeline
        </a>
        <a href="index.php" 
           class="bg-purple-500 text-white px-8 py-2 rounded hover:bg-pink-600">
             Profil
        </a>
    </div>
</div>
</body>
</html>