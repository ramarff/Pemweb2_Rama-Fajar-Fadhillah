<div class="container mt-3">
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