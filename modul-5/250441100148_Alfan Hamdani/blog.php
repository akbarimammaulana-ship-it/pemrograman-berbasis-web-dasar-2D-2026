<?php
$artikel = [
    1 => [
        "judul" => "Belajar HTML Pertama Kali",
        "tanggal" => "2022-01-01",
        "isi" => "Saya mulai belajar HTML dan sangat bingung di awal.",
        "gambar" => "img/html.png"
    ],
    2 => [
        "judul" => "Error Pertama",
        "tanggal" => "2024-02-01",
        "isi" => "Mengalami error membuat saya belajar lebih banyak.",
        "gambar" => "img/error.jpg"
    ]
];

$quotes = [
    "Jangan menyerah!",
    "Coding itu latihan!",
    "Error adalah guru terbaik"
];

$randomQuote = $quotes[array_rand($quotes)];
?>

<!DOCTYPE html>
<html>

<head>
    <title>Blog Developer</title>
</head>

<body>

    <h2>Blog Developer</h2>

    <ul>
        <?php foreach ($artikel as $id => $a) { ?>
            <li>
                <a href="blog.php?id=<?php echo $id; ?>">
                    <?php echo $a['judul']; ?>
                </a>
            </li>
        <?php } ?>
    </ul>

    <hr>

    <?php
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $data = $artikel[$id];

        echo "<h3>" . $data['judul'] . "</h3>";
        echo "<small>" . $data['tanggal'] . "</small>";
        echo "<p>" . $data['isi'] . "</p>";
        echo "<img src='" . $data['gambar'] . "' width='200'><br>";
        echo "<p><i>\"$randomQuote\"</i></p>";
        echo "<a href='https://www.w3schools.com'>Referensi</a>";
    }
    ?>

    <br><br>
    <a href="index.php">Kembali ke Profil</a> |
    <a href="timeline.php">Ke Timeline</a>

</body>

</html>