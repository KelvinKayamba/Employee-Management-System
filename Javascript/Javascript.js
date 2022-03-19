$(document).ready(function(){
	//Activatr tooltip
	$('[data-toggle="tooltrip"]').tooltip();
	//Select/Deselect Checkbox
	var checebox = $('table tbody input[type=checkbox]');
	$("#selectAll").click(function(){
		if(this.checked){
			checebox.each(function(){
				this.checked  =  true;
			});
		}
		else{
			  checked.each(function(){
				  this.checked = false;
			  })
		}
	})
	checebox.click(function(){
		if(this.checked){
			$("selectAll").prop("checked", false);
		}
	});
});