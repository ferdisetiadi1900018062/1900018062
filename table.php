<!DOCTYPE html>
<html>
<head>
	<title>daftar pemohon sim</title>
	<style type="text/css">
    
		.satu {
    width: 1350px;
    margin-top: -100px;
    height: 70px;
    float: left;
    background-color: rgb(70, 111, 158);
   
}
.satu1 {
    width: 1350px;
    margin-top: -90px;
    height: 70px;
    float: left;
    background-color: rgb(70, 111, 158);
   
}
.badan{
    margin-top: -780px;
}
.nama{
    margin-left: 70px;
    margin-top: 8px;
    font-family: segoe ui ;
    font-display: inherit;
    color: white;
    float: left;
    font-size: 20px;
}
ul {
    list-style-type: none;
    float: right;
    margin-top: 20px;
}
ul li {
    display: inline-block;
}
ul li a{
    text-decoration: none;
    color: white;
    padding: 5px 10px;
    border: 1px solid;
    transition: 0.6s;
    margin-top: 10 px;
}

.menu {
    font-family: segoe ui;
    margin-top: 5px;
    margin-right: 70px;
    margin-bottom: 300px;
    width: 500px;
    height: 50px;
    float: right;
}
p{
    margin-top: -8px;
    font-family: segoe ui;
    font-size: 30px;
}

.box {
    margin-top: 75px;
    width: 280px;
    position: absolute;
    top: 40%;
    left: 50%;
    transform: translate(-50% , -50%);
}
.kontensatu {
    opacity: 85%;
    color: white;
    margin-top: 150px;
    height: 700px;
    width: 500px;
    border-radius: 20px;
    position: absolute;
    background-color:hsl(212, 53%, 62%);
    top: 50%;
    left: 50%;
    transform: translate(-50% , -50%);
    box-shadow: 2px 2px 8px  rgba(0,0,0,8)  ;
}

.textbox {
    width: 100%;
    overflow: hidden;
    font-size: 20px;
    padding: 8px 0;
    margin: 8px 0;
    font-family: segoe ui solid white;
    border-bottom: 1px solid white;
    color: white;
}
.textbox input{  
    border: none;
    background: none;
    outline: none;
    color: white;
}

.btn {
    width: 100%;
    background: none;
    border: 2px solid white;
    color: white;
    font-family: segoe ui;
    padding: 5px;
}
.foot{
    margin-top: 750px;
    width: 1350px;
    height: 30px;
    float: left;
    background-color: rgb(70, 111, 158);
}
.foot1{
    margin-top: 170px;
    width: 1350px;
    height: 30px;
    float: left;
    background-color: rgb(70, 111, 158);
}

#a{
    background-color: #13668d;
    opacity: 100%;
}
#b {
    background-color: #33a4d8;
    opacity: 100%;
}
#kota {
    width: 120px;
   
    
}
#nama {
    width: 250px;
   
}
#ttl {
    width: 250px;
   
}
#gol {
    width: 250px;
   
}
#pekerjaan {
    width: 250px;
   
}
#alamat {
    width: 250px;
   
}
#domisili {
    width: 250px;
   
}

.table {
    color: white;
    text-align: center;
    font-family: segoe ui;
    font-size: 20px;
   width: 600px;
   height: 400px;
    float: right;
    margin-left: 212px ;
}
.tombol-aktif1 {
    margin-top: 100px;
   margin-left: 550px;
    text-decoration: none;
    padding: 5px 20px;
    border-radius: 5px;
    font-family: monospace;
    font-size: 15px;
    color: white;
}
.biru1 {
    
    background-color: #3498DB;
    border-bottom: 5px solid #2980B9;
    text-shadow: 0px -1px #2980B9;
}
.polisi{
    background-color:#a4c4e9 ;
    width: 1350px;
    height: 850px;
}
.kontainer{
    margin-top: -750px;
}
        }
      
      </style>
<body>
<div class="polisi"></div>
<div class="kontiner">
<div class="satu1">
    <div class="nama">pendaftaran <br>sim</div>
    <div class="menu">
        <ul>
            <li> <a href="1.html">home</a> </li>
            <li> <a href="about.html">about me</a> </li>
            <li> <a href="sukaduka.php">suka&duka</a> </li>
            <li> <a href="pendaftaran.html">pendaftaran</a> </li>
            <li> <a href="cek.php">cek</a> </li>
        </ul>
    </div>
</div>
	<div class="badan">
		<h1 align="center">Daftar pemohon sim</h1>
		<table width="100%" style="border-collapse:collapse;" >
			<tr id="a">
				<th>Nama</th>
				<th>Tempat lahir</th>
				<th>tanggal lahir</th>
				<th>golongan darah</th>
				<th>jenis kelamin</th>
				<th>alamat</th>
				<th>pekerjaan</th>
				<th>domisili</th>
				
			</tr>
			<?php 
				echo "<head><title>Peserta eSport Dota 2</head></title>";
				$fp = fopen("sim.txt", "r");
			?>
			<?php while ($isi = fgets($fp,100)) 
			{
				$pisah = explode ("|", $isi);
				?>
				<tr id="b">
					<th><?php echo"$pisah[0]"; ?></th>
					<th><?php echo"$pisah[1]"; ?></th>
					<th><?php echo"$pisah[2]"; ?></th>
					<th><?php echo"$pisah[3]"; ?></th>
					<th><?php echo"$pisah[4]"; ?></th>
					<th><?php echo"$pisah[5]"; ?></th>
					<th><?php echo"$pisah[6]"; ?></th>
					<th><?php echo"$pisah[7]"; ?></th>
				</tr>
			<?php } ?>
		</table>
		<button class="tombol-aktif1 biru1"><a align="center" href="index.html">Kembali Ke Menu Awal</a>
	</div>
	*jika data belum kluar refresh halaman ini
	<?php
	$fp=fopen("sim.txt", "a+");
    $nama = $_POST['nama'];
    $ttl = $_POST['ttl'];
    $tg = $_POST['tg'];
	$gol = $_POST['gol'];
	$jn = $_POST['jn'];
	$alamat = $_POST['alamat'];
    $pekerjaan = $_POST['pekerjaan'];
    $domisili = $_POST['domisili'];
    
	 
	
	

	fputs($fp,"$nama|$ttl|$tg|$gol|$jn|$alamat|$pekerjaan|$domisili\n");
	fclose($fp);

?>
</div>
</body>
</html>
