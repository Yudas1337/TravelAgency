$(function() {

		$('.editMaskapai').on('click',function(){

			const id_maskapai = $(this).data('id_maskapai');
			
			$.ajax({

				url: "getMaskapai",
				data:{id_maskapai:id_maskapai},
				method:'post',
				dataType: 'json',
				success: function(data){
					console.log(data);
					$('#editmaskapai').val(data.maskapai);
					$('#editgambarmaskapai').attr("src","../assets/images/"+data.gambar_maskapai);
					$('#editid_maskapai').val(data.id_maskapai);					
					
				}

			});	

		});


		$('.detailmaskapai').on('click',function(){

			const id_maskapai = $(this).data('id_maskapai');
			
			$.ajax({

				url: "getMaskapai",
				data:{id_maskapai:id_maskapai},
				method:'post',
				dataType: 'json',
				success: function(data){
					console.log(data);
					$('#maskapai').val(data.maskapai);
					$('#gambar_maskapai').attr("src","../assets/images/"+data.gambar_maskapai);
				}

			});	

		});

    });