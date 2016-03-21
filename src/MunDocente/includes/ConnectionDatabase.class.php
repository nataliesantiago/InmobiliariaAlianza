<?php 
class ConnectionDatabase extends mysqli{
	private $nameDatabase, $passwordDatabase, $urlServerDatabase, $userDatabase;
	public $connection;
	//LOS VALORES SON PREDETERMINADOS POR EL MOMENTO, PERO POR PARAMETRO SE PUEDEN ASIGNAR SI SE DESEA
	public function __construct(){
		$this->nameDatabase = 'mundocente';
		$this->userDatabase = 'munDocente';
		$this->passwordDatabase = 'munDocente';
		$this->urlServerDatabase = 'localhost';
	}
	//NOS CONECTA A LA BASE DE DATOS
	public function connectDatabase(){
		//LLAMAR A LA CLASE PADRE PARENT:: 
		 parent::__construct($this->urlServerDatabase,$this->userDatabase,$this->passwordDatabase,$this->nameDatabase);
		//SE ASIGNA PARA RECOCER LOS VALORES
		$this->set_charset("utf8");
		//RETURN  TRUE SI LA CONEXIÓN FALLA
		$this->connection = $this->connect_errno ? die('ERROR EN LA CONEXIÓN') : $message = "CONECTADO A LA BASE DE DATOS= $this->nameDatabase";	
		//echo $message;
		unset($message);
	}
	//REALIZA UNA CONSULTA, EL PARAMETRO ES LA CONSULTA "SELECT * FROM USERS WHEEW id='$this->id';"
	public function queryDatabase($query){
		return $this->query($query);
		//echo mysqli_error($this->connection);
	}
	//APARTIR DE UNA CONSULTA SE GENERA UN ARREGLO CON LAS LLAVES (ATRIBUTOS) DE LA CONSULTA ENCONTRADA
	public function fetchQuery($query){	
		return mysqli_fetch_array($query);
	}
	public function fetchRow($query){			
		$result = array();
		while($fila = $query->fetch_row()){
			$row = array();			
			for ($i=0; $i < sizeof($fila); $i++) { 
				array_push($row, $fila[$i]);
				//echo $fila[$i] . "<br />";
			}			
			array_push($result, $row);			
		}
		return $result;		
	}
	//RETORNA EL NÚMERO DE REGISTROS POR CONSULTA
	public function numberRows($query){
		return mysqli_num_rows($query);
	}
	//CERRAR LA CONEXIÓN ESTABLECIDA
	public function closeConnection(){
		parent::close();
	}
	//PARA CONOCER LOS ERRORES
	public function showErrors(){
		echo mysqli_error($this->connection);
	}
}
?>