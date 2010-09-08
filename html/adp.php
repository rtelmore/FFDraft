<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <title>Average Draft Position (ADP) - Fantasy Football Calculator</title>
    <meta name="description" content="Fantasy football average draft position data for 2010.  Fantasy football ADP stats by position for 8, 10, 12, and 14 team leagues. Graphs show trends in player movement in the drafts."/>
    <meta name="keywords" content="fantasy football, average draft position, ADP, fantasy football mock drafts, fantasy football mock draft, draft software"/>
<meta http-equiv="Content-Type" content="text/html;charset=windows-1252" />
<link rel="stylesheet" href="/style/main_style2.css?v=9" type="text/css"/>
<!--[if lt IE 7]>
<style type="text/css">
#container {
    width: 990px;
    min-width: 100%;
}
#header {
    width: 990px;
    min-width: 100%;
}
#navigation {
    width: 990px;
    min-width: 100%;
}
table#main-container td#main-top div div{
    margin-left: 180px;
}
table#main-container td.main-middle div#adp div#adp-data ul.adp-nav {
    margin-left: 4px;
}
table#main-container td.main-middle div#adp div#adp-data div.adp-content div table {
    margin-top: 0px;
}
</style>
<![endif]-->
<!--[if IE 7]>
<style type="text/css">
table#main-container td.main-middle div#adp div#adp-data div.adp-content div table {
    margin-top: 0px;
}
</style>
<![endif]-->
<script type="text/javascript" src="/script/main_script.js?v=6"></script>
<script type="text/javascript">
ga_track = false;
</script>
<link rel="shortcut icon" href="/favicon.ico" />       
</head>
<body class="yui-skin-sam">
<div id="header">
<div id="banner">
<a href="/"><img id="banner-logo" src="http://cdn.fantasyfootballcalculator.com/img/fantasy_football_calculator.jpg" title="Fantasy Football Calculator" alt="Fantasy Football Calculator" width="536" height="55"/></a>
</div>

<div id="user-mgt-header">

<a title="Login" href='/login'>Sign in</a> or <a href='/membership'><b>Join now free!</b></a>
</div>

</div>
<ul id="navigation">
	<li><a href="/" class="first">Home</a></li>
	<li><a href="/mockdrafts">Mock Drafts</a></li>
	<li><a href="/completed_drafts.php">Completed Drafts</a></li>
	<li><a href="/adp.php">ADP</a></li>
	<li><a href="/applications">Applications</a></li>
	<li><a href="/membership">Membership</a></li>
	<li><a href="/blog">Blog</a></li>
	<li><a href="/links.php">Links</a></li>
	<li><a href="/contact">Contact</a></li>
	<li><a href="/help">Help</a></li>
</ul>
<div id="container">
<script type="text/javascript"><!--
google_ad_client = "pub-1278517201480397";
/* 728x90, created 8/2/10 */
google_ad_slot = "2443049758";
google_ad_width = 728;
google_ad_height = 90;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
<h1>Average Draft Position - 12 teams, 15 rounds, Standard Format (2010)</h1>

<p style='font-weight:bold;'>Scoring format: Standard.  <a href='/adp_ppr.php'>Switch to PPR, Flex scoring.</a></p>

<p>Data from 2006 <a href='/mockdrafts'>mock drafts</a> between September 5, 2010 and September 8, 2010<br/>Computer selections are filtered out before any calculations are made.
<br/>Computer selections are randomized to avoid bias from automated picks.</p>
<table id="adp-filters">
<tr>
  <td class='header'>Year:</td>
  <td>
  <span>2010</span><a href='/adp.php?year=2009'>2009</a><a href='/adp.php?year=2008'>2008</a><a href='/adp.php?year=2007'>2007</a>  </td>
</tr>
<tr>
  <td class='header'>Teams:</td>
  <td>
    <a href='adp.php?teams=8'>8 Teams</a><a href='adp.php?teams=10'>10 Teams</a><span class='adp-filter'>12 Teams</span><a href='adp.php?teams=14'>14 Teams</a>  </td>
</tr>
<tr>
  <td class='header'>Format:</td>
  <td>
  <span>List</span><a href='adp.php?teams=12&amp;rounds=15&amp;year=2010&amp;view=draftboard'>Draftboard</a>       (Computer readable:<a rel='nofollow' href='adp_csv.php?teams=12'>CSV</a>
    <a style="padding-right:0px; margin-right: 2px;" rel='nofollow' href='adp_xml.php?teams=12'>XML</a>)
    </td>
