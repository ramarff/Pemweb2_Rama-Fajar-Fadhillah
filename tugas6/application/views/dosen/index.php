<div class="container mt-3">
	<table class="table table-striped text-center">
				<thead>
					<tr>
						<th>No</th>
						<th>NIM</th>
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