<?php
/** 
 * @author Noah Goodrich
 * @date 7/21/11
 * @brief
 * 
*/

require MODPATH.'kable/vendor/Table/library/Table.php';

class Kable extends Table
{

	public static function factory(array $config = array())
	{
		return new Table($config);
	}
}
