<div class="box">
	<div class="box-header">
		<h3 class="box-title">Data Jadwal</h3>
		<div class="box-tools pull-left">
			<a class="btn btn-success tambah" onclick="tambah()"><i class="fa fa-plus"></i> Tambah Jadwal</a>
		</div>
	</div>
	<div class="box-body">
		<table class="table table-bordered table-striped dataTable">
			<thead>
			<tr>
				<th>Matakuliah</th>
				<th>Kelas</th>
				<th>Dosen</th>
				<th>Ruang</th>
				<th>Hari</th>
				<th>Jam Mulai</th>
				<th>Jam Selesai</th>
			</tr>
			</thead>
			<tbody class="isiTabel">
				<?php foreach ($dataTable as $row) :?>
					<tr>
						<td><?php echo $row->kd_matkul."-".$row->matkul?></td>
						<td><?php echo $row->kelas?></td>
						<td><?php echo $row->nama?></td>
						<td><?php echo $row->ruang?></td>
						<td><?php echo $row->hari?></td>
						<td><?php echo $row->jam_mulai?></td>
						<td><?php echo $row->jam_selesai?></td>
						<td>
							<a class="btn btn-primary btn-sm ubah" onclick="ubah('<?php echo trim($row->kd_jadwal)?>')"><i class="fa fa-pencil"></i> Ubah</a>
							<a href="<?php echo site_url('ruang/ruang/hapusData/'.$row->kode_ruang)?>" class="btn btn-danger btn-sm hapus" onclick="return confirm('Apakah anda ingin data Mahasiswa <?php echo trim($row->ruang)?>')"><i class="fa fa-trash"></i> Hapus</a>
						</td>
					</tr>
				<?php endforeach;?>
			</tbody>
		</table>
	</div>
</div>
<?php include "form_jadwal.php"?>
<script>
	$(document).ready(function(){
		
	})
	
	function tambah() {
		// $('input[name=kode_ruang]').val("").removeAttr('disabled', 'disabled');
		// $('input[name=kode_ruang_hid]').val("");
		// $('input[name=ruang]').val("");
		$('form').attr('action', '<?php echo site_url('ruang/ruang/tambahData')?>');
		$('input[type=submit]').attr('value', 'Tambah')
		$('.mdl').modal('show');
	}
	
	function ubah(id) {
		$.ajax({
			type:"POST",
			dataType:"json",
			url:"<?php echo site_url('ruang/ruang/satuData/')?>"+id,
			success:function(msg){
				$('input[name=kode_ruang]').val(msg.data.kode_ruang).attr('disabled', 'disabled');
				$('input[name=kode_ruang_hid]').val(msg.data.kode_ruang);
				$('input[name=ruang]').val(msg.data.ruang);
				$('form').attr('action', '<?php echo site_url('ruang/ruang/ubahData')?>');
				$('input[type=submit]').attr('value', 'Ubah')
				$('.mdl').modal('show');
			}
		})
	}
</script>