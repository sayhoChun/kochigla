<? include_once $_SERVER["DOCUMENT_ROOT"]."/mygift/inc/header.php"; ?>
    <script>
        $(document).ready(function(){

            var currentPage = 1;
            var isFinal = false;

            function loadMore(page){
                loadPageInto(
                    "/mygift/ajaxPages/ajaxNoticeList.php",
                    {
                        page : page,
                        query : "<?=$_REQUEST["query"]?>",
                        type: 1
                    },
                    ".jContainer",
                    true,
                    function(){
                        isFinal = true;
                        currentPage--;
                        $(".jLoadMore").hide();
                    }
                );
            }

            loadMore(currentPage);

            $(".jLoadMore").click(function(e){
                e.preventDefault();
                loadMore(++currentPage);
            });

            $(document).on("click", ".jDetail", function(){
                var id = $(this).attr("noticeID");
                location.href = "noticeDetail.php?id=" + id;
            });

        });
    </script>
			<!-- Main -->
				<div id="main" class="wrapper style1">
					<div class="container">
						<header class="major">
							<h2>공지사항</h2>
                            <p>Kochigla의 새로운 소식</p>
						</header>

						<!-- Content -->
							<section id="content">
                                <div class="col-12 jContainer">

                                </div>
                                <div class="col-12 align-center">
                                    <a href="#" class="jLoadMore button icon fa-spinner small">더보기</a>
                                </div>
							</section>

					</div>
				</div>

			<!-- Footer -->
<? include_once $_SERVER["DOCUMENT_ROOT"]."/mygift/inc/footer.php"; ?>