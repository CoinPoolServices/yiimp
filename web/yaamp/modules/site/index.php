

<!doctype html>
<!--[if IE 7 ]>		 <html class="no-js ie ie7 lte7 lte8 lte9" lang="en-US"> <![endif]-->
<!--[if IE 8 ]>		 <html class="no-js ie ie8 lte8 lte9" lang="en-US"> <![endif]-->
<!--[if IE 9 ]>		 <html class="no-js ie ie9 lte9>" lang="en-US"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html class="no-js" lang="en-US"> <!--<![endif]-->

<head>

<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

<meta name="description" content="Yii mining pools for alternative crypto currencies">
<meta name="keywords" content="anonymous,mining,pool,maxcoin,bitcoin,altcoin,auto,switch,exchange,profit,decred,scrypt,x11,x13,x14,x15,lbry,lyra2re,neoscrypt,sha256,quark,skein2">
<script type="text/javascript" src="/assets/93f3a5b5/jquery.min.js"></script>
<script type="text/javascript" src="/assets/93f3a5b5/jui/js/jquery-ui.min.js"></script>
<title>Popof - speedpool.top - Site</title><link rel="stylesheet" type="text/css" href="/extensions/jquery/themes/ui-lightness/jquery-ui.css" /><link rel="stylesheet" type="text/css" href="/yaamp/ui/css/main.css" /><link rel="stylesheet" type="text/css" href="/yaamp/ui/css/table.css" /><script type="text/javascript" src="/yaamp/ui/js/jquery.tablesorter.js"></script></head><body class="page"><a href="/site/mainbtc" style="display: none;">main</a><div class="tabmenu-out"><div class="tabmenu-inner">&nbsp;&nbsp;<a href="/">Popof</a><span><a class='selected' href='/'>Home</a></span>&nbsp;<span><a  href='/site/mining'>Pool</a></span>&nbsp;<span><a  href='/?address='>Wallet</a></span>&nbsp;<span><a  href='/stats'>Graphs</a></span>&nbsp;<span><a  href='/site/miners'>Miners</a></span>&nbsp;<span><a  href='/explorer'>Explorers</a></span>&nbsp;<span><a  href='/cours'>Cours</a></span>&nbsp;<span style="float: right;"><span id="nextpayout" style="font-size: .8em;" title="in 20 minutes">Next Payout: 23:35 UTC</span></div></div><div class='content-out'><div style='width: 100%; height:40px;'><iframe src='https://widget.coinlib.io/widget?type=horizontal_v2&theme=light&pref_coin_id=1506&invert_hover=no' width='100%' height='36' scrolling='auto' marginwidth='0' marginheight='0' frameborder='0' border='0' style='border:0;margin:0;padding:0;'></iframe></div><div class='content-inner'><script type="text/javascript" src="/extensions/jqplot/jquery.jqplot.js"></script><script type="text/javascript" src="/extensions/jqplot/plugins/jqplot.dateAxisRenderer.js"></script><script type="text/javascript" src="/extensions/jqplot/plugins/jqplot.barRenderer.js"></script><script type="text/javascript" src="/extensions/jqplot/plugins/jqplot.highlighter.js"></script><script type="text/javascript" src="/extensions/jqplot/plugins/jqplot.cursor.js"></script><script type="text/javascript" src="/yaamp/ui/js/auto_refresh.js"></script>
<script>
function getLastUpdated2(){
        var mine = '';
        var drop2 = document.getElementById('drop-coin');
        var rigName = document.getElementById('text-rig-name').value;
        var typemine = document.getElementsByName('typemine');
        for(i = 0; i < typemine.length; i++) {
                if(typemine[i].checked && typemine[i].value == 'SOLO')
                        mine = 's=' + typemine[i].value;
        }
        var result2 = '-a ';
        //alert(drop2.selectedIndex);
        if(drop2.selectedIndex > 0) {
                result2 += drop2.options[drop2.selectedIndex].dataset.algo + ' -o stratum+tcp:\/\/';
                result2 += drop2.options[drop2.selectedIndex].dataset.symbol.toLowerCase() + '.speedpool.top:';
                result2 += drop2.options[drop2.selectedIndex].dataset.port + ' -u ';
                result2 += document.getElementById('text-wallet').value;
                if (rigName) result2 += '.' + rigName;
                result2 += ' -p c=' + drop2.options[drop2.selectedIndex].dataset.symbol;
                if ( mine ) result2 += ',' + mine;
        }
        else {
                result2 = '-a &lt;algo&gt; -o stratum+tcp://&lt;coin&gt;.&lt;stratum&gt;:&lt;port&gt; -u &lt;wallet&gt; -p c=&lt;COIN&gt;';
        }
        return result2;
}

