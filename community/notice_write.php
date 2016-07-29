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
	<main id="content" class="community notice-write">
		<div class="container">
			<section class="notice-write">
				<div class="section-header">
                    <hr>
				    <h3>묻고답하기</h3>
				    <p>
                        <i>백제예술대학교 NCS지원센터</i>는 <br>
                        문화·예술 분야 교육을 통해 대학의 특성화 및 교육의 질 향상을 지원합니다.
                    </p>
				</div>
				<div class="table-wrap">
				    <form class="write-form">
                        <table class="table table-border">
                            <colgroup>
                                <col style="width: 198px"/>
                                <col style="width: 387px"/>
                                <col style="width: 198px"/>
                                <col style="width: 387px"/>
                            </colgroup>
                            <tbody>
                                <tr>
                                    <th><label for="user">작성자</label></th>
                                    <td colspan="3"><input type="text" id="user" class="text-input"></td>
                                </tr>
                                <tr>
                                    <th><label for="user-pw">비밀번호</label></th>
                                    <td><input type="password" id="user-pw" class="text-input"></td>
                                    <td>공개여부</td>
                                    <td>
                                        <input type="radio" id="choice-1">
                                        <label for="choice-1">공개</label>
                                        <input type="radio" id="choice-2">
                                        <label for="choice-2">비공개</label>
                                    </td>
                                </tr>
                                <tr>
                                    <th><label for="subject">제목</label></th>
                                    <td colspan="3"><input type="text" id="subject"></td>
                                </tr>
                                <tr>
                                    <td colspan="4">
                                        <label for="content-text" class="sr-only">내용</label>
                                        <textarea id="content-text"></textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <th><label for="file">첨부파일</label></th>
                                    <td colspan="3"><input type="file" id="file"></td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="btn-area">
                            <p>
                                <button type="submit" class="btn btn-red">글쓰기</button>
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
