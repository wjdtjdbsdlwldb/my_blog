<?php
$dbConn = mysqli_connect("site16.blog.oa.gg", "site16", "sbs123414", "site16", 3306) or die("DB CONNECTION ERROR");

$cateItemId = $_GET['cateItemId'];

$sql = "
SELECT *
FROM cateItem
WHERE id = {$cateItemId}
";
$rs = mysqli_query($dbConn, $sql);
$row = mysqli_fetch_assoc($rs);
$cateItemName = $row['name'];

$sql = "
SELECT *
FROM article
WHERE cateItemId = {$cateItemId}
ORDER BY id DESC
";
$rs = mysqli_query($dbConn, $sql);

$articleRows = [];
while ($row = mysqli_fetch_assoc($rs)) {
    $articleRows[] = $row;
}
?>
<?php foreach ( $articleRows as $article ) { ?>
<div>
    <a href="./detail.php?id=<?=$article['id']?>">번호 : <?=$article['id']?>, 제목 : <?=$article['title']?>, 작성날짜 : <?=$article['regDate']?></a>
</div>
<?php } ?>