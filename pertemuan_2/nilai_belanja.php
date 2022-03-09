<?php
            $customer = $_POST['customer'];
            $produk = $_POST['produk'];
            $jumlah = $_POST['jumlah'];

            if ($produk == 'tv'){
                $harga = 4200000;
            }elseif ($produk == 'kulkas'){
                $harga = 3100000;
            }elseif ($produk == 'Mesincuci'){
                $harga = 3800000;
            }
            $total = $jumlah * $harga;
            
            echo'<br/> Nama Customer : '.$customer;
            echo'<br/> Produk Pilihan : '.$produk;
            echo'<br/> Jumlah Beli : '.$jumlah;
            echo'<br/> Total Beli : '.$total;

        ?>