<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead_sub.php'); ?>
<link href="/assets/css/sub.css" rel="stylesheet">
<link href="/assets/css/center.css" rel="stylesheet">
</head>
<body>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
	<div class="jumbo-wall">
		<div class="container">
			<p>
				대학특성화 및 교육의 질 향상을 위한 NCS지원센터<br>
				<small><i>N</i>ational <i>C</i>ompetency <i>S</i>tandards <i>S</i>upport <i>C</i>enter</small>
			</p>
		</div>
	</div>
	<div class="page-nav">
		<div class="container">
			<ol class="breadcrumb">
				<li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
				<li><a href="#">센터소개</a></li>
				<!-- li class="active">수업자료실</li -->
				<li class="active dropdown">
					<a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">찾아오시는길<span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="/center/target.php">운영목표</a></li>
						<li><a href="/center/group.php">조직구성</a></li>
						<li><a href="/center/business.php">주요업무</a></li>
						<li><a href="/center/location.php">찾아오시는길</a></li>
					</ul>
				</li>
			</ol>
		</div>
	</div>
	<main id="content" class="center location">
		<div class="container">
			<section class="location">
				<div class="section-header">
                    <hr>
				    <h3>찾아오시는길</h3>
				    <p>
                        <i>백제예술대학교 NCS지원센터</i>는 <br>
                        문화·예술 분야 교육을 통해 대학의 특성화 및 교육의 질 향상을 지원합니다.
                    </p>
				</div>
                <p>
                    <img src="/assets/images/center/location_map.jpg" alt="지도">
                </p>
                <div class="addr">
                    <dl class="inline-dl">
                        <dt>주소</dt>
                        <dd>55313 전북 완주군 봉동읍 백제대학로 171</dd>
                        <dt>전화번호</dt>
                        <dd>063-260-9109</dd>
                    </dl>
                </div>
			</section>
		</div>
	</main>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>
