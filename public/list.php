<?php
include "../part/head.php";
?>

<?php
$dbConn = mysqli_connect("site16.blog.oa.gg", "site16", "sbs123414", "site16", 3306) or die("DB CONNECTION ERROR");

if ( empty($_GET['cateItemId']) ) {
    $cateItemId = null;
}
else{
    $cateItemId = $_GET['cateItemId'];
}

if(empty($cateItemId)){
    $sql = "
    SELECT `name`
    FROM cateItem
    ";
}
else {
    $sql = "
    SELECT `name`
    FROM cateItem
    WHERE id = {$cateItemId}
    ";
}

$rs = mysqli_query($dbConn, $sql);
$row = mysqli_fetch_assoc($rs);
$cateItemName = $row['name'];


if(empty($cateItemId)){
    $sql = "
    SELECT *
    FROM article
    ORDER BY id DESC
    ";
}
else {
    $sql = "
    SELECT *
    FROM article
    WHERE cateItemId = {$cateItemId}
    ORDER BY id DESC
    ";
}

$rs = mysqli_query($dbConn, $sql);

$articleRows = [];
while ($row = mysqli_fetch_assoc($rs)) {
    $articleRows[] = $row;
}
?>

<div class="con top-sub1">
    <h1 class="catename"><?=$cateItemName?></h1>

    <div class="sub-icon"><img src="/resource/img/sub-icon.png" alt=""></div>

</div>

<div class=" con under-line"></div>

<ul class="list-box con row">
    <?php foreach ( $articleRows as $article ) { ?>

    <?php
    if (empty($article['thumbImgUrl'])) {
        $article['thumbImgUrl'] = "https://wjdtjdbsdlwldb.github.io/img1/blog/article/2020/bn-6.jpg";
} 
?>
    <li class="web-infor con cell">
        <div class="img-box" style= "background-image:url(<?=$article['thumbImgUrl']?>);">
        </div>
        <div class="text-box">
            <a href="./detail.php?id=<?=$article['id']?>" class="title">
                <?=$article['title']?><br>
                <?=$article['summary']?>
            </a><br>
        </div>
    </li>

    <?php } ?>
</ul>

<?php
include "../part/foot.php";
?>