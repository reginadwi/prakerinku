$(document).ready(function(){
	$.ajaxSetup({
		header:{
			"X-CSRF-TOKEN":$('meta[name="csrf-token"]').atr("content")
		}
	});
	var alamat = "/api/kategori";

	//get data siswa

	$.ajax({
		url:alamat,
		method:"GET",
		dataType: "json",
		secces:function(berhasil){
			//console.log
			$each(berhasil.data, function(key,value){
				$(".data-kategori").append(
					`
					<tr>
					<td> $[value.nama_kategori]</td>
					<td>$(value.slug)</td>
					<td><button class="btn -btn-danger btn-sm hapus-data" data-id="${value.id}">Hapus</button</td>
					`
					);
			});
		}
	});

	$(",data-kategori").on("click","hapus-data", function(){
		var id=$(this).data("id");
		//alert(id)
	});
});