{strip}
	{if $GROUP_TAXS}
		<div class="panel panel-default">
			<div class="panel-heading">
				<strong>{vtranslate('LBL_REGIONAL_TAX', $SUPMODULE)}</strong>
				<div class="pull-right">
					<input type="{$AGGREGATION_INPUT_TYPE}" name="aggregationType" value="account" class="activeCheckbox">
				</div>
			</div>
			<div class="panel-body" style="display: none;">
				<div>
					<p>
						{vtranslate('LBL_TAX_FOR_ACCOUNT', $SUPMODULE)}: {$ACCOUNT_NAME}
					</p>
					<select class="select2 regionalTax" name="regionalTax">
						{foreach item=TAX from=$GROUP_TAXS}
							<option value="{$TAX['value']}">
								{$TAX['value']}% - {vtranslate({$TAX['name']}, $SUPMODULE)}
							</option>
						{/foreach}
					</select>
				</div>
			</div>
		</div>
	{/if}
{/strip}
