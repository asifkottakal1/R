$('.status').change(function(){
	status=$(this).find(":selected").val();
	id=$(this).attr('data-id');

	if(confirm("Are you sure?")){

	// console.log(status+" , "+id)
	$.ajax({
		url:"status/"+id+"/"+status
		
		
	})
}
})

/*
$('#order_form').submit(function(event){
	event.preventDefault();
	var formdata= new FormData(this);
	console.log(baseurl);
	$.ajax({
		url:baseurl+"login/update_order",
		type:'POST',
		data:formdata,
		contentType:false,
		processData:false
		success:function(data){
			console.log(data)
		}

	})

}) */