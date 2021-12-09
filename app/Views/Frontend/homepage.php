<h1> salut </h1>

<?php


foreach ($posts as $post){
    ?>
    <div>
<!--        <p>--><?php //var_dump($post)?><!--</p>-->
        <p><?=$post['userName']?></p>
        <p><?=$post['content']?></p>
        <p><?=$post['date']?></p>
        <hr>
    </div>

<?php }?>





