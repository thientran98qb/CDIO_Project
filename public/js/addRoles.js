$(document).ready(function(){
   $('#addNameRole').on('submit',function(e){
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: "http://localhost/test/Ajax/saveDataRole",
            data: $('#addNameRole').serialize(),
            success: function(d){
            	$('#output').load("http://localhost/test/Admin/listRoletalbe");
            	$('#myModal').modal('hide');
            	swal("Thêm mới thành công", "You clicked the button!", "success");
            }
        });      
   }); 
   $('#output').load("http://localhost/test/Admin/listRoletalbe");  
});

