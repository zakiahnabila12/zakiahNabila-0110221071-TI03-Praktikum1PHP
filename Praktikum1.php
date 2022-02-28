<?php
$ns1 = ['id'=>1,'nim'=>'01101','uts'=>90,'uas'=>90,'tugas'=>90];
$ns2 = ['id'=>2,'nim'=>'01121','uts'=>60,'uas'=>80,'tugas'=>68];
$ns3 = ['id'=>3,'nim'=>'01130','uts'=>70,'uas'=>85,'tugas'=>70];
$ns4 = ['id'=>4,'nim'=>'01134','uts'=>80,'uas'=>77,'tugas'=>82];

$ar_nilai = [$ns1, $ns2 , $ns3, $ns4];

?>
<h3 align= "center">Daftar Nilai Siswa</h3>
<table border="1" width="100%">
<thead>
<tr bgcolor= "green">
<th>No</th><th>NIM</th><th>UTS</th>
<th>UAS</th><th>Tugas</th><th>Nilai Akhir</th>
</tr>
</thead>
<tbody>
<?php
$nomor = 1;
foreach($ar_nilai as $ns){
echo '<tr align= "center" bgcolor= "yellow"><td>'.$nomor.'</td>';
echo '<td>'.$ns['nim'].'</td>';
echo '<td>'.$ns['uts'].'</td>';
echo '<td>'.$ns['uas'].'</td>';
echo '<td>'.$ns['tugas'].'</td>';
$nilai_akhir = ($ns['uts'] + $ns['uas']+$ns['tugas'])/3;
echo '<td>'.number_format($nilai_akhir,2,',','.').'</td>';
echo '<tr/>';
$nomor++;
}
?>
</tbody>
</table>