 <div class="container pt-5">
 	<h3>CRUD</h3>
 	<nav aria-label="breadcrumb">
 		<ol class="breadcrumb ">
 			<li class="breadcrumb-item"><a>Mahasiswa</a></li>
 			<li class="breadcrumb-item active" aria-current="page">List Data</li>
 		</ol>
 	</nav>
 	<div class="row">
 		<div class="col-md-12">
 			<a class="btn btn-primary mb-2" href="<?= site_url('todo/create') ?>">Tambah Data</a>
 			<div mb-2>
 			</div>

 			<div class="card">
 				<div class="card-body">
 					<div class="table-responsive">
 						<table class="table table-striped table-bordered table-hover" id="tableMahasiswa">
 							<thead>
 								<tr class="table-success">
 									<th></th>
 									<th>ID</th>
 									<th>NAMA KEGIATAN</th>
 									<th>JENIS KEGIATAN</th>
 									<th>DEADLINE KEGIATAN</th>
 									<th>KETERANGAN</th>
 									<th>STATUS</th>
 								</tr>
 							</thead>
 							<tbody>
 								<?php foreach ($kegiatan as $row) : ?>
 									<tr>
 										<td>
 											<?php if (!$row['status']) : ?>
 												<a href="<?= site_url('todo/done/'.$row['id']) ?>" class="btn btn-success btn-sm"><i class="fa fa-check"></i> </a>
 											<?php endif ?>
 											<a href="<?= site_url('todo/edit/'.$row['id']) ?>" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> </a>
 											<a href="<?= site_url('todo/delete/'.$row['id']) ?>" data="" class="btn btn-danger btn-sm item-delete"><i class="fa fa-trash"></i> </a>
 										</td>
 										<td><?= $row['id'] ?></td>
 										<td><?= $row['nama_kegiatan'] ?></td>
 										<td><?= $row['jenis_kegiatan'] ?></td>
 										<td><?= $row['deadline_kegiatan'] ?></td>
 										<td><?= $row['keterangan'] ?></td>
 										<td><?= $row['status'] ? 'Selesai' : 'Belum selesai' ?></td>
 									</tr>
 								<?php endforeach ?>
 							</tbody>
 						</table>
 					</div>
 				</div>
 			</div>
 		</div>
 	</div>
 </div>

 <!-- Modal dialog hapus data-->
 <div class="modal fade" id="myModalDelete" tabindex="-1" aria-labelledby="myModalDeleteLabel" aria-hidden="true">
 	<div class="modal-dialog">
 		<div class="modal-content">
 			<div class="modal-header">
 				<h5 class="modal-title" id="myModalDeleteLabel">Konfirmasi</h5>
 				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
 					<span aria-hidden="true">&times;</span>
 				</button>
 			</div>
 			<div class="modal-body">
 				Anda ingin menghapus data ini?
 			</div>
 			<div class="modal-footer">
 				<button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
 				<button type="button" class="btn btn-danger" id="btdelete">Lanjutkan</button>
 			</div>
 		</div>
 	</div>
 </div>
