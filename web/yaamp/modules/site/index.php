<?php
function cuGet($url){
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    $output = curl_exec($ch);
    curl_close($ch); 
    
    return round($output);
}

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

<div id='resume_update_button' style='color: #444; background-color: #ffd; border: 1px solid #eea; padding: 10px; margin-left: 20px; margin-right: 20px; margin-top: 15px; cursor: pointer; display: none;' onclick='auto_page_resume();' align=center>
	<strong>Auto refresh is paused - Click to resume lazy person!</strong>
</div>




<!------------------------------------------------------------------------Scrolling Bar------------------------------------------------------------------------------------------------------------->
<div class='header'>
	<div style='width: 100%; height:40px;'>
		<iframe src='https://widget.coinlib.io/widget?type=horizontal_v2&theme=light&invert_hover=no' width='100%' height='36' scrolling='auto' marginwidth='0' marginheight='0' frameborder='0' border='0' style='border:0;margin:0;padding:0;'></iframe>
	</div>
</div>

<table cellspacing=20 width=100%>
	<tr>

<!------------------------------------------------------------------------General Info------------------------------------------------------------------------------------------------------------->
		<td valign=top width=50%>
		<div class="main-left-box" style="margin-bottom: 10px;">
			<div class="main-left-title">Coin Pool Services</div>
				<div class="main-left-inner">
				<p style="text-align: justify;">Coin Pool Services is a pool management solution based on the Yii Framework.</p>
				<p style="text-align: justify;">This fork was based on the yaamp source code and is now managed by Coin Pool Service Dev Team.</p>
				<p style="text-align: justify;">No registration is required, we do payouts in the currency you mine. Use your wallet address as the username.</p>
				<p style="text-align: justify;">Payouts are made automatically every 2 hours for all balances above <strong>0.001</strong>, or <strong>0.0001</strong> on Sunday.</p>
				<p style="text-align: justify;">For some coins, there is an initial delay before the first payout, please wait at least 6 hours before asking for support.</p>
				<p style="text-align: justify;">Blocks are distributed proportionally among valid submitted shares.</p>
				</div>
		</div>
		<br>

<!------------------------------------------------------------------------Stratum Setup------------------------------------------------------------------------------------------------------------->
		<div class="main-left-box">
			<div class="main-left-title">Configuration Maker</div>
				<div class="main-left-inner">
				<table>
					<thead>
					<tr>
						<th>Coin</th>
						<th>Wallet Address</th>
						<th>RigName</th>
					</tr>
					</thead>
					<tbody>
					<tr>
						<td>
						<select id="drop-coin">
							<option data-port='8533' data-algo='-a tribus' data-symbol='SCRIV'>ScrivNetwork (SCRIV)</option>
							<option data-port='3633' data-algo='-a x13' data-symbol='PRIV'>PRiVCY (PRIV)</option>
							<option data-port='3533' data-algo='-a x11' data-symbol='Arion'>Arion (Arion)</option>
							<option data-port='3737' data-algo='-a x17' data-symbol='MEK'>Meraki (MEK)</option>
							<option data-port='4553' data-algo='-a lyra2z' data-symbol='DNGR'>DangerCoin (DNGR)</option>							
						</select>
						</td>
						<td><input id="text-wallet" type="text" size="44" placeholder="1MaxQQxJjnrxxfVvPncb2wsVpTKQu1drH7 "></td>
						<td><input id="text-rig-name" type="text" size="10" placeholder="GPURig1"></td>
						<td><input id="Generate!" type="button" value="Start Mining" onclick="generate()"></td>
					</tr>
					<tr>
						<td colspan="5"><p class="main-left-box" style="padding: 3px; background-color: #ffffee; font-family: monospace;" id="output">-a x13 -o stratum+tcp://coinpoolservices.com:3633 -u . -p c=PRIV</p></td>
					</tr>
					</tbody>
				</table>

			<p><strong>DO NOT USE a BTC address here for the time being you will loose your coins. This feature is being worked on in the background for select coins.</strong>!<br>
			See the "Pool Status" area on the right for PORT numbers. Algorithms without associated coins are disabled.</p>

			<script>
			function getLastUpdated(){
				var dropCoin = document.getElementById('drop-coin');
				var rigName = document.getElementById('text-rig-name').value;
				var result = '';

				result += dropCoin.options[dropCoin.selectedIndex].dataset.algo + ' -o stratum+tcp://' + 'coinpoolservices.com:';
				result += dropCoin.options[dropCoin.selectedIndex].dataset.port + ' -u ';
				result += document.getElementById('text-wallet').value;
				if (rigName) result += '.' + rigName;
				result += ' -p c=';
				result += dropCoin.options[dropCoin.selectedIndex].dataset.symbol;
				return result;
			}
			function generate(){
			  	var result = getLastUpdated()
					document.getElementById('output').innerHTML = result;
			}
			generate();
			</script>
			</div>
		</div>
		<br>


