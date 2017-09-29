var AJAX_PATH = WEB_ROOT+"/ajax/add-chat.php";


function SaveMensaje()
		{   
			var p = $("#page").val();
			var id = $("#id").val();
		// En esta var va incluido $_POST y $_FILES
			var fd = new FormData(document.getElementById("frmGral"));
			$.ajax({
				// url: "SaveComprobacionGt", 
				url: AJAX_PATH,
				data: fd,
				processData: false,
				contentType: false,
				type: 'POST',
				beforeSend: function(){			
					$("#loader").html(LOADER);
					$("#txtErrMsg").hide(0);
				},
				success: function(response){
							// $("#txtErrMsg").html(splitResp[1]);
					console.log(response)
					var splitResp = response.split('[#]');

					if($.trim(splitResp[0]) == 'ok'){	
							// WEB_ROOTDoc = WEB_ROOT+'/chat';
							// $(location).attr('href',WEB_ROOTDoc);
							$("#tblContent").html(splitResp[1]);
							$("#mensaje").val('');
							$("#loader").html('');
					}
					else if($.trim(splitResp[0]) == 'fail'){
							$("#loader").html('');
							$("#txtErrMsg").show();
							$("#txtErrMsg").html(splitResp[1]);
					}
					else{
							// $("#txtErrMsg").html(splitResp[1]);
							$("#txtErrMsg").html(splitResp[1]);
					}
	
				},
			})
			
		}	
/*
function SaveReg(){
	
	var p = $("#page").val();
	var id = $("#id").val();
			
	$.ajax({
	  	type: "POST",
	  	url: AJAX_PATH,
	  	data: $("#frmGral").serialize(true),
		beforeSend: function(){			
			$("#loader").html(LOADER);
			$("#txtErrMsg").hide(0);
		},
	  	success: function(response) {

console.log(response)		
			var splitResp = response.split("[#]");

			$("#loader").html("");
			
			if(splitResp[0] == "ok"){
				$("#frmModal").modal("hide");
				
				if(id == "") 
					p = 0;
					
				LoadPage(p);
			}else if(splitResp[0] == "fail"){
				$("#txtErrMsg").show();
				$("#txtErrMsg").show();
				$("#txtErrMsg").html(splitResp[1]);				
			}else{
				alert(msgFail);
			}
			
		},
		error:function(){
			alert(msgError);
		}
    });
		
}//SaveReg*/

function DeleteReg(id){
	
	var p = $("#page").val();
	var resp = confirm("Esta seguro de eliminar este registro?");
	
	if(!resp)
		return;
	
	$.ajax({
	  	type: "POST",
	  	url: AJAX_PATH,
	  	data: "type=delete&id="+id,
		beforeSend: function(){			
			$("#tblContent").html(LOADER3);
		},
	  	success: function(response) {			
			var splitResp = response.split("[#]");

			$("#tblContent").html("");
			
			if(splitResp[0] == "ok")
				LoadPage(p);
			else if(splitResp[0] == "fail")
				alert(msgFail);				
		},
		error:function(){
			alert(msgError);
		}
    });
		
}//DeleteReg

function ViewReg(id){
	
	$.ajax({
	  	type: "POST",
	  	url: AJAX_PATH,
	  	data: "type=view&id="+id,
	  	success: function(response) {
console.log(response)		
			var splitResp = response.split("[#]");
									
			if(splitResp[0] == "ok"){				
				$("#frmModal").html(splitResp[1]);
			}else{
				alert(msgFail);
			}
		},
		error:function(){
			alert(msgError);
		}
    });
	
	$("#frmModal").modal("show");
	
}//ViewReg

function LoadMunicipios(){
	
	var id = $("#estadoId").val();
		
	$.ajax({
	  	type: "POST",
	  	url: AJAX_PATH,
	  	data: "type=loadMunicipios&estadoId="+id,
		beforeSend: function(){			
			$("#enumMunicipios").html(LOADER2);
		},
	  	success: function(response) {			
			var splitResp = response.split("[#]");

			$("#enumMunicipios").html("");
			
			if(splitResp[0] == "ok"){
				$("#enumMunicipios").html(splitResp[1]);
			}else if(splitResp[0] == "fail"){
				alert(msgFail);
			}
			
		},
		error:function(){
			alert(msgError);
		}
    });
	
}//LoadMunicipios

function LoadPage(p){
	
	$.ajax({
	  	type: "POST",
	  	url: AJAX_PATH,
	  	data: "type=loadPage&p="+p,
		beforeSend: function(){			
			$("#tblContent").html(LOADER3);
		},
	  	success: function(response) {	
			var splitResp = response.split("[#]");
			
			if(splitResp[0] == "ok")
				$("#tblContent").html(splitResp[1]);
			else
				alert(msgFail);
		},
		error:function(){
			alert(msgError);
		}
    });
	
}//LoadPage






function addResponsable(id){
	
	$.ajax({
	  	type: "POST",
	  	url: AJAX_PATH,
	  	data: "type=addResponsable&id="+id,
	  	success: function(response) {			
			var splitResp = response.split("[#]");
									
			if(splitResp[0] == "ok")	
				$("#frmModal").html(splitResp[1]);
			else
				alert(msgFail);
		},
		error:function(){
			alert(msgError);
		}
    });
	
	$("#frmModal").modal("show");
	
}//EditReg





function Savefuncio(id){

var p = $("#page").val();
	
	$.ajax({
	  	type: "POST",
	  	url: AJAX_PATH,
	  	data: "type=Savefuncio&id="+id+"&funcinarioId="+$("#funcionarioId").val(),
	  	success: function(response) {
console.log(response)
				var splitResp = response.split("[#]");

			$("#loader").html("");
			
			if(splitResp[0] == "ok"){
				$("#frmModal").modal("hide");
				
				if(id == "") 
					p = 0;
					
				LoadPage(p);
			}else if(splitResp[0] == "fail"){
				$("#txtErrMsg").show();
				$("#txtErrMsg").show();
				$("#txtErrMsg").html(splitResp[1]);				
			}else{
				alert(msgFail);
			}
			
		}
    });
	
	$("#frmModal").modal("show");
	
}//EditReg