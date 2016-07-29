<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead_sub.php'); ?>
<link href="/assets/css/sub.css" rel="stylesheet">
<link href="/assets/css/introduce.css" rel="stylesheet">
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
				<li><a href="#">NCS소개</a></li>
				<!-- li class="active">수업자료실</li -->
				<li class="active dropdown">
					<a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">용어설명<span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="/introduce/ncs_info.php">NCS란</a></li>
						<li><a href="/introduce/term.php">용어설명</a></li>
						<li><a href="/introduce/system.php">NCS분류체계</a></li>
						<li><a href="/introduce/module.php">NCS학습모듈</a></li>
						<li><a href="/introduce/ability.php">직업기초능력</a></li>
					</ul>
				</li>
			</ol>
		</div>
	</div>
	<main id="content" class="introduce term">
		<div class="container">
			<section class="term">
				<div class="section-header">
                    <hr>
				    <h3>용어설명</h3>
				    <p>
                        <i>백제예술대학교 NCS지원센터</i>는 <br>
                        문화·예술 분야 교육을 통해 대학의 특성화 및 교육의 질 향상을 지원합니다.
                    </p>
				</div>
                <h4>직무(job)</h4>
                <p>틀정 직무에서 업무를 성공적으로 수행하기 위하여 요구되는 능력을 교육훈련 및 평가가 가능한 기능 단위로 개발한 것</p>
                <h4>능력단위(Duty)</h4>
                <p>특정 직무에서 업무를 성공적으로 수행하기 위하여 요구되는 능력을 교육훈련 및 평가가 가능한 기능 단위로 개발한 것</p>
                <h4>능력단위 요소(Task)</h4>
                <p>해당 능력단위를 구성하는 중요한 범위 안에서 수행하는 기능을 도출한 것</p>
                <h4>수행준거</h4>
                <p>각 능력단위 요소별로 능력의 성취여부를 판단하기 위해 개인들이 도달해야 하는 수행의 기준</p>
                <h4>지식/기술/태도(Knowledge/Skill/Attitude)</h4>
                <p>능력단위 요소별로 수행하는 데 필요한 지식, 기술, 태도</p>
                <h4>직업기초능력</h4>
                <p>능력단위별로 업무 수행을 위해 기본적으로 갖추어야 할 공통 능력</p>
			</section>
		</div>
	</main>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>