<!------------------------------------------------------------------------Miner Links------------------------------------------------------------------------------------------------------------->
			<div class="main-left-box">
				<div class="main-left-title">Miner Download Links</div>
					<div class="main-left-inner">
					<ul>

						<li><b>CCMiner</b> - <a href='https://github.com/tpruvot/ccminer/releases'>Download CCMiner (cuda10)</a></li>
						<li><b>CryptoDredge</b> - <a href='https://cryptodredge.org/download/windows/10.1/latest'>Download CryptoDredge (Windows)</a></li>
						<li><b>CryptoDredge</b> - <a href='https://cryptodredge.org/download/linux/10.1/latest'>Download CryptoDredge (Linux)</a></li>
						<li><b>SGMiner</b> - <a href='https://github.com/brian112358/sgminer-x16r/releases'>Download SGMiner (x16r)</a></li>
						<li><b>Phi1612 SGMiner</b> - <a href='https://github.com/216k155/sgminer-phi1612-Implemented/releases'>Download SGMiner (Phi1612)</a></li>
						<li><b>CPUMiner-Multi</b> - <a href='https://github.com/tpruvot/cpuminer-multi/releases'>Download CPUMiner-Multi (Multi CPU)</a></li>

						<br>

						</ul>
					</div>
				</div>
				<br>



<!------------------------------------------------------------------------New Listings------------------------------------------------------------------------------------------------------------->
		<div class="main-left-box">
			<div class="main-left-title">New Listings</div>
				<div class="main-left-inner">
				<ul>		
					<li><img width="60px" src="/images/meraki.png" alt="meraki"><strong>Meraki</strong></a></li>
					<li><img alt="GitHub release (latest by date)" src="https://img.shields.io/github/v/release/MerakiCore/meraki?label=Meraki%20Current%20Release&style=for-the-badge"></li>
					<li><img alt="GitHub Release Date" src="https://img.shields.io/github/release-date/MerakiCore/meraki?label=Meraki%20Release%20Date&style=for-the-badge"></li>

					<li><img width="60px" src="/images/dngrcoin.png" alt="danger coin"><strong>Danger Coin</strong></a></li>
					<li><img alt="GitHub release (latest by date)" src="https://img.shields.io/github/v/release/dngrcoin/dngrcoin?label=dngrcoin%20Current%20Release&style=for-the-badge"></li>
					<li><img alt="GitHub Release Date" src="https://img.shields.io/github/release-date/dngrcoin/dngrcoin?label=dngrcoin%20Current%20Release&style=for-the-badge"></li>

					<li><img width="60px" src="/images/scriv.png" alt="scriv"><strong>ScrivNetwork</strong></a></li>
					<li><img alt="GitHub release (latest by date)" src="https://img.shields.io/github/v/release/ScrivNetwork/scriv?label=Scriv%20Current%20Release&style=for-the-badge"></li>
					<li><img alt="GitHub Release Date" src="https://img.shields.io/github/release-date/ScrivNetwork/scriv?label=Scriv%20Release%20Date&style=for-the-badge"></li>

				</ul>
				<h4>Coin News</h4>
				<ul>
					<li><img width="60px" src="/images/innova.png" alt="innova">Innova has reached the last pow block and will no longer be minable. </li>
				</ul>
			</div>
		</div>
		<br>

