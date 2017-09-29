<?php

class Tipodocumento extends Main
{
	private $id;
	private $nombre;
	private $descripcion;

	


	public function setId($value){
		$this->Util()->ValidateInteger($value);
		$this->id = $value;
	}
	
	public function setDescripcion($value){
		if($this->Util()->ValidateRequireField($value, 'Nombre')){
			$this->Util()->ValidateString($value, 100, 0, '');
			$this->descripcion = $value;
		}
	}
	
	
	
	public function setNombre($value){	
		// if($this->Util()->ValidateRequireField($value, 'Nombre')){
			// $this->Util()->ValidateString($value, 100, 0, '');
			$this->nombre = $value;
		// }		
	}
	
	

	public function Info(){
		
		$sql = 'SELECT *, tipodocumentoId AS idReg FROM tipodocumento WHERE tipodocumentoId = "'.$this->id.'"';
		$this->Util()->DB()->setQuery($sql);
		$info = $this->Util()->DB()->GetRow();
				
		
				
		return $info;
	}//Info
	
	public function EnumerateAll(){
		
		$sql = 'SELECT * FROM tipodocumento WHERE 1';
		$this->Util()->DB()->setQuery($sql);
		$info = $this->Util()->DB()->GetResult();
				
		
				
		return $info;
	}//Info
	
	public function Enumerate(){
		
		$sql = 'SELECT COUNT(*)	FROM tipodocumento WHERE eliminado = "no"';
		$this->Util()->DB()->setQuery($sql);
		$total = $this->Util()->DB()->GetSingle();
		
		$resPage = $this->Util->HandlePagesAjax($this->page, $total , '');		
		$sqlLim = "LIMIT ".$resPage['pages']['start'].", ".$resPage['pages']['items_per_page'];
		 
		$sql = 'SELECT 
				*
				FROM tipodocumento 
				
				WHERE eliminado = "no"
				ORDER BY tipodocumentoId DESC
				'.$sqlLim;
		$this->Util()->DB()->setQuery($sql);
		$data['result'] = $this->Util()->DB()->GetResult();
		
		// foreach($data['result'] as $key=>$aux){
		
			// $sql = 'select * from direccion where dependenciaId='.$aux["dependenciaId"].'';
			// $this->Util()->DB()->setQuery($sql);
			// $Lst = $this->Util()->DB()->GetResult();		
			// $data['result'][$key]['direcciones']=$Lst;
			
		// }
		
		$data['pages'] = $resPage['pages'];
		$data['info'] = $resPage['info'];
					
		return $data;
		
	}//Enumerate
	
	public function Save(){
						
		if($this->Util()->PrintErrors()){ 
			return false; 
		}
		
		 $sql = "
		INSERT INTO  tipodocumento (
				`documento`, 
				`descripcion` 
				)
				VALUES (
				'".$this->nombre."',
				'".$this->descripcion."'
				);
		";
		
		// exit;
		
		$this->Util()->DB()->setQuery($sql);
		$this->Util()->DB()->InsertData();
			
		$this->Util()->setError(10128, 'complete', '');
		$this->Util()->PrintErrors();
		
		return true;
		
	}//Save
	
	public function Update(){
						
		if($this->Util()->PrintErrors()){ 
			return false; 
		}
		
		$sql = 'UPDATE 
				tipodocumento SET 
				documento = "'.$this->nombre.'",			
				descripcion = "'.$this->descripcion.'"			
				WHERE tipodocumentoId = "'.$this->id.'"';
				
		$this->Util()->DB()->setQuery($sql);
		$this->Util()->DB()->UpdateData();
			
		$this->Util()->setError(10129, 'error', '');
		$this->Util()->PrintErrors();
		
		return true;
		
	}//Update
	
	public function Delete(){
		
		$sql = 'UPDATE 
				tipodocumento SET 
				eliminado = "si"
				
				WHERE tipodocumentoId = "'.$this->id.'"';
				
		$this->Util()->DB()->setQuery($sql);
		$this->Util()->DB()->UpdateData();
			
		$this->Util()->setError(3, 'error', '');
		$this->Util()->PrintErrors();
		
		return true;
		
	}//Delete
	
	
						
}

?>