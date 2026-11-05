<? php
$menu = $_GET['menu'] ?? "';

$halaman = [
    'A' => 'pendaftaran.php',
    'B' => 'belanja.php',

J;
?>
<! DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtm11/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Layanan MySimCard</title>
</head>
<body>
    <h1>Beranda Website MySimCard</h1>

        <div style="border: 0.1px solid #000; padding: 3px;">
            <a href="?menu=A" style="text-decoration: none;">Pendaftaran Akun</a>
        </div>
        <div style="border: 0.1px solid #000; padding: 3px;">
            <a href="?menu=B" style="text-decoration: none;">Belanja Pulsa dan Paket Data</a>
        </div>

        <div id="konten">
            <? php
            if (is_string($menu) && isset($halaman[$menu])) {
            require _DIR _. DIRECTORY_SEPARATOR . $halaman[$menu];
            } else {
            echo '<p>Silakan pilih menu di atas .< /p>';

            #000; padding: 3px;">

            #000; padding: 3px;">

            }
            ?>
        </div>
    </body>
</html>