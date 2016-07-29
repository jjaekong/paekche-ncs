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
		</div>
	</div>
	<div class="page-nav">
		<div class="container">
			<ol class="breadcrumb">
				<li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
				<li><a href="#">센터소개</a></li>
				<!-- li class="active">수업자료실</li -->
				<li class="active dropdown">
					<a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">운영목표<span class="caret"></span></a>
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
	<main id="content" class="center target">
		<div class="container">
			<section class="target">
				<div class="section-header">
                    <hr>
				    <h3>운영목표</h3>
				    <p>
                        미래를 선도하는 <i>백제예술대학교</i>는 <br>
                        NCS 기반 교육과목운영으로 학과별 인력양성목표를 달성합니다.
                    </p>
				</div>
                <div class="culture">
                    <h2>NCS 기반 문화·예술산업</h2>
                    <figure>
                        <img src="/assets/images/center/target_img01.png" alt="개발,운영,평가">
                        <figcaption>
                            <i>예술·예능 분야의 창의성을 갖춘 문화·예술분야 인력 양성을 위해</i><br>
                            문화·예술·디자인·방송 산업에 특화된  NCS기반(현장직무중심) 교육과정의<br>
                            체계적인 개발과 효율적인 운영 지원을 목표로  하고 있습니다.
                        </figcaption>
                    </figure>
                </div>
			</section>
		</div>
	</main>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>
