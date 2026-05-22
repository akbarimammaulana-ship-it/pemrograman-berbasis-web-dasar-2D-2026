<?php

$artikel = [
    "html" => [   
        "judul" => "Belajar HTML Pertama Kali",
        "tanggal" => "10 Januari 2024",
        "isi" => "Awalnya bingung dengan tag HTML, tapi lama-lama mulai paham struktur dasar website.",
        "gambar" => "3w.png",
        "link" => "https://www.w3schools.com"
    ],
    "error" => [
        "judul" => "Error Pertama dalam Coding",
        "tanggal" => "15 Februari 2024",
        "isi" => "Sering error bikin frustasi, tapi dari situ saya belajar membaca pesan error.",
        "gambar" => "code.png",
        "link" => "https://stackoverflow.com/"
    ],

];


$key = $_GET['artikel'] ?? null;
$dataDipilih = $artikel[$key] ?? null;


$quotes = [
    "Coding itu bukan soal pintar, tapi soal tidak menyerah.",
    "Error adalah guru terbaik dalam coding.",
    "Setiap developer hebat pernah jadi pemula.",
    "Practice makes perfect!"
];

$quoteRandom = $quotes[array_rand($quotes)];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Blog Developer</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="style .css">
</head>

<body bgcolor=" ivory">

<div class="max-w-5xl mx-auto p-6">

   
    <h1 class="text-2xl font-bold text-center mb-6">
        Blog Reflektif Developer
    </h1>

    <div class="grid md:grid-cols-2 gap-6">

        
        <div class="container">
        <div class="bg-pink-50 p-7 rounded-xl shadow">
            <h2 class="font-bold mb-3">Daftar Artikel</h2>

            <?php foreach ($artikel as $key => $item): ?>
                <a href="?artikel=<?= $key ?>" 
                   class="block mb-2 hover:underline">
                    • <?= $item['judul'] ?>
                </a>
            <?php endforeach; ?>
        </div>
        </div>

       
        <div class="container">
        <div class="md:col-span-2 bg-pink-50 p-5 rounded-xl shadow">

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

            
                <div class="bg-pink-100 p-3 rounded mb-3 italic">
                    "<?= $quoteRandom ?>"
                </div>

                
                <a href="<?= $dataDipilih['link'] ?>" 
                   target="_blank"
                   class="text-taupe-900 underline">
                   🔗 Referensi Belajar
                </a>

            <?php else: ?>
                
                    Pilih artikel di sebelah kiri untuk melihat detail.
                </p>
            <?php endif; ?>

        </div>
        <div class="mt-8 flex justify-between">

        <a href="index.php" 
           class="bg-taupe-700 text-white text-sm px-2 py-1 ml-2 rounded hover:bg-taupe-600">
            Kembali ke Profil
        </a>

        <a href="timeline.php" 
           class="bg-taupe-700 text-white text-sm px-2 py-1 ml-2 rounded hover:bg-taupe-600">
            Timeline
        </a>

        <a href="blog.php" 
           class="bg-taupe-700 text-white text-sm px-2 py-1 ml-2 rounded hover:bg-taupe-600">
            Menuju Blog 
        </a>

    </div>
    </div>
   
</div>

</body>
</html>
