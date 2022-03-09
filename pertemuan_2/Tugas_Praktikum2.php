<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Nilai</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    
    <nav style="background-color: lightgrey;" class="navbar navbar-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Shop</a>
        </div>
    </nav>      
    <h2 style="text-align: left;" >Belanja Online</h2>
        <div class="container-fluid d-flex">
            <div class="container">
            <form method="POST" action="nilai_belanja.php">
                <div class="form-group row">
                    <label for="customer" class="col-2 col-form-label">Customer</label> 
                        <div class="col-6">
                            <input id="customer" name="customer" placeholder="Masukkan nama anda" type="text" class="form-control">
                        </div>
                </div>
                <div class="form-group row">
                    <label for="produk" class="col-2 col-form-label">Pilih Produk</label> 
                        <div class="col-6">
                            <select id="produk" name="produk" class="custom-select">
                                <option value="tv">Televisi</option>
                                <option value="kulkas">Kulkas</option>
                                <option value="Mesincuci">Mesin Cuci</option>
                            </select>
                        </div>
                </div>
                <div class="form-group row">
                    <label for="jumlah" class="col-2 col-form-label">Jumlah</label> 
                        <div class="col-6">
                            <input id="jumlah" name="jumlah" placeholder="Masukkan Jumlah yang ingin dibeli" type="text" class="form-control">
                        </div>
                </div>
                <div class="form-group row">
                    <div class="offset-2 col-2">
                        <button name="proses" type="submit" value="Simpan" class="btn btn-succes">Simpan</button>
                    </div>
                </div>
            </div>
            <div class="card" style="width: 30em;">
                <div class="card-header">
                    <label for="harga" class="col-6 col-form-label">Daftar Harga</label>     
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">TV : 5.000.000</li>
                    <li class="list-group-item">Kulkas : 3.000.000</li>
                    <li class="list-group-item">Mesin Cuci : 3.500.000</li>
                </ul>
                <div class="card-header">
                    Harga bisa berubah setiap saat
                </div>
            </div>
        </div>
        </form>
        <footer style="background-color: lightgrey;" class="fixed-bottom">
            <p>Created with <i class="bi bi-heart-fill text-danger"></i> by <a class="text-black fw-bold" href="https://api.whatsapp.com/send?phone=6288211705699&text=udah%20liat%20semuanya,%20kerenn%20%F0%9F%98%9A">Raihan Zalfa Safani</a></p>
        </footer>
    </body>
</html>