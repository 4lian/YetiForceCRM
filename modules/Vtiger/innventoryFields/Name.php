<?php

/**
 * Inventory Name Field Class
 * @package YetiForce.Fields
 * @license licenses/License.html
 * @author Mariusz Krzaczkowski <m.krzaczkowski@yetiforce.com>
 */
class Vtiger_Name_InnventoryField extends Vtiger_Basic_InnventoryField
{

	protected $name = 'Name';
	protected $defaultLabel = 'LBL_ITEM_NAME';
	protected $columnName = 'name';
	protected $dbType = 'int(19) DEFAULT \'0\'';

	/**
	 * Geting value to display
	 * @param type $value
	 * @return type
	 */
	public function getDisplayValue($value)
	{
		if ($value != 0)
			return Vtiger_Functions::getCRMRecordLabel($value);
		return '';
	}
}
