<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Online Shop</title>
</head>

<body>
    <div class="bg-primary p-5">
        <h1 class="text-center text-white">Toko Elektroknik</h1>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-6">
                <form action="belanja.php" method="post" class="mt-3">

                    <div class="form-group">
                        <label for=""> Nama Pemesan</label>
                        <input type="text" name="nama" value="" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Barang</label><br>
                        <div class="form-check form-check-inline">

                            <input class="form-check-input" type="radio" name="item" id="inlineRadio1" value="Televisi">
                            <label class="form-check-label" for="inlineRadio1">TV</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="item" id="inlineRadio2" value="Kulkas">
                            <label class="form-check-label" for="inlineRadio2">Refrigator</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="item" id="inlineRadio3" value="Mesin cuci">
                            <label class="form-check-label" for="inlineRadio3">Washing Machine</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">Total Barang</label>
                        <input type="number" name="total_item" value="" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="">Date</label>
                        <input type="date" name="date" value="" class="form-control">
                    </div>

                    <label for="">Courier Type</label>
                    <select name="kurir" class="form-select form-control" class="form-control">
                        <option selected>Choose Courier Type :</option>
                        <option value="Tiki">Tiki</option>
                        <option value="Si Cepat">Si Cepat</option>
                        <option value="Pos">Pos</option>
                        <option value="Grab">Grab</option>
                        <option value="Gojek">Gojek</option>
                    </select>
                    <div class="form-group">
                        <label for="">Shipping Address</label>
                        <textarea class="form-control" name="shipping_address" id="" cols="30" rows="5"></textarea>
                    </div>
                    <br>
                    <p> * Setiap Pembelian harus disertai asuransi untuk menghindari hal-hal 
                    yang tidak diinginkan sebesar Rp.12000 per barang
                    </p>
                    <input type="submit" value="Pesan" name="proses" class="btn btn-success btn-lg btn-block">

                </form>

            </div>
            <div class="col-3 mt-3">
                <div class="card" style="width: 18rem;">
                    <div class="card-header bg-primary text-white">
                        Result
                    </div>

                    <!-- Awal PHP -->
                    <?php error_reporting (E_ALL ^ E_NOTICE); ?>
                    <?php
                    $nama = $_POST['nama'];
                    $item = $_POST['item'];
                    $total_item = $_POST['total_item'];
                    $date = $_POST['date'];
                    $courier_type = $_POST['kurir'];
                    $shipping_address = $_POST['shipping_address'];
                    $assurance_cost = 12000 ;
                    $proses = $_POST['proses'];

                    // Awal Rumus Total Cost
                    if ($item == 'Televisi') {
                        $price = 3000000;
                    } elseif ($item == 'Kulkas') {
                        $price = 6000000;
                    } elseif ($item == 'Mesin cuci') {
                        $price = 4000000;
                    }
                    
                    if ($courier_type == 'Tiki') {
                        $courier_cost = 100000 ;}
                    elseif ($courier_type == 'Si Cepat') {
                        $courier_cost = 70000 ;}
                    elseif ($courier_type == 'Pos') {
                        $courier_cost = 80000 ; }
                    elseif ($courier_type == 'Gojek') {
                        $courier_cost = 200000 ;} 
                    elseif ($courier_type == 'Grab') {
                        $courier_cost = 220000 ; }


                    $total_price = ($total_item * $price) + ($courier_cost * $total_item) + ($assurance_cost * $total_item) ;
                    // Akhir Rumus Total Cost

                    ?>
                    <!-- Akhir PHP -->

                    <!-- Awal mencetak HASIL -->
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Customer : <?php echo $nama ?></li>
                        <li class="list-group-item">Item : <?php echo $item ?></li>
                        <li class="list-group-item">Total Item : <?php echo $total_item ?><?php ?></li>
                        <li class="list-group-item">Date Shipping : <?php echo $date ?></li>
                        <li class="list-group-item">Courier Type : <?php echo $courier_type ?></li>
                        <li class="list-group-item">Shipping Address : <?php echo $shipping_address ?></li>
                        <li class="list-group-item">Courier Cost : <?php echo "$courier_cost x $total_item" ?></li>
                        <li class="list-group-item">Assurance Cost : <?php echo "$assurance_cost x $total_item" ?></li>
                        <li class="list-group-item">Total Cost : <?php echo "Rp. $total_price"  ?></li>
                    </ul>
                    <!-- Akhir mencetak HASIL -->

                </div>
            </div>
            <div class="col-3 mt-3">
                <div class="card" style="width: 18rem;">
                    <div class="card-header bg-primary text-white">
                        Cost List
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">TV : Rp.3000.000</li>
                        <li class="list-group-item">Refrigator : Rp.6000.000</li>
                        <li class="list-group-item">Washing Machine : Rp.4000.000</li>
                    </ul>
                </div>
            </div>

        </div>

    </div>
</body>

</html>