<?php
function highlightTahun($tahun)
{
    if ($tahun == "2024") {
        return "<b style='color:red'>$tahun</b>";
    }
    return $tahun;
}

$timeline = [
    ["tahun" => "2025", "kegiatan" => "Masuk Kuliah"],
    ["tahun" => "2022", "kegiatan" => "Belajar HTML"],
    ["tahun" => "2022", "kegiatan" => "Belajar CSS & JS"],
    ["tahun" => "2024", "kegiatan" => "Project Website Pertama"],
    ["tahun" => "2024", "kegiatan" => "Belajar PHP & Database"]
];
?>

<!DOCTYPE html>
<html>

<head>
    <title>Timeline</title>
    <style>
        .timeline {
            border-left: 3px solid black;
            margin-left: 20px;
            padding-left: 20px;
        }

        .item {
            margin-bottom: 15px;
        }
    </style>
</head>

<body>

    <h2>Timeline Belajar Coding</h2>

    <div class="timeline">
        <?php foreach ($timeline as $data) { ?>
            <div class="item">
                <?php echo highlightTahun($data['tahun']); ?> -
                <?php echo $data['kegiatan']; ?>
            </div>
        <?php } ?>
    </div>

    <br>
    <a href="index.php">Kembali ke Profil</a> |
    <a href="blog.php">Menuju Blog</a>

</body>

</html>