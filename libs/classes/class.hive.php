<?php
class Hive
{
		public function __construct()
		{
			
		}
		
		public function __destruct()
		{
			
		}
}

class MysqlMeta extends Hive
{
	private $mDb;
	private $mRes;
	
	public function __construct()
	{
		$this->mDb = mysql_connect(METADB.":".METAPORT,METAUSER,METAPASS);
		mysql_select_db(METANAME,$this->mDb);
	}
	
	private function Query($pSql)
	{
		$this->mRes = mysql_query($pSql,$this->mDb);
	}
	
	public function GetResult($pSql)
	{
		$this->Query($pSql);
		$i = 0;
		while($array = mysql_fetch_array($this->mRes))
		{
			foreach($array as $k => $v)
			{
				$arr[$k] = $v;
			}
			$i++;
		}
		return $arr;
	}
	
	public function Close()
	{
		$this->__destruct();
	}
	
	public function __destruct()
	{
		mysql_close($this->mDb);
	}
}
?>