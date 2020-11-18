<?php
	if (isset($_POST['simpan'])) {
		echo '<table>';
		echo '<tr><td>Nominal Pinjaman</td><td>:</td><td>'.$_POST['approved_credit'].'</td></tr>';
		echo '<tr><td>Presentase Scoring</td><td>:</td><td>'.$_POST['ext_score_2'].'</td></tr>';
		echo '<tr><td>Lama Bekerja (Hari)</td><td>:</td><td>'.$_POST['tahun'].' Tahun, '.$_POST['bulan'].' Bulan</td></tr>';
		echo '<tr><td>Pendidikan</td><td>:</td><td>'.$_POST['education'].'</td></tr>';
		echo '<tr><td>Umur</td><td>:</td><td>'.$_POST['day_age'].'</td></tr>';
		echo '<tr><td>Jenis Kelamin</td><td>:</td><td>'.$_POST['gender'].'</td></tr>';
		echo '<tr><td>Status Perkawinan</td><td>:</td><td>'.$_POST['family_status'].'</td></tr>';
		echo '<tr><td>Jenis Organisasi</td><td>:</td><td>'.$_POST['organization_type'].'</td></tr>';
		echo '<tr><td>Jenis Pendapatan</td><td>:</td><td>'.$_POST['income_type'].'</td></tr>';
		echo '<tr><td>Tanggal Terakhir Update Id (KTP/SIM/dll)</td><td>:</td><td>'.$_POST['days_id_change'].'</td></tr>';
		echo '<tr><td>Tanggal Pengajuan</td><td>:</td><td>'.$_POST['days_id_change1'].'</td></tr>';
		echo '<tr><td>Jenis Kontrak</td><td>:</td><td>'.$_POST['contract_type'].'</td></tr>';
		echo '<tr><td>Pendapatan (perbulan)</td><td>:</td><td>'.$_POST['income'].'</td></tr>';
		echo '<tr><td>Tempat Tinggal Saat ini</td><td>:</td><td>'.$_POST['housing_type'].'</td></tr>';
		echo '<tr><td>Tenor</td><td>:</td><td>'.$_POST['tenor'].'</td></tr>';
		echo '<tr><td>Prediksi Angsuran</td><td>:</td><td>'.$_POST['annuity'].'</td></tr>';
		echo '<tr><td>Tanggal Join di Bank</td><td>:</td><td>'.$_POST['days_registration'].'</td></tr>';
		echo '<tr><td>Tanggal Pengajuan Pinjaman</td><td>:</td><td>'.$_POST['days_registration1'].'</td></tr>';
		echo '</table>';

		header("Location: cermati.php?id=1");
	} 

	if (isset($_POST['sign_in'])) {
		echo '<table>';
		echo '<tr><td>Username</td><td>:</td><td>'.$_POST['user_in'].'</td></tr>';
		echo '<tr><td>Password</td><td>:</td><td>'.$_POST['pass_in'].'</td></tr>';
		echo '</table>';
	}

	if (isset($_POST['sign_up'])) {
		echo '<table>';
		echo '<tr><td>Username</td><td>:</td><td>'.$_POST['user_up'].'</td></tr>';
		echo '<tr><td>Email</td><td>:</td><td>'.$_POST['email_up'].'</td></tr>';
		echo '<tr><td>Password</td><td>:</td><td>'.$_POST['pass_up'].'</td></tr>';
		echo '</table>';
	}
?>