<!----------------------------------------------------------------------URL Links--------------------------------------------------------------------------------------------------------------->
		<div class="main-left-box">
			<div class="main-left-title">LINKS</div>
				<div class="main-left-inner">
				<ul>
					<!--<li><strong>BitcoinTalk</strong> - <a href='https://bitcointalk.org/index.php?topic=508786.0' target=_blank >https://bitcointalk.org/index.php?topic=508786.0</a></li>-->
					<!--<li><strong>IRC</strong> - <a href='http://webchat.freenode.net/?channels=#yiimp' target=_blank >http://webchat.freenode.net/?channels=#yiimp</a></li>-->
					<li><strong>API</strong> - <a href='/site/api'>http://coinpoolservices.com/site/api</a></li>
					<li><strong>Difficulty</strong> - <a href='/site/diff'>http://coinpoolservices.com/site/diff</a></li>

					<?php if (YIIMP_PUBLIC_BENCHMARK): ?>
					<li><strong>Benchmarks</strong> - <a href='/site/benchmarks'>http://coinpoolservices.com/site/benchmarks</a></li>
					<?php endif; ?>

					<?php if (YAAMP_ALLOW_EXCHANGE): ?>
					<li><strong>Algo Switching</strong> - <a href='/site/multialgo'>http://coinpoolservices.com/site/multialgo</a></li>
					<?php endif; ?>
					
					<li><a href="https://discord.gg/G7Snbxk" target="_blank"><img width='300' src='/images/discord.png'></a></li>
				</ul>
				</div>			
		</div>
		<br>


<!------------------------------------------------------------------------Donation Section------------------------------------------------------------------------------------------------------------->
		<div class="main-left-box">
			<div class="main-left-title">DONATIONS</div>
				<div class="main-left-inner">
				<left>
					<img width='150' src='/images/btc_wallet.png'>
					<p>BTC: <a href="https://www.blockchain.com/btc/address/1MaxQQxJjnrxxfVvPncb2wsVpTKQu1drH7">1MaxQQxJjnrxxfVvPncb2wsVpTKQu1drH7</a>&nbsp;</p>

					<img width='150' src='/images/ltc_wallet.png'>
					<p>LTC: <a href="https://live.blockcypher.com/ltc/address/M8FwP7eRySXMW8X6zcLCZwFgXWeVrQyAAk/">M8FwP7eRySXMW8X6zcLCZwFgXWeVrQyAAk</a>&nbsp;</p>
				</left>
				</div>
		</div>

<!------------------------------------------------------------------------Not Sure------------------------------------------------------------------------------------------------------------->

		</td>
		<td valign=top>
		<!--  -->
		<div id='pool_current_results'>
		<br><br><br><br><br><br><br><br><br><br>
		</div>

		<div id='pool_history_results'>
		<br><br><br><br><br><br><br><br><br><br>
		</div>
		<br>
		
<!------------------------------------------------------------------------Coin Links------------------------------------------------------------------------------------------------------------->
<div class="main-left-box"><div class="main-left-title">Coin Links</div>
<div class="main-left-inner"><style type="text/css">
td.symb, th.symb {
	width:50px;
	max-width: 50px;
	text-align: right;
}
td.symb {
	font-size: .8em;
}
</style>

<table class="dataGrid2">
<thead>
<tr>
<th></th>
<th>Name</th>
<!-- th class="symb">Symbol</th -->
<th align="center">Info</th>
<th align="center">WWW</th>
<th align="center">Discord</th>
<th align="center">Expl</th>
<th align="center">Github</th>
<th align="center">Exch</th>
<th align="center">FB</th>
<th align="center">Twitter</th>
<th align="center">Wallet*</th>
<th align="center">Nodes</th>
</tr>


