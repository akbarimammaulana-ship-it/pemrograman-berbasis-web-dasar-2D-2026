<?php

$timeline = [
    ["tahun" => "2023", "kegiatan" => "Masuk kuliah jurusan Sistem Informasi"],
    ["tahun" => "2025", "kegiatan" => "Berusaha beradaptasi dengan materi di jurusan yang dipilih :)"],
    ["tahun" => "2025", "kegiatan" => "mulai belajar ngodingg (alpro)"],
    ["tahun" => "2026", "kegiatan" => "Mulai belajar WEB & Database"],
    ["tahun" => "2026", "kegiatan" => "uda pusingg ngadepin js, php, blm jg modul berikutnya"],
];


function highlightTahun($tahun, $target = "2026") {
    if ($tahun == $target) {
        return "text-taupe-500 font-bold"; 
    }
    return "text-taupe-900";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Timeline Belajar Coding</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="style .css">
</head>

<body bgcolor="ivory">

<div class="max-w-2xl mx-auto p-6">

    
     
    <h2 class="text-2xl font-bold text-center mb-6">
        Timeline Perjalanan Belajar Coding
    </h2>

    
    <div class="container">
    <div class="relative border-l-4 border-taupe-700 pl-6">

        <?php foreach ($timeline as $data): ?>
            
            <div class="mb-6 relative">
                
                <div class="absolute -left-3 top-1 w-5 h-5 bg-taupe-700 rounded-full"></div>
                
                <div class="bg-pink-50 rounded-xl shadow p-4">
                    <p class="<?= highlightTahun($data['tahun']) ?>">
                        <?= $data['tahun'] ?>
                    </p>
                    <p class="text-gray-600">
                        <?= $data['kegiatan'] ?>
                    </p>
                </div>

            </div>

        <?php endforeach; ?>
    </div>
    <div class="mt-8 flex justify-between">

        <a href="index.php" 
           class="bg-taupe-700 text-white px-4 py-2 rounded hover:bg-taupe-600">
            Kembali ke Profil
        </a>

        <a href="timeline.php" 
           class="bg-taupe-700 text-white px-4 py-2 rounded hover:bg-taupe-600">
            Timeline
        </a>

        <a href="blog.php" 
           class="bg-taupe-700 text-white px-4 py-2 rounded hover:bg-taupe-600">
            Menuju Blog 
        </a>

    </div>
</div>
    
</body>
</html>


