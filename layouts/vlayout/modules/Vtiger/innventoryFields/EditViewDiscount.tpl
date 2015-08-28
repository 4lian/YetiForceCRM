{*<!-- {[The file is published on the basis of YetiForce Public License that can be found in the following directory: licenses/License.html]} --!>*}
{strip}
	{assign var=VALUE value=$FIELD->getValue($SUP_VALUE)}
	<div>
		<div class="input-group input-group-sm">
			<input type="text" name="discount{$ROW_NO}" value="{$FIELD->getEditValue($VALUE)}" class="discount form-control input-sm" readonly="readonly" />
			{if $DISCOUNTS_CONFIG['discounts'][0] != ''}
				<input name="discountparam{$ROW_NO}" type="hidden" value="{Vtiger_Util_Helper::toSafeHTML($SUP_DATA['discountparam'])}" class="discountParam" />
				<span class="input-group-addon cursorPointer changeDiscount">
					<img src="{vimage_path('Discount24.png')}" alt="{vtranslate('LBL_DISCOUNT', $SUPMODULE)}" />
				</span>
			{/if}
		</div>
	</div>
{/strip}
