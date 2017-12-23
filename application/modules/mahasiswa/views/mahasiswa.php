<div class="box">
	<div class="box-header">
		<h3 class="box-title">Data Mahasiswa</h3>
		<div class="box-tools pull-left">
			<a class="btn btn-success tambah" onclick="tambah()"><i class="fa fa-plus"></i> Tambah Mahasiswa</a>
		</div>
	</div>
	<div class="box-body">
		<table class="table table-bordered table-striped dataTable">
			<thead>
			<tr>
				<th>NRP</th>
				<th>Nama Mahasiswa</th>
				<th>Opsi</th>
			</tr>
			</thead>
			<tbody class="isiTabel">
				<?php foreach ($dataTable as $row) :?>
					<tr>
						<td><?php echo $row->nrp?></td>
						<td><?php echo $row->nama?></td>
						<td>
							<a class="btn btn-primary btn-sm ubah" onclick="ubah('<?php echo trim($row->nrp)?>')"><i class="fa fa-pencil"></i> Ubah</a>
							<a href="<?php echo site_url('mahasiswa/mahasiswa/hapusData/'.$row->nrp)?>" class="btn btn-danger btn-sm hapus" onclick="return confirm('Apakah anda ingin data Mahasiswa <?php echo trim($row->nama)?>')"><i class="fa fa-trash"></i> Hapus</a>
						</td>
					</tr>
				<?php endforeach;?>
			</tbody>
		</table>
	</div>
</div>
<?php include "form_mahasiswa.php"?>
<script>
	$(document).ready(function(){
		
	})
	
	function tambah() {
		$('input[name=nrp]').val("").removeAttr('disabled', 'disabled');
		$('input[name=nrp_hid]').val("");
		$('input[name=nama]').val("");
		$('form').attr('action', '<?php echo site_url('mahasiswa/mahasiswa/tambahData')?>');
		$('input[type=submit]').attr('value', 'Tambah')
		$('.mdl').modal('show');
	}
	
	function ubah(id) {
		$.ajax({
			type:"POST",
			dataType:"json",
			url:"<?php echo site_url('mahasiswa/mahasiswa/satuData/')?>"+id,
			success:function(msg){
				$('input[name=nrp]').val(msg.data.nrp).attr('disabled', 'disabled');
				$('input[name=nrp_hid]').val(msg.data.nrp);
				$('input[name=nama]').val(msg.data.nama);
				$('form').attr('action', '<?php echo site_url('mahasiswa/mahasiswa/ubahData')?>');
				$('input[type=submit]').attr('value', 'Ubah')
				$('.mdl').modal('show');
			}
		})
	}
</script>