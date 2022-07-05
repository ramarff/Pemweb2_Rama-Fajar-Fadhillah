<div class="container mt-3">
	<form method="POST" action="<?= base_url("mata_kuliah") ?>" >
										<div class="form-group row">
											<label class="col-4">Mata Kuliah</label> 
											<div class="col-8">
												<input id="nama" name="matkul" placeholder="Mata Kuliah" type="text" class="form-control">
											</div>
										</div>
										<div class="form-group row">
											<label for="ipk" class="col-4 col-form-label">SKS</label> 
											<div class="col-8">
												<input id="ipk"  placeholder="SKS" type="text" class="form-control" name="sks">
											</div>
										</div>
										<div class="form-group row">
											<label for="ipk" class="col-4 col-form-label">Kode</label> 
											<div class="col-8">
												<input id="ipk"  placeholder="Kode" type="text" class="form-control" name="kode">
											</div>
										</div>
										<div class="form-group row offset-4">
											<button name="tambah" type="submit" class="btn btn-primary mt-3">Tambah</button>
										</div>
	</form>
	<table class="table table-striped text-center">
				<thead>
					<tr>
						<th>No</th>
						<th>Nama</th>
						<th>SKS</th>
						<th>Kode</th>
					</tr>
				</thead>
				<tbody>
					<?php $n=1; ?>
					<?php foreach($mata_kuliah as $matkul) : ?>
					<tr>
						<th><?=  $n  ?></th>
						<td><?=  $matkul->nama ?></td>
						<td><?=  $matkul->sks  ?></td>
						<td><?=  $matkul->kode  ?></td>
					</tr>
					<?php $n++ ?>
					<?php endforeach; ?>
				</tbody>
			</table>
</div>