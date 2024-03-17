		
	<?php include "_header.php"; ?>	
		<!-- Begin Page Content -->
			<div class="container-fluid">

			<!-- Page Heading -->
			<h1 class="h3 mb-2 text-gray-800">Formulir Input Data</h1>
			<p class="mb-4">Silakan pilih tahun ajaran dari kotak drop-down dan masukkan jumlah angka PMB pada kolom isian angka di bawah.</p>

			<!-- DataTales Example -->
			<div class="card shadow mb-4 col-10">
				<div class="card-header py-3">
					<h6 class="m-0 font-weight-bold text-primary text-center">Isikan dengan data dengan sesuai</h6>
				</div>
				<div class="card-body">
					<div class="table-responsive">
					<form action="simpan.php" method="post">

						<div class="mb-3">
							<label for="tahunAkademik" class="form-label">Tahun Akademik</label>
							<select id="tahunAkademik" class="form-control" placeholder="Tanggal Akhir" name="tahun" required >
								<option value=""></option>
									<?php
									$now = date('Y');
									for ($i = $now; $i >= 2000; $i--) {
									echo "<option value='".$i."/".($i+1)."'>".$i."/".($i+1)."</option>";
									}?>
							</select> 
							<div id="tahunAkademik" class="form-text">pilih tahun</div>
						</div>	
						
						<div class="mb-3">
							<label for="jmlSiswa" class="form-label">Jumlah Siswa Baru</label>
							<input type="number" name="jumlah" class="form-control" id="jmlSiswa">
						</div>
						<div class="d-grid gap-2">
						<button type="submit" name="simpan" value="Simpan" class="btn btn-success">Submit</button>		
								</div>	
						</form>
					</div>
				</div>
			</div>

			<!-- /.container-fluid -->

			</div>
			<!-- End of Main Content -->
	<?php include "_footer.php"; ?>		