function generate(){
        var result2 = getLastUpdated2()
        document.getElementById('output2').innerHTML = result2;
}

</script>


<div id='resume_update_button' style='color: #444; background-color: #ffd; border: 1px solid #eea;
	padding: 10px; margin-left: 20px; margin-right: 20px; margin-top: 15px; cursor: pointer; display: none;'
	onclick='auto_page_resume();' align=center>
	<b>Auto refresh is paused - Click to resume</b></div>

<table cellspacing=20 width=100%>
<tr><td valign=top width=50%>

<!--  -->

<div class="main-left-box">
<div class="main-left-title-p"><img width='20' src='/images/info2.jpg'> Popof MINING POOLS</div>
<div class="main-left-inner">

<ul>

<!--
<li>YiiMP is a pool management solution based on the Yii Framework.</li>
<li>This fork was based on the yaamp source code and is now an open source project.</li>
-->
<img width='200' src='/images/logo/logo.jpg'>
<li>No registration is required, we do payouts in the currency you mine. Use your wallet address as the username.</li>
<li>&nbsp;</li>
<li>Payouts are made automatically every 1 hours for all balances above <b>0.01</b>, or <b>0.001</b> on Sunday.</li>
<li>For some coins, there is an initial delay before the first payout, please wait at least 6 hours before asking for support.</li>
<li>Blocks are distributed proportionally among valid submitted shares.</li>
<li>&nbsp;</li>
<li><b>Coins with <img width='10' src='/images/valid2.png'> have been successfully tested !!!!</b></li>
<li><b>Coins with <img width='10' src='/images/stop.png'> are under test : not realy ready for mining !!!!</b></li>
<li>I do not have enough power to test others alone :)</li>
<!--
<li>The untested coins will be 0% fee for 1 month from the 1st connected worker and will then go back to 1%<li>
-->
<li></li>

<table><tr><td><img src='/images/new1.jpg'></td><td><h3>Solo Mining is now enabled, you can choise mining Shared or Solo !!</h3></td></tr></table>

<center>
<!--
<li><font color=blue><b>I try to choose a currency not referenced as a scam: I favor quality rather than quantity !</b></font></li>
-->
<li><font color=green><b>Good mining !!</b></font></li>
</center>
<br/>

</ul>
</div></div>
<br/>

<!--  -->



<div class="main-left-box">
<div class="main-left-title-p"><img width='40' src='/images/news1.png'> NEWS</div>
<div class="main-left-inner">
<!-- 
<li><a href="https://discord.gg/TP9aHxU" target="_blank"><img width='300' src='/images/discord.png'></a></li>
-->
<!--
<li><img width='20' src='/images/coin-zoc.png'> 02/09/2019 : 01Coin : <b>Updated 12.3.5 !!!!</b></li>
-->
<li><img width='20' src='/images/coin-zoc.png'> 10/10/2019 : 01Coin : <b>Updated 12.3.7 !!!!</b></li>
<li><img width='20' src='/images/coin-XGCS.png'> 10/22/2019 : xGalaxy : <b>Add new coin !!!!</b></li>
<li><img width='20' src='/images/coin-MONA.png'> 10/25/2019 : Monacoin : <b>Add new coin !!!!</b></li>
<li><img width='20' src='/images/coin-PHL.png'> 11/05/2019 : Placeholders : <b>Add new coin !!!!</b></li>
<li><img width='20' src='/images/coin-XGCS.png'> 11/09/2019 : xGalaxy : <b>Updated 1.2.0 !!!!</b></li>
<li><img width='20' src='/images/coin-BITC.png'> 11/11/2019 : BitCash : <b>Add new coin !!!!</b></li>
<li><img width='20' src='/images/new1.jpg'> 11/17/2019 : <b>Solo Mining Enabled !!!!</b></li>
<li><img width='20' src='/images/coin-INN.png'> 15/12/2019 : Innova : <b>Add New Chain on Tribus algo !!!!</b></li>
<!--
<li><img width='20' src='/images/coin-xzc.png'> 09/24/2019 : Zcoin : <b>Coin added : must be tested !!!! <img width='25' src='/images/new2.jpg'></b></li>
-->
<li></li>
<li>More on <a href="https://discord.gg/TP9aHxU" target="_blank"><img width='300' src='/images/discord.png'></a></li>
</div></div><br>




