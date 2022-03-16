<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Form Nilai</title>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <style>
            * {
                  overflow-x: hidden;
            }
      </style>
</head>

<body>
      <header>
            <div class="mt-4">
                  <h1 style="text-align: center">FORM NILAI</h1>
            </div>
      </header>
      <main>
            <form method="POST" class="form-horizontal" action="nilai_siswa.php">
                  <div class="container py-5">
                        <div class="form-group row">
                              <label for="nama" class="col-4 col-form-label">Nama Lengkap</label>
                              <div class="col-8">
                                    <input id="nama" name="nama" placeholder="Nama Lengkap" type="text" class="form-control" required="required">
                              </div>
                        </div>
                        <div class="form-group row">
                              <label for="matkul" class="col-4 col-form-label">Mata Kuliah</label>
                              <div class="col-8">
                                    <select id="matkul" name="matkul" class="custom-select" required="required">
                                          <option value="Dasar-Dasar Pemograman">Dasar-Dasar Pemograman</option>
                                          <option value="Basis Data 1">Basis Data 1</option>
                                          <option value="Pemograman Web">Pemograman Web</option>
                                    </select>
                              </div>
                        </div>
                        <div class="form-group row">
                              <label for="nilai_uts" class="col-4 col-form-label">Nilai UTS</label>
                              <div class="col-8">
                                    <input id="nilai_uts" name="nilai_uts" placeholder="Nilai UTS" type="text" class="form-control" required="required">
                              </div>
                        </div>
                        <div class="form-group row">
                              <label for="nilai_uas" class="col-4 col-form-label">Nilai UAS</label>
                              <div class="col-8">
                                    <input id="nilai_uas" name="nilai_uas" placeholder="Nilai UAS" type="text" class="form-control" required="required">
                              </div>
                        </div>
                        <div class="form-group row">
                              <label for="nilai_tugas" class="col-4 col-form-label">Nilai Tugas/Praktikum</label>
                              <div class="col-8">
                                    <input id="nilai_tugas" name="nilai_tugas" placeholder="Nilai Tugas/Praktikum" type="text" class="form-control" required="required">
                              </div>
                        </div>
                        <div class="form-group row">
                              <div class="offset-4 col-8">
                                    <button name="proses" value="simpan" type="submit" class="btn btn-primary">Submit</button>
                              </div>
                        </div>
                  </div>
            </form>
      </main>

</body>
</html>