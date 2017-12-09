<div class="box">
	<div class="box-header">
		<h3 class="box-title">Data Dosen</h3>
		<div class="box-tools pull-left">
			<a class="btn btn-success tambah" onclick="tambah()"><i class="fa fa-plus"></i> Tambah Dosen</a>
		</div>
	</div>
	<div class="box-body">
		<table class="table table-bordered table-striped dataTable">
			<thead>
			<tr>
				<th>NIP</th>
				<th>Nama Dosen</th>
				<th>Opsi</th>
			</tr>
			</thead>
			<tbody class="isiTabel">
				<?php foreach ($dataTable as $row) :?>
					<tr>
						<td><?php echo $row->nip?></td>
						<td><?php echo $row->nama?></td>
						<td>
							<a class="btn btn-primary btn-sm ubah" onclick="ubah('<?php echo trim($row->nip)?>')"><i class="fa fa-pencil"></i> Ubah</a>
							<a href="<?php echo site_url('dosen/dosen/hapusData/'.$row->nip)?>" class="btn btn-danger btn-sm hapus" onclick="return confirm('Apakah anda ingin data Dosen <?php echo trim($row->nama)?>')"><i class="fa fa-trash"></i> Hapus</a>
						</td>
					</tr>
				<?php endforeach;?>
			</tbody>
		</table>
	</div>
</div>
<?php include "form_dosen.php"?>
<script>
	$(document).ready(function(){
		
	})
	
	function tambah() {
		$('input[name=nip]').val("").removeAttr('disabled', 'disabled');
		$('input[name=nip_hid]').val("");
		$('input[name=nama]').val("");
		$('textarea[name=alamat]').val("");
		$('input[name=notelp]').val("");
		$('form').attr('action', '<?php echo site_url('dosen/dosen/tambahData')?>');
		$('input[type=submit]').attr('value', 'Tambah')
		$('.mdl').modal('show');
	}
	
	function ubah(id) {
		$.ajax({
			type:"POST",
			dataType:"json",
			url:"<?php echo site_url('dosen/dosen/satuData/')?>"+id,
			success:function(msg){
				$('input[name=nip]').val(msg.data.nip).attr('disabled', 'disabled');
				$('input[name=nip_hid]').val(msg.data.nip);
				$('input[name=nama]').val(msg.data.nama);
				$('textarea[name=alamat]').val(msg.data.alamat);
				$('input[name=notelp]').val(msg.data.notelp);
				$('form').attr('action', '<?php echo site_url('dosen/dosen/ubahData')?>');
				$('input[type=submit]').attr('value', 'Ubah')
				$('.mdl').modal('show');
			}
		})
	}
</script>