<div class="main-left-box">
<div class="main-left-title-p"><img width='20' src='/images/config2.jpg'> STRATUM SERVERS CONFIGURATION</div>
<div class="main-left-inner">

<table><tr><td><img src='/images/new1.jpg'></td><td><h4>Solo Mining is now enabled, you can choise mining Shared or Solo </h4></td></tr></table><br><li>Dedicated port for each coin :</li><div><hr>Solo Mining :<p class='main-left-box' style='padding: 3px; background-color: #ffffee; font-family: monospace;'> -a < Algo > -o stratum+tcp://< Coin Symbol >.speedpool.top:< Coin Port > -u < Coin Wallet >.< rig name > -p c=< Coin Symbol >,<font color='red'>s=SOLO</font></p><hr>Shared Mining :<p class='main-left-box' style='padding: 3px; background-color: #ffffee; font-family: monospace;'> -a < Algo > -o stratum+tcp://< Coin Symbol >.speedpool.top:< Coin Port > -u < Coin Wallet >.< rig name > -p c=< Coin Symbol ></p><hr></div><table><tbody><tr><td><select id='drop-coin'><option selected hidden> -- Choose a coin -- </option><option data-port='42334' data-portalgo='42334' data-algo='neoscrypt' data-symbol='TRAID'>Traid (TRAID)</option><option data-port='42335' data-portalgo='42335' data-algo='neoscrypt' data-symbol='ZOC'>01Coin (ZOC)</option><option data-port='42332' data-portalgo='42332' data-algo='neoscrypt' data-symbol='VIVO'>Vivo (VIVO)</option><option data-port='42333' data-portalgo='42333' data-algo='neoscrypt' data-symbol='GBX'>Gobyte (GBX)</option><option data-port='36367' data-portalgo='36367' data-algo='x16r' data-symbol='GRV'>Gravium (GRV)</option><option data-port='36362' data-portalgo='36362' data-algo='x16rv2' data-symbol='RVN'>RavenCoin (RVN)</option><option data-port='36363' data-portalgo='36363' data-algo='x16r' data-symbol='PHL'>Placeholders (PHL)</option><option data-port='36365' data-portalgo='36365' data-algo='x16r' data-symbol='HLX'>Hilux (HLX)</option><option data-port='44331' data-portalgo='44331' data-algo='lyra2v3' data-symbol='VTC'>VertCoin (VTC)</option><option data-port='45332' data-portalgo='45332' data-algo='lyra2v2' data-symbol='MONA'>Monacoin (MONA)</option><option data-port='45331' data-portalgo='45331' data-algo='lyra2v2' data-symbol='ABS'>Absolute (ABS)</option><option data-port='8433' data-portalgo='8433' data-algo='tribus' data-symbol='INN2'>Innova (INN2)</option><option data-port='8332' data-portalgo='8332' data-algo='phi2' data-symbol='LUX'>Luxcoin (LUX)</option><option data-port='36361' data-portalgo='36361' data-algo='x16r' data-symbol='XGCS'>xGalaxy (XGCS)</option><option data-port='36368' data-portalgo='36368' data-algo='x16rv2' data-symbol='BITC'>BitCash (BITC)</option><option data-port='42331' data-portalgo='42331' data-algo='neoscrypt' data-symbol='INN'>Innova (INN)</option></select></td><td><input id='mine-party' type='radio' name='typemine' value='PARTY' checked> Party<input id='mine-solo' type='radio' name='typemine' value='SOLO'> Solo</td></tr><tr><td><input id='text-wallet' type='text' size='44' placeholder='Your Wallet Address'></td><td><input id='text-rig-name' type='text' size='20' placeholder='Your Worker Name'></td></tr><tr><td colspan='2'><input id='Generate!' type='button' value='Generate' onclick='javascript:generate();'></td><tr><td colspan='2'><p class='main-left-box' style='padding: 3px; background-color: #ffffee; font-family: monospace;' id='output2'>-a &lt;algo&gt; -o stratum+tcp://&lt;coin&gt;.&lt;stratum&gt;:&lt;port&gt; -u &lt;wallet&gt; -p c=&lt;COIN&gt;</p></td></tr></tbody></table><br><b><font color='red'>*DO NOT USE a BTC address here!</font> Auto exchange is disabled.</b><br><br><li>In password section you can add a static difficulty with <p class='main-left-box' style='padding: 3px; background-color: #ffffee; font-family: monospace;'>-p c=COIN,s=SOLO,,d=&lt;Difficulty&gt;</p> or <p class='main-left-box' style='padding: 3px; background-color: #ffffee; font-family: monospace;'>-p c=COIN,d=&lt;Difficulty&gt;</p> or <p class='main-left-box' style='padding: 3px; background-color: #ffffee; font-family: monospace;'>-p d=&lt;Difficulty&gt;</p><br></ul>
</div></div><br>
<!-- -->