</tr>
<tr><td class='header'>Position:</td><td><span>All</span><a href='/adp.php?year=2010&amp;teams=12&amp;pos=qb'>QB</a><a href='/adp.php?year=2010&amp;teams=12&amp;pos=rb'>RB</a><a href='/adp.php?year=2010&amp;teams=12&amp;pos=wr'>WR</a><a href='/adp.php?year=2010&amp;teams=12&amp;pos=te'>TE</a><a href='/adp.php?year=2010&amp;teams=12&amp;pos=def'>DEF</a><a href='/adp.php?year=2010&amp;teams=12&amp;pos=pk'>PK</a></td></tr></table><table class='adp'><tr><th>Ovr<br/>Rank</th><th>Pick</th><th>Name</th><th>Pos</th><th>Team</th><th>Overall</th><th>Std.<br/>Dev</th><th>High</th><th>Low</th><th>Times<br/>Drafted</th><th>Graph</th></tr><tr class='RB'>
	   	<td align='right'>1</td>
		<td align='right'>1.01</td>
		<td>Chris Johnson</td>
		<td>RB</td>
		<td>TEN</td>
		<td align='right'>1.4</td>
                <td align='right'>0.7</td>
                <td align='right'>1.01</td>
                <td align='right'>1.06</td>
		<td align='right'>689</td>
		<td align='center'><input onclick='updatePlayer(1347);' type='checkbox' name='graph[]' value='1347' id='player_1347' /></td>
		</tr><tr class='RB'>
	   	<td align='right'>2</td>
		<td align='right'>1.02</td>
		<td>Adrian Peterson</td>
		<td>RB</td>
		<td>MIN</td>
		<td align='right'>2.1</td>
                <td align='right'>0.7</td>
                <td align='right'>1.01</td>
                <td align='right'>1.08</td>
		<td align='right'>502</td>
		<td align='center'><input onclick='updatePlayer(925);' type='checkbox' name='graph[]' value='925' id='player_925' /></td>
		</tr><tr class='RB'>
	   	<td align='right'>3</td>
		<td align='right'>1.03</td>
		<td>Ray Rice</td>
		<td>RB</td>
		<td>BAL</td>
		<td align='right'>3.1</td>
                <td align='right'>0.8</td>
                <td align='right'>1.01</td>
                <td align='right'>1.07</td>
		<td align='right'>274</td>
		<td align='center'><input onclick='updatePlayer(1360);' type='checkbox' name='graph[]' value='1360' id='player_1360' /></td>
		</tr><tr class='RB'>
	   	<td align='right'>4</td>
		<td align='right'>1.04</td>
		<td>Maurice Jones-Drew</td>
		<td>RB</td>
		<td>JAC</td>
		<td align='right'>4.4</td>
                <td align='right'>1.2</td>
                <td align='right'>1.01</td>
                <td align='right'>1.10</td>
		<td align='right'>524</td>
		<td align='center'><input onclick='updatePlayer(649);' type='checkbox' name='graph[]' value='649' id='player_649' /></td>
		</tr><tr class='WR'>
	   	<td align='right'>5</td>
		<td align='right'>1.06</td>
		<td>Andre Johnson</td>
		<td>WR</td>
		<td>HOU</td>
		<td align='right'>5.7</td>
                <td align='right'>1.5</td>
                <td align='right'>1.01</td>
                <td align='right'>1.10</td>
		<td align='right'>479</td>
		<td align='center'><input onclick='updatePlayer(605);' type='checkbox' name='graph[]' value='605' id='player_605' /></td>
		</tr><tr class='RB'>
	   	<td align='right'>6</td>
		<td align='right'>1.06</td>
		<td>Frank Gore</td>
		<td>RB</td>
		<td>SF</td>
		<td align='right'>6.0</td>
                <td align='right'>1.4</td>
                <td align='right'>1.02</td>
                <td align='right'>1.11</td>
		<td align='right'>671</td>
		<td align='center'><input onclick='updatePlayer(437);' type='checkbox' name='graph[]' value='437' id='player_437' /></td>
		</tr><tr class='QB'>
	   	<td align='right'>7</td>
		<td align='right'>1.07</td>
		<td>Aaron Rodgers</td>
		<td>QB</td>
		<td>GB</td>
		<td align='right'>6.7</td>
                <td align='right'>2.4</td>
                <td align='right'>1.01</td>
                <td align='right'>2.05</td>
		<td align='right'>548</td>
		<td align='center'><input onclick='updatePlayer(1004);' type='checkbox' name='graph[]' value='1004' id='player_1004' /></td>
		</tr><tr class='RB'>
	   	<td align='right'>8</td>
		<td align='right'>1.08</td>
		<td>Michael Turner</td>
		<td>RB</td>
		<td>ATL</td>
		<td align='right'>8.2</td>
                <td align='right'>2.0</td>
                <td align='right'>1.02</td>
                <td align='right'>2.04</td>
		<td align='right'>793</td>
		<td align='center'><input onclick='updatePlayer(1183);' type='checkbox' name='graph[]' value='1183' id='player_1183' /></td>
		</tr><tr class='WR'>
	   	<td align='right'>9</td>
		<td align='right'>1.09</td>
		<td>Randy Moss</td>
		<td>WR</td>
		<td>NE</td>
		<td align='right'>8.8</td>
                <td align='right'>1.9</td>
                <td align='right'>1.03</td>
                <td align='right'>2.05</td>
		<td align='right'>520</td>
		<td align='center'><input onclick='updatePlayer(854);' type='checkbox' name='graph[]' value='854' id='player_854' /></td>
		</tr><tr class='WR'>
	   	<td align='right'>10</td>
		<td align='right'>1.12</td>
		<td>Reggie Wayne</td>
		<td>WR</td>
		<td>IND</td>
		<td align='right'>11.9</td>
                <td align='right'>2.6</td>
                <td align='right'>1.05</td>
                <td align='right'>2.09</td>
		<td align='right'>350</td>
		<td align='center'><input onclick='updatePlayer(1228);' type='checkbox' name='graph[]' value='1228' id='player_1228' /></td>
		</tr><tr class='RB'>
	   	<td align='right'>11</td>
		<td align='right'>1.12</td>
		<td>Steven Jackson</td>
		<td>RB</td>
		<td>STL</td>
		<td align='right'>12.0</td>
                <td align='right'>2.9</td>
                <td align='right'>1.04</td>
                <td align='right'>2.11</td>
		<td align='right'>557</td>
		<td align='center'><input onclick='updatePlayer(581);' type='checkbox' name='graph[]' value='581' id='player_581' /></td>
		</tr><tr class='QB'>
	   	<td align='right'>12</td>
		<td align='right'>1.12</td>
		<td>Drew Brees</td>
		<td>QB</td>
		<td>NO</td>
		<td align='right'>12.2</td>
                <td align='right'>3.7</td>
                <td align='right'>1.02</td>
                <td align='right'>2.12</td>
		<td align='right'>790</td>
		<td align='center'><input onclick='updatePlayer(127);' type='checkbox' name='graph[]' value='127' id='player_127' /></td>
		</tr><tr class='WR'>
	   	<td align='right'>13</td>
		<td align='right'>2.01</td>
		<td>Calvin Johnson</td>
		<td>WR</td>
		<td>DET</td>
		<td align='right'>12.6</td>
                <td align='right'>2.8</td>
                <td align='right'>1.05</td>
                <td align='right'>2.09</td>
		<td align='right'>406</td>
		<td align='center'><input onclick='updatePlayer(611);' type='checkbox' name='graph[]' value='611' id='player_611' /></td>
		</tr><tr class='RB'>
	   	<td align='right'>14</td>
		<td align='right'>2.03</td>
		<td>Ryan Mathews</td>
		<td>RB</td>
		<td>SD</td>
		<td align='right'>14.7</td>
                <td align='right'>3.6</td>
                <td align='right'>1.05</td>
                <td align='right'>3.02</td>
		<td align='right'>763</td>
		<td align='center'><input onclick='updatePlayer(1729);' type='checkbox' name='graph[]' value='1729' id='player_1729' /></td>
		</tr><tr class='WR'>
	   	<td align='right'>15</td>
		<td align='right'>2.03</td>
		<td>Miles Austin</td>
		<td>WR</td>
		<td>DAL</td>
		<td align='right'>14.8</td>
                <td align='right'>2.7</td>
                <td align='right'>1.07</td>
                <td align='right'>2.11</td>
		<td align='right'>419</td>
		<td align='center'><input onclick='updatePlayer(37);' type='checkbox' name='graph[]' value='37' id='player_37' /></td>
		</tr><tr class='WR'>
	   	<td align='right'>16</td>
		<td align='right'>2.05</td>
		<td>Roddy White</td>
		<td>WR</td>
		<td>ATL</td>
		<td align='right'>16.6</td>
                <td align='right'>3.0</td>
                <td align='right'>1.09</td>
                <td align='right'>3.04</td>
		<td align='right'>456</td>
		<td align='center'><input onclick='updatePlayer(1244);' type='checkbox' name='graph[]' value='1244' id='player_1244' /></td>
		</tr><tr class='QB'>
	   	<td align='right'>17</td>
		<td align='right'>2.06</td>
		<td>Peyton Manning</td>
		<td>QB</td>
		<td>IND</td>
		<td align='right'>17.7</td>
                <td align='right'>4.3</td>
                <td align='right'>1.06</td>
                <td align='right'>3.03</td>
		<td align='right'>685</td>
		<td align='center'><input onclick='updatePlayer(750);' type='checkbox' name='graph[]' value='750' id='player_750' /></td>
		</tr><tr class='RB'>
	   	<td align='right'>18</td>
		<td align='right'>2.06</td>
		<td>Rashard Mendenhall</td>
		<td>RB</td>
		<td>PIT</td>
		<td align='right'>18.3</td>
                <td align='right'>4.2</td>
                <td align='right'>1.07</td>
                <td align='right'>3.07</td>
		<td align='right'>663</td>
		<td align='center'><input onclick='updatePlayer(1346);' type='checkbox' name='graph[]' value='1346' id='player_1346' /></td>
		</tr><tr class='WR'>
	   	<td align='right'>19</td>
		<td align='right'>2.07</td>
		<td>Brandon Marshall</td>
		<td>WR</td>
		<td>MIA</td>
		<td align='right'>18.7</td>
                <td align='right'>3.4</td>
                <td align='right'>1.09</td>
                <td align='right'>3.08</td>
		<td align='right'>413</td>
		<td align='center'><input onclick='updatePlayer(755);' type='checkbox' name='graph[]' value='755' id='player_755' /></td>
		</tr><tr class='WR'>
	   	<td align='right'>20</td>
		<td align='right'>2.07</td>
		<td>Larry Fitzgerald</td>
		<td>WR</td>
		<td>ARI</td>
		<td align='right'>18.8</td>
                <td align='right'>3.6</td>
                <td align='right'>1.10</td>
                <td align='right'>3.05</td>
		<td align='right'>492</td>
		<td align='center'><input onclick='updatePlayer(374);' type='checkbox' name='graph[]' value='374' id='player_374' /></td>
		</tr><tr class='RB'>
	   	<td align='right'>21</td>
		<td align='right'>2.08</td>
		<td>DeAngelo Williams</td>
		<td>RB</td>
		<td>CAR</td>
		<td align='right'>20.4</td>
                <td align='right'>4.9</td>
                <td align='right'>1.07</td>
                <td align='right'>3.11</td>
		<td align='right'>618</td>
		<td align='center'><input onclick='updatePlayer(1257);' type='checkbox' name='graph[]' value='1257' id='player_1257' /></td>
		</tr><tr class='WR'>
	   	<td align='right'>22</td>
		<td align='right'>2.10</td>
		<td>Greg Jennings</td>
		<td>WR</td>
		<td>GB</td>
		<td align='right'>21.5</td>
                <td align='right'>3.4</td>
                <td align='right'>1.12</td>
                <td align='right'>3.10</td>
		<td align='right'>603</td>
		<td align='center'><input onclick='updatePlayer(599);' type='checkbox' name='graph[]' value='599' id='player_599' /></td>
		</tr><tr class='WR'>
	   	<td align='right'>23</td>
		<td align='right'>2.12</td>
		<td>DeSean Jackson</td>
		<td>WR</td>
		<td>PHI</td>
		<td align='right'>24.2</td>
                <td align='right'>3.8</td>
                <td align='right'>2.02</td>
                <td align='right'>3.09</td>
		<td align='right'>465</td>
		<td align='center'><input onclick='updatePlayer(1357);' type='checkbox' name='graph[]' value='1357' id='player_1357' /></td>
		</tr><tr class='RB'>
	   	<td align='right'>24</td>
		<td align='right'>3.01</td>
		<td>Shonn Greene</td>
		<td>RB</td>
		<td>NYJ</td>
		<td align='right'>25.2</td>
                <td align='right'>5.7</td>
                <td align='right'>1.10</td>
                <td align='right'>3.12</td>
		<td align='right'>637</td>
		<td align='center'><input onclick='updatePlayer(1643);' type='checkbox' name='graph[]' value='1643' id='player_1643' /></td>
		</tr><tr class='QB'>
	   	<td align='right'>25</td>
		<td align='right'>3.01</td>
		<td>Tom Brady</td>
		<td>QB</td>
		<td>NE</td>
		<td align='right'>25.3</td>
                <td align='right'>5.4</td>
                <td align='right'>1.11</td>
                <td align='right'>4.07</td>
		<td align='right'>717</td>
		<td align='center'><input onclick='updatePlayer(119);' type='checkbox' name='graph[]' value='119' id='player_119' /></td>
		</tr><tr class='WR'>
	   	<td align='right'>26</td>
		<td align='right'>3.02</td>
		<td>Marques Colston</td>
		<td>WR</td>
		<td>NO</td>
		<td align='right'>25.7</td>
                <td align='right'>3.8</td>
                <td align='right'>2.03</td>
                <td align='right'>4.02</td>
		<td align='right'>500</td>
		<td align='center'><input onclick='updatePlayer(231);' type='checkbox' name='graph[]' value='231' id='player_231' /></td>
		</tr><tr class='RB'>
	   	<td align='right'>27</td>
		<td align='right'>3.03</td>
		<td>Jamaal Charles</td>
		<td>RB</td>
		<td>KC</td>
		<td align='right'>27.4</td>
                <td align='right'>5.8</td>
                <td align='right'>1.12</td>
                <td align='right'>4.05</td>
		<td align='right'>471</td>
		<td align='center'><input onclick='updatePlayer(1368);' type='checkbox' name='graph[]' value='1368' id='player_1368' /></td>
		</tr><tr class='WR'>
	   	<td align='right'>28</td>
		<td align='right'>3.04</td>
		<td>Wes Welker</td>
		<td>WR</td>
		<td>NE</td>
		<td align='right'>28.1</td>
                <td align='right'>4.5</td>
                <td align='right'>2.04</td>
                <td align='right'>4.07</td>
		<td align='right'>227</td>
		<td align='center'><input onclick='updatePlayer(1235);' type='checkbox' name='graph[]' value='1235' id='player_1235' /></td>
		</tr><tr class='RB'>
	   	<td align='right'>29</td>
		<td align='right'>3.04</td>
		<td>Ryan Grant</td>
		<td>RB</td>
		<td>GB</td>
		<td align='right'>28.3</td>
                <td align='right'>5.1</td>
                <td align='right'>2.02</td>
                <td align='right'>4.05</td>
		<td align='right'>661</td>
		<td align='center'><input onclick='updatePlayer(1333);' type='checkbox' name='graph[]' value='1333' id='player_1333' /></td>
		</tr><tr class='WR'>
	   	<td align='right'>30</td>
		<td align='right'>3.07</td>
		<td>Anquan Boldin</td>
		<td>WR</td>
		<td>BAL</td>
		<td align='right'>30.7</td>
                <td align='right'>4.6</td>
                <td align='right'>2.06</td>
                <td align='right'>4.09</td>
		<td align='right'>546</td>
		<td align='center'><input onclick='updatePlayer(101);' type='checkbox' name='graph[]' value='101' id='player_101' /></td>
		</tr><tr class='RB'>
	   	<td align='right'>31</td>
		<td align='right'>3.08</td>
		<td>Cedric Benson</td>
		<td>RB</td>
		<td>CIN</td>
		<td align='right'>31.6</td>
                <td align='right'>5.6</td>
                <td align='right'>2.05</td>
                <td align='right'>4.12</td>
		<td align='right'>587</td>
		<td align='center'><input onclick='updatePlayer(81);' type='checkbox' name='graph[]' value='81' id='player_81' /></td>
		</tr><tr class='QB'>
	   	<td align='right'>32</td>
		<td align='right'>3.08</td>
		<td>Matt Schaub</td>
		<td>QB</td>
		<td>HOU</td>
		<td align='right'>31.7</td>
                <td align='right'>6.3</td>
                <td align='right'>2.03</td>
                <td align='right'>4.11</td>
		<td align='right'>552</td>
		<td align='center'><input onclick='updatePlayer(1039);' type='checkbox' name='graph[]' value='1039' id='player_1039' /></td>
		</tr><tr class='RB'>
	   	<td align='right'>33</td>
		<td align='right'>3.09</td>
		<td>Pierre Thomas</td>
		<td>RB</td>
		<td>NO</td>
		<td align='right'>32.6</td>
                <td align='right'>4.5</td>
                <td align='right'>2.08</td>
                <td align='right'>4.11</td>
		<td align='right'>428</td>
		<td align='center'><input onclick='updatePlayer(1339);' type='checkbox' name='graph[]' value='1339' id='player_1339' /></td>
		</tr><tr class='QB'>
	   	<td align='right'>34</td>
		<td align='right'>3.11</td>
		<td>Tony Romo</td>
		<td>QB</td>
		<td>DAL</td>
		<td align='right'>34.8</td>
                <td align='right'>6.3</td>
                <td align='right'>2.06</td>
                <td align='right'>5.02</td>
		<td align='right'>414</td>
		<td align='center'><input onclick='updatePlayer(1009);' type='checkbox' name='graph[]' value='1009' id='player_1009' /></td>
		</tr><tr class='WR'>
	   	<td align='right'>35</td>
		<td align='right'>3.11</td>
		<td>Steve Smith</td>
		<td>WR</td>
		<td>NYG</td>
		<td align='right'>34.8</td>
                <td align='right'>5.8</td>
                <td align='right'>2.09</td>
                <td align='right'>5.04</td>
		<td align='right'>366</td>
		<td align='center'><input onclick='updatePlayer(1093);' type='checkbox' name='graph[]' value='1093' id='player_1093' /></td>
		</tr><tr class='WR'>
	   	<td align='right'>36</td>
		<td align='right'>3.12</td>
		<td>Steve Smith</td>
		<td>WR</td>
		<td>CAR</td>
		<td align='right'>36.3</td>
                <td align='right'>6.1</td>
                <td align='right'>2.08</td>
                <td align='right'>5.07</td>
		<td align='right'>559</td>
		<td align='center'><input onclick='updatePlayer(1094);' type='checkbox' name='graph[]' value='1094' id='player_1094' /></td>
		</tr><tr class='RB'>
	   	<td align='right'>37</td>
		<td align='right'>4.01</td>
		<td>Arian Foster</td>
		<td>RB</td>
		<td>HOU</td>
		<td align='right'>36.5</td>
                <td align='right'>6.9</td>
                <td align='right'>2.06</td>
                <td align='right'>5.09</td>
		<td align='right'>888</td>
		<td align='center'><input onclick='updatePlayer(1724);' type='checkbox' name='graph[]' value='1724' id='player_1724' /></td>
		</tr><tr class='RB'>
	   	<td align='right'>38</td>
		<td align='right'>4.01</td>
		<td>LeSean McCoy</td>
		<td>RB</td>
		<td>PHI</td>
		<td align='right'>37.5</td>
                <td align='right'>5.5</td>
                <td align='right'>2.11</td>
                <td align='right'>5.07</td>
		<td align='right'>457</td>
		<td align='center'><input onclick='updatePlayer(1645);' type='checkbox' name='graph[]' value='1645' id='player_1645' /></td>
		</tr><tr class='RB'>
	   	<td align='right'>39</td>
		<td align='right'>4.02</td>
		<td>Jahvid Best</td>
		<td>RB</td>
		<td>DET</td>
		<td align='right'>38.1</td>
                <td align='right'>5.9</td>
                <td align='right'>2.10</td>
                <td align='right'>5.08</td>
		<td align='right'>611</td>
		<td align='center'><input onclick='updatePlayer(1732);' type='checkbox' name='graph[]' value='1732' id='player_1732' /></td>
		</tr><tr class='TE'>
	   	<td align='right'>40</td>
		<td align='right'>4.04</td>
		<td>Dallas Clark</td>
		<td>TE</td>
		<td>IND</td>
		<td align='right'>40.5</td>
                <td align='right'>5.9</td>
                <td align='right'>3.01</td>
                <td align='right'>5.12</td>
		<td align='right'>347</td>
		<td align='center'><input onclick='updatePlayer(207);' type='checkbox' name='graph[]' value='207' id='player_207' /></td>
		</tr><tr class='TE'>
	   	<td align='right'>41</td>
		<td align='right'>4.06</td>
		<td>Antonio Gates</td>
		<td>TE</td>
		<td>SD</td>
		<td align='right'>42.0</td>
                <td align='right'>5.5</td>
                <td align='right'>3.03</td>
                <td align='right'>5.09</td>
		<td align='right'>432</td>
		<td align='center'><input onclick='updatePlayer(415);' type='checkbox' name='graph[]' value='415' id='player_415' /></td>
		</tr><tr class='QB'>
	   	<td align='right'>42</td>
		<td align='right'>4.06</td>
		<td>Philip Rivers</td>
		<td>QB</td>
		<td>SD</td>
		<td align='right'>42.1</td>
                <td align='right'>7.7</td>
                <td align='right'>2.10</td>
                <td align='right'>6.02</td>
		<td align='right'>515</td>
		<td align='center'><input onclick='updatePlayer(995);' type='checkbox' name='graph[]' value='995' id='player_995' /></td>
		</tr><tr class='WR'>
	   	<td align='right'>43</td>
		<td align='right'>4.07</td>
		<td>Michael Crabtree</td>
		<td>WR</td>
		<td>SF</td>
		<td align='right'>42.6</td>
                <td align='right'>5.8</td>
                <td align='right'>3.03</td>
                <td align='right'>6.01</td>
		<td align='right'>480</td>
		<td align='center'><input onclick='updatePlayer(1646);' type='checkbox' name='graph[]' value='1646' id='player_1646' /></td>
		</tr><tr class='TE'>
	   	<td align='right'>44</td>
		<td align='right'>4.07</td>
		<td>Jermichael Finley</td>
		<td>TE</td>
		<td>GB</td>
		<td align='right'>42.7</td>
                <td align='right'>5.7</td>
                <td align='right'>3.03</td>
                <td align='right'>5.10</td>
		<td align='right'>543</td>
		<td align='center'><input onclick='updatePlayer(1374);' type='checkbox' name='graph[]' value='1374' id='player_1374' /></td>
		</tr><tr class='RB'>
	   	<td align='right'>45</td>
		<td align='right'>4.08</td>
		<td>Matt Forte</td>
		<td>RB</td>
		<td>CHI</td>
		<td align='right'>44.3</td>
                <td align='right'>6.8</td>
                <td align='right'>3.02</td>
                <td align='right'>6.04</td>
		<td align='right'>504</td>
		<td align='center'><input onclick='updatePlayer(1354);' type='checkbox' name='graph[]' value='1354' id='player_1354' /></td>
		</tr><tr class='WR'>
	   	<td align='right'>46</td>
		<td align='right'>4.09</td>
		<td>Chad Ocho Cinco</td>
		<td>WR</td>
		<td>CIN</td>
		<td align='right'>45.0</td>
                <td align='right'>6.8</td>
                <td align='right'>3.03</td>
                <td align='right'>6.02</td>
		<td align='right'>520</td>
		<td align='center'><input onclick='updatePlayer(612);' type='checkbox' name='graph[]' value='612' id='player_612' /></td>
		</tr><tr class='RB'>
	   	<td align='right'>47</td>
		<td align='right'>4.11</td>
		<td>Joseph Addai</td>
		<td>RB</td>
		<td>IND</td>
		<td align='right'>47.3</td>
                <td align='right'>7.7</td>
                <td align='right'>3.03</td>
                <td align='right'>6.05</td>
		<td align='right'>543</td>
		<td align='center'><input onclick='updatePlayer(4);' type='checkbox' name='graph[]' value='4' id='player_4' /></td>
		</tr><tr class='WR'>
	   	<td align='right'>48</td>
		<td align='right'>4.12</td>
		<td>Dwayne Bowe</td>
		<td>WR</td>
		<td>KC</td>
		<td align='right'>47.9</td>
                <td align='right'>7.0</td>
                <td align='right'>3.05</td>
                <td align='right'>6.07</td>
		<td align='right'>510</td>
		<td align='center'><input onclick='updatePlayer(111);' type='checkbox' name='graph[]' value='111' id='player_111' /></td>
		</tr><tr class='RB'>
	   	<td align='right'>49</td>
		<td align='right'>5.01</td>
		<td>Chris Wells</td>
		<td>RB</td>
		<td>ARI</td>
		<td align='right'>49.0</td>
                <td align='right'>8.4</td>
                <td align='right'>3.05</td>
                <td align='right'>7.06</td>
		<td align='right'>355</td>
		<td align='center'><input onclick='updatePlayer(1641);' type='checkbox' name='graph[]' value='1641' id='player_1641' /></td>
		</tr><tr class='RB'>
	   	<td align='right'>50</td>
		<td align='right'>5.03</td>
		<td>Jonathan Stewart</td>
		<td>RB</td>
		<td>CAR</td>
		<td align='right'>50.8</td>
                <td align='right'>8.1</td>
                <td align='right'>3.05</td>
                <td align='right'>7.06</td>
		<td align='right'>447</td>
		<td align='center'><input onclick='updatePlayer(1344);' type='checkbox' name='graph[]' value='1344' id='player_1344' /></td>
		</tr><tr class='TE'>
	   	<td align='right'>51</td>
		<td align='right'>5.04</td>
		<td>Vernon Davis</td>
		<td>TE</td>
		<td>SF</td>
		<td align='right'>51.8</td>
                <td align='right'>5.9</td>
                <td align='right'>3.12</td>
                <td align='right'>6.09</td>
		<td align='right'>439</td>
		<td align='center'><input onclick='updatePlayer(288);' type='checkbox' name='graph[]' value='288' id='player_288' /></td>
		</tr><tr class='RB'>
	   	<td align='right'>52</td>
		<td align='right'>5.05</td>
		<td>Knowshon Moreno</td>
		<td>RB</td>
		<td>DEN</td>
		<td align='right'>52.6</td>
                <td align='right'>7.8</td>
                <td align='right'>3.08</td>
                <td align='right'>6.11</td>
		<td align='right'>359</td>
		<td align='center'><input onclick='updatePlayer(1640);' type='checkbox' name='graph[]' value='1640' id='player_1640' /></td>
		</tr><tr class='WR'>
	   	<td align='right'>53</td>
		<td align='right'>5.05</td>
		<td>Hakeem Nicks</td>
		<td>WR</td>
		<td>NYG</td>
		<td align='right'>53.1</td>
                <td align='right'>7.6</td>
                <td align='right'>3.09</td>
                <td align='right'>7.01</td>
		<td align='right'>587</td>
		<td align='center'><input onclick='updatePlayer(1648);' type='checkbox' name='graph[]' value='1648' id='player_1648' /></td>
		</tr><tr class='RB'>
	   	<td align='right'>54</td>
		<td align='right'>5.06</td>
		<td>Ronnie Brown</td>
		<td>RB</td>
		<td>MIA</td>
		<td align='right'>53.9</td>
                <td align='right'>7.6</td>
                <td align='right'>3.10</td>
                <td align='right'>6.12</td>
		<td align='right'>464</td>
		<td align='center'><input onclick='updatePlayer(142);' type='checkbox' name='graph[]' value='142' id='player_142' /></td>
		</tr><tr class='WR'>
	   	<td align='right'>55</td>
		<td align='right'>5.08</td>
		<td>Mike Walker</td>
		<td>WR</td>
		<td>JAC</td>
		<td align='right'>55.9</td>
                <td align='right'>7.9</td>
                <td align='right'>3.11</td>
                <td align='right'>7.06</td>
		<td align='right'>498</td>
		<td align='center'><input onclick='updatePlayer(1204);' type='checkbox' name='graph[]' value='1204' id='player_1204' /></td>
		</tr><tr class='TE'>
	   	<td align='right'>56</td>
		<td align='right'>5.08</td>
		<td>Jason Witten</td>
		<td>TE</td>
		<td>DAL</td>
		<td align='right'>55.9</td>
                <td align='right'>6.5</td>
                <td align='right'>4.03</td>
                <td align='right'>7.06</td>
		<td align='right'>317</td>
		<td align='center'><input onclick='updatePlayer(1286);' type='checkbox' name='graph[]' value='1286' id='player_1286' /></td>
		</tr><tr class='WR'>
	   	<td align='right'>57</td>
		<td align='right'>5.09</td>
		<td>Pierre Garcon</td>
		<td>WR</td>
		<td>IND</td>
		<td align='right'>56.5</td>
                <td align='right'>8.3</td>
                <td align='right'>3.11</td>
                <td align='right'>7.06</td>
		<td align='right'>588</td>
		<td align='center'><input onclick='updatePlayer(1707);' type='checkbox' name='graph[]' value='1707' id='player_1707' /></td>
		</tr><tr class='RB'>
	   	<td align='right'>58</td>
		<td align='right'>5.09</td>
		<td>C.J. Spiller</td>
		<td>RB</td>
		<td>BUF</td>
		<td align='right'>57.4</td>
                <td align='right'>9.0</td>
                <td align='right'>3.10</td>
                <td align='right'>7.08</td>
		<td align='right'>560</td>
		<td align='center'><input onclick='updatePlayer(1728);' type='checkbox' name='graph[]' value='1728' id='player_1728' /></td>
		</tr><tr class='WR'>
	   	<td align='right'>59</td>
		<td align='right'>5.10</td>
		<td>Hines Ward</td>
		<td>WR</td>
		<td>PIT</td>
		<td align='right'>58.0</td>
                <td align='right'>7.5</td>
                <td align='right'>4.02</td>
                <td align='right'>7.07</td>
		<td align='right'>340</td>
		<td align='center'><input onclick='updatePlayer(1215);' type='checkbox' name='graph[]' value='1215' id='player_1215' /></td>
		</tr><tr class='WR'>
	   	<td align='right'>60</td>
		<td align='right'>5.10</td>
		<td>Percy Harvin</td>
		<td>WR</td>
		<td>MIN</td>
		<td align='right'>58.2</td>
                <td align='right'>7.8</td>
                <td align='right'>4.01</td>
                <td align='right'>7.04</td>
		<td align='right'>620</td>
		<td align='center'><input onclick='updatePlayer(1650);' type='checkbox' name='graph[]' value='1650' id='player_1650' /></td>
		</tr><tr class='WR'>
	   	<td align='right'>61</td>
		<td align='right'>5.12</td>
		<td>Malcom Floyd</td>
		<td>WR</td>
		<td>SD</td>
		<td align='right'>60.0</td>
                <td align='right'>8.1</td>
                <td align='right'>4.02</td>
                <td align='right'>7.09</td>
		<td align='right'>698</td>
		<td align='center'><input onclick='updatePlayer(382);' type='checkbox' name='graph[]' value='382' id='player_382' /></td>
		</tr><tr class='QB'>
	   	<td align='right'>62</td>
		<td align='right'>6.02</td>
		<td>Joe Flacco</td>
		<td>QB</td>
		<td>BAL</td>
		<td align='right'>61.7</td>
                <td align='right'>10.6</td>
                <td align='right'>3.10</td>
                <td align='right'>8.12</td>
		<td align='right'>439</td>
		<td align='center'><input onclick='updatePlayer(1343);' type='checkbox' name='graph[]' value='1343' id='player_1343' /></td>
		</tr><tr class='TE'>
	   	<td align='right'>63</td>
		<td align='right'>6.02</td>
		<td>Brent Celek</td>
		<td>TE</td>
		<td>PHI</td>
		<td align='right'>61.7</td>
                <td align='right'>6.8</td>
                <td align='right'>4.10</td>
                <td align='right'>7.10</td>
		<td align='right'>218</td>
		<td align='center'><input onclick='updatePlayer(189);' type='checkbox' name='graph[]' value='189' id='player_189' /></td>
		</tr><tr class='QB'>
	   	<td align='right'>64</td>
		<td align='right'>6.04</td>
		<td>Kevin Kolb</td>
		<td>QB</td>
		<td>PHI</td>
		<td align='right'>63.8</td>
                <td align='right'>11.1</td>
                <td align='right'>4.01</td>
                <td align='right'>9.02</td>
		<td align='right'>197</td>
		<td align='center'><input onclick='updatePlayer(688);' type='checkbox' name='graph[]' value='688' id='player_688' /></td>
		</tr><tr class='RB'>
	   	<td align='right'>65</td>
		<td align='right'>6.05</td>
		<td>Felix Jones</td>
		<td>RB</td>
		<td>DAL</td>
		<td align='right'>65.0</td>
                <td align='right'>8.7</td>
                <td align='right'>4.06</td>
                <td align='right'>8.06</td>
		<td align='right'>222</td>
		<td align='center'><input onclick='updatePlayer(1345);' type='checkbox' name='graph[]' value='1345' id='player_1345' /></td>
		</tr><tr class='TE'>
	   	<td align='right'>66</td>
		<td align='right'>6.05</td>
		<td>Tony Gonzalez</td>
		<td>TE</td>
		<td>ATL</td>
		<td align='right'>65.2</td>
                <td align='right'>8.0</td>
                <td align='right'>4.08</td>
                <td align='right'>8.04</td>
		<td align='right'>270</td>
		<td align='center'><input onclick='updatePlayer(432);' type='checkbox' name='graph[]' value='432' id='player_432' /></td>
		</tr><tr class='RB'>
	   	<td align='right'>67</td>
		<td align='right'>6.06</td>
		<td>Ahmad Bradshaw</td>
		<td>RB</td>
		<td>NYG</td>
		<td align='right'>65.6</td>
                <td align='right'>8.8</td>
                <td align='right'>4.06</td>
                <td align='right'>8.12</td>
		<td align='right'>802</td>
		<td align='center'><input onclick='updatePlayer(117);' type='checkbox' name='graph[]' value='117' id='player_117' /></td>
		</tr><tr class='WR'>
	   	<td align='right'>68</td>
		<td align='right'>6.07</td>
		<td>Terrell Owens</td>
		<td>WR</td>
		<td>CIN</td>
		<td align='right'>67.4</td>
                <td align='right'>9.6</td>
                <td align='right'>4.06</td>
                <td align='right'>8.12</td>
		<td align='right'>680</td>
		<td align='center'><input onclick='updatePlayer(899);' type='checkbox' name='graph[]' value='899' id='player_899' /></td>
		</tr><tr class='WR'>
	   	<td align='right'>69</td>
		<td align='right'>6.07</td>
		<td>Donald Driver</td>
		<td>WR</td>
		<td>GB</td>
		<td align='right'>67.4</td>
                <td align='right'>9.1</td>
                <td align='right'>4.07</td>
                <td align='right'>8.07</td>
		<td align='right'>546</td>
		<td align='center'><input onclick='updatePlayer(312);' type='checkbox' name='graph[]' value='312' id='player_312' /></td>
		</tr><tr class='RB'>
	   	<td align='right'>70</td>
		<td align='right'>6.07</td>
		<td>Reggie Bush</td>
		<td>RB</td>
		<td>NO</td>
		<td align='right'>67.5</td>
                <td align='right'>10.4</td>
                <td align='right'>4.04</td>
                <td align='right'>8.07</td>
		<td align='right'>276</td>
		<td align='center'><input onclick='updatePlayer(161);' type='checkbox' name='graph[]' value='161' id='player_161' /></td>
		</tr><tr class='RB'>
	   	<td align='right'>71</td>
		<td align='right'>6.08</td>
		<td>Justin Forsett</td>
		<td>RB</td>
		<td>SEA</td>
		<td align='right'>68.1</td>
                <td align='right'>8.1</td>
                <td align='right'>4.10</td>
                <td align='right'>8.08</td>
		<td align='right'>251</td>
		<td align='center'><input onclick='updatePlayer(1703);' type='checkbox' name='graph[]' value='1703' id='player_1703' /></td>
		</tr><tr class='WR'>
	   	<td align='right'>72</td>
		<td align='right'>6.12</td>
		<td>Mike Wallace</td>
		<td>WR</td>
		<td>PIT</td>
		<td align='right'>72.4</td>
                <td align='right'>8.9</td>
                <td align='right'>5.01</td>
                <td align='right'>9.06</td>
		<td align='right'>704</td>
		<td align='center'><input onclick='updatePlayer(1678);' type='checkbox' name='graph[]' value='1678' id='player_1678' /></td>
		</tr><tr class='WR'>
	   	<td align='right'>73</td>
		<td align='right'>7.01</td>
		<td>Santana Moss</td>
		<td>WR</td>
		<td>WAS</td>
		<td align='right'>72.6</td>
                <td align='right'>9.1</td>
                <td align='right'>4.12</td>
                <td align='right'>9.02</td>
		<td align='right'>424</td>
		<td align='center'><input onclick='updatePlayer(855);' type='checkbox' name='graph[]' value='855' id='player_855' /></td>
		</tr><tr class='WR'>
	   	<td align='right'>74</td>
		<td align='right'>7.02</td>
		<td>Jeremy Maclin</td>
		<td>WR</td>
		<td>PHI</td>
		<td align='right'>73.7</td>
                <td align='right'>8.8</td>
                <td align='right'>5.02</td>
                <td align='right'>9.02</td>
		<td align='right'>460</td>
		<td align='center'><input onclick='updatePlayer(1649);' type='checkbox' name='graph[]' value='1649' id='player_1649' /></td>
		</tr><tr class='WR'>
	   	<td align='right'>75</td>
		<td align='right'>7.03</td>
		<td>Johnny Knox</td>
		<td>WR</td>
		<td>CHI</td>
		<td align='right'>74.7</td>
                <td align='right'>8.6</td>
                <td align='right'>5.04</td>
                <td align='right'>9.02</td>
		<td align='right'>481</td>
		<td align='center'><input onclick='updatePlayer(1674);' type='checkbox' name='graph[]' value='1674' id='player_1674' /></td>
		</tr><tr class='RB'>
	   	<td align='right'>76</td>
		<td align='right'>7.03</td>
		<td>Marion Barber</td>
		<td>RB</td>
		<td>DAL</td>
		<td align='right'>75.4</td>
                <td align='right'>9.2</td>
                <td align='right'>5.03</td>
                <td align='right'>9.05</td>
		<td align='right'>423</td>
		<td align='center'><input onclick='updatePlayer(52);' type='checkbox' name='graph[]' value='52' id='player_52' /></td>
		</tr><tr class='RB'>
	   	<td align='right'>77</td>
		<td align='right'>7.04</td>
		<td>Jerome Harrison</td>
		<td>RB</td>
		<td>CLE</td>
		<td align='right'>76.2</td>
                <td align='right'>10.0</td>
                <td align='right'>5.02</td>
                <td align='right'>9.05</td>
		<td align='right'>702</td>
		<td align='center'><input onclick='updatePlayer(496);' type='checkbox' name='graph[]' value='496' id='player_496' /></td>
		</tr><tr class='TE'>
	   	<td align='right'>78</td>
		<td align='right'>7.05</td>
		<td>Owen Daniels</td>
		<td>TE</td>
		<td>HOU</td>
		<td align='right'>77.4</td>
                <td align='right'>10.9</td>
                <td align='right'>5.01</td>
                <td align='right'>11.08</td>
		<td align='right'>261</td>
		<td align='center'><input onclick='updatePlayer(266);' type='checkbox' name='graph[]' value='266' id='player_266' /></td>
		</tr><tr class='RB'>
	   	<td align='right'>79</td>
		<td align='right'>7.06</td>
		<td>Ricky Williams</td>
		<td>RB</td>
		<td>MIA</td>
		<td align='right'>78.5</td>
                <td align='right'>8.9</td>
                <td align='right'>5.07</td>
                <td align='right'>9.05</td>
		<td align='right'>325</td>
		<td align='center'><input onclick='updatePlayer(1269);' type='checkbox' name='graph[]' value='1269' id='player_1269' /></td>
		</tr><tr class='QB'>
	   	<td align='right'>80</td>
		<td align='right'>7.07</td>
		<td>Jay Cutler</td>
		<td>QB</td>
		<td>CHI</td>
		<td align='right'>79.0</td>
                <td align='right'>13.8</td>
                <td align='right'>4.07</td>
                <td align='right'>9.10</td>
		<td align='right'>237</td>
		<td align='center'><input onclick='updatePlayer(265);' type='checkbox' name='graph[]' value='265' id='player_265' /></td>
		</tr><tr class='WR'>
	   	<td align='right'>81</td>
		<td align='right'>7.08</td>
		<td>Dez Bryant</td>
		<td>WR</td>
		<td>DAL</td>
		<td align='right'>80.3</td>
                <td align='right'>10.0</td>
                <td align='right'>5.06</td>
                <td align='right'>9.07</td>
		<td align='right'>478</td>
		<td align='center'><input onclick='updatePlayer(1727);' type='checkbox' name='graph[]' value='1727' id='player_1727' /></td>
		</tr><tr class='QB'>
	   	<td align='right'>82</td>
		<td align='right'>7.09</td>
		<td>Brett Favre</td>
		<td>QB</td>
		<td>MIN</td>
		<td align='right'>81.4</td>
                <td align='right'>18.9</td>
                <td align='right'>3.08</td>
                <td align='right'>10.08</td>
		<td align='right'>327</td>
		<td align='center'><input onclick='updatePlayer(357);' type='checkbox' name='graph[]' value='357' id='player_357' /></td>
		</tr><tr class='WR'>
	   	<td align='right'>83</td>
		<td align='right'>7.10</td>
		<td>T.J. Houshmandzadeh</td>
		<td>WR</td>
		<td>SEA</td>
		<td align='right'>82.0</td>
                <td align='right'>12.0</td>
                <td align='right'>5.02</td>
                <td align='right'>10.09</td>
		<td align='right'>110</td>
		<td align='center'><input onclick='updatePlayer(552);' type='checkbox' name='graph[]' value='552' id='player_552' /></td>
		</tr><tr class='RB'>
	   	<td align='right'>84</td>
		<td align='right'>7.12</td>
		<td>Brandon Jacobs</td>
		<td>RB</td>
		<td>NYG</td>
		<td align='right'>84.2</td>
                <td align='right'>10.6</td>
                <td align='right'>5.08</td>
                <td align='right'>9.11</td>
		<td align='right'>238</td>
		<td align='center'><input onclick='updatePlayer(588);' type='checkbox' name='graph[]' value='588' id='player_588' /></td>
		</tr><tr class='RB'>
	   	<td align='right'>85</td>
		<td align='right'>8.01</td>
		<td>Michael Bush</td>
		<td>RB</td>
		<td>OAK</td>
		<td align='right'>84.8</td>
                <td align='right'>9.0</td>
                <td align='right'>6.01</td>
                <td align='right'>9.09</td>
		<td align='right'>192</td>
		<td align='center'><input onclick='updatePlayer(160);' type='checkbox' name='graph[]' value='160' id='player_160' /></td>
		</tr><tr class='RB'>
	   	<td align='right'>86</td>
		<td align='right'>8.02</td>
		<td>Carnell Williams</td>
		<td>RB</td>
		<td>TB</td>
		<td align='right'>85.5</td>
                <td align='right'>8.8</td>
                <td align='right'>6.02</td>
                <td align='right'>9.08</td>
		<td align='right'>478</td>
		<td align='center'><input onclick='updatePlayer(1254);' type='checkbox' name='graph[]' value='1254' id='player_1254' /></td>
		</tr><tr class='WR'>
	   	<td align='right'>87</td>
		<td align='right'>8.03</td>
		<td>Vincent Jackson</td>
		<td>WR</td>
		<td>SD</td>
		<td align='right'>86.6</td>
                <td align='right'>11.4</td>
                <td align='right'>5.09</td>
                <td align='right'>10.03</td>
		<td align='right'>198</td>
		<td align='center'><input onclick='updatePlayer(586);' type='checkbox' name='graph[]' value='586' id='player_586' /></td>
		</tr><tr class='RB'>
	   	<td align='right'>88</td>
		<td align='right'>8.03</td>
		<td>Clinton Portis</td>
		<td>RB</td>
		<td>WAS</td>
		<td align='right'>86.7</td>
                <td align='right'>10.0</td>
                <td align='right'>5.12</td>
                <td align='right'>10.12</td>
		<td align='right'>491</td>
		<td align='center'><input onclick='updatePlayer(948);' type='checkbox' name='graph[]' value='948' id='player_948' /></td>
		</tr><tr class='DEF'>
	   	<td align='right'>89</td>
		<td align='right'>8.03</td>
		<td>NY Jets Defense</td>
		<td>DEF</td>
		<td>NYJ</td>
		<td align='right'>87.0</td>
                <td align='right'>10.4</td>
                <td align='right'>5.11</td>
                <td align='right'>9.11</td>
		<td align='right'>394</td>
		<td align='center'><input onclick='updatePlayer(1321);' type='checkbox' name='graph[]' value='1321' id='player_1321' /></td>
		</tr><tr class='WR'>
	   	<td align='right'>90</td>
		<td align='right'>8.05</td>
		<td>Santonio Holmes</td>
		<td>WR</td>
		<td>NYJ</td>
		<td align='right'>88.9</td>
                <td align='right'>10.1</td>
                <td align='right'>6.02</td>
                <td align='right'>10.08</td>
		<td align='right'>407</td>
		<td align='center'><input onclick='updatePlayer(546);' type='checkbox' name='graph[]' value='546' id='player_546' /></td>
		</tr><tr class='WR'>
	   	<td align='right'>91</td>
		<td align='right'>8.05</td>
		<td>Robert Meachem</td>
		<td>WR</td>
		<td>NO</td>
		<td align='right'>89.5</td>
                <td align='right'>10.1</td>
                <td align='right'>6.03</td>
                <td align='right'>10.12</td>
		<td align='right'>509</td>
		<td align='center'><input onclick='updatePlayer(809);' type='checkbox' name='graph[]' value='809' id='player_809' /></td>
		</tr><tr class='QB'>
	   	<td align='right'>92</td>
		<td align='right'>8.06</td>
		<td>Matt Ryan</td>
		<td>QB</td>
		<td>ATL</td>
		<td align='right'>89.9</td>
                <td align='right'>14.2</td>
                <td align='right'>5.05</td>
                <td align='right'>11.04</td>
		<td align='right'>412</td>
		<td align='center'><input onclick='updatePlayer(1342);' type='checkbox' name='graph[]' value='1342' id='player_1342' /></td>
		</tr><tr class='RB'>
	   	<td align='right'>93</td>
		<td align='right'>8.09</td>
		<td>Thomas Jones</td>
		<td>RB</td>
		<td>KC</td>
		<td align='right'>93.1</td>
                <td align='right'>10.5</td>
                <td align='right'>6.05</td>
                <td align='right'>11.03</td>
		<td align='right'>214</td>
		<td align='center'><input onclick='updatePlayer(648);' type='checkbox' name='graph[]' value='648' id='player_648' /></td>
		</tr><tr class='WR'>
	   	<td align='right'>94</td>
		<td align='right'>8.09</td>
		<td>Jabar Gaffney</td>
		<td>WR</td>
		<td>DEN</td>
		<td align='right'>93.4</td>
                <td align='right'>10.1</td>
                <td align='right'>6.07</td>
                <td align='right'>10.07</td>
		<td align='right'>433</td>
		<td align='center'><input onclick='updatePlayer(401);' type='checkbox' name='graph[]' value='401' id='player_401' /></td>
		</tr><tr class='RB'>
	   	<td align='right'>95</td>
		<td align='right'>8.10</td>
		<td>LaDainian Tomlinson</td>
		<td>RB</td>
		<td>NYJ</td>
		<td align='right'>93.6</td>
                <td align='right'>14.0</td>
                <td align='right'>5.09</td>
                <td align='right'>11.01</td>
		<td align='right'>573</td>
		<td align='center'><input onclick='updatePlayer(1173);' type='checkbox' name='graph[]' value='1173' id='player_1173' /></td>
		</tr><tr class='QB'>
	   	<td align='right'>96</td>
		<td align='right'>8.10</td>
		<td>Eli Manning</td>
		<td>QB</td>
		<td>NYG</td>
		<td align='right'>94.1</td>
                <td align='right'>14.9</td>
                <td align='right'>5.07</td>
                <td align='right'>11.04</td>
		<td align='right'>476</td>
		<td align='center'><input onclick='updatePlayer(749);' type='checkbox' name='graph[]' value='749' id='player_749' /></td>
		</tr><tr class='TE'>
	   	<td align='right'>97</td>
		<td align='right'>8.10</td>
		<td>Chris Cooley</td>
		<td>TE</td>
		<td>WAS</td>
		<td align='right'>94.2</td>
                <td align='right'>18.7</td>
                <td align='right'>4.12</td>
                <td align='right'>13.03</td>
		<td align='right'>308</td>
		<td align='center'><input onclick='updatePlayer(238);' type='checkbox' name='graph[]' value='238' id='player_238' /></td>
		</tr><tr class='TE'>
	   	<td align='right'>98</td>
		<td align='right'>8.11</td>
		<td>Visanthe Shiancoe</td>
		<td>TE</td>
		<td>MIN</td>
		<td align='right'>95.4</td>
                <td align='right'>21.4</td>
                <td align='right'>4.03</td>
                <td align='right'>13.11</td>
		<td align='right'>430</td>
		<td align='center'><input onclick='updatePlayer(1060);' type='checkbox' name='graph[]' value='1060' id='player_1060' /></td>
		</tr><tr class='RB'>
	   	<td align='right'>99</td>
		<td align='right'>8.12</td>
		<td>Tim Hightower</td>
		<td>RB</td>
		<td>ARI</td>
		<td align='right'>96.5</td>
                <td align='right'>9.8</td>
                <td align='right'>6.11</td>
                <td align='right'>11.04</td>
		<td align='right'>305</td>
		<td align='center'><input onclick='updatePlayer(1394);' type='checkbox' name='graph[]' value='1394' id='player_1394' /></td>
		</tr><tr class='WR'>
	   	<td align='right'>100</td>
		<td align='right'>9.01</td>
		<td>Devin Aromashodu</td>
		<td>WR</td>
		<td>CHI</td>
		<td align='right'>96.8</td>
                <td align='right'>10.0</td>
                <td align='right'>6.10</td>
                <td align='right'>11.03</td>
		<td align='right'>248</td>
		<td align='center'><input onclick='updatePlayer(34);' type='checkbox' name='graph[]' value='34' id='player_34' /></td>
		</tr><tr class='QB'>
	   	<td align='right'>101</td>
		<td align='right'>9.02</td>
		<td>Carson Palmer</td>
		<td>QB</td>
		<td>CIN</td>
		<td align='right'>97.9</td>
                <td align='right'>14.8</td>
                <td align='right'>5.11</td>
                <td align='right'>11.03</td>
		<td align='right'>475</td>
		<td align='center'><input onclick='updatePlayer(900);' type='checkbox' name='graph[]' value='900' id='player_900' /></td>
		</tr><tr class='DEF'>
	   	<td align='right'>102</td>
		<td align='right'>9.02</td>
		<td>Minnesota Defense</td>
		<td>DEF</td>
		<td>MIN</td>
		<td align='right'>98.4</td>
                <td align='right'>11.8</td>
                <td align='right'>6.07</td>
                <td align='right'>11.11</td>
		<td align='right'>183</td>
		<td align='center'><input onclick='updatePlayer(1317);' type='checkbox' name='graph[]' value='1317' id='player_1317' /></td>
		</tr><tr class='WR'>
	   	<td align='right'>103</td>
		<td align='right'>9.03</td>
		<td>Steve Breaston</td>
		<td>WR</td>
		<td>ARI</td>
		<td align='right'>99.2</td>
                <td align='right'>11.9</td>
                <td align='right'>6.08</td>
                <td align='right'>11.02</td>
		<td align='right'>227</td>
		<td align='center'><input onclick='updatePlayer(126);' type='checkbox' name='graph[]' value='126' id='player_126' /></td>
		</tr><tr class='WR'>
	   	<td align='right'>104</td>
		<td align='right'>9.04</td>
		<td>Derrick Mason</td>
		<td>WR</td>
		<td>BAL</td>
		<td align='right'>99.6</td>
                <td align='right'>10.9</td>
                <td align='right'>6.11</td>
                <td align='right'>11.08</td>
		<td align='right'>321</td>
		<td align='center'><input onclick='updatePlayer(766);' type='checkbox' name='graph[]' value='766' id='player_766' /></td>
		</tr><tr class='RB'>
	   	<td align='right'>105</td>
		<td align='right'>9.05</td>
		<td>Donald Brown</td>
		<td>RB</td>
		<td>IND</td>
		<td align='right'>100.7</td>
                <td align='right'>9.9</td>
                <td align='right'>7.02</td>
                <td align='right'>11.09</td>
		<td align='right'>300</td>
		<td align='center'><input onclick='updatePlayer(1642);' type='checkbox' name='graph[]' value='1642' id='player_1642' /></td>
		</tr><tr class='WR'>
	   	<td align='right'>106</td>
		<td align='right'>9.06</td>
		<td>Braylon Edwards</td>
		<td>WR</td>
		<td>NYJ</td>
		<td align='right'>102.4</td>
                <td align='right'>13.0</td>
                <td align='right'>6.08</td>
                <td align='right'>11.07</td>
		<td align='right'>276</td>
		<td align='center'><input onclick='updatePlayer(333);' type='checkbox' name='graph[]' value='333' id='player_333' /></td>
		</tr><tr class='WR'>
	   	<td align='right'>107</td>
		<td align='right'>9.07</td>
		<td>Eddie Royal</td>
		<td>WR</td>
		<td>DEN</td>
		<td align='right'>102.7</td>
                <td align='right'>12.2</td>
                <td align='right'>6.10</td>
                <td align='right'>11.08</td>
		<td align='right'>217</td>
		<td align='center'><input onclick='updatePlayer(1353);' type='checkbox' name='graph[]' value='1353' id='player_1353' /></td>
		</tr><tr class='TE'>
	   	<td align='right'>108</td>
		<td align='right'>9.10</td>
		<td>Zach Miller</td>
		<td>TE</td>
		<td>OAK</td>
		<td align='right'>105.6</td>
                <td align='right'>17.8</td>
                <td align='right'>6.05</td>
                <td align='right'>13.12</td>
		<td align='right'>548</td>
		<td align='center'><input onclick='updatePlayer(820);' type='checkbox' name='graph[]' value='820' id='player_820' /></td>
		</tr><tr class='DEF'>
	   	<td align='right'>109</td>
		<td align='right'>9.10</td>
		<td>Green Bay Defense</td>
		<td>DEF</td>
		<td>GB</td>
		<td align='right'>105.9</td>
                <td align='right'>11.3</td>
                <td align='right'>7.04</td>
                <td align='right'>11.07</td>
		<td align='right'>210</td>
		<td align='center'><input onclick='updatePlayer(1311);' type='checkbox' name='graph[]' value='1311' id='player_1311' /></td>
		</tr><tr class='RB'>
	   	<td align='right'>110</td>
		<td align='right'>9.10</td>
		<td>Fred Jackson</td>
		<td>RB</td>
		<td>BUF</td>
		<td align='right'>106.4</td>
                <td align='right'>10.7</td>
                <td align='right'>7.06</td>
                <td align='right'>12.07</td>
		<td align='right'>172</td>
		<td align='center'><input onclick='updatePlayer(1340);' type='checkbox' name='graph[]' value='1340' id='player_1340' /></td>
		</tr><tr class='RB'>
	   	<td align='right'>111</td>
		<td align='right'>9.12</td>
		<td>Darren McFadden</td>
		<td>RB</td>
		<td>OAK</td>
		<td align='right'>108.3</td>
                <td align='right'>14.1</td>
                <td align='right'>6.11</td>
                <td align='right'>14.07</td>
		<td align='right'>372</td>
		<td align='center'><input onclick='updatePlayer(1341);' type='checkbox' name='graph[]' value='1341' id='player_1341' /></td>
		</tr><tr class='QB'>
	   	<td align='right'>112</td>
		<td align='right'>10.02</td>
		<td>Donovan McNabb</td>
		<td>QB</td>
		<td>WAS</td>
		<td align='right'>109.7</td>
                <td align='right'>13.0</td>
                <td align='right'>7.03</td>
                <td align='right'>11.12</td>
		<td align='right'>248</td>
		<td align='center'><input onclick='updatePlayer(805);' type='checkbox' name='graph[]' value='805' id='player_805' /></td>
		</tr><tr class='DEF'>
	   	<td align='right'>113</td>
		<td align='right'>10.03</td>
		<td>San Francisco Defense</td>
		<td>DEF</td>
		<td>SF</td>
		<td align='right'>110.5</td>
                <td align='right'>9.8</td>
                <td align='right'>8.01</td>
                <td align='right'>12.09</td>
		<td align='right'>345</td>
		<td align='center'><input onclick='updatePlayer(1326);' type='checkbox' name='graph[]' value='1326' id='player_1326' /></td>
		</tr><tr class='RB'>
	   	<td align='right'>114</td>
		<td align='right'>10.03</td>
		<td>Darren Sproles</td>
		<td>RB</td>
		<td>SD</td>
		<td align='right'>111.0</td>
                <td align='right'>19.5</td>
                <td align='right'>5.12</td>
                <td align='right'>13.06</td>
		<td align='right'>178</td>
		<td align='center'><input onclick='updatePlayer(1105);' type='checkbox' name='graph[]' value='1105' id='player_1105' /></td>
		</tr><tr class='WR'>
	   	<td align='right'>115</td>
		<td align='right'>10.03</td>
		<td>Lee Evans</td>
		<td>WR</td>
		<td>BUF</td>
		<td align='right'>111.0</td>
                <td align='right'>14.1</td>
                <td align='right'>7.02</td>
                <td align='right'>12.10</td>
		<td align='right'>429</td>
		<td align='center'><input onclick='updatePlayer(349);' type='checkbox' name='graph[]' value='349' id='player_349' /></td>
		</tr><tr class='WR'>
	   	<td align='right'>116</td>
		<td align='right'>10.04</td>
		<td>Julian Edelman</td>
		<td>WR</td>
		<td>NE</td>
		<td align='right'>111.7</td>
                <td align='right'>12.4</td>
                <td align='right'>7.07</td>
                <td align='right'>11.10</td>
		<td align='right'>121</td>
		<td align='center'><input onclick='updatePlayer(1708);' type='checkbox' name='graph[]' value='1708' id='player_1708' /></td>
		</tr><tr class='QB'>
	   	<td align='right'>117</td>
		<td align='right'>10.04</td>
		<td>Ben Roethlisberger</td>
		<td>QB</td>
		<td>PIT</td>
		<td align='right'>111.7</td>
                <td align='right'>12.5</td>
                <td align='right'>7.07</td>
                <td align='right'>13.02</td>
		<td align='right'>571</td>
		<td align='center'><input onclick='updatePlayer(1006);' type='checkbox' name='graph[]' value='1006' id='player_1006' /></td>
		</tr><tr class='WR'>
	   	<td align='right'>118</td>
		<td align='right'>10.05</td>
		<td>Anthony Gonzalez</td>
		<td>WR</td>
		<td>IND</td>
		<td align='right'>112.8</td>
                <td align='right'>14.3</td>
                <td align='right'>7.03</td>
                <td align='right'>13.05</td>
		<td align='right'>214</td>
		<td align='center'><input onclick='updatePlayer(431);' type='checkbox' name='graph[]' value='431' id='player_431' /></td>
		</tr><tr class='WR'>
	   	<td align='right'>119</td>
		<td align='right'>10.06</td>
		<td>Bernard Berrian</td>
		<td>WR</td>
		<td>MIN</td>
		<td align='right'>113.5</td>
                <td align='right'>14.0</td>
                <td align='right'>7.05</td>
                <td align='right'>13.02</td>
		<td align='right'>546</td>
		<td align='center'><input onclick='updatePlayer(85);' type='checkbox' name='graph[]' value='85' id='player_85' /></td>
		</tr><tr class='RB'>
	   	<td align='right'>120</td>
		<td align='right'>10.06</td>
		<td>Steve Slaton</td>
		<td>RB</td>
		<td>HOU</td>
		<td align='right'>113.7</td>
                <td align='right'>14.1</td>
                <td align='right'>7.04</td>
                <td align='right'>14.02</td>
		<td align='right'>104</td>
		<td align='center'><input onclick='updatePlayer(1373);' type='checkbox' name='graph[]' value='1373' id='player_1373' /></td>
		</tr><tr class='WR'>
	   	<td align='right'>121</td>
		<td align='right'>10.07</td>
		<td>Devin Hester</td>
		<td>WR</td>
		<td>CHI</td>
		<td align='right'>114.9</td>
                <td align='right'>12.3</td>
                <td align='right'>7.10</td>
                <td align='right'>12.06</td>
		<td align='right'>147</td>
		<td align='center'><input onclick='updatePlayer(1336);' type='checkbox' name='graph[]' value='1336' id='player_1336' /></td>
		</tr><tr class='TE'>
	   	<td align='right'>122</td>
		<td align='right'>10.09</td>
		<td>Kellen Winslow</td>
		<td>TE</td>
		<td>TB</td>
		<td align='right'>116.7</td>
                <td align='right'>19.1</td>
                <td align='right'>6.06</td>
                <td align='right'>14.09</td>
		<td align='right'>390</td>
		<td align='center'><input onclick='updatePlayer(1285);' type='checkbox' name='graph[]' value='1285' id='player_1285' /></td>
		</tr><tr class='WR'>
	   	<td align='right'>123</td>
		<td align='right'>10.10</td>
		<td>Mike Williams</td>
		<td>WR</td>
		<td>TB</td>
		<td align='right'>118.2</td>
                <td align='right'>15.8</td>
                <td align='right'>7.05</td>
                <td align='right'>13.11</td>
		<td align='right'>688</td>
		<td align='center'><input onclick='updatePlayer(1768);' type='checkbox' name='graph[]' value='1768' id='player_1768' /></td>
		</tr><tr class='RB'>
	   	<td align='right'>124</td>
		<td align='right'>10.12</td>
		<td>Laurence Maroney</td>
		<td>RB</td>
		<td>NE</td>
		<td align='right'>120.0</td>
                <td align='right'>17.8</td>
                <td align='right'>7.01</td>
                <td align='right'>14.06</td>
		<td align='right'>245</td>
		<td align='center'><input onclick='updatePlayer(754);' type='checkbox' name='graph[]' value='754' id='player_754' /></td>
		</tr><tr class='WR'>
	   	<td align='right'>125</td>
		<td align='right'>11.02</td>
		<td>Kenny Britt</td>
		<td>WR</td>
		<td>TEN</td>
		<td align='right'>122.4</td>
                <td align='right'>14.5</td>
                <td align='right'>7.12</td>
                <td align='right'>13.10</td>
		<td align='right'>200</td>
		<td align='center'><input onclick='updatePlayer(1657);' type='checkbox' name='graph[]' value='1657' id='player_1657' /></td>
		</tr><tr class='RB'>
	   	<td align='right'>126</td>
		<td align='right'>11.03</td>
		<td>Leon Washington</td>
		<td>RB</td>
		<td>SEA</td>
		<td align='right'>123.4</td>
                <td align='right'>14.4</td>
                <td align='right'>8.01</td>
                <td align='right'>15.02</td>
		<td align='right'>279</td>
		<td align='center'><input onclick='updatePlayer(1221);' type='checkbox' name='graph[]' value='1221' id='player_1221' /></td>
		</tr><tr class='WR'>
	   	<td align='right'>127</td>
		<td align='right'>11.03</td>
		<td>Josh Cribbs</td>
		<td>WR</td>
		<td>CLE</td>
		<td align='right'>123.4</td>
                <td align='right'>20.1</td>
                <td align='right'>6.11</td>
                <td align='right'>13.09</td>
		<td align='right'>119</td>
		<td align='center'><input onclick='updatePlayer(248);' type='checkbox' name='graph[]' value='248' id='player_248' /></td>
		</tr><tr class='WR'>
	   	<td align='right'>128</td>
		<td align='right'>11.03</td>
		<td>Mohamed Massaquoi</td>
		<td>WR</td>
		<td>CLE</td>
		<td align='right'>123.5</td>
                <td align='right'>14.2</td>
                <td align='right'>8.02</td>
                <td align='right'>13.10</td>
		<td align='right'>271</td>
		<td align='center'><input onclick='updatePlayer(1669);' type='checkbox' name='graph[]' value='1669' id='player_1669' /></td>
		</tr><tr class='DEF'>
	   	<td align='right'>129</td>
		<td align='right'>11.04</td>
		<td>Pittsburgh Defense</td>
		<td>DEF</td>
		<td>PIT</td>
		<td align='right'>123.7</td>
                <td align='right'>12.2</td>
                <td align='right'>8.07</td>
                <td align='right'>15.12</td>
		<td align='right'>315</td>
		<td align='center'><input onclick='updatePlayer(1324);' type='checkbox' name='graph[]' value='1324' id='player_1324' /></td>
		</tr><tr class='WR'>
	   	<td align='right'>130</td>
		<td align='right'>11.04</td>
		<td>Jacoby Jones</td>
		<td>WR</td>
		<td>HOU</td>
		<td align='right'>124.1</td>
                <td align='right'>16.2</td>
                <td align='right'>7.10</td>
                <td align='right'>15.03</td>
		<td align='right'>595</td>
		<td align='center'><input onclick='updatePlayer(639);' type='checkbox' name='graph[]' value='639' id='player_639' /></td>
		</tr><tr class='QB'>
	   	<td align='right'>131</td>
		<td align='right'>11.05</td>
		<td>Matthew Stafford</td>
		<td>QB</td>
		<td>DET</td>
		<td align='right'>124.9</td>
                <td align='right'>13.0</td>
                <td align='right'>8.07</td>
                <td align='right'>14.01</td>
		<td align='right'>437</td>
		<td align='center'><input onclick='updatePlayer(1664);' type='checkbox' name='graph[]' value='1664' id='player_1664' /></td>
		</tr><tr class='WR'>
	   	<td align='right'>132</td>
		<td align='right'>11.06</td>
		<td>Austin Collie</td>
		<td>WR</td>
		<td>IND</td>
		<td align='right'>126.3</td>
                <td align='right'>16.4</td>
                <td align='right'>7.11</td>
                <td align='right'>14.02</td>
		<td align='right'>157</td>
		<td align='center'><input onclick='updatePlayer(1698);' type='checkbox' name='graph[]' value='1698' id='player_1698' /></td>
		</tr><tr class='DEF'>
	   	<td align='right'>133</td>
		<td align='right'>11.07</td>
		<td>Baltimore Defense</td>
		<td>DEF</td>
		<td>BAL</td>
		<td align='right'>126.7</td>
                <td align='right'>15.5</td>
                <td align='right'>8.02</td>
                <td align='right'>15.11</td>
		<td align='right'>295</td>
		<td align='center'><input onclick='updatePlayer(1332);' type='checkbox' name='graph[]' value='1332' id='player_1332' /></td>
		</tr><tr class='WR'>
	   	<td align='right'>134</td>
		<td align='right'>11.07</td>
		<td>Sidney Rice</td>
		<td>WR</td>
		<td>MIN</td>
		<td align='right'>127.2</td>
                <td align='right'>17.7</td>
                <td align='right'>7.09</td>
                <td align='right'>14.05</td>
		<td align='right'>304</td>
		<td align='center'><input onclick='updatePlayer(984);' type='checkbox' name='graph[]' value='984' id='player_984' /></td>
		</tr><tr class='QB'>
	   	<td align='right'>135</td>
		<td align='right'>11.08</td>
		<td>Chad Henne</td>
		<td>QB</td>
		<td>MIA</td>
		<td align='right'>128.4</td>
                <td align='right'>12.3</td>
                <td align='right'>8.12</td>
                <td align='right'>13.07</td>
		<td align='right'>252</td>
		<td align='center'><input onclick='updatePlayer(1362);' type='checkbox' name='graph[]' value='1362' id='player_1362' /></td>
		</tr><tr class='RB'>
	   	<td align='right'>136</td>
		<td align='right'>11.09</td>
		<td>Chester Taylor</td>
		<td>RB</td>
		<td>CHI</td>
		<td align='right'>129.5</td>
                <td align='right'>14.4</td>
                <td align='right'>8.08</td>
                <td align='right'>14.08</td>
		<td align='right'>263</td>
		<td align='center'><input onclick='updatePlayer(1148);' type='checkbox' name='graph[]' value='1148' id='player_1148' /></td>
		</tr><tr class='PK'>
	   	<td align='right'>137</td>
		<td align='right'>11.10</td>
		<td>Nate Kaeding</td>
		<td>PK</td>
		<td>SD</td>
		<td align='right'>130.4</td>
                <td align='right'>19.3</td>
                <td align='right'>7.08</td>
                <td align='right'>14.05</td>
		<td align='right'>263</td>
		<td align='center'><input onclick='updatePlayer(656);' type='checkbox' name='graph[]' value='656' id='player_656' /></td>
		</tr><tr class='QB'>
	   	<td align='right'>138</td>
		<td align='right'>11.12</td>
		<td>Alex Smith</td>
		<td>QB</td>
		<td>SF</td>
		<td align='right'>131.8</td>
                <td align='right'>12.8</td>
                <td align='right'>9.02</td>
                <td align='right'>14.02</td>
		<td align='right'>202</td>
		<td align='center'><input onclick='updatePlayer(1076);' type='checkbox' name='graph[]' value='1076' id='player_1076' /></td>
		</tr><tr class='DEF'>
	   	<td align='right'>139</td>
		<td align='right'>12.02</td>
		<td>Philadelphia Defense</td>
		<td>DEF</td>
		<td>PHI</td>
		<td align='right'>134.2</td>
                <td align='right'>14.3</td>
                <td align='right'>9.01</td>
                <td align='right'>15.12</td>
		<td align='right'>435</td>
		<td align='center'><input onclick='updatePlayer(1323);' type='checkbox' name='graph[]' value='1323' id='player_1323' /></td>
		</tr><tr class='RB'>
	   	<td align='right'>140</td>
		<td align='right'>12.04</td>
		<td>Willis McGahee</td>
		<td>RB</td>
		<td>BAL</td>
		<td align='right'>136.2</td>
                <td align='right'>14.1</td>
                <td align='right'>9.03</td>
                <td align='right'>14.11</td>
		<td align='right'>313</td>
		<td align='center'><input onclick='updatePlayer(792);' type='checkbox' name='graph[]' value='792' id='player_792' /></td>
		</tr><tr class='DEF'>
	   	<td align='right'>141</td>
		<td align='right'>12.05</td>
		<td>New Orleans Defense</td>
		<td>DEF</td>
		<td>NO</td>
		<td align='right'>136.8</td>
                <td align='right'>15.8</td>
                <td align='right'>8.11</td>
                <td align='right'>15.12</td>
		<td align='right'>192</td>
		<td align='center'><input onclick='updatePlayer(1319);' type='checkbox' name='graph[]' value='1319' id='player_1319' /></td>
		</tr><tr class='WR'>
	   	<td align='right'>142</td>
		<td align='right'>12.06</td>
		<td>Golden Tate</td>
		<td>WR</td>
		<td>SEA</td>
		<td align='right'>137.8</td>
                <td align='right'>13.0</td>
                <td align='right'>9.07</td>
                <td align='right'>14.08</td>
		<td align='right'>96</td>
		<td align='center'><input onclick='updatePlayer(1730);' type='checkbox' name='graph[]' value='1730' id='player_1730' /></td>
		</tr><tr class='WR'>
	   	<td align='right'>143</td>
		<td align='right'>12.07</td>
		<td>Jerricho Cotchery</td>
		<td>WR</td>
		<td>NYJ</td>
		<td align='right'>138.9</td>
                <td align='right'>18.0</td>
                <td align='right'>8.08</td>
                <td align='right'>15.04</td>
		<td align='right'>85</td>
		<td align='center'><input onclick='updatePlayer(241);' type='checkbox' name='graph[]' value='241' id='player_241' /></td>
		</tr><tr class='PK'>
	   	<td align='right'>144</td>
		<td align='right'>12.07</td>
		<td>Mason Crosby</td>
		<td>PK</td>
		<td>GB</td>
		<td align='right'>139.0</td>
                <td align='right'>16.6</td>
                <td align='right'>8.11</td>
                <td align='right'>14.05</td>
		<td align='right'>250</td>
		<td align='center'><input onclick='updatePlayer(251);' type='checkbox' name='graph[]' value='251' id='player_251' /></td>
		</tr><tr class='QB'>
	   	<td align='right'>145</td>
		<td align='right'>12.07</td>
		<td>Vince Young</td>
		<td>QB</td>
		<td>TEN</td>
		<td align='right'>139.1</td>
                <td align='right'>12.0</td>
                <td align='right'>9.12</td>
                <td align='right'>14.10</td>
		<td align='right'>147</td>
		<td align='center'><input onclick='updatePlayer(1298);' type='checkbox' name='graph[]' value='1298' id='player_1298' /></td>
		</tr><tr class='WR'>
	   	<td align='right'>146</td>
		<td align='right'>12.07</td>
		<td>Dexter McCluster</td>
		<td>WR</td>
		<td>KC</td>
		<td align='right'>139.3</td>
                <td align='right'>12.7</td>
                <td align='right'>9.10</td>
                <td align='right'>15.05</td>
		<td align='right'>243</td>
		<td align='center'><input onclick='updatePlayer(1738);' type='checkbox' name='graph[]' value='1738' id='player_1738' /></td>
		</tr><tr class='QB'>
	   	<td align='right'>147</td>
		<td align='right'>12.08</td>
		<td>Mark Sanchez</td>
		<td>QB</td>
		<td>NYJ</td>
		<td align='right'>139.8</td>
                <td align='right'>23.7</td>
                <td align='right'>7.06</td>
                <td align='right'>15.10</td>
		<td align='right'>69</td>
		<td align='center'><input onclick='updatePlayer(1665);' type='checkbox' name='graph[]' value='1665' id='player_1665' /></td>
		</tr><tr class='TE'>
	   	<td align='right'>148</td>
		<td align='right'>12.08</td>
		<td>John Carlson</td>
		<td>TE</td>
		<td>SEA</td>
		<td align='right'>140.0</td>
                <td align='right'>19.1</td>
                <td align='right'>8.06</td>
                <td align='right'>15.09</td>
		<td align='right'>346</td>
		<td align='center'><input onclick='updatePlayer(1351);' type='checkbox' name='graph[]' value='1351' id='player_1351' /></td>
		</tr><tr class='WR'>
	   	<td align='right'>149</td>
		<td align='right'>12.11</td>
		<td>Demaryius Thomas</td>
		<td>WR</td>
		<td>DEN</td>
		<td align='right'>142.6</td>
                <td align='right'>16.4</td>
                <td align='right'>9.04</td>
                <td align='right'>15.04</td>
		<td align='right'>62</td>
		<td align='center'><input onclick='updatePlayer(1735);' type='checkbox' name='graph[]' value='1735' id='player_1735' /></td>
		</tr><tr class='WR'>
	   	<td align='right'>150</td>
		<td align='right'>12.12</td>
		<td>Nate Burleson</td>
		<td>WR</td>
		<td>DET</td>
		<td align='right'>143.9</td>
                <td align='right'>14.8</td>
                <td align='right'>9.09</td>
                <td align='right'>15.07</td>
		<td align='right'>196</td>
		<td align='center'><input onclick='updatePlayer(156);' type='checkbox' name='graph[]' value='156' id='player_156' /></td>
		</tr><tr class='WR'>
	   	<td align='right'>151</td>
		<td align='right'>12.12</td>
		<td>Roy Williams</td>
		<td>WR</td>
		<td>DAL</td>
		<td align='right'>144.3</td>
                <td align='right'>15.5</td>
                <td align='right'>9.07</td>
                <td align='right'>15.10</td>
		<td align='right'>127</td>
		<td align='center'><input onclick='updatePlayer(1272);' type='checkbox' name='graph[]' value='1272' id='player_1272' /></td>
		</tr><tr class='PK'>
	   	<td align='right'>152</td>
		<td align='right'>12.12</td>
		<td>Garrett Hartley</td>
		<td>PK</td>
		<td>NO</td>
		<td align='right'>144.5</td>
                <td align='right'>15.0</td>
                <td align='right'>9.09</td>
                <td align='right'>15.08</td>
		<td align='right'>287</td>
		<td align='center'><input onclick='updatePlayer(1702);' type='checkbox' name='graph[]' value='1702' id='player_1702' /></td>
		</tr><tr class='WR'>
	   	<td align='right'>153</td>
		<td align='right'>13.01</td>
		<td>Legedu Naanee</td>
		<td>WR</td>
		<td>SD</td>
		<td align='right'>144.6</td>
                <td align='right'>15.0</td>
                <td align='right'>9.09</td>
                <td align='right'>15.12</td>
		<td align='right'>250</td>
		<td align='center'><input onclick='updatePlayer(867);' type='checkbox' name='graph[]' value='867' id='player_867' /></td>
		</tr><tr class='RB'>
	   	<td align='right'>154</td>
		<td align='right'>13.01</td>
		<td>Kevin Smith</td>
		<td>RB</td>
		<td>DET</td>
		<td align='right'>145.0</td>
                <td align='right'>16.4</td>
                <td align='right'>9.06</td>
                <td align='right'>15.12</td>
		<td align='right'>130</td>
		<td align='center'><input onclick='updatePlayer(1365);' type='checkbox' name='graph[]' value='1365' id='player_1365' /></td>
		</tr><tr class='WR'>
	   	<td align='right'>155</td>
		<td align='right'>13.02</td>
		<td>Louis Murphy</td>
		<td>WR</td>
		<td>OAK</td>
		<td align='right'>145.8</td>
                <td align='right'>26.8</td>
                <td align='right'>7.07</td>
                <td align='right'>15.05</td>
		<td align='right'>45</td>
		<td align='center'><input onclick='updatePlayer(1697);' type='checkbox' name='graph[]' value='1697' id='player_1697' /></td>
		</tr><tr class='TE'>
	   	<td align='right'>156</td>
		<td align='right'>13.02</td>
		<td>Jeremy Shockey</td>
		<td>TE</td>
		<td>NO</td>
		<td align='right'>146.3</td>
                <td align='right'>30.4</td>
                <td align='right'>6.07</td>
                <td align='right'>15.12</td>
		<td align='right'>178</td>
		<td align='center'><input onclick='updatePlayer(1062);' type='checkbox' name='graph[]' value='1062' id='player_1062' /></td>
		</tr><tr class='DEF'>
	   	<td align='right'>157</td>
		<td align='right'>13.02</td>
		<td>Dallas Defense</td>
		<td>DEF</td>
		<td>DAL</td>
		<td align='right'>146.5</td>
                <td align='right'>15.6</td>
                <td align='right'>9.09</td>
                <td align='right'>15.12</td>
		<td align='right'>259</td>
		<td align='center'><input onclick='updatePlayer(1308);' type='checkbox' name='graph[]' value='1308' id='player_1308' /></td>
		</tr><tr class='TE'>
	   	<td align='right'>158</td>
		<td align='right'>13.04</td>
		<td>Dustin Keller</td>
		<td>TE</td>
		<td>NYJ</td>
		<td align='right'>147.6</td>
                <td align='right'>22.4</td>
                <td align='right'>8.05</td>
                <td align='right'>15.12</td>
		<td align='right'>213</td>
		<td align='center'><input onclick='updatePlayer(1389);' type='checkbox' name='graph[]' value='1389' id='player_1389' /></td>
		</tr><tr class='RB'>
	   	<td align='right'>159</td>
		<td align='right'>13.04</td>
		<td>Larry Johnson</td>
		<td>RB</td>
		<td>WAS</td>
		<td align='right'>147.6</td>
                <td align='right'>17.4</td>
                <td align='right'>9.06</td>
                <td align='right'>15.12</td>
		<td align='right'>263</td>
		<td align='center'><input onclick='updatePlayer(622);' type='checkbox' name='graph[]' value='622' id='player_622' /></td>
		</tr><tr class='QB'>
	   	<td align='right'>160</td>
		<td align='right'>13.04</td>
		<td>Matt Cassel</td>
		<td>QB</td>
		<td>KC</td>
		<td align='right'>148.1</td>
                <td align='right'>13.5</td>
                <td align='right'>10.04</td>
                <td align='right'>15.10</td>
		<td align='right'>133</td>
		<td align='center'><input onclick='updatePlayer(188);' type='checkbox' name='graph[]' value='188' id='player_188' /></td>
		</tr><tr class='RB'>
	   	<td align='right'>161</td>
		<td align='right'>13.04</td>
		<td>Bernard Scott</td>
		<td>RB</td>
		<td>CIN</td>
		<td align='right'>148.5</td>
                <td align='right'>17.7</td>
                <td align='right'>9.06</td>
                <td align='right'>15.12</td>
		<td align='right'>295</td>
		<td align='center'><input onclick='updatePlayer(1689);' type='checkbox' name='graph[]' value='1689' id='player_1689' /></td>
		</tr><tr class='WR'>
	   	<td align='right'>162</td>
		<td align='right'>13.05</td>
		<td>Mike Williams</td>
		<td>WR</td>
		<td>SEA</td>
		<td align='right'>148.9</td>
                <td align='right'>19.0</td>
                <td align='right'>9.03</td>
                <td align='right'>15.12</td>
		<td align='right'>183</td>
		<td align='center'><input onclick='updatePlayer(1263);' type='checkbox' name='graph[]' value='1263' id='player_1263' /></td>
		</tr><tr class='TE'>
	   	<td align='right'>163</td>
		<td align='right'>13.05</td>
		<td>Greg Olsen</td>
		<td>TE</td>
		<td>CHI</td>
		<td align='right'>149.0</td>
                <td align='right'>23.0</td>
                <td align='right'>8.05</td>
                <td align='right'>15.12</td>
		<td align='right'>186</td>
		<td align='center'><input onclick='updatePlayer(890);' type='checkbox' name='graph[]' value='890' id='player_890' /></td>
		</tr><tr class='TE'>
	   	<td align='right'>164</td>
		<td align='right'>13.07</td>
		<td>Rob Gronkowski</td>
		<td>TE</td>
		<td>NE</td>
		<td align='right'>150.6</td>
                <td align='right'>26.5</td>
                <td align='right'>7.09</td>
                <td align='right'>15.12</td>
		<td align='right'>74</td>
		<td align='center'><input onclick='updatePlayer(1740);' type='checkbox' name='graph[]' value='1740' id='player_1740' /></td>
		</tr><tr class='PK'>
	   	<td align='right'>165</td>
		<td align='right'>13.07</td>
		<td>Stephen Gostkowski</td>
		<td>PK</td>
		<td>NE</td>
		<td align='right'>150.7</td>
                <td align='right'>12.7</td>
                <td align='right'>10.09</td>
                <td align='right'>15.05</td>
		<td align='right'>188</td>
		<td align='center'><input onclick='updatePlayer(438);' type='checkbox' name='graph[]' value='438' id='player_438' /></td>
		</tr><tr class='RB'>
	   	<td align='right'>166</td>
		<td align='right'>13.07</td>
		<td>Fred Taylor</td>
		<td>RB</td>
		<td>NE</td>
		<td align='right'>151.1</td>
                <td align='right'>20.1</td>
                <td align='right'>9.02</td>
                <td align='right'>15.12</td>
		<td align='right'>234</td>
		<td align='center'><input onclick='updatePlayer(1152);' type='checkbox' name='graph[]' value='1152' id='player_1152' /></td>
		</tr><tr class='RB'>
	   	<td align='right'>167</td>
		<td align='right'>13.08</td>
		<td>Toby Gerhart</td>
		<td>RB</td>
		<td>MIN</td>
		<td align='right'>152.0</td>
                <td align='right'>18.1</td>
                <td align='right'>9.08</td>
                <td align='right'>15.12</td>
		<td align='right'>176</td>
		<td align='center'><input onclick='updatePlayer(1751);' type='checkbox' name='graph[]' value='1751' id='player_1751' /></td>
		</tr><tr class='WR'>
	   	<td align='right'>168</td>
		<td align='right'>13.09</td>
		<td>Laurent Robinson</td>
		<td>WR</td>
		<td>STL</td>
		<td align='right'>153.3</td>
                <td align='right'>17.8</td>
                <td align='right'>9.11</td>
                <td align='right'>15.12</td>
		<td align='right'>349</td>
		<td align='center'><input onclick='updatePlayer(999);' type='checkbox' name='graph[]' value='999' id='player_999' /></td>
		</tr><tr class='RB'>
	   	<td align='right'>169</td>
		<td align='right'>13.10</td>
		<td>Kareem Huggins</td>
		<td>RB</td>
		<td>TB</td>
		<td align='right'>154.0</td>
                <td align='right'>25.9</td>
                <td align='right'>8.02</td>
                <td align='right'>15.12</td>
		<td align='right'>95</td>
		<td align='center'><input onclick='updatePlayer(1770);' type='checkbox' name='graph[]' value='1770' id='player_1770' /></td>
		</tr><tr class='DEF'>
	   	<td align='right'>170</td>
		<td align='right'>13.10</td>
		<td>NY Giants Defense</td>
		<td>DEF</td>
		<td>NYG</td>
		<td align='right'>154.3</td>
                <td align='right'>17.0</td>
                <td align='right'>10.02</td>
                <td align='right'>15.12</td>
		<td align='right'>157</td>
		<td align='center'><input onclick='updatePlayer(1320);' type='checkbox' name='graph[]' value='1320' id='player_1320' /></td>
		</tr><tr class='TE'>
	   	<td align='right'>171</td>
		<td align='right'>13.10</td>
		<td>Heath Miller</td>
		<td>TE</td>
		<td>PIT</td>
		<td align='right'>154.3</td>
                <td align='right'>19.2</td>
                <td align='right'>9.08</td>
                <td align='right'>15.12</td>
		<td align='right'>247</td>
		<td align='center'><input onclick='updatePlayer(817);' type='checkbox' name='graph[]' value='817' id='player_817' /></td>
		</tr><tr class='TE'>
	   	<td align='right'>172</td>
		<td align='right'>13.11</td>
		<td>Jermaine Gresham</td>
		<td>TE</td>
		<td>CIN</td>
		<td align='right'>154.6</td>
                <td align='right'>20.1</td>
                <td align='right'>9.06</td>
                <td align='right'>15.12</td>
		<td align='right'>277</td>
		<td align='center'><input onclick='updatePlayer(1761);' type='checkbox' name='graph[]' value='1761' id='player_1761' /></td>
		</tr><tr class='WR'>
	   	<td align='right'>173</td>
		<td align='right'>13.11</td>
		<td>Patrick Crayton</td>
		<td>WR</td>
		<td>SD</td>
		<td align='right'>154.7</td>
                <td align='right'>26.5</td>
                <td align='right'>8.01</td>
                <td align='right'>15.12</td>
		<td align='right'>37</td>
		<td align='center'><input onclick='updatePlayer(246);' type='checkbox' name='graph[]' value='246' id='player_246' /></td>
		</tr><tr class='RB'>
	   	<td align='right'>174</td>
		<td align='right'>13.11</td>
		<td>Tashard Choice</td>
		<td>RB</td>
		<td>DAL</td>
		<td align='right'>155.0</td>
                <td align='right'>17.2</td>
                <td align='right'>10.02</td>
                <td align='right'>15.11</td>
		<td align='right'>133</td>
		<td align='center'><input onclick='updatePlayer(1380);' type='checkbox' name='graph[]' value='1380' id='player_1380' /></td>
		</tr><tr class='RB'>
	   	<td align='right'>175</td>
		<td align='right'>13.12</td>
		<td>Marshawn Lynch</td>
		<td>RB</td>
		<td>BUF</td>
		<td align='right'>155.6</td>
                <td align='right'>19.1</td>
                <td align='right'>9.09</td>
                <td align='right'>15.12</td>
		<td align='right'>88</td>
		<td align='center'><input onclick='updatePlayer(740);' type='checkbox' name='graph[]' value='740' id='player_740' /></td>
		</tr><tr class='WR'>
	   	<td align='right'>176</td>
		<td align='right'>13.12</td>
		<td>Devin Thomas</td>
		<td>WR</td>
		<td>WAS</td>
		<td align='right'>155.9</td>
                <td align='right'>15.7</td>
                <td align='right'>10.07</td>
                <td align='right'>15.09</td>
		<td align='right'>71</td>
		<td align='center'><input onclick='updatePlayer(1349);' type='checkbox' name='graph[]' value='1349' id='player_1349' /></td>
		</tr><tr class='RB'>
	   	<td align='right'>177</td>
		<td align='right'>13.12</td>
		<td>Anthony Dixon</td>
		<td>RB</td>
		<td>SF</td>
		<td align='right'>156.1</td>
                <td align='right'>15.5</td>
                <td align='right'>11.03</td>
                <td align='right'>15.12</td>
		<td align='right'>115</td>
		<td align='center'><input onclick='updatePlayer(1755);' type='checkbox' name='graph[]' value='1755' id='player_1755' /></td>
		</tr><tr class='WR'>
	   	<td align='right'>178</td>
		<td align='right'>13.12</td>
		<td>Chris Chambers</td>
		<td>WR</td>
		<td>KC</td>
		<td align='right'>156.4</td>
                <td align='right'>18.2</td>
                <td align='right'>10.01</td>
                <td align='right'>15.12</td>
		<td align='right'>50</td>
		<td align='center'><input onclick='updatePlayer(191);' type='checkbox' name='graph[]' value='191' id='player_191' /></td>
		</tr><tr class='QB'>
	   	<td align='right'>179</td>
		<td align='right'>13.12</td>
		<td>Sam Bradford</td>
		<td>QB</td>
		<td>STL</td>
		<td align='right'>156.5</td>
                <td align='right'>16.6</td>
                <td align='right'>10.05</td>
                <td align='right'>15.10</td>
		<td align='right'>114</td>
		<td align='center'><input onclick='updatePlayer(1725);' type='checkbox' name='graph[]' value='1725' id='player_1725' /></td>
		</tr><tr class='QB'>
	   	<td align='right'>180</td>
		<td align='right'>14.01</td>
		<td>Jason Campbell</td>
		<td>QB</td>
		<td>OAK</td>
		<td align='right'>156.8</td>
                <td align='right'>12.1</td>
                <td align='right'>11.06</td>
                <td align='right'>15.10</td>
		<td align='right'>56</td>
		<td align='center'><input onclick='updatePlayer(170);' type='checkbox' name='graph[]' value='170' id='player_170' /></td>
		</tr><tr class='QB'>
	   	<td align='right'>181</td>
		<td align='right'>14.01</td>
		<td>Matt Moore</td>
		<td>QB</td>
		<td>CAR</td>
		<td align='right'>157.0</td>
                <td align='right'>16.0</td>
                <td align='right'>10.07</td>
                <td align='right'>15.09</td>
		<td align='right'>32</td>
		<td align='center'><input onclick='updatePlayer(1706);' type='checkbox' name='graph[]' value='1706' id='player_1706' /></td>
		</tr><tr class='WR'>
	   	<td align='right'>182</td>
		<td align='right'>14.01</td>
		<td>Kevin Walter</td>
		<td>WR</td>
		<td>HOU</td>
		<td align='right'>157.2</td>
                <td align='right'>14.6</td>
                <td align='right'>10.11</td>
                <td align='right'>15.11</td>
		<td align='right'>87</td>
		<td align='center'><input onclick='updatePlayer(1211);' type='checkbox' name='graph[]' value='1211' id='player_1211' /></td>
		</tr><tr class='DEF'>
	   	<td align='right'>183</td>
		<td align='right'>14.01</td>
		<td>Chicago Defense</td>
		<td>DEF</td>
		<td>CHI</td>
		<td align='right'>157.2</td>
                <td align='right'>16.2</td>
                <td align='right'>10.07</td>
                <td align='right'>15.12</td>
		<td align='right'>106</td>
		<td align='center'><input onclick='updatePlayer(1305);' type='checkbox' name='graph[]' value='1305' id='player_1305' /></td>
		</tr><tr class='WR'>
	   	<td align='right'>184</td>
		<td align='right'>14.02</td>
		<td>Mike Thomas</td>
		<td>WR</td>
		<td>JAC</td>
		<td align='right'>158.1</td>
                <td align='right'>17.1</td>
                <td align='right'>10.10</td>
                <td align='right'>15.11</td>
		<td align='right'>55</td>
		<td align='center'><input onclick='updatePlayer(1695);' type='checkbox' name='graph[]' value='1695' id='player_1695' /></td>
		</tr><tr class='QB'>
	   	<td align='right'>185</td>
		<td align='right'>14.02</td>
		<td>Kyle Orton</td>
		<td>QB</td>
		<td>DEN</td>
		<td align='right'>158.2</td>
                <td align='right'>15.3</td>
                <td align='right'>10.10</td>
                <td align='right'>15.12</td>
		<td align='right'>106</td>
		<td align='center'><input onclick='updatePlayer(893);' type='checkbox' name='graph[]' value='893' id='player_893' /></td>
		</tr><tr class='QB'>
	   	<td align='right'>186</td>
		<td align='right'>14.02</td>
		<td>Derek Anderson</td>
		<td>QB</td>
		<td>ARI</td>
		<td align='right'>158.3</td>
                <td align='right'>16.6</td>
                <td align='right'>10.08</td>
                <td align='right'>15.12</td>
		<td align='right'>61</td>
		<td align='center'><input onclick='updatePlayer(25);' type='checkbox' name='graph[]' value='25' id='player_25' /></td>
		</tr><tr class='WR'>
	   	<td align='right'>187</td>
		<td align='right'>14.02</td>
		<td>James Jones</td>
		<td>WR</td>
		<td>GB</td>
		<td align='right'>158.3</td>
                <td align='right'>17.7</td>
                <td align='right'>10.07</td>
                <td align='right'>15.12</td>
		<td align='right'>83</td>
		<td align='center'><input onclick='updatePlayer(641);' type='checkbox' name='graph[]' value='641' id='player_641' /></td>
		</tr><tr class='RB'>
	   	<td align='right'>188</td>
		<td align='right'>14.03</td>
		<td>Peyton Hillis</td>
		<td>RB</td>
		<td>CLE</td>
		<td align='right'>158.7</td>
                <td align='right'>15.2</td>
                <td align='right'>11.04</td>
                <td align='right'>15.11</td>
		<td align='right'>69</td>
		<td align='center'><input onclick='updatePlayer(1404);' type='checkbox' name='graph[]' value='1404' id='player_1404' /></td>
		</tr><tr class='WR'>
	   	<td align='right'>189</td>
		<td align='right'>14.04</td>
		<td>Greg Camarillo</td>
		<td>WR</td>
		<td>MIN</td>
		<td align='right'>159.6</td>
                <td align='right'>14.2</td>
                <td align='right'>11.04</td>
                <td align='right'>15.12</td>
		<td align='right'>99</td>
		<td align='center'><input onclick='updatePlayer(168);' type='checkbox' name='graph[]' value='168' id='player_168' /></td>
		</tr><tr class='WR'>
	   	<td align='right'>190</td>
		<td align='right'>14.04</td>
		<td>Early Doucet</td>
		<td>WR</td>
		<td>ARI</td>
		<td align='right'>159.7</td>
                <td align='right'>14.2</td>
                <td align='right'>11.02</td>
                <td align='right'>15.11</td>
		<td align='right'>55</td>
		<td align='center'><input onclick='updatePlayer(1370);' type='checkbox' name='graph[]' value='1370' id='player_1370' /></td>
		</tr><tr class='RB'>
	   	<td align='right'>191</td>
		<td align='right'>14.04</td>
		<td>Mike Bell</td>
		<td>RB</td>
		<td>PHI</td>
		<td align='right'>159.7</td>
                <td align='right'>15.1</td>
                <td align='right'>10.12</td>
                <td align='right'>15.12</td>
		<td align='right'>47</td>
		<td align='center'><input onclick='updatePlayer(73);' type='checkbox' name='graph[]' value='73' id='player_73' /></td>
		</tr><tr class='WR'>
	   	<td align='right'>192</td>
		<td align='right'>14.04</td>
		<td>Mario Manningham</td>
		<td>WR</td>
		<td>NYG</td>
		<td align='right'>159.9</td>
                <td align='right'>15.7</td>
                <td align='right'>10.11</td>
                <td align='right'>15.12</td>
		<td align='right'>105</td>
		<td align='center'><input onclick='updatePlayer(1375);' type='checkbox' name='graph[]' value='1375' id='player_1375' /></td>
		</tr><tr class='RB'>
	   	<td align='right'>193</td>
		<td align='right'>14.04</td>
		<td>Correll Buckhalter</td>
		<td>RB</td>
		<td>DEN</td>
		<td align='right'>160.2</td>
                <td align='right'>17.5</td>
                <td align='right'>10.06</td>
                <td align='right'>15.12</td>
		<td align='right'>51</td>
		<td align='center'><input onclick='updatePlayer(154);' type='checkbox' name='graph[]' value='154' id='player_154' /></td>
		</tr><tr class='DEF'>
	   	<td align='right'>194</td>
		<td align='right'>14.04</td>
		<td>Tennessee Defense</td>
		<td>DEF</td>
		<td>TEN</td>
		<td align='right'>160.2</td>
                <td align='right'>12.9</td>
                <td align='right'>11.06</td>
                <td align='right'>15.12</td>
		<td align='right'>92</td>
		<td align='center'><input onclick='updatePlayer(1330);' type='checkbox' name='graph[]' value='1330' id='player_1330' /></td>
		</tr><tr class='RB'>
	   	<td align='right'>195</td>
		<td align='right'>14.04</td>
		<td>Brian Westbrook</td>
		<td>RB</td>
		<td>SF</td>
		<td align='right'>160.3</td>
                <td align='right'>16.2</td>
                <td align='right'>10.10</td>
                <td align='right'>15.12</td>
		<td align='right'>83</td>
		<td align='center'><input onclick='updatePlayer(1237);' type='checkbox' name='graph[]' value='1237' id='player_1237' /></td>
		</tr><tr class='WR'>
	   	<td align='right'>196</td>
		<td align='right'>14.04</td>
		<td>Devery Henderson</td>
		<td>WR</td>
		<td>NO</td>
		<td align='right'>160.4</td>
                <td align='right'>17.2</td>
                <td align='right'>10.07</td>
                <td align='right'>15.12</td>
		<td align='right'>77</td>
		<td align='center'><input onclick='updatePlayer(512);' type='checkbox' name='graph[]' value='512' id='player_512' /></td>
		</tr><tr class='QB'>
	   	<td align='right'>197</td>
		<td align='right'>14.05</td>
		<td>David Garrard</td>
		<td>QB</td>
		<td>JAC</td>
		<td align='right'>160.7</td>
                <td align='right'>16.0</td>
                <td align='right'>10.11</td>
                <td align='right'>15.12</td>
		<td align='right'>32</td>
		<td align='center'><input onclick='updatePlayer(412);' type='checkbox' name='graph[]' value='412' id='player_412' /></td>
		</tr><tr class='PK'>
	   	<td align='right'>198</td>
		<td align='right'>14.05</td>
		<td>Ryan Longwell</td>
		<td>PK</td>
		<td>MIN</td>
		<td align='right'>160.7</td>
                <td align='right'>15.5</td>
                <td align='right'>10.12</td>
                <td align='right'>15.12</td>
		<td align='right'>320</td>
		<td align='center'><input onclick='updatePlayer(726);' type='checkbox' name='graph[]' value='726' id='player_726' /></td>
		</tr><tr class='WR'>
	   	<td align='right'>199</td>
		<td align='right'>14.05</td>
		<td>Davone Bess</td>
		<td>WR</td>
		<td>MIA</td>
		<td align='right'>160.8</td>
                <td align='right'>16.8</td>
                <td align='right'>10.09</td>
                <td align='right'>15.12</td>
		<td align='right'>66</td>
		<td align='center'><input onclick='updatePlayer(1397);' type='checkbox' name='graph[]' value='1397' id='player_1397' /></td>
		</tr><tr class='DEF'>
	   	<td align='right'>200</td>
		<td align='right'>14.05</td>
		<td>San Diego Defense</td>
		<td>DEF</td>
		<td>SD</td>
		<td align='right'>161.1</td>
                <td align='right'>12.0</td>
                <td align='right'>11.09</td>
                <td align='right'>15.12</td>
		<td align='right'>128</td>
		<td align='center'><input onclick='updatePlayer(1325);' type='checkbox' name='graph[]' value='1325' id='player_1325' /></td>
		</tr><tr class='DEF'>
	   	<td align='right'>201</td>
		<td align='right'>14.07</td>
		<td>Cincinnati Defense</td>
		<td>DEF</td>
		<td>CIN</td>
		<td align='right'>162.7</td>
                <td align='right'>11.5</td>
                <td align='right'>11.12</td>
                <td align='right'>15.12</td>
		<td align='right'>278</td>
		<td align='center'><input onclick='updatePlayer(1306);' type='checkbox' name='graph[]' value='1306' id='player_1306' /></td>
		</tr><tr class='WR'>
	   	<td align='right'>202</td>
		<td align='right'>14.07</td>
		<td>Lance Moore</td>
		<td>WR</td>
		<td>NO</td>
		<td align='right'>163.1</td>
                <td align='right'>17.7</td>
                <td align='right'>10.09</td>
                <td align='right'>15.12</td>
		<td align='right'>53</td>
		<td align='center'><input onclick='updatePlayer(836);' type='checkbox' name='graph[]' value='836' id='player_836' /></td>
		</tr><tr class='QB'>
	   	<td align='right'>203</td>
		<td align='right'>14.07</td>
		<td>Matt Hasselbeck</td>
		<td>QB</td>
		<td>SEA</td>
		<td align='right'>163.2</td>
                <td align='right'>13.1</td>
                <td align='right'>11.09</td>
                <td align='right'>15.12</td>
		<td align='right'>42</td>
		<td align='center'><input onclick='updatePlayer(500);' type='checkbox' name='graph[]' value='500' id='player_500' /></td>
		</tr><tr class='PK'>
	   	<td align='right'>204</td>
		<td align='right'>14.09</td>
		<td>Rob Bironas</td>
		<td>PK</td>
		<td>TEN</td>
		<td align='right'>165.5</td>
                <td align='right'>11.0</td>
                <td align='right'>12.04</td>
                <td align='right'>15.12</td>
		<td align='right'>197</td>
		<td align='center'><input onclick='updatePlayer(92);' type='checkbox' name='graph[]' value='92' id='player_92' /></td>
		</tr><tr class='DEF'>
	   	<td align='right'>205</td>
		<td align='right'>14.10</td>
		<td>Miami Defense</td>
		<td>DEF</td>
		<td>MIA</td>
		<td align='right'>165.9</td>
                <td align='right'>12.4</td>
                <td align='right'>12.01</td>
                <td align='right'>15.12</td>
		<td align='right'>89</td>
		<td align='center'><input onclick='updatePlayer(1316);' type='checkbox' name='graph[]' value='1316' id='player_1316' /></td>
		</tr><tr class='DEF'>
	   	<td align='right'>206</td>
		<td align='right'>14.10</td>
		<td>Indianapolis Defense</td>
		<td>DEF</td>
		<td>IND</td>
		<td align='right'>166.0</td>
                <td align='right'>15.6</td>
                <td align='right'>11.05</td>
                <td align='right'>15.12</td>
		<td align='right'>30</td>
		<td align='center'><input onclick='updatePlayer(1313);' type='checkbox' name='graph[]' value='1313' id='player_1313' /></td>
		</tr><tr class='PK'>
	   	<td align='right'>207</td>
		<td align='right'>14.10</td>
		<td>Sebastian Janikowski</td>
		<td>PK</td>
		<td>OAK</td>
		<td align='right'>166.4</td>
                <td align='right'>27.0</td>
                <td align='right'>8.12</td>
                <td align='right'>15.12</td>
		<td align='right'>44</td>
		<td align='center'><input onclick='updatePlayer(593);' type='checkbox' name='graph[]' value='593' id='player_593' /></td>
		</tr><tr class='PK'>
	   	<td align='right'>208</td>
		<td align='right'>14.11</td>
		<td>David Akers</td>
		<td>PK</td>
		<td>PHI</td>
		<td align='right'>166.9</td>
                <td align='right'>10.3</td>
                <td align='right'>12.08</td>
                <td align='right'>15.12</td>
		<td align='right'>444</td>
		<td align='center'><input onclick='updatePlayer(7);' type='checkbox' name='graph[]' value='7' id='player_7' /></td>
		</tr><tr class='PK'>
	   	<td align='right'>209</td>
		<td align='right'>14.12</td>
		<td>Adam Vinatieri</td>
		<td>PK</td>
		<td>IND</td>
		<td align='right'>167.5</td>
                <td align='right'>16.4</td>
                <td align='right'>11.04</td>
                <td align='right'>15.12</td>
		<td align='right'>166</td>
		<td align='center'><input onclick='updatePlayer(1195);' type='checkbox' name='graph[]' value='1195' id='player_1195' /></td>
		</tr><tr class='PK'>
	   	<td align='right'>210</td>
		<td align='right'>15.02</td>
		<td>Robbie Gould</td>
		<td>PK</td>
		<td>CHI</td>
		<td align='right'>170.0</td>
                <td align='right'>7.7</td>
                <td align='right'>13.05</td>
                <td align='right'>15.12</td>
		<td align='right'>39</td>
		<td align='center'><input onclick='updatePlayer(439);' type='checkbox' name='graph[]' value='439' id='player_439' /></td>
		</tr><tr class='PK'>
	   	<td align='right'>211</td>
		<td align='right'>15.03</td>
		<td>Neil Rackers</td>
		<td>PK</td>
		<td>HOU</td>
		<td align='right'>171.3</td>
                <td align='right'>7.4</td>
                <td align='right'>13.08</td>
                <td align='right'>15.12</td>
		<td align='right'>179</td>
		<td align='center'><input onclick='updatePlayer(959);' type='checkbox' name='graph[]' value='959' id='player_959' /></td>
		</tr></table><input type='hidden' id='adp_teams' name='teams' value='12'/><input type='hidden' id='adp_rounds' name='rounds' value='15'/>
