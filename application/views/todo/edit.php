<div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="card-body">
				<?= form_open('todo/edit/'.$id) ?>
				<div class="form-group row">
					<label for="NamaKegiatan" class="col-sm-2 col-form-label">Nama Kegiatan</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="NamaKegiatan" name="namaKegiatan" value="<?= $kegiatan['nama_kegiatan'] ?>">
						<small class="text-danger">
						</small>
					</div>
				</div>

				<fieldset class="form-group">
					<div class="row">
						<legend class="col-form-label col-sm-2 pt-0">Jenis Kegiatan</legend>
						<div class="col-sm-10">
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" id="JenisKegiatan" name="jenisKegiatan" value="Offline" <?= $kegiatan['jenis_kegiatan'] === "Offline" ? 'checked' : '' ?>>
								<label class="form-check-label" for="JenisKegiatan">
									Offline
								</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" id="JenisKegiatan2" name="jenisKegiatan" value="Online" <?= $kegiatan['jenis_kegiatan'] === "Online" ? 'checked' : '' ?>>
								<label class="form-check-label" for="JenisKegiatan2">
									Online
								</label>
							</div>
							<small class="text-danger">
							</small>
						</div>
					</div>
				</fieldset>

				<div class="form-group row">
					<label for="Deadline" class="col-sm-2 col-form-label">Deadline Kegiatan</label>
					<div class="col-sm-10">
						<input type="date" class="form-control" id="Deadline" name="deadlineKegiatan" value="<?= date_format(date_create($kegiatan['deadline_kegiatan']),"Y-m-d");  ?>">
						<small class="text-danger">
						</small>
					</div>
				</div>

				<div class="form-group row">
					<label for="Keterangan" class="col-sm-2 col-form-label">Keterangan</label>
					<div class="col-sm-10">
						<textarea class="form-control" id="Keterangan" name="keterangan" rows="3"><?= $kegiatan['keterangan'] ?></textarea>
						<small class="text-danger">
						</small>
					</div>
				</div>

				<div class="form-group row">
					<div class="col-sm-10 offset-md-2">
						<button type="submit" class="btn btn-primary">Simpan</button>
						<a class="btn btn-secondary" href="">Kembali</a>
					</div>
				</div>
				</form>
			</div>
		</div>
	</div>
</div>
</div>
