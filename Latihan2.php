<!DOCTYPE html>
<html>
<head>
    <title>Kalkulator Sederhana</title>
    <!-- Tautan ke Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }

        .calculator-container {
            max-width: 300px;
            margin: 0 auto;
            background-color: #98E4FF;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }

        h2 {
            text-align: center;
            color: #333;
        }

        label {
            font-weight: bold;
            display: block;
            margin-top: 10px;
        }

        input[type="text"] {
            width: 100%;
            padding: 8px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        select {
            width: 100%;
            padding: 8px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .result-box {
            background-color: #2980b9;
            color: #fff;
            text-align: center;
            margin-top: 20px;
            padding: 10px;
            border-radius: 5px;
        }

        .result {
            font-size: 24px;
        }

        input[type="submit"] {
            background-color: #192655;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 8px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>
    <h2>Kalkulator Sederhana</h2>
    <div class="calculator-container">
        <form method="POST" action="">
            <div class="form-group">
                <label for="angka1">Angka pertama:</label>
                <input type="text" class="form-control" name="angka1" id="angka1">
            </div>
            <div class="form-group">
                <label for="operator">Operator:</label>
                <select class="form-control" name="operator" id="operator">
                    <option value="tambah">+</option>
                    <option value="kurang">-</option>
                    <option value="kali">*</option>
                    <option value="bagi">/</option>
                </select>
            </div>
            <div class="form-group">
                <label for="angka2">Angka kedua:</label>
                <input type="text" class="form-control" name="angka2" id="angka2">
            </div>
            <button type="submit" name="hitung" class="btn btn-primary">Hitung</button>
        </form>

        <?php
        if (isset($_POST['hitung'])){
            $angka1 = $_POST['angka1'];
            $angka2 = $_POST['angka2'];
            $operator = $_POST['operator'];

            if ($operator == "tambah") {
                $hasil = $angka1 + $angka2;
            } elseif ($operator == "kurang") {
                $hasil = $angka1 - $angka2;
            } elseif ($operator == "kali") {
                $hasil = $angka1 * $angka2;
            } elseif ($operator == "bagi") {
                if ($angka2 == 0) {
                    echo "<p class='result'>Pembagian dengan nol tidak valid.</p>";
                } else {
                    $hasil = $angka1 / $angka2;
                }
            }

            if (isset($hasil)) {
                echo "<div class='result-box'>";
                echo "<p class='result'>Hasil: $hasil</p>";
                echo "</div>";
            }
        }
        ?>
    </div>

    <!-- Tautan ke Bootstrap JavaScript (Jika Anda memerlukan komponen JavaScript Bootstrap) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
