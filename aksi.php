<?php
include "koneksi.php";
$op=$_GET['op'];
$id=$_GET['id'];
if($op=="jurusan"){
?>
<select name=matakuliah id=matakuliah>
		<option value="0">- Pilih -</option>
		<?php
		$sql=mysql_query("Select * from matakuliah where id_jur='$id'");
		while($r=mysql_fetch_array($sql)){
			echo"<option value='$r[id_mkl]'>$r[nama_mkl]</option>";
		}
		?>
	    </select>
<?php
}
?> 	
