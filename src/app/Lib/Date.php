<?
class Date {
	
	protected $dia;
	protected $mes;
	protected $year;
	
	public function __construct($dia, $mes, $year){
		$this->dia = $dia;
		$this->mes = $mes;
		$this->year = $year;
	}
	
	public static function  FromString($date){
		$splited = split('-', $date);
		$year = $splited[0];
		$mes = $splited[1];
		$dia = $splited[2];
		return new Date($dia, $mes, $year);
	}
	
	public function primerDiaMes(){
		return self::getIso($this->year, $this->mes, 1);
	}
	
	public function ultimoDiaMes(){
		$tempMes = mktime(0,0,0,$this->mes,1,$this->year);
		return self::getIso($this->year, $this->mes, intval(date('t',$tempMes)));
	}
	
	public function getDateISO(){
		return self::getIso($this->year, $this->mes, $this->dia);
	}
	
	public static function getIso($year,$mes,$dia){
		return $year.'-'.$mes.'-'.$dia;
	}
	
	public function toTimeStamp(){
		mktime(0,0,0,$this->mes, $this->dia, $this->year);
	}
	
}
