<!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8">
		<title>蓝源Eloan-P2P平台</title>
		<!--视口: 兼容移动端-->
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<!--引入bootstrap核心样式-->
		<link rel="stylesheet" type="text/css" href="lib/bootstrap/css/bootstrap.min.css" />
		<!--引入自定义样式-->
		<link rel="stylesheet" type="text/css" href="dist/css/min/index.min.css"/>
		<!--引入自定义字体图标-->
		<link rel="stylesheet" type="text/css" href="lib/fontawesome/css/fontawesome-all.css"/>
		<!--兼容低版本的浏览器-->
		<!--[if lt IE 9]>
	      <script src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	      <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
	    <![endif]-->
	</head>

	<body>
		<!--引入header-->
		<?php
			include_once("./header.html");
		?>

		<!--轮播图-->
		<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
		  <!-- Indicators -->
		  <ol class="carousel-indicators">
		    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
		    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
		  </ol>
		
		  <!-- Wrapper for slides -->
		  <div class="carousel-inner" role="listbox">
		    <div class="item active">
		      <img src="static/images/banner01.jpg" alt="广告1">
		      <div class="carousel-caption"></div>
		    </div>
		    <div class="item">
		      <img src="static/images/banner02.jpg" alt="广告2">
		      <div class="carousel-caption"></div>
		    </div>
		  </div>
		
		  <!-- Controls -->
		  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
		    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
		    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
		  </a>
		</div>
		
		<!--三大特色-->
		<div class="container" id="feature">
			<div class="row">
				<div class="col-lg-4 col-md-4 col-xs-12">
					<h4>投资理财</h4>
                    <p>稳定投资、高收益、短期限，易融贷先行赔付，保障投资人权益。</p>
				</div>
				<div class="col-lg-4 col-md-4 col-xs-12">
					<h4>投资理财</h4>
                    <p>稳定投资、高收益、短期限，易融贷先行赔付，保障投资人权益。</p>
				</div>
				<div class="col-lg-4 col-md-4 col-xs-12">
					<h4>投资理财</h4>
                    <p>稳定投资、高收益、短期限，易融贷先行赔付，保障投资人权益。</p>
				</div>
			</div>
		</div>
		
		<!--投资信息列表-->
		<div class="container" id="invest">
			<!--面板的结构-->
			<div class="panel panel-default">
			  <div class="panel-heading">
			  	<h1>进行中借款</h1>
			  	<p><a href="#">进入投资列表</a></p>
			  </div>
			  <table class="table table-hover">
			      <thead>
			        <tr>
			          <th>借款人</th>
			          <th class="hide620">借款标题</th>
			          <th>年利率</th>
			          <th>金额</th>
			          <th class="hide620">还款方式</th>
			          <th>进度</th>
			          <th>操作</th>
			        </tr>
			      </thead>
			      <tbody>
			        <tr>
			          <th scope="row">张三</th>	
			          <td class="hide620">给我2000度过难关</td>
			          <td class="text-info">10.00%</td>
			          <td>2,000.00</td>
			          <td class="hide620">按月分期还款</td>
			          <td>78.00%</td>
			          <td><button type="button" class="btn btn-sm btn-danger">查看</button></td>
			        </tr>
			        <tr>
			          <th scope="row">张三</th>	
			          <td class="hide620">给我2000度过难关</td>
			          <td class="text-info">10.00%</td>
			          <td>2,000.00</td>
			          <td class="hide620">按月分期还款</td>
			          <td>78.00%</td>
			          <td><button type="button" class="btn btn-sm btn-danger">查看</button></td>
			        </tr>
			      </tbody>
			    </table>
			</div>
		</div>
		
			
		<!--文章信息-->
		<div class="container" id="article">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-xs-12">
					<!--面板的结构-->
					<div class="panel panel-default">
					  <!--标题-->
					  <div class="panel-heading">
					  	<h1>企业最新资讯</h1>
					  	<p><a href="#">更多资讯</a></p>
					  </div>
					  <div class="panel-body">
					     <ul>
					     	<li>央视力挺互联网金融 <span>发表日期：2015-03-23</span></li>
					     	<li>央视力挺互联网金融 <span>发表日期：2015-03-23</span></li>
					     	<li>央视力挺互联网金融 <span>发表日期：2015-03-23</span></li>
					     	<li>央视力挺互联网金融 <span>发表日期：2015-03-23</span></li>
					     </ul>
					  </div>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-xs-12">
					<!--面板的结构-->
					<div class="panel panel-default">
					  <!--标题-->
					  <div class="panel-heading">
					  	<h1>用户反馈</h1>
					  	<p><a href="#">更多资讯</a></p>
					  </div>
					  <div class="panel-body">
					     <ul>
					     	<li>央视力挺互联网金融 <span>发表日期：2015-03-23</span></li>
					     	<li>央视力挺互联网金融 <span>发表日期：2015-03-23</span></li>
					     	<li>央视力挺互联网金融 <span>发表日期：2015-03-23</span></li>
					     	<li>央视力挺互联网金融 <span>发表日期：2015-03-23</span></li>
					     </ul>
					  </div>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-xs-12">
					<!--面板的结构-->
					<div class="panel panel-default">
					  <!--标题-->
					  <div class="panel-heading">
					  	<h1>理财经验</h1>
					  	<p><a href="#">更多资讯</a></p>
					  </div>
					  <div class="panel-body">
					     <ul>
					     	<li>央视力挺互联网金融 <span>发表日期：2015-03-23</span></li>
					     	<li>央视力挺互联网金融 <span>发表日期：2015-03-23</span></li>
					     	<li>央视力挺互联网金融 <span>发表日期：2015-03-23</span></li>
					     	<li>央视力挺互联网金融 <span>发表日期：2015-03-23</span></li>
					     </ul>
					  </div>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-xs-12">
					<!--面板的结构-->
					<div class="panel panel-default">
					  <!--标题-->
					  <div class="panel-heading">
					  	<h1>活动分享</h1>
					  	<p><a href="#">更多资讯</a></p>
					  </div>
					  <div class="panel-body">
					     <ul>
					     	<li>央视力挺互联网金融 <span>发表日期：2015-03-23</span></li>
					     	<li>央视力挺互联网金融 <span>发表日期：2015-03-23</span></li>
					     	<li>央视力挺互联网金融 <span>发表日期：2015-03-23</span></li>
					     	<li>央视力挺互联网金融 <span>发表日期：2015-03-23</span></li>
					     </ul>
					  </div>
					</div>
				</div>
			</div>
		</div>
		
		<!--页脚-->
		<!--引入footer-->
		<?php
			include_once("./footer.html");
		?>
		
		
		
	</body>
	<!--引入jQuery库-->
	<script src="lib/jquery/jquery-1.11.0.js" type="text/javascript" charset="utf-8"></script>
	<!--引入bootstrap-->
	<script src="lib/bootstrap/js/bootstrap.min.js" type="text/javascript" charset="utf-8"></script>
	<!--引入自定义js-->
	<script src="src/javascript/index.js"></script>
</html>