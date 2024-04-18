<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        input[name="result"] {
            cursor: not-allowed;
            color: black;
            width: 410px;
            height: 100px;
            text-align: right;
            font-size: 50px;
        }
        input, select {
            margin-bottom: 10px;
            padding: 8px;
        }
        button {
            margin-bottom: 10px;
            padding: 8px;
            cursor: pointer;
            width: 215px;
        }
        label[for="tes"] {
            color: white;
        }
    </style>
</head>
<body>
    <div class="container">
        <center><h1>KALKULATOR</h1></center>
        <label>Nama : Syaefinda Thysa Wafiqah</label>
        <br>
        <label>Kelas : XII PPLG 1</label>
        <br>
        <label for="tes">ciluk baa</label>
        <center>
        <div class="kalkulator">
            <input type="text" name="result" value="{{ isset($result) ? $result : ''}}" readonly>
            <form action="{{ url('/kalkulator/calculate') }}" method="post">
                @csrf
                <input type="text" name="a1" placeholder="Masukkan angka 1">
                <select name="op" id="">
                    <option value="tambah">+</option>
                    <option value="kurang">-</option>
                    <option value="kali">*</option>
                    <option value="bagi">/</option>
                </select>
                <input type="text" name="a2" placeholder="Masukkan angka 2">
                <br>
                <button type="submit" name="hitung">Hitung</button>
                <button type="submit" name="reset">Reset Hasil</button>
            </form>
        </div>
    </center>
    </div>

      
</body>
</html>