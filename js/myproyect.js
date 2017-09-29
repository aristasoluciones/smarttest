var AJAX_PATH = WEB_ROOT+"/ajax/myproyect.php";

function ViewReportes(id){
	
	if (!document.getElementById) return false;
		  fila = document.getElementById(id);
		  
		 if (fila.style.display != 'none') {
			fila.style.display = 'none'; //ocultar fila 
		  } else {
				fila.style.display = ''; //mostrar fila
				
				$.ajax({
				type: "POST",
				url: AJAX_PATH,
				data: "type=ViewReportes&reporteId="+id,				
				success: function(response) {
					console.log(response)
					// var splitResp = response.split("[#]");
											
					// if(splitResp[0] == "ok")
					// else
						// alert(msgFail);
				},
				error:function(){
					alert(msgError);
				}
			});
			
		  }
		
	
	// $("#frmModal").modal("show");
	
}//ViewReportes



function EditReg(id){
	
	$.ajax({
	  	type: "POST",
	  	url: AJAX_PATH,
	  	data: "type=edit&id="+id,
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
console.log(response);
			var splitResp = response.split("[#]");

			$("#loader").html("");
			
			if(splitResp[0] == "ok"){
				$("#frmModal").modal("hide");
				
				if(id == "") 
					p = 0;
					
				Search(p);
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
		
}//SaveReg

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
				Search(p);
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

function Search(p){
	
	$("#isSearch").val(1);
	
	$.ajax({
	  	type: "POST",
	  	url: AJAX_PATH,
	  	data: "type=search&"+$("#frmSearch").serialize(true) + "&p="+p,
		beforeSend: function(){			
			$("#tblContent").html(LOADER3);
		},
	  	success: function(response) {	
console.log(response);		
			var splitResp = response.split("[#]");
			
			$("#tblContent").html("");
			
			if(splitResp[0] == "ok")
				$("#tblContent").html(splitResp[1]);
			else
				alert(msgFail);
		},
		error:function(){
			alert(msgError);
		}
    });
	
}//Search