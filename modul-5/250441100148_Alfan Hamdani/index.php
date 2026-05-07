<?php
function tampilkanData($data)
{
    echo "<table border='1' cellpadding='10'>";
    foreach ($data as $key => $value) {
        echo "<tr><td><b>$key</b></td><td>$value</td></tr>";
    }
    echo "</table>";
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Profil Developer</title>
</head>

<body>

    <h2>Profil Interaktif Developer Pemula</h2>

    <table border="1" cellpadding="10">
        <tr>
            <td>Nama</td>
            <td>Alfan Hamdani</td>
        </tr>
        <tr>
            <td>ID Developer</td>
            <td>DEV001</td>
        </tr>
        <tr>
            <td>Kota/Tgl Lahir</td>
            <td>Bangkalan, 04-10-2006</td>
        </tr>
        <tr>
            <td>Email</td>
            <td>alfan@email.com</td>
        </tr>
        <tr>
            <td>No WA</td>
            <td>082338952818</td>
        </tr>
    </table>

    <h3>Form Input</h3>

    <form method="post">
        Framework (pisahkan dengan koma): <br>
        <input type="text" name="framework" placeholder="Contoh: laravel, bootstrap, tailwind"><br><br>

        Pengalaman:<br>
        <textarea name="pengalaman"></textarea><br><br>

        Tools:<br>
        <input type="checkbox" name="tools[]" value="VS Code">VS Code
        <input type="checkbox" name="tools[]" value="GitHub">GitHub
        <input type="checkbox" name="tools[]" value="Figma">Figma
        <input type="checkbox" name="tools[]" value="Postman">Postman<br><br>

        Minat:<br>
        <input type="radio" name="minat" value="Frontend">Frontend
        <input type="radio" name="minat" value="Backend">Backend
        <input type="radio" name="minat" value="Fullstack">Fullstack<br><br>

        Skill:<br>
        <select name="skill">
            <option value="">Pilih Skill</option>
            <option>Dasar</option>
            <option>Cukup</option>
            <option>Profesional</option>
        </select><br><br>

        <button type="submit" name="submit">Kirim</button>
    </form>

    <hr>

    <?php
    if (isset($_POST['submit'])) {

        $framework = $_POST['framework'];
        $pengalaman = $_POST['pengalaman'];
        $tools = $_POST['tools'] ?? [];
        $minat = $_POST['minat'] ?? "";
        $skill = $_POST['skill'];

        if ($framework == "" || $pengalaman == "" || empty($tools) || $minat == "" || $skill == "") {
            echo "<p style='color:red'>Semua input wajib diisi!</p>";
        } else {

            $arrFramework = explode(",", $framework);

            if (count($arrFramework) > 2) {
                echo "<p style='color:green'>Skill Anda cukup luas di bidang development!</p>";
            }

            $data = [
                "Framework" => implode(", ", $arrFramework),
                "Tools" => implode(", ", $tools),
                "Minat" => $minat,
                "Skill" => $skill
            ];

            tampilkanData($data);

            echo "<h3>Pengalaman:</h3>";
            echo "<p>$pengalaman</p>";
        }
    }
    ?>

    <br>
    <a href="timeline.php">Ke Timeline</a> |
    <a href="blog.php">Ke Blog</a>

</body>

</html>