<div id='flash_chart'>

<h2 style='padding:0px;'>Average Draft Position</h2>

<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000"
	codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0" 
	WIDTH="400" 
	HEIGHT="250" 
	id="charts" 
	ALIGN="">
<PARAM NAME=movie VALUE="/helper/xml_swf_graphs/charts.swf?library_path=/helper/xml_swf_graphs/charts_library&xml_source=/helper/adp_graph_xml.php%3Fteams%3D12">
<PARAM NAME=quality VALUE=high>
<PARAM NAME=bgcolor VALUE=#FFFFFF>

<EMBED src="/helper/xml_swf_graphs/charts.swf?library_path=/helper/xml_swf_graphs/charts_library&xml_source=/helper/adp_graph_xml.php%3Fteams%3D12" 
       quality=high 
       bgcolor=#FFFFFF  
       WIDTH="450" 
       HEIGHT="250" 
       NAME="charts" 
       ALIGN="" 
       swLiveConnect="true" 
       TYPE="application/x-shockwave-flash" 
       PLUGINSPAGE="http://www.macromedia.com/go/getflashplayer">
</EMBED>
</OBJECT>

<br/>Select the players to graph from the list on the left.<br/>Click below to view their draft position over time.<br/><input type='submit' onclick="return updateGraph();" id='update' value='Update graph'/>
<br/><br/><br/>


