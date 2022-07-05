<div class="container mt-3">
<form method="POST" action="<?= base_url("mahasiswa") ?>" >
                                    <div class="form-group row">
                                        <label for="nim" class="col-4 col-form-label">NIDN</label> 
                                        <div class="col-8">
                                        <input id="nim" name="nidn" placeholder="Masukkan NIDN" type="text" class="form-control">
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
                                        <label for="ipk" class="col-4 col-form-label">Pendidikan</label> 
                                        <div class="col-8">
                                        <input id="ipk"  placeholder="Pendidikan" type="text" class="form-control" name="pendidikan">
                                    </div>
                                    <div class="form-group row offset-4">
                                        <button name="tambah" type="submit" class="btn btn-primary mt-3">Tambah</button>
                                    </div>
</form>
	<table class="table table-striped text-center">
				<thead>
					<tr>
						<th>No</th>
						<th>NIDN</th>
						<th>Nama</th>
						<th>Gender</th>
						<th>Pendidikan</th>
					</tr>
				</thead>
				<tbody>
					<?php $n=1; ?>
					<?php foreach($dosen as $dosen) : ?>
					<tr>
						<td><?=  $n  ?></td>
						<td><?=  $dosen->nidn ?></td>
						<td><?=  $dosen->nama  ?></td>
						<td><?=  $dosen->gender  ?></td>
						<td><?=  $dosen->pendidikan  ?></td>
					</tr>
					<?php $n++ ?>
					<?php endforeach; ?>
				</tbody>
			</table>
</div>