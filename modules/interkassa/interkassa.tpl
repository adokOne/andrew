<p class="payment_module">
<a href="javascript:$('#interkassa').submit();" title="Оплатить через Интеркассу">
		<img src="{$this_path}interkassa.gif" style="float:left;" />
		<br />Оплатить через Интеркассу<br />
		<br style="clear:both;" />
</a>
</p>

<form id="interkassa"  method="POST" accept-charset="UTF-8" action="https://sci.interkassa.com">
<input type="hidden" name="ik_am" value="{$total}">
<input type="hidden" name="ik_desc" value="Pixel-Market.com.ua, Oplata zakaza №{$id_cart}">
<input type="hidden" name="ik_pm_no" value="{$id_cart}">
<input type="hidden" name="ik_co_id" value="{$purse}">
<input type="hidden"   name="ik_sign" value="{$sign_hash}">
<input type="hidden"   name="ik_cur" value="UAH">

</form>