<script type="text/javascript"><!--
google_ad_client = "pub-1278517201480397";
/* 300x250, created 8/2/10 */
google_ad_slot = "5949007390";
google_ad_width = 300;
google_ad_height = 250;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>

<!-- Rotoworld Ad
<p id="referral" style="margin-bottom: 2em; margin-top: 2em;">Over 500 profiles, stat projections, rankings, cheat sheets.  The Rotoworld.com Fantasy Football Draft guide. <a href="http://www.rotoworld.com/referredby/refer.asp?id=FFC&amp;;url=http://www.rotoworld.com/premium/draftguide/football/main_page.aspx">Click here</a></p>
<a href="http://www.rotoworld.com/referredby/refer.asp?id=FFC&url=http://www.rotoworld.com/premium/draftguide/football/main_page.aspx">
<embed
  src="/img/RW_300x250_FFC.swf"
  width="300"
  height="250"
  allowscriptaccess="always"
  allowfullscreen="true"
/></a>
-->

</div>

<div style="clear:both; margin-top: 10px;">
<script type="text/javascript"><!--
google_ad_client = "pub-1278517201480397";
/* 728x90, created 5/18/08 */
google_ad_slot = "8017331017";
google_ad_width = 728;
google_ad_height = 90;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
</div>

</div>

