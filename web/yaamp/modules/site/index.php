<?php
$algo = user()->getState('yaamp-algo');
JavascriptFile("/extensions/jqplot/jquery.jqplot.js");
JavascriptFile("/extensions/jqplot/plugins/jqplot.dateAxisRenderer.js");
JavascriptFile("/extensions/jqplot/plugins/jqplot.barRenderer.js");
JavascriptFile("/extensions/jqplot/plugins/jqplot.highlighter.js");
JavascriptFile("/extensions/jqplot/plugins/jqplot.cursor.js");
JavascriptFile('/yaamp/ui/js/auto_refresh.js');
$height = '240px';
$min_payout = floatval(YAAMP_PAYMENTS_MINI);
$min_sunday = $min_payout/10;
$payout_freq = (YAAMP_PAYMENTS_FREQ / 3600)." hours";
?>

<div id='resume_update_button' style='color: #444; background-color: #ffd; border: 1px solid #eea;
	padding: 10px; margin-left: 20px; margin-right: 20px; margin-top: 15px; cursor: pointer; display: none;'
	onclick='auto_page_resume();' align=center>
	<b>Auto refresh is paused - Click to resume lazy person!</b></div>


<!--
SCROLLING PRICE BAR 
-->

<div><div class='content-out'><div style='width: 100%; height:40px;'><iframe src='https://widget.coinlib.io/widget?type=horizontal_v2&theme=light&invert_hover=no' width='100%' height='36' scrolling='auto' marginwidth='0' marginheight='0' frameborder='0' border='0' style='border:0;margin:0;padding:0;'></iframe>


<table cellspacing=20 width=100%>
<tr><td valign=top width=50%>

<!--
GENERAL INFO SECTION 
-->

<div class="main-left-box">
<div class="main-left-title">Coin Pool Services</div>
<div class="main-left-inner">

<ul>

<li>Coin Pool Services is a pool management solution based on the Yii Framework.</li>
<li>This fork was based on the yaamp source code and is now managed by Coin Pool Service Dev Team.</li>
<li>No registration is required, we do payouts in the currency you mine. Use your wallet address as the username.</li>
<li>&nbsp;</li>
<li>Payouts are made automatically every <?= $payout_freq ?> for all balances above <b><?= $min_payout ?></b>, or <b><?= $min_sunday ?></b> on Sunday.</li>
<li>For some coins, there is an initial delay before the first payout, please wait at least 6 hours before asking for support.</li>
<li>Blocks are distributed proportionally among valid submitted shares.</li>

<br/>

</ul>
</div></div>
<br/>

<!--
STRATUM SETUP SECTION 
-->

<div class="main-left-box">
<div class="main-left-title">STRATUM SERVERS</div>
<div class="main-left-inner">

<ul>

<li>
<p class="main-left-box" style='padding: 3px; font-size: .8em; background-color: #ffffee; font-family: monospace;'>
	-o stratum+tcp://<?= YAAMP_STRATUM_URL ?>:&lt;PORT&gt; -u &lt;WALLET_ADDRESS&gt; [-p &lt;OPTIONS&gt;]</p>
</li>

<?php if (YAAMP_ALLOW_EXCHANGE): ?>
<li>&lt;WALLET_ADDRESS&gt; can be one of any currency we mine or a BTC address.</li>
<?php else: ?>
<li>&lt;WALLET_ADDRESS&gt; should be valid for the currency you mine. <b>DO NOT USE a BTC address here, the auto exchange is disabled</b>!</li>
<?php endif; ?>
<li>As optional password, you can use <b>-p c=&lt;SYMBOL&gt;</b> if the currency is not correct on the Wallet page.</li>
<li>See the "Pool Status" area on the right for PORT numbers. Algorithms without associated coins are disabled.</li>

<br>

</ul>
</div></div><br>

<!--
URL LINK SECTION 
-->

<div class="main-left-box">
<div class="main-left-title">LINKS</div>
<div class="main-left-inner">

<ul>

<!--<li><b>BitcoinTalk</b> - <a href='https://bitcointalk.org/index.php?topic=508786.0' target=_blank >https://bitcointalk.org/index.php?topic=508786.0</a></li>-->
<!--<li><b>IRC</b> - <a href='http://webchat.freenode.net/?channels=#yiimp' target=_blank >http://webchat.freenode.net/?channels=#yiimp</a></li>-->

<li><b>API</b> - <a href='/site/api'>http://<?= YAAMP_SITE_URL ?>/site/api</a></li>
<li><b>Difficulty</b> - <a href='/site/diff'>http://<?= YAAMP_SITE_URL ?>/site/diff</a></li>
<?php if (YIIMP_PUBLIC_BENCHMARK): ?>
<li><b>Benchmarks</b> - <a href='/site/benchmarks'>http://<?= YAAMP_SITE_URL ?>/site/benchmarks</a></li>
<?php endif; ?>

<?php if (YAAMP_ALLOW_EXCHANGE): ?>
<li><b>Algo Switching</b> - <a href='/site/multialgo'>http://<?= YAAMP_SITE_URL ?>/site/multialgo</a></li>
<?php endif; ?>

<br>

</ul>
</div></div><br>

<!--  -->

<a class="twitter-timeline" href="https://twitter.com/hashtag/crypto" data-widget-id="617405893039292417" data-chrome="transparent" height="450px" data-tweet-limit="3" data-aria-polite="polite">Tweets about #crypto</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

</td><td valign=top>

<!--  -->

<div id='pool_current_results'>
<br><br><br><br><br><br><br><br><br><br>
</div>

<div id='pool_history_results'>
<br><br><br><br><br><br><br><br><br><br>
</div>


<!--
DONATION SECTION 
-->
<div class="main-left-title-p">Donations</div>
<div class="main-left-inner">
<center>
<img width='150' src='/images/btc_wallet.png'>
<img width='150' src='/images/ltc_wallet.png'>
<img width='150' src='/images/inn_wallet.png'>
</center>
<br>
<li> BTC 	: <a href="https://www.blockchain.com/btc/address/1MaxQQxJjnrxxfVvPncb2wsVpTKQu1drH7">1MaxQQxJjnrxxfVvPncb2wsVpTKQu1drH7</a>&nbsp;</li><p>   </p>
<li> LTC	: <a href="https://live.blockcypher.com/ltc/address/M8FwP7eRySXMW8X6zcLCZwFgXWeVrQyAAk/">M8FwP7eRySXMW8X6zcLCZwFgXWeVrQyAAk</a>&nbsp;</li><p>   </p>
<li> INN	: <a href="https://explorer.innovacoin.io/address/iSNDXHFsyAgWvrVnae5zoCWdpdHvAPnTnw">iSNDXHFsyAgWvrVnae5zoCWdpdHvAPnTnw</a>&nbsp;</li><p>   </p>
</div>

</td></tr></table>

<br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br>

<script>
function page_refresh()
{
	pool_current_refresh();
	pool_history_refresh();
}
function select_algo(algo)
{
	window.location.href = '/site/algo?algo='+algo+'&r=/';
}
////////////////////////////////////////////////////
function pool_current_ready(data)
{
	$('#pool_current_results').html(data);
}
function pool_current_refresh()
{
	var url = "/site/current_results";
	$.get(url, '', pool_current_ready);
}
////////////////////////////////////////////////////
function pool_history_ready(data)
{
	$('#pool_history_results').html(data);
}
function pool_history_refresh()
{
	var url = "/site/history_results";
	$.get(url, '', pool_history_ready);
}
</script>
