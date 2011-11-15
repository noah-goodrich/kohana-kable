<?php

require MODPATH.'kable/vendor/Table/library/Table.php';

class Kable_Core extends Table
{
	public static function factory(array $config = array())
	{
		return new Kable($config);
	}
	
	public function set_data_source($data, $type = 'dom')
	{
		parent::setDataSource($data, $type);
		
		return $this;
	}
}