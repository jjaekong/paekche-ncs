<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead_sub.php'); ?>
<link href="/assets/css/sub.css" rel="stylesheet">
<link href="/assets/css/community.css" rel="stylesheet">
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
				<li><a href="#">커뮤니티</a></li>
				<!-- li class="active">수업자료실</li -->
				<li class="active dropdown">
					<a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">묻고답하기<span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="/community/news.php">뉴스/보도</a></li>
						<li><a href="/community/notice.php">묻고답하기</a></li>
					</ul>
				</li>
			</ol>
		</div>
	</div>
	<main id="content" class="community confirm-pw">
		<div class="container">
			<section class="confirm-pw">
				<div class="section-header">
                    <hr>
				    <h3>뉴스/보도</h3>
				    <p>
                        <i>백제예술대학교 NCS지원센터</i>는 <br>
                        문화·예술 분야 교육을 통해 대학의 특성화 및 교육의 질 향상을 지원합니다.
                    </p>
				</div>
                <div class="section-content">
                    <form>
                        <h2>비밀번호를 입력해주세요</h2>
                        <p>게시글 작성시 입력하셨던 비밀번호를 입력해주세요</p>
                        <label for="user-pw" class="sr-only">비밀번호입력</label>
                        <input type="password" id="user-pw">
                        <div class="btn-area">
                            <p>
                                <button type="submit" class="btn btn-gray">확인</button>
                            </p>
                        </div>
                    </form>
                </div>
			</section>
		</div>
	</main>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>
