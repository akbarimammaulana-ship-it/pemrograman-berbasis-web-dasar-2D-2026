<?php
function tampilkanData($label, $data) {
    return "<tr class='border-b'>
                <td class='py-2 font-semibold text-gray-600'>$label</td>
                <td class='py-2'>$data</td>
            </tr>";
}


$hasil = "";
$pesan = "";

$framework = $_POST['framework'] ?? "";
$cerita    = $_POST['cerita'] ?? "";
$tools     = $_POST['tools'] ?? [];
$minat     = $_POST['minat'] ?? "";
$skill     = $_POST['skill'] ?? "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($framework) || empty($cerita) || count($tools) == 0 || empty($minat) || empty($skill)) {
        $pesan = "<div class='bg-red-100 text-red-600 p-3 rounded mb-3'>
                    Semua input wajib diisi!
                  </div>";
    } else {

        $arrFramework = array_map('trim', explode(",", $framework));

        $hasil .= "<div class='mt-6 bg-taupe-50 rounded-xl shadow p-5'>";
        $hasil .= "<h3 class='text-lg font-bold mb-3'>Hasil Input</h3>";

        $hasil .= "<table class='w-full'>";
        $hasil .= tampilkanData("Framework", implode(", ", $arrFramework));
        $hasil .= tampilkanData("Tools", implode(", ", $tools));
        $hasil .= tampilkanData("Minat", $minat);
        $hasil .= tampilkanData("Skill", $skill);
        $hasil .= "</table>";

        $hasil .= "<p class='mt-3'><b>Pengalaman:</b><br>$cerita</p>";

        if (count($arrFramework) > 2) {
            $hasil .= "<p class='text-green-600 font-semibold mt-2'>
                        Skill Anda cukup luas di bidang development!
                      </p>";
        }

        $hasil .= "</div>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Profil Developer</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="style .css">
</head>

<body bgcolor="ivory">


    <h2 class="text-2xl font-bold mb-4 text-center">
        Profil Interaktif Developer Pemula
    </h2>

   
<div class="container">
    <div class="bg-taupe-100 rounded-xl shadow p-5 mb-6">
        <h3 class="font-bold mb-2">Profil</h3>
        <table class="w-full text-gray-700">
            <tr><td class="font-semibold">Nama</td><td>Lailatul Qodriyah</td></tr>
            <tr><td class="font-semibold">ID Developer</td><td>DEV067</td></tr>
            <tr><td class="font-semibold">TTL</td><td>Bandung, 22 Oktober 2006</td></tr>
            <tr><td class="font-semibold">Email</td><td>elalala587@gmail.com</td></tr>
            <tr><td class="font-semibold">WhatsApp</td><td>081907780665</td></tr>
        </table>
    </div>
</div>
   
<div class="container">
    <form method="POST" class="bg-taupe-100 rounded-xl shadow p-5">
        <?= $pesan ?>

        <h3 class="font-bold mb-3">Form Input</h3>

        <label class="font-medium">Framework (pisahkan dengan koma)</label>
        <input type="text" name="framework" value="<?= $framework ?>"
            class="w-full border bg-pink-50 p-2 rounded mb-3">

        <label class="font-medium">Cerita Pengalaman</label>
        <textarea name="cerita"
            class="w-full border bg-pink-50 p-2 rounded mb-3"><?= $cerita ?></textarea>

        <label class="font-medium">Tools</label><br>
        <div class="mb-3">
            <?php
            $listTools = ["VS Code", "GitHub", "Figma", "Postman"];
            foreach ($listTools as $t) {
                $checked = in_array($t, $tools) ? "checked" : "";
                echo "<label class='mr-3'>
                        <input type='checkbox' name='tools[]' value='$t' $checked> $t
                      </label>";
            }
            ?>
        </div>

        <label class="font-medium">Minat</label><br>
        <div class="mb-3">
            <?php
            $listMinat = ["Frontend", "Backend", "Fullstack"];
            foreach ($listMinat as $m) {
                $checked = ($minat == $m) ? "checked" : "";
                echo "<label class='mr-3'>
                        <input type='radio' name='minat' value='$m' $checked> $m
                      </label>";
            }
            ?>
        </div>

        <label class="font-medium">Skill</label>
        <select name="skill" class="w-full border bg-pink-50 p-2 rounded mb-3">
            <option value="">-- Pilih --</option>
            <option <?= ($skill=="Dasar")?"selected":"" ?>>Dasar</option>
            <option <?= ($skill=="Cukup")?"selected":"" ?>>Cukup</option>
            <option <?= ($skill=="Profesional")?"selected":"" ?>>Profesional</option>
        </select>

        <button class="w-full bg-pink-200 py-2 rounded hover:bg-pink-100">
        Kirim
        </button>
    </form>
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

    
    <?= $hasil ?>

</body>
</html>