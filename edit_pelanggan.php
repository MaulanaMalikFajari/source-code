<h2 align="center">Edit Pelanggan</h2>
<form name="form1" method="post" action="<?php echo base_url() ?>pelanggan/edit/<?php echo $kd_pelanggan?>">
<p><label>Kode Pelanggan</label>
	<input type="text" class="form-control" name="kd_pelanggan" value="<?php echo $kd_pelanggan?>"></p>
<p><label>Nama</label>
	<input type="text" class="form-control" name="nama_pelanggan" value="<?php echo $data->nama_pelanggan?>"></p>
<p><label>Alamat</label>
	<input type="text" class="form-control" name="alamat_pelanggan" value="<?php echo $data->alamat_pelanggan?>"></p>
<p><label>Kota Pelanggan</label>
	<input type="text" class="form-control" name="kota_pelanggan" value="<?php echo $data->kota_pelanggan?>"></p>
<p><label>Telp Pelanggan</label>
	<input type="text" class="form-control" name="telp_pelanggan" value="<?php echo $data->telp_pelanggan?>"></p>
<p><label>Email</label>
	<div class="input-group input-group1">
		<span class="input-group-addon"> @ </span>
		<input type="text" class="form-control" name="email_pelanggan" value="<?php echo $data->email_pelanggan?>">
	</div>
<p>
	<label for="nama">Password</label>
	<input type="text" class="form-control" name="password" value="<?php echo $data->password ?>"></p>
<br>
<p>
	<input type="submit" name="submit" value="Submit">
	<input type="reset" name="submit2" value="Reset">
</p>
</form>