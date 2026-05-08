<?php
function tampilkanData($data)
{
    echo "<div class='mt-6 p-5 bg-white/80 backdrop-blur rounded-2xl shadow-lg'>";
    echo "<h3 class='text-xl font-bold mb-3 text-gray-700'>Hasil Input</h3>";
    echo "<table class='w-full'>"; 
    foreach ($data as $key => $value) {
        echo "<tr class='border-b'>
                <td class='p-2 font-semibold text-gray-600'>$key</td>
                <td class='p-2 text-gray-800'>$value</td>
              </tr>";
    }
    echo "</table>";
    echo "</div>";
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Developer Profile</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="min-h-screen bg-gradient-to-br from-blue-500 via-purple-500 to-pink-500">

<nav class="bg-white/20 backdrop-blur-md shadow-md p-4 mb-6">
    <div class="max-w-4xl mx-auto flex justify-between text-white">
        <h1 class="font-bold"> DevProfile</h1>
        <div class="space-x-4">
            <a href="timeline.php" class="hover:underline">Timeline</a>
            <a href="blog.php" class="hover:underline">Blog</a>
        </div>
    </div>
</nav>


<div class="max-w-4xl mx-auto px-4">

    <div class="text-center text-white mb-6">
        <h2 class="text-3xl font-bold">Profil Developer</h2>
        <p class="opacity-80">Bangun identitas developer kamu </p>
    </div>

    <div class="bg-white/80 backdrop-blur rounded-2xl p-5 shadow-lg mb-6">
        <table class="w-full text-gray-700">
            <tr><td class="font-semibold">Nama</td><td>Intan Nuraini</td></tr>
            <tr><td class="font-semibold">ID</td><td>DEV001</td></tr>
            <tr><td class="font-semibold">TTL</td><td>Bangkalan, 04 Agustus 2006</td></tr>
            <tr><td class="font-semibold">Email</td><td>intan@email.com</td></tr>
            <tr><td class="font-semibold">WhatsApp</td><td>082238249078</td></tr>
        </table>
    </div>

    <div class="bg-white/80 backdrop-blur rounded-2xl p-6 shadow-lg">
        <h3 class="text-xl font-bold mb-4 text-gray-700">Isi Data Developer</h3>

        <form method="post" class="space-y-4">

            <input type="text" name="framework"
                placeholder="Framework (Laravel, React, dll)"
                class="w-full p-3 rounded-xl border focus:ring-2 focus:ring-blue-400 outline-none">

            <textarea name="pengalaman"
                placeholder="Ceritakan pengalaman kamu..."
                class="w-full p-3 rounded-xl border focus:ring-2 focus:ring-blue-400 outline-none"></textarea>

            <div>
                <p class="font-medium text-gray-700 mb-1">Tools</p>
                <div class="flex flex-wrap gap-3 text-gray-700">
                    <label><input type="checkbox" name="tools[]" value="VS Code"> VS Code</label>
                    <label><input type="checkbox" name="tools[]" value="GitHub"> GitHub</label>
                    <label><input type="checkbox" name="tools[]" value="Figma"> Figma</label>
                    <label><input type="checkbox" name="tools[]" value="Postman"> Postman</label>
                </div>
            </div>

            <div>
                <p class="font-medium text-gray-700 mb-1">Minat</p>
                <div class="flex gap-4 text-gray-700">
                    <label><input type="radio" name="minat" value="Frontend"> Frontend</label>
                    <label><input type="radio" name="minat" value="Backend"> Backend</label>
                    <label><input type="radio" name="minat" value="Fullstack"> Fullstack</label>
                </div>
            </div>

            <select name="skill"
                class="w-full p-3 rounded-xl border focus:ring-2 focus:ring-blue-400 outline-none">
                <option value="">Pilih Level Skill</option>
                <option>Dasar</option>
                <option>Cukup</option>
                <option>Profesional</option>
            </select>

            <button type="submit"
                class="w-full bg-gradient-to-r from-blue-500 to-purple-500 text-white py-3 rounded-xl font-semibold hover:scale-105 transition">
                Kirim Data 
            </button>

        </form>
    </div>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        if (
            !empty($_POST['framework']) &&
            !empty($_POST['pengalaman']) &&
            !empty($_POST['minat']) &&
            !empty($_POST['skill']) &&
            !empty($_POST['tools'])
        ) {

            $framework = explode(",", $_POST['framework']);
            $tools     = implode(", ", $_POST['tools']);

            $data = [
                "Framework" => implode(", ", $framework),
                "Tools"     => $tools,
                "Minat"     => $_POST['minat'],
                "Skill"     => $_POST['skill']
            ];

            tampilkanData($data);

            echo "<div class='mt-4 p-5 bg-white/80 backdrop-blur rounded-2xl shadow-lg'>";
            echo "<p><b>Pengalaman:</b> " . $_POST['pengalaman'] . "</p>";

            if (count($framework) > 2) {
                echo "<p class='text-green-600 mt-2 font-semibold'>
                        Skill kamu luas banget! 
                      </p>";
            }

            echo "</div>";

        } else {
            echo "<p class='text-red-800 text-center mt-4'>
                    Semua input wajib diisi!
                  </p>";
        }
    }
    ?>

    <div class="text-center mt-10 text-white space-x-4 mb-10">
        <a href="timeline.php" class="hover:underline">Ke Timeline →</a>
    </div>

</div>

</body>
</html>