<div id="ft">
  <div>
    <b>Mock Drafts:</b>
    <a href="/mockdrafts">Join a mock draft</a>
    <a href="/adp.php">Average draft position</a>
    <a href="/completed_drafts.php">Completed drafts</a>
  </div>
  <div>
    <b>Applications:</b>
    <a href="/applications">Applications</a>
    <a href="/lineup">Lineup calculator</a>
    <a href="/membership">Membership</a>
  </div>
  <div>
    <b>Members:</b>
    <a href="/user.php">My dashboard</a>
    <a href="/login">Login</a>
    <a href="/user_forgot.php">Forgot password</a>
    <a href="/help">Help</a>
  </div>
  <div>
    <b>Other:</b>
    <a href="/">Home</a>
    <a href="/blog">Blog</a>
    <a href="/news">News</a>
    <a href="/contact">Contact</a>
    <a href="/links.php">Links</a>
    <a href="/tos.php">Terms of service</a>
    <a href="/privacy.php">Privacy policy</a>
  </div>
  <div id="copyright">Copyright 2010 Fantasy Football Calculator LLC</div>
</div>
</div>

<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-616253-1");
pageTracker._trackPageview();
if(ga_track){ pageTracker._trackPageview(ga_track); }
} catch(err) {}</script>


<script type="text/javascript">
var domainy = location.protocol == "https:" ? "https://static.getclicky.com" : "http://static.getclicky.com";
document.write(unescape("%3Cscript src='" + domainy + "/33976.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<noscript><p><img alt="Clicky" width="1" height="1" src="http://static.getclicky.com/33976-db5.gif" /></p></noscript>

<script type="text/javascript" src="http://dnn506yrbagrg.cloudfront.net/pages/scripts/0011/0743.js"> </script>

</body>
</html>