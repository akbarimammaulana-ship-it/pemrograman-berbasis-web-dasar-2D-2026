<?php
$timeline = [
    ["tahun" => "2025", "kegiatan" => "Masuk kuliah di jurusan Sistem Informasi"],
["tahun" => "2025", "kegiatan" => "berusaha memahami dengan mata kuliah yang di beri (pertama kali belajar coding "],
["tahun" => "2025", "kegiatan" => "pertama kali ngoding <alpro> (sesusah itu :))"],
["tahun" => "2026", "kegiatan" => "masuk ke codingan yang menurutku lebih susah"],
  ["tahun" => "2026", "kegiatan" => "uda mulai pusingg ngadepin js, php, blm jg modul yang atas"],
];

function highlightTahun($tahun, $target = "2026") {
    if ($tahun == $target) {
        return "text-purple-500 font-bold";
    }
    return "text-gray-800";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Timeline Belajar Coding</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-purple-300 font-sans">
<div class="max-w-2xl mx-auto p-6">
    <h2 class="text-2xl font-bold text-center mb-6"><u>
        Timeline Perjalanan Belajar Coding
    </u></h2>
    <div class="relative border-l-4 border-pink-200 pl-6">
        <?php foreach ($timeline as $data): ?>
            <div class="mb-6 relative">
                <div class="bg-white/20 backdrop-blur-md border border-white/30 rounded-xl shadow-lg p-4 hover:scale-105 hover:shadow-2xl">
                    <p class="<?= highlightTahun($data['tahun']) ?>">
                        <?= $data['tahun'] ?>
                    </p>
                    <p class="text-gray-800">
                        <?= $data['kegiatan'] ?>
                    </p>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    <div class="mt-8 flex justify-between">
        <a href="index.php" 
           class="bg-gray-300 px-4 py-2 rounded hover:bg-gray-400">
            Kembali ke Profil
        </a>
        <a href="blog.php" 
           class="bg-purple-500 text-white px-4 py-2 rounded hover:bg-pink-600">
            Menuju Blog 
        </a>
    </div>
</div>
</body>
</html>