<!-- PRIVACY COIN -->
</thead><tbody><tr class="ssrow"><td width="18px"><img width="16px" src="/images/coin-1426.png">
</td><td><b>
<a href="/site/block?id=1426">PRiVCY Coin</a></b></td>
<td align="center"><a href="https://bitcointalk.org/index.php?topic=4503790.0" target="_blank"><img src="images/btctalk.png"></a></td>
<td align="center"><a href="https://privcy.eu/" target="_blank"><img src="images/www.png"></a></td>
<td align="center"><a href="https://discord.gg/xz5Xszt" target="_blank"><img src="images/discordsm.png"></a></td>
<td align="center"><a href="https://www.blockexperts.com/priv" target="_blank"><img src="images/explorer.png"></a></td>
<td align="center"><a href="https://github.com/privcycoin/privcy" target="_blank"><img src="images/github.png"></a></td>
<td align="center"><a href="https://stakecube.net/app/exchange/" target="_blank"><img src="images/exchange.png"></a></td>
<td align="center"><a href="https://www.facebook.com/PRiVCYCOIN/" target="_blank"><img src="images/facebook.png"></a></td>
<td align="center"><a href="https://twitter.com/PRiVCY_COIN" target="_blank"><img src="images/twitter.png"></a></td>
<td align="center"><a href="https://github.com/privcycoin/privcy/releases" target="_blank"><img src="images/wallet.png"></a></td>
<td align="center"><a href="https://coinpoolservices.com/explorer/peers?id=1426" target="_blank"><img src="images/addnodes.png"></a></td>

<!-- SCRIV NETWORK -->
</thead><tbody><tr class="ssrow"><td width="18px"><img width="16px" src="/images/scriv.png">
</td><td><b>
<a href="/site/block?id=1913">SCRIV Network</a></b></td>
<td align="center"><a href="https://bitcointalk.org/index.php?topic=3097184.0" target="_blank"><img src="images/btctalk.png"></a></td>
<td align="center"><a href="https://scriv.network/" target="_blank"><img src="images/www.png"></a></td>
<td align="center"><a href="https://discord.gg/vftPfB8" target="_blank"><img src="images/discordsm.png"></a></td>
<td align="center"><a href="https://www.coinexplorer.net/SCRIV" target="_blank"><img src="images/explorer.png"></a></td>
<td align="center"><a href="https://github.com/ScrivNetwork/scriv" target="_blank"><img src="images/github.png"></a></td>
<td align="center"><a href="https://crex24.com/exchange/SCRIV-BTC" target="_blank"><img src="images/exchange.png"></a></td>
<td align="center"><a href="https://www.facebook.com/scriv.network/" target="_blank"><img src="images/facebook.png"></a></td>
<td align="center"><a href="https://twitter.com/scriv_network" target="_blank"><img src="images/twitter.png"></a></td>
<td align="center"><a href="https://github.com/ScrivNetwork/scriv/releases" target="_blank"><img src="images/wallet.png"></a></td>
<td align="center"><a href="https://coinpoolservices.com/explorer/peers?id=1913" target="_blank"><img src="images/addnodes.png"></a></td>


<!-- ARION COIN -->
</thead><tbody><tr class="ssrow"><td width="18px"><img width="16px" src="/images/coin-1425.png">
</td><td><b>
<a href="/site/block?id=1425">Arion Coin</a></b></td>
<td align="center"><a href="https://bitcointalk.org/index.php?topic=2926336" target="_blank"><img src="images/btctalk.png"></a></td>
<td align="center"><a href="arioncoin.com" target="_blank"><img src="images/www.png"></a></td>
<td align="center"><a href="https://discord.gg/NkxwYkf" target="_blank"><img src="images/discordsm.png"></a></td>
<td align="center"><a href="https://www.coinexplorer.net/ARION" target="_blank"><img src="images/explorer.png"></a></td>
<td align="center"><a href="https://github.com/arioncoin/arioncoin" target="_blank"><img src="images/github.png"></a></td>
<td align="center"><a href="https://crex24.com/exchange/ARION-BTC" target="_blank"><img src="images/exchange.png"></a></td>
<td align="center"><a href="https://www.facebook.com/arioncoinofficial/" target="_blank"><img src="images/facebook.png"></a></td>
<td align="center"><a href="https://twitter.com/ARION_COIN" target="_blank"><img src="images/twitter.png"></a></td>
<td align="center"><a href="https://github.com/arioncoin/arioncoin/releases/" target="_blank"><img src="images/wallet.png"></a></td>
<td align="center"><a href="https://coinpoolservices.com/explorer/peers?id=1425" target="_blank"><img src="images/addnodes.png"></a></td>


