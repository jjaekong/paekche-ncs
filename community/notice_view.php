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
	<main id="content" class="community notice-view">
		<div class="container">
			<section class="notice-view">
				<div class="section-header">
                    <hr>
				    <h3>묻고답하기</h3>
				    <p>
                        <i>백제예술대학교 NCS지원센터</i>는 <br>
                        문화·예술 분야 교육을 통해 대학의 특성화 및 교육의 질 향상을 지원합니다.
                    </p>
				</div>
				<article class="view-comment">
				    <header>
				        <h4>2015년 특성화전문대학육성사업 우수성과 사례로 백제예술대학 선정</h4>
				        <ul>
				            <li>
				                <ul>
				                    <li>
				                        <dl class="inline-dl">
				                            <dt>작성자</dt>
				                            <dd>홍길동</dd>
				                        </dl>
				                    </li>
				                    <li>
				                        <dl class="inline-dl">
				                            <dt>작성일</dt>
				                            <dd>2016-07-20</dd>
				                        </dl>
				                    </li>
				                    <li>
				                        <dl class="inline-dl">
				                            <dt>조회수</dt>
				                            <dd>1,000</dd>
				                        </dl>
				                    </li>
				                </ul>
				            </li>
				            <li>
				                <dl class="inline-dl">
				                    <dt>첨부파일</dt>
				                    <dd><a href="#">abc.hwp</a></dd>
				                    <dd><a href="#">abc.hwp</a></dd>
				                    <dd><a href="#">abc.hwp</a></dd>
				                </dl>
				            </li>
				        </ul>
				    </header>
				    <div class="article-content">
				        게시판 내용
				    </div>
				    <div class="btn-area">
				        <p>
				            <a href="#" class="btn btn-red" role="button">목록</a>
				        </p>
				    </div>
				    <div class="comment">
                        <h3>COMMENT</h3>
                        <div class="comment-write">
                            <form>
                                <label for="user-name">이름</label>
                                <input type="text" id="user-name">
                                <label for="user-pw">패스워드</label>
                                <input type="password" id="user-pw">
                                <label for="comment-content" class="sr-only"></label>
                                <textarea id="comment-content"></textarea>
                                <div class="btn-area">
                                    <p>
                                        <a href="#" class="btn btn-green" role="button">글쓰기</a>
                                    </p>
                                </div>
                            </form>
                        </div>
                    </div>
                    <ul class="comment-view">
                        <li>
                            <h4>abc111 <span class="date">2016-03-27 오후 6:00:00</span></h4>
                            <p>댓글내용입니다. 댓글내용입니다. 댓글내용입니다. 댓글내용입니다. 댓글내용입니다. 댓글내용입니다.</p>
                            <div class="btn-area">
                                <p>
                                    <a href="#" class="btn" role="button"><img src="/assets/images/community/comment_btn01.png" alt="글쓰기"></a>
                                    <a href="#" class="btn" role="button"><img src="/assets/images/community/comment_btn02.png" alt="글삭제"></a>
                                </p>
                            </div>
                        </li>
                        <li>
                            <h4>abc111 <span class="date">2016-03-27 오후 6:00:00</span></h4>
                            <p>댓글내용입니다. 댓글내용입니다. 댓글내용입니다. 댓글내용입니다. 댓글내용입니다. 댓글내용입니다.</p>
                            <div class="btn-area">
                                <p>
                                    <a href="#" class="btn" role="button"><img src="/assets/images/community/comment_btn01.png" alt="글쓰기"></a>
                                    <a href="#" class="btn" role="button"><img src="/assets/images/community/comment_btn02.png" alt="글삭제"></a>
                                </p>
                            </div>
                        </li>
                        <li>
                            <h4>abc111 <span class="date">2016-03-27 오후 6:00:00</span></h4>
                            <p>댓글내용입니다. 댓글내용입니다. 댓글내용입니다. 댓글내용입니다. 댓글내용입니다. 댓글내용입니다.</p>
                            <div class="btn-area">
                                <p>
                                    <a href="#" class="btn" role="button"><img src="/assets/images/community/comment_btn01.png" alt="글쓰기"></a>
                                    <a href="#" class="btn" role="button"><img src="/assets/images/community/comment_btn02.png" alt="글삭제"></a>
                                </p>
                            </div>
                        </li>
                    </ul>
				</article>

			</section>
		</div>
	</main>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>
