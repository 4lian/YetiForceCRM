<?php
/*+***********************************************************************************************************************************
 * The contents of this file are subject to the YetiForce Public License Version 1.1 (the "License"); you may not use this file except
 * in compliance with the License.
 * Software distributed under the License is distributed on an "AS IS" basis, WITHOUT WARRANTY OF ANY KIND, either express or implied.
 * See the License for the specific language governing rights and limitations under the License.
 * The Original Code is YetiForce.
 * The Initial Developer of the Original Code is YetiForce. Portions created by YetiForce are Copyright (C) www.yetiforce.com. 
 * All Rights Reserved.
 *************************************************************************************************************************************/
class OSSEmployees_GetHoliday_Action extends Vtiger_Action_Controller {

	public function checkPermission(Vtiger_Request $request)
	{
		$moduleName = $request->getModule();
		$moduleModel = Vtiger_Module_Model::getInstance($moduleName);

		$userPrivilegesModel = Users_Privileges_Model::getCurrentUserPrivilegesModel();
		$permission = $userPrivilegesModel->hasModulePermission($moduleModel->getId());

		if (!$permission) {
			throw new \Exception\NoPermitted('LBL_PERMISSION_DENIED');
		}
	}

	public function process(Vtiger_Request $request) {
		$adb = PearDatabase::getInstance();
		$moduleName = $request->getModule();
        
		$id = $request->get( 'id' ); 
		$year = $request->get( 'year' ); 
		
        $sourceData = array();
        
        $recordModel = Vtiger_Record_Model::getCleanInstance( $moduleName );
        
		$holiday['workDay'] = $recordModel->getHoliday( $id, $year );
		$holiday['entitlement'] = $recordModel->getHolidaysEntitlement( $id, $year );
		
		if ( !$holiday ) {
			$result = array( 'success' => false, 'message' => vtranslate('LBL_FAILED_TO_IMPORT_INFO', $moduleName) );
		}
        else {
			$result = array( 'success' => true, 'holiday' => $holiday );
		}
        
		$response = new Vtiger_Response();
		$response->setResult($result);
		$response->emit();
	}
}
