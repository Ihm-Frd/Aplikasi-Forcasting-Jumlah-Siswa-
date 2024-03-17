<?php include "_header.php"; ?>
<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Data Siswa Baru</h1>
    <p class="mb-4">Data Jumlah Siswa Baru Dari Tahun Ke-Tahun</p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="index.php" class="m-0 font-weight-bold btn btn-outline-primary"> <i class="bi bi-plus-circle-fill"></i> Tambahkan Data</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered text-lg" id="dataTable" width="100%" cellspacing="0">
						<tr>
							<th>No.</th>
							<th>Tahun Akademik</th>
							<th>Jumlah PMB</th>
							<th>X</th>
							<th>Y</th>
							<th>XX</th>
							<th>XY</th>
						</tr>
						<?php
						$sql = mysqli_query($con, "SELECT * FROM data_penerimaan_siswa") or die (mysqli_error($con));
						if (mysqli_num_rows($sql) > 0) {
							$x = 0;
							$jumlah_x = 0;
							$jumlah_y = 0;
							$jumlah_xx = 0;
							$jumlah_xy = 0;
							while ($data = mysqli_fetch_array($sql)) {
								$jumlah_x += $x;
								$jumlah_y += $data['jumlah_pmb'];
								$jumlah_xx += ($x * $x);
								$jumlah_xy += ($x * $data['jumlah_pmb']); 
								?>
								<tr>
									<td><?=$x+1;?>.</td>
									<td><?=$data['tahun_akademik'];?></td>
									<td align="center"><?=$data['jumlah_pmb'];?></td>
									<td align="center"><?=$x;?></td>
									<td align="center"><?=$data['jumlah_pmb'];?></td>
									<td align="center"><?=$x * $x;?></td>
									<td align="center"><?=$x * $data['jumlah_pmb'];?></td>
								</tr>
								<?php
								$x++;
							}
							?>
							<tr>
								<td colspan="2">Jumlah</td>
								<td></td>
								<td><?=$jumlah_x;?></td>
								<td><?=$jumlah_y;?></td>
								<td><?=$jumlah_xx;?></td>
								<td><?=$jumlah_xy;?></td>
							</tr>
							<tr>
								<td colspan="2">Rata2</td>
								<td></td>
								<td>
									<?php
									$rata2_x = $jumlah_x / $x;
									echo $rata2_x;
									?>	
								</td>
								<td>
									<?php
									$rata2_y = $jumlah_y / $x;
									echo $rata2_y;
									?>	
								</td>
								<td colspan="2"></td>
							</tr>
							<tr>
								<td colspan="2">B1</td>
								<td colspan="5">
									<?php
									$b1 = ($jumlah_xy - (($jumlah_x * $jumlah_y) / $x)) / ($jumlah_xx - ($jumlah_x * $jumlah_x) / $x);
									echo $b1;
									?>
								</td>
							</tr>
							<tr>
								<td colspan="2">B0</td>
								<td colspan="5">
									<?php
									$b0 = $rata2_y - $b1 * $rata2_x;
									echo $b0;
									?>
								</td>
							</tr>
						<?php
						}
						?>
                </table>
				
				<div class="row justify-content-center">
					<div class="col-md-3">
						<div class="d-grid gap-1">
							<button class="btn btn-primary text-lg text-black" type="button">
								Rumus Regresi Linear :<br>
								<b><?php
								$y = $b0." + ".$b1." x";
								echo $y;
								?></b>
							</button>
						</div>
					</div>

					<div class="col-md-8">
						<?php
						if(isset($_POST['prediksi'])) {
							$tahun = $_POST['tahun'];
							$thn = ($x - 1) + $tahun;
							$prediksi = $b0 + ($b1 * $thn);
							?>
							<div class="d-grid gap-1">
								<button class="btn btn-primary text-lg text-black" type="button">
									Prediksi PMB untuk <b><?=$tahun;?> Tahun</b> Kedepan adalah : <br><b><?=$prediksi;?> Orang Siswa/Siswi </b>
								</button>
							</div>
						<?php
						}
						?>
					</div>
				</div>


				

            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
<!-- End of Main Content -->
<?php include "_footer.php"; ?>
