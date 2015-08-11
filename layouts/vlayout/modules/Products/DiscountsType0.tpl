{strip}
	<div class="panel panel-default">
		<div class="panel-heading">
			<strong>{vtranslate('LBL_GLOBAL_DISCOUNTS', $SUPMODULE)}</strong>
			<div class="pull-right">
				<input type="{$AGGREGATION_INPUT_TYPE}" name="aggregationType" value="global" class="activeCheckbox">
			</div>
		</div>
		<div class="panel-body" style="display: none;">
			<select class="select2 globalDiscount" name="globalDiscount">
				{foreach item=VALUE key=NAME from=$GLOBAL_DISCOUNTS}
					<option value="{$VALUE}">
						{vtranslate($NAME, $SUPMODULE)} - {$VALUE}%
					</option>
				{/foreach}
			</select>
		</div>
	</div>
{/strip}
