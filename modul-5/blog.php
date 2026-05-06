<?php
$artikel = [
    "html" => [
        "judul"   => "Belajar HTML Pertama Kali",
        "tanggal" => "2023-01-01",
        "isi"     => "Saat belajar html untuk pertamakalinya saya membuat cv tentang diri saya dan itu cukup menarik 
        karena disitu saya pertamakali membuat web",
        "gambar"  => "belajar html pertamakali.png",
        "link"    => [
            "https://www.w3schools.com",
        ]
    ],
    "error" => [
        "judul"   => "Error Pertama",
        "tanggal" => "2023-02-01",
        "isi"     => "Saya mengalami error pertama kali saat membuat tugas yang dimana saya lupa memberi tanda kutip sehingga membuat 
        1 blok tabel menjadi acak",
        "gambar"  => "error..png",
        "link"    => [
            "https://stackoverflow.com",
        ]
    ]
];

$quotes = [
    "diam menyusun logika bergerak error semua",
    "Error adalah guru terbaik ",
    "Debugging itu seni ",
    "Coding itu butuh latihan "
];

shuffle($quotes);
$randomQuote = $quotes[0];
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Blog Developer</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gradient-to-br from-blue-500 via-purple-500 to-pink-500 min-h-screen">

<div class="max-w-5xl mx-auto px-4 mt ">

    <div class="text-center text-white mb-8 mt-10">
        <h2 class="text-3xl font-bold">Blog Developer</h2>
        <p class="opacity-80">Catatan perjalanan belajar coding ✨</p>
    </div>

    <div class="grid md:grid-cols-2 gap-6">
        <?php foreach ($artikel as $key => $a): ?>
            <a href="?id=<?= $key; ?>" 
               class="bg-white/80 backdrop-blur rounded-xl shadow-lg overflow-hidden hover:scale-105 transition">

                <img src="<?= $a['gambar']; ?>" 
                class="w-full h-40 object-cover">

                <div class="p-4">
                    <h3 class="font-bold text-lg text-gray-800"><?= $a['judul']; ?></h3>
                    <p class="text-sm text-gray-500"><?= $a['tanggal']; ?></p>
                    <p class="text-gray-600 mt-2"><?= substr($a['isi'], 0, 70); ?>...</p>
                </div>

            </a>
        <?php endforeach; ?>
    </div>

    <?php
    if (isset($_GET['id']) && isset($artikel[$_GET['id']])):

        $data = $artikel[$_GET['id']];
    ?>
        <div class="mt-10 bg-white/90 backdrop-blur p-6 rounded-xl shadow-lg">
            <h3 class="text-2xl font-bold text-gray-800 mb-2"><?= $data['judul']; ?></h3>
            <p class="text-gray-500 mb-4"><?= $data['tanggal']; ?></p>

            <img src="<?= $data['gambar']; ?>" 
                 class="w-full max-h-64 object-cover rounded mb-4">

            <p class="text-gray-700 mb-4"><?= $data['isi']; ?></p>

            <div class="mt-4">
                <p class="font-semibold text-gray-700 mb-2">Referensi:</p>
                <ul class="list-disc list-inside text-blue-500">
                    <?php foreach ($data['link'] as $link): ?>
                        <li>
                            <a href="<?= $link; ?>" target="_blank" class="hover:underline">
                                <?= $link; ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    <?php endif; ?>

    <div class="mt-10 text-center">
        <div class="bg-white/80 backdrop-blur p-4 rounded-xl shadow inline-block">
            <p class="italic text-gray-700 text-lg">
                “<?= $randomQuote; ?>”
            </p>
        </div>
    </div>

    <!-- Footer Nav -->
    <div class="text-center mt-6 text-white space-x-4">
        <a href="index.php" class="hover:underline">← Profil</a>
        <a href="timeline.php" class="hover:underline">Timeline →</a>
    </div>

</div>

</body>
</html>