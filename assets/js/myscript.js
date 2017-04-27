$(document).ready(function(){
	$('.updategio').click(function(){
		alert(111);
		var id = $(this).attr('id');
		var qty = $(this).parent().parent().find('.qty').val();
		var token = $("input[name='_token']").val();
		$.ajax({
			url:'editcart/'+id+'/'+qty,
			type: 'GET',
			cache: false,
			data: {"_token":token,"id":id,"qty": qty},
			success:function(data1){
				if(data1 == "ok")
					window.location.assign("cart");
			}
		});
	});
});