<!-- MERAKI COIN -->
</thead><tbody><tr class="ssrow"><td width="18px"><img width="16px" src="/images/meraki.png">
</td><td><b>
<a href="/site/block?id=1915">Meraki</a></b></td>
<td align="center"><a href="https://bitcointalk.org/index.php?topic=5209078.120" target="_blank"><img src="images/btctalk.png"></a></td>
<td align="center"><a href="https://meraki.cash/" target="_blank"><img src="images/www.png"></a></td>
<td align="center"><a href="https://discord.gg/WJbwbPr" target="_blank"><img src="images/discordsm.png"></a></td>
<td align="center"><a href="https://explorer.meraki.cash/chain/Meraki" target="_blank"><img src="images/explorer.png"></a></td>
<td align="center"><a href="https://github.com/arioncoin/arioncoin" target="_blank"><img src="images/github.png"></a></td>
<td align="center"><a href="https://graviex.net/markets/mekbtc" target="_blank"><img src="images/exchange.png"></a></td>
<td></td>
<td></td>
<td align="center"><a href="https://github.com/MerakiCore/meraki/releases/" target="_blank"><img src="images/wallet.png"></a></td>
<td align="center"><a href="https://coinpoolservices.com/explorer/peers?id=1915" target="_blank"><img src="images/addnodes.png"></a></td>


<!-- DANGER COIN -->
</thead><tbody><tr class="ssrow"><td width="18px"><img width="16px" src="/images/dngrcoin.png">
</td><td><b>
<a href="/site/block?id=1916">Danger Coin</a></b></td>
<td align="center"><a href="https://bitcointalk.org/index.php?topic=5210159" target="_blank"><img src="images/btctalk.png"></a></td>
<td align="center"><a href="http://dngrcoin.cf/" target="_blank"><img src="images/www.png"></a></td>
<td align="center"><a href="https://discord.gg/k8A5U2T" target="_blank"><img src="images/discordsm.png"></a></td>
<td align="center"><a href="http://www.dngrexplorer.cf/" target="_blank"><img src="images/explorer.png"></a></td>
<td align="center"><a href="https://github.com/dngrcoin/dngrcoin" target="_blank"><img src="images/github.png"></a></td>
<td></td>
<td></td>
<td align="center"><a href="https://twitter.com/DangerCoinDev" target="_blank"><img src="images/twitter.png"></a></td>
<td align="center"><a href="https://github.com/dngrcoin/dngrcoin/releases/" target="_blank"><img src="images/wallet.png"></a></td>
<td align="center"><a href="https://coinpoolservices.com/explorer/peers?id=1916" target="_blank"><img src="images/addnodes.png"></a></td>




</tr></a></td></tr></tbody></table></div>

<strong>Important: Always use wallets with caution. Never automatically trust them. Submit them to virustotal.com for checking prior to installing.</strong></div>
<br>
		


<!------------------------------------------------------------------------Coin Listing Form------------------------------------------------------------------------------------------------------------->
		<div class="main-left-box">
			<div class="main-left-title">Coin Listing Form</div>
				<div class="main-left-inner">
				<ul>	
					<iframe src="https://docs.google.com/forms/d/e/1FAIpQLSfSWAUKsA6EkDD4kCZcBDNpIUiF-eQtjo1_f2zi3kCwV2gj9g/viewform?embedded=true" width="640" height="947" frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe>
				</ul>
				</div>			
		</div>


		
		</td>
	</tr>
</table>
<!-- Footer -->
<div class="footer"><p>&copy; 2019 Coin Pool Services - All Rights Reserved</p></div>

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
