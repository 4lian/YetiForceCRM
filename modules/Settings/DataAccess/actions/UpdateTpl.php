<?php
/* +***********************************************************************************************************************************
 * The contents of this file are subject to the YetiForce Public License Version 1.1 (the "License"); you may not use this file except
 * in compliance with the License.
 * Software distributed under the License is distributed on an "AS IS" basis, WITHOUT WARRANTY OF ANY KIND, either express or implied.
 * See the License for the specific language governing rights and limitations under the License.
 * The Original Code is YetiForce.
 * The Initial Developer of the Original Code is YetiForce. Portions created by YetiForce are Copyright (C) www.yetiforce.com. 
 * All Rights Reserved.
 * *********************************************************************************************************************************** */

class Settings_DataAccess_UpdateTpl_Action extends Settings_Vtiger_Index_Action
{

	function checkPermission(Vtiger_Request $request)
	{
		return;
	}

	public function process(Vtiger_Request $request)
	{

		$baseModule = $request->get('base_module');
		$summary = $request->get('summary');
		$tplId = $request->get('tpl_id');
		$conditionAll = $request->getRaw('condition_all_json');
		$conditionOption = $request->getRaw('condition_option_json');

		$db = PearDatabase::getInstance();

		$insertBaseRecord = "UPDATE vtiger_dataaccess SET module_name = ?, summary = ?  WHERE dataaccessid = ?";
		$db->pquery($insertBaseRecord, array($baseModule, $summary, $tplId), true);

		Settings_DataAccess_Module_Model::updateConditions($conditionAll, $tplId);
		Settings_DataAccess_Module_Model::updateConditions($conditionOption, $tplId, FALSE);

		header("Location: index.php?module=DataAccess&parent=Settings&view=Index");
	}
}
