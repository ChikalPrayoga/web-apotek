<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<div class="col-lg-12">
		<h1 class="h3 mb-4 text-gray-800">Pembelian</h1>
		<div class="card shadow mb-4">
			<div class="card-header py-3">
				<h6 class="m-0 font-weight-bold text-primary">List transaksi pembelian</h6>
			</div>
			<div class="card-body">
				<?php if ($this->session->flashdata('info')) : ?>
					<div class="alert alert-danger">
						<?php echo $this->session->flashdata('info'); ?>
					</div>
				<?php endif; ?>
				<div class="table-responsive">
					<table class="table table-bordered" id="dataTable">
						<thead>
							<tr>
								<th>No</th>
								<th>Tanggal Pembelian</th>
								<th>ID Pembelian</th>
								<th>Jumlah</th>
								<th>Harga</th>
								<th>Opsi</th>
							</tr>
						</thead>
						<?php $no = 1; ?>
						<?php foreach ($pembelian as $tr) : ?>
							<tbody>
								<tr>
									<td><?php echo $no++; ?></td>
									<td><span class="badge badge-dark"><?php echo $tr->tgl; ?></span></td>
									<td><?php echo $tr->id; ?></td>
									<td>
										<?php foreach ($tr->obat as $o) : ?>
											<a href="#" class="mb-2 btn btn-success btn-sm btn-icon-split">
												<span class="icon text-white-50">
													<?php echo $o->jumlah; ?>
												</span>
												<span class="text"><?php echo $o->nama_obat; ?></span>
											</a><br>
										<?php endforeach ?>
									</td>
									<td>
										<?php foreach ($tr->obat as $o) : ?>
											<a href="#" class="mb-2 btn btn-primary btn-sm btn-icon-split">
												<span class="text">Rp. <?php echo $o->harga_beli; ?></span>
											</a><br>
										<?php endforeach ?>
									</td>
									<td>
										<a href="<?php echo site_url('pembelian/hapus/') . $tr->id; ?>" class="btn btn-primary btn-circle btn-sm"><i class="fa fa-trash"></i></a>
									</td>
								</tr>
							</tbody>
						<?php endforeach ?>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- /.container-fluid -->