<?php include "_header.php"; ?>
	<!-- <div>
		<form action="tampil.php" method="post">
			Peramalan pmb untuk 
			<select name="tahun" required>

			</select> 
			tahun akademik berikutnya <input type="submit" name="prediksi" value="Prediksi">
		</form>
	</div>
	<div>
		<a href="./">
			<button>Halaman Utama</button>
		</a>
	</div> -->


	<div class="row justify-content-center">
        <div class="col-lg-8 col-12 mb-5">
            <div class="card">
                <div class="card-header">
                   <b> Pilih Tahun Untuk Anda Memprediksikan Data </b>
                </div>
                <div class="card-body">
                    <form action="tampil.php" method="post">
                        <div class="form-group">
							<select id="tahunAkademik" class="form-control" placeholder="Tanggal Akhir" name="tahun" required >
							<?php
							for ($i = 1; $i <= 10; $i++) {
								echo "<option value='$i'>$i</option>";
							}
							?>
							</select> 
                        </div>
                        <button  name="prediksi" value="Prediksi" type="submit" class="btn btn-primary" style="width: 100%">Hitung Prediksi</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
<?php include "_footer.php"; ?>