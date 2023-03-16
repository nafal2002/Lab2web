<!DOCTYPE html>
<html>
<head>
    <title>Program PHP Sederhana</title>
</head>

<body align=center>
</ul>
			</div>
		<div id="runningtext">
		<marquee behavior="scroll" scrollamount="13" onmouseover="this.stop();" onmouseout="this.start();" direction="left">
			Selamat Datang di Website Saya
		</marquee>
		</div>
    <h2>Form Input</h2>
    </ul>
		
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Nama: <input type="text" name="nama"><br><br>
        Tanggal Lahir: <input type="date" name="tgl_lahir"><br><br>
        Pekerjaan:
        <select name="pekerjaan">
            <option value="Programmer">Programmer</option>
            <option value="Designer">Designer</option>
            <option value="Marketing">Marketing</option>
            <option value="CHEF">CHEF</option>
        </select><br><br>
        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
        // Cek apakah form sudah di-submit
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Ambil nilai dari form
            $nama = $_POST["nama"];
            $tgl_lahir = $_POST["tgl_lahir"];
            $pekerjaan = $_POST["pekerjaan"];

            // Menghitung umur berdasarkan tanggal lahir
            $tgl_lahir_timestamp = strtotime($tgl_lahir);
            $umur = date("Y") - date("Y", $tgl_lahir_timestamp);

            // Menentukan gaji berdasarkan pekerjaan
            switch ($pekerjaan) {
                case "Programmer":
                    $gaji = 10000000;
                    break;
                case "Designer":
                    $gaji = 8000000;
                    break;
                case "Marketing":
                    $gaji = 6000000;
                    break;
                    case "CHEF":
                        $gaji = 12000000;
                        break;
                default:
                    $gaji = 0;
                    break;
            }

            // Menampilkan output
            echo "<h2>Output</h2>";
            echo "Nama: " . $nama . "<br>";
            echo "Tanggal Lahir: " . $tgl_lahir . "<br>";
            echo "Umur: " . $umur . " tahun<br>";
            echo "Pekerjaan: " . $pekerjaan . "<br>";
            echo "Gaji: Rp " . number_format($gaji, 0, ",", ".") . "<br>";
        }
    ?>
</body>
</html>