<div class="main-left-box">
<div class="main-left-title-p"><img width='20' src='/images/help2.png'> HELP</div>
<div class="main-left-inner">

<ul>


<li>If you have errors "TCP connection closed by pool", try to specify the diffculty "p c=xxx,d=yy" AND/OR change the miner.</li>
<li></li>
<li>In mining HLX, I had these errors with "Cryptodredge" while everything is OK with "T-rex"</li>
<li></li>
<li><b>You can contact me : </b></li> 
<li>Email : <font color = orange> popof1664@orange.fr</font></li>
<li>Discord : <a href="https://discord.gg/TP9aHxU" target="_blank"><font color = orange> https://discord.gg/TP9aHxU</font></li>

<li></li>
<li><b>Good mining !!</b></li>

<br/>

</ul>
</div></div>
<br/>



<!-- --> 

<div class="main-left-box">
<div class="main-left-title-p">LINKS</div>
<div class="main-left-inner">

<ul>

<!--<li><b>BitcoinTalk</b> - <a href='https://bitcointalk.org/index.php?topic=508786.0' target=_blank >https://bitcointalk.org/index.php?topic=508786.0</a></li>-->
<!--<li><b>IRC</b> - <a href='http://webchat.freenode.net/?channels=#yiimp' target=_blank >http://webchat.freenode.net/?channels=#yiimp</a></li>-->

<li><b>API</b> - <a href='/site/api'>http://speedpool.top/site/api</a></li>
<li><b>Difficulty</b> - <a href='/site/diff'>http://speedpool.top/site/diff</a></li>


<br>

</ul>
</div></div><br>

<!--

<a class="twitter-timeline" href="https://twitter.com/hashtag/YAAMP" data-widget-id="617405893039292417" data-chrome="transparent" height="450px" data-tweet-limit="3" data-aria-polite="polite">Tweets about #YAAMP</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

-->

</td><td valign=top>

<!--  -->

<div id='pool_current_results'>
<br><br><br><br><br><br><br><br><br><br>
</div>

<div id='pool_history_results'>
<br><br><br><br><br><br><br><br><br><br>
</div>

<div class="main-left-title-p">Donations</div>
<div class="main-left-inner">
<center>
<img width='150' src='/images/btc_Wallet.png'>
<img width='150' src='/images/xzc_Wallet.png'>
<img width='150' src='/images/hush_Wallet.png'>
</center>
<br>
<li> BTC 	: <a href="https://btc.com/1Popof11SUmsQEH2oeCyqBHhhvZ3k1NiWx">1Popof11SUmsQEH2oeCyqBHhhvZ3k1NiWx</a></li>
<li> ZCOIN	: <a href="https://explorer.zcoin.io/address/aGMtSxy6HpiWn4R7K5LvJTMBw5SCd1Xe8K">aGMtSxy6HpiWn4R7K5LvJTMBw5SCd1Xe8K</a></li>
<li> HUSH	: <a href="https://explorer.myhush.org/address/REbCkmKXpud9y579CxWUsNByC3LGBFoCry">REbCkmKXpud9y579CxWUsNByC3LGBFoCry</a></li> 
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

</div></div><div class="footer"><p>&copy; 2019 Popof - <a href="http://github.com/tpruvot/yiimp">Open source Project</a></p></div><!-- footer --></body></html>