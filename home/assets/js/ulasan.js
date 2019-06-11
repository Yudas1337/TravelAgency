$(function() {

		$('.editUlasan').on('click',function(){

			const id_testimoni = $(this).data('id_testimoni');
			
			$.ajax({

				url: "getUlasan",
				data:{id_testimoni:id_testimoni},
				method:'post',
				dataType: 'json',
				success: function(data){
					console.log(data);
					console.log('200 ok ');
					$('#edit_testimoni').val(data.testimoni);	
					$('#editid_testimoni').val(data.id_testimoni);					
					
				}

			});	

		});

    });