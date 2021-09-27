<!DOCTYPE html>
<html>
    <head>
        <title>KRS Mahasiswa</title>
    </head>
<style>
    #data-krs{
        border-collapse: collapse;
        width: 100%;
        font-family: sans-serif, arial, helvetica;
        text-align: justify;
    }
    
    #data-krs td,
    #data-krs th {
        padding: 7px;
        border: 1px solid black;
    }

    #data-krs tr:hover {
        background-color: black;
    }

    #data-krs tr:nth-child(even){
        background-color: lightgrey;
    }

    #data-krs th {
        text-align: center;
        background-color: orange;
        padding-bottom: 13px;
        padding-top: 13px;
    }
</style>
<body>
    <?php
        error_reporting(E_ALL);

        $nim = $_POST['nim'];
        $nama = $_POST['nama'];
        $kode = $_POST['kode'];
        $nama_mk = $_POST['nama_mk'];
        $sks = $_POST['sks'];
        $select1 = $_POST['kelas'];
        $select2 = $_POST['semester'];
    ?>
    <table id="data-krs">
        <tr>
            <th>NIM</th>
            <th>Nama</th>
            <th>Kode Matakuliah</th>
            <th>Nama Matakuliah</th>
            <th>Jumlah SKS</th>
            <th>Kelas</th>
            <th>Semester</th>
        </tr>
        <tr>
            <td><?= $nim; ?></td>
            <td><?= $nama; ?></td>
            <td><?= $kode; ?></td>
            <td><?= $nama_mk; ?></td>
            <td><?= $sks; ?></td>
            <td><?= $select1; ?></td>
            <td><?= $select2; ?></td>
        </tr>
        
    </table>
</body>
</html>
    
   

