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

        $hasil .= "<div class='mt-6 bg-blue-200 rounded-xl shadow p-5'>";
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
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-purple-300 font-sans">
   <div class="bg-indigo-400 text-white p-4 flex justify-between">
    <h2 class="font-bold">Menu</h2>
    <div>
        <a href="timeline.php" class="mr-4 hover:underline">Timeline</a>
        <a href="blog.php" class="hover:underline">Blog</a>
    </div>
</div>
        
<div class="max-w-3xl mx-auto p-6">
    <h2 class="text-2xl font-bold mb-4 text-center"><u>
        Profil Interaktif Developer Pemula
    </u></h2>
    <div class="bg-white/20 backdrop-blur-md border border-white/30 rounded-xl shadow-lg p-4 hover:shadow-2xl mb-6">
        <h3 class="font-bold mb-2">Profil</h3>
        <table class="w-full text-gray-700">
            <tr><td class="font-semibold">Nama</td><td>Risma Putri</td></tr>
            <tr><td class="font-semibold">ID Developer</td><td>D0117</td></tr>
            <tr><td class="font-semibold">TTL</td><td>Surabaya, 18-11-2006</td></tr>
            <tr><td class="font-semibold">Email</td><td>rismaput181106@gmail.com</td></tr>
            <tr><td class="font-semibold">WhatsApp</td><td>0881036073753</td></tr>
        </table>
    </div>
    <form method="POST" class="bg-indigo-300 rounded-xl shadow p-5">
        <?= $pesan ?>
        <h3 class="font-bold mb-3">Form Input</h3>
        <label class="font-medium">Framework (pisahkan dengan koma)</label>
        <input type="text" name="framework" value="<?= $framework ?>"
            class="w-full border bg-purple-100 p-2 rounded mb-3">
        <label class="font-medium">Cerita Pengalaman</label>
        <textarea name="cerita"
            class="w-full border bg-purple-100 p-2 rounded mb-3"><?= $cerita ?></textarea>
        <label class="font-medium">Tools</label><br>
        <div class="mb-3">
            <?php
            $risma = ["VS Code", "GitHub", "Figma", "Postman"];
            foreach ($risma as $t) {
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
        <select name="skill" class="w-full border bg-purple-100 p-2 rounded mb-3">
            <option value="">-- Pilih --</option>
            <option <?= ($skill=="Dasar")?"selected":"" ?>>Dasar</option>
            <option <?= ($skill=="Cukup")?"selected":"" ?>>Cukup</option>
            <option <?= ($skill=="Profesional")?"selected":"" ?>>Profesional</option>
        </select>
        <button class="w-full bg-purple-500 text-white py-2 rounded hover:bg-indigo-600">
        Kirim
        </button>
    </form>
    <?= $hasil ?>
</div>
</div>
</body>
</html>