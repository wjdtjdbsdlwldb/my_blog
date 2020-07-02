<?php
include "../part/head.php";
?>
<?php
$conn = mysqli_connect("site16.blog.oa.gg", "site16", "sbs123414", "site16", 3306);

mysqli_query($conn, "SET NAMES utf8mb4");

$id = $_GET['id'];
$sql = "
SELECT *
FROM article
WHERE id = {$id}
";
$rs = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($rs);
?>
<!-- 하이라이트 라이브러리 추가, 토스트 UI 에디터에서 사용됨 -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/10.1.1/highlight.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/10.1.1/styles/default.min.css">

<!-- 하이라이트 라이브러리, 언어 -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/10.1.1/languages/css.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/10.1.1/languages/javascript.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/10.1.1/languages/xml.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/10.1.1/languages/php.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/10.1.1/languages/php-template.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/10.1.1/languages/sql.min.js"></script>

<!-- 코드 미러 라이브러리 추가, 토스트 UI 에디터에서 사용됨 -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.48.4/codemirror.min.css" />

<!-- 토스트 UI 에디터, 자바스크립트 코어 -->
<script src="https://uicdn.toast.com/editor/latest/toastui-editor-viewer.min.js"></script>

<!-- 토스트 UI 에디터, 신택스 하이라이트 플러그인 추가 -->
<script
    src="https://uicdn.toast.com/editor-plugin-code-syntax-highlight/latest/toastui-editor-plugin-code-syntax-highlight-all.min.js">
</script>

<!-- 토스트 UI 에디터, CSS 코어 -->
<link rel="stylesheet" href="https://uicdn.toast.com/editor/latest/toastui-editor.min.css" />

<div class="detail-sub-icon con"><img src="/resource/img/sub-icon.png" alt=""></div>
<div class="under-line con"></div>

<div class="con button">
    <a href="#" onclick="history.back();" class="back-btn">뒤로가기</a>
    <a href="/list.php" class="list-btn">리스트</a>
</div>


<div class="flex con detail-infor flex-jc-end flex-ai-c">
    <h1 class="detail-title flex flex-grow-1">제목 : <?=$row['title']?></h1>
    <div class="flex detail-reg">  
        등록날짜 : <?=$row['regDate']?>
    </div>
    <div class="flex detail-name">
        작성자 : 정서윤
    </div>
</div>

<div class="under-line2 con"></div>


<div class="con detail-body" style="display:none;" id="origin1">
    <?=$row['body']?>
</div>

<div class="con" id="viewer1">

</div>

<script>
    var editor1__initialValue = $('#origin1').html();
    var editor1 = new toastui.Editor({
        el: document.querySelector('#viewer1'),
        height: '600px',
        initialValue: editor1__initialValue,
        viewer: true,
        plugins: [toastui.Editor.plugin.codeSyntaxHighlight]
    });
</script>

<?php
include "../part/foot.php";
?>