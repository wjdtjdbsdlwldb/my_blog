<?php
include "../part/head.php";
?>

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