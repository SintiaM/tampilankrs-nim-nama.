<!DOCTYPE html>
<html>
    <head>
        <title>Formulir </title>
    </head>
    <style>
        p {
            margin: 30px;
            border: 1px none;
            background: lightblue;
            outline-offset: 18px;
            text-align: center;
            font-size: 18px;
            font-family: sans-serif, arial, helvetica;
        }
        body{
            background: orange;
            width: 300px;
            border: 5px solid grey;
            padding: 30px;
            margin-left: 500px;
            margin-top: 70px;
            text-align: center;
            font-family: sans-serif, arial, helvetica;
            font-size: 15px;
        }

        input{
            padding: 10px;
        }
        .dropdown{
            font-size: 18px;
            text-align: center;
            padding: 10px;
            font-family: sans-serif, arial, helvetica;
        }


    </style>
    <body>
            <form action="tampilankrs-nim-nama.php" method="POST">
            <p>Input Data Formulir</p>
            <label>Nim</label><br>
            <input type="text" name="nim">
            <br>
            <label>Nama Mahasiswa</label><br>
            <input type="text" name="nama">
            <br>
            <label>Kode Matakuliah</label><br>
            <input type="text" name="kode">
            <br>
            <label>Nama Matakuliah</label><br>
            <input type="text" name="nama_mk">
            <br>
            <label>Jumlah SKS</label><br>
            <input type="text" name="sks">
            <br>
            <div class="dropdown">
                <select name="kelas">
                <option value="-">Pilih Kelas</option>
                    <option value="Kelas A">Kelas A</option>
                    <option value="Kelas B">Kelas B</option>
                </select>
                <select name="semester">
                    <option value="-">Pilih Semester</option>
                    <option value="Semester 1">Semester 1</option>
                    <option value="Semester 3">Semester 3</option>
                    <option value="Semester 5">Semester 5</option>
                    <option value="Semester 7">Semester 7</option>
                </select>
            </div><br>
            <div class="button">
                <input type="submit" value="DAFTAR">
            </div>
            </form>
    </body>
</html>
