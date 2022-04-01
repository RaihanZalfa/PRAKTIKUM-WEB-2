<!DOCTYPE html>
<head>
    <title>Praktikum 5</title>
</head>

<body style="margin: 30px;">
<h2 textalign='center'>Bank Ray</h2>

<?php
class Account{
    public $nomor;
    public $nama;
    public $saldo;

    public function __construct($nomor, $nama, $saldo){
        $this->nomor = $nomor;
        $this->nama = $nama;
        $this->saldo = $saldo;
    }
    public function daftar(){
    echo "{$this->nomor} {$this->nama} {$this->saldo}";
    }
}

class accountBank extends Account{
    public function nabung($uang){
        echo " Nabung ". number_format ($uang) ." <br>";
    }
    public function tarik($uang){
        echo " Tarik Uang ". number_format ($uang) ."<br>";
    }
}

?>
<?php
$p1 = new accountBank("", "Ahmad", "");
$p1->daftar();
$p1->nabung(1000000);

$p2 = new accountBank("", "Bagas","" );
$p2->daftar();
$p2->tarik(2500000);
?>

<?php
    $p1 = ['id'=> 1, 'nomor' => 'C001', 'nama' => 'Ahmad', 'saldo' => 6000000];
    $p2 = ['id'=> 2, 'nomor' => 'C002', 'nama' => 'Bagas', 'saldo' => 5350000];
    $p3 = ['id'=> 3, 'nomor' => 'C003', 'nama' => 'Fatih', 'saldo' => 2500000];

    $ar_account = [$p1, $p2, $p3];
?>
<br>
<table class="table" border="1" width="100%">
    <thead>
        <tr>
            <th>No</th>
            <th>No. Account</th>
            <th>Nama</th>
            <th>Saldo</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $no = 1;
        foreach($ar_account as $ac) {
            echo '<tr><td>'.$no.'</td>';
            echo '<td>'.$ac['nomor'].'</td>';
            echo '<td>'.$ac['nama'].'</td>';
            $ha = $ac['saldo'];
            echo '<td>'.number_format($ha).'</td><tr>';
            $no++;
        }
        ?>
    </tbody>
</table>
<br>

</body>
</html>