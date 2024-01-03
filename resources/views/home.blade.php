<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TEST CASE FSWD-1 API</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="py-5 w-75 m-auto">
        <h2 class="py-3">Dokumentasi API</h2>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Keterangan</th>
                <th scope="col">Endpoin</th>
                <th scope="col">Method</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Authentikasi Register</td>
                <td>/api/auth/register</td>
                <td>POST</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Authentikasi Login</td>
                <td>/api/auth/login</td>
                <td>POST</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>Mendapatkan Data User Login</td>
                <td>/api/user</td>
                <td>GET</td>
              </tr>
              <tr>
                <th scope="row">4</th>
                <td>Mendapatkan Data Pegawai</td>
                <td>/api/pegawai</td>
                <td>GET</td>
              </tr>
              <tr>
                <th scope="row">5</th>
                <td>Menambahkan Data Pegawai Baru</td>
                <td>/api/pegawai/store</td>
                <td>POST</td>
              </tr>
              <tr>
                <th scope="row">6</th>
                <td>Mengubah Data Pegawai</td>
                <td>/api/pegawai/update/{id}</td>
                <td>PUT</td>
              </tr>
              <tr>
                <th scope="row">7</th>
                <td>Menghapus Data Pegawai</td>
                <td>/api/pegawai/delete/{id}</td>
                <td>DELETE</td>
              </tr>
              <tr>
                <th scope="row">8</th>
                <td>Mendapatkan 3 Data Pegawai Berdasarkan Tanggal Bergabung</td>
                <td>/api/pegawai_top</td>
                <td>GET</td>
              </tr>
              <tr>
                <th scope="row">9</th>
                <td>Mendapatkan Data Pegawai yang Pernah Cuti</td>
                <td>/api/pegawai_cuti</td>
                <td>GET</td>
              </tr>
              <tr>
                <th scope="row">10</th>
                <td>Mendapatkan Data Sisa Cuti Pegawai</td>
                <td>/api/pegawai_sisa_cuti</td>
                <td>GET</td>
              </tr>
            </tbody>
          </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>