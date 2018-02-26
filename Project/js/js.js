var nomer = 1;

$(document).ready( function(){

	$(document).on('click','#mask, .btn_close',function(){
        closepopup();
        closepopupDetail();
    });

	$('#search').submit(function () {
	 return false;
	});

	$('#editcuti').hide();

	$('#btnbataledit').click(function(){

		$('#editcuti').hide();

		$('#tambahcuti').show();

	});





	$('#search').click(function(){
		var id = $('#idPegawai').val();
		$.ajax({
			url: 'search.php?id='+ id,
			type: 'GET',
			success: function(data){
				var dataArray = data.split(',');
				$('#foto_cuti').html(dataArray[0]);
				$('#nama_cuti').text(dataArray[1]);
				$('#jabatan_cuti').text(dataArray[2]);
				$('#kelamin_cuti').text(dataArray[3]);
				$('#umur_cuti').text(dataArray[4]);
			}
		});

	});

});

function closepopup(){
	$('#mask').remove();
    $('#divDetail').fadeOut(200);
    $('#divDetail').css({
        'visibility' :'hidden',
        'display' :'none'
	});
}

function closepopupDetail(){
	$('#mask').remove();
    $('#divDetail').fadeOut(200);
    $('#divDetail').css({
        'visibility' :'hidden',
        'display' :'none'
	});
}

function editCuti(id){
	// alert("aa");
	$('#tambahcuti').hide();
	$.ajax({
	        url: "getcuti.php",
	        type: 'POST',
	        data: {"id": id},
	        async: false,
	        success: function (datacuti) {
						var dataArray = datacuti.split(',');
						$('#idPegawai_edit').val(dataArray[0]);
						$('#nama_edit').text(dataArray[1]);
						$('#jabatan_edit').text(dataArray[2]);
						$('#tgl_mulai_edit').val(dataArray[3]);
						$('#tgl_akhir_edit').val(dataArray[4]);
	        }
	    });
	$('#editcuti').show();

}


function tampilPopUpDetail(idPegawai){
	// alert("aa");
	var popMargTop = ($("#divDetail").height() + 24) / 2;
	var popMargLeft = ($("#divDetail").width() + 24) / 2;

	$.ajax({
	        url: "ajaxDetailPegawai.php",
	        type: 'POST',
	        data: {"idPegawai": idPegawai},
	        async: false,
	        success: function (datapegawai) {
	        	// alert(datapegawai);
				$("#dataPegawaiDetail").html(datapegawai);

	        	$('body').append('<div id="mask"></div>');
			    $('#mask').fadeIn(300);
			    $("#divDetail").fadeIn(500);
			    $("#divDetail").css({
			        'visibility' :'visible',
			        'display' :'block',
			        'margin-top' : -popMargTop,
			        'margin-left' : -popMargLeft
			    });
	        }
	    });

}
