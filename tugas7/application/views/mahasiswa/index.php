<div class="container mt-3">
<form method="POST" action="<?= base_url("mahasiswa") ?>" >
                                    <div class="form-group row">
                                        <label for="nim" class="col-4 col-form-label">NIM</label> 
                                        <div class="col-8">
                                        <input id="nim" name="nim" placeholder="Masukkan NIM" type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="nama" class="col-4 col-form-label">Nama</label> 
                                        <div class="col-8">
                                        <input id="nama" name="nama" placeholder="Masukkan nama" type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-4">Jenis Kelamin</label> 
                                        <div class="col-8">
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input name="jk" id="jk_0" type="radio"  class="custom-control-input" value="L"> 
                                            <label for="jk_0" class="custom-control-label">Laki-laki</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input name="jk" id="jk_1" type="radio" class="custom-control-input" value="P"> 
                                            <label for="jk_1" class="custom-control-label">Perempuan</label>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="ipk" class="col-4 col-form-label">IPK</label> 
                                        <div class="col-8">
                                        <input id="ipk"  placeholder="ipk" type="text" class="form-control" name="ipk">
                                    </div>
                                    <div class="form-group row offset-4">
                                        <button name="tambah" type="submit" class="btn btn-primary mt-3">Tambah</button>
                                    </div>
</form>
	<table class="table table-striped text-center">
				<thead>
					<tr>
						<th>No</th>
						<th>NIM</th>
						<th>Nama</th>
						<th>Gender</th>
						<th>IPK</th>
						<th>Predikat</th>
					</tr>
				</thead>
				<tbody>
					<?php if(empty($mahasiswa)) : ?>
						<tr>
							<td colspan="6">DATA MASIH KOSONG</td>
						</tr>
					<?php else:?>
						<?php $n=1; ?>
						<?php foreach($mahasiswa as $mhs) : ?>
						<tr>
							<td><?=  $n  ?></td>
							<td><?=  $mhs->nim ?></td>
							<td><?=  $mhs->nama  ?></td>
							<td><?=  $mhs->gender  ?></td>
							<td><?=  $mhs->ipk  ?></td>
							<td><?=  $mhs->predikat()  ?></td>
						</tr>
						<?php $n++ ?>
						<?php endforeach; ?>
					<?php endif; ?>
				</tbody>
			</table>
</div>