<?php
include "../part/head.php";
?>

<div class="title">
    <div class="main-text">DAILY</div>
    <img src="/resource/img/sub-icon.png" alt="">
</div>

<div class="under-line con"></div>



<ul class="con flex">
    <?php 
    for ($i = 3; $i >= 1; $i--) { ?> 
        <li><a href="/detail.php?id=<?=$i?>"><?=$i?>번글</a></li>
    <?php }
        ?>
</ul>
<?php
include "../part/foot.php";
?>