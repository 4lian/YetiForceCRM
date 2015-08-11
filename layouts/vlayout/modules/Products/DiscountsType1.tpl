{strip}
	{if $GROUP_DISCOUNT != 0}
		<div class="panel panel-default">
			<div class="panel-heading">
				<strong>{vtranslate('LBL_GROUP_DISCOUNTS', $SUPMODULE)}</strong>
				<div class="pull-right">
					<input type="{$AGGREGATION_INPUT_TYPE}" name="aggregationType" value="group" class="activeCheckbox">
				</div>
			</div>
			<div class="panel-body" style="display: none;">
				<div>
					<p>
						{vtranslate('LBL_DISCOUNT_FOR_ACCOUNT', $SUPMODULE)} {Vtiger_Functions::getCRMRecordLabel($ACCOUNT_ID)}:
					</p>
					<div class="input-group">
						<span class="input-group-addon">
							<input type="checkbox" name="groupCheckbox" value="on" class="groupCheckbox">
						</span>
						<input type="text" class="form-control groupValue" name="groupDiscount" value="{$GROUP_DISCOUNT}" readonly>
						<span class="input-group-addon">%</span>
					</div>
				</div>
			</div>
		</div>
	{/if}			
{/strip}
