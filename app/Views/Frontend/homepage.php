<h1> salut </h1>

<?php

var_dump($hydratePost);


foreach ($hydratePost as $post){
    ?>
    <div>
        <p><?php var_dump($delete)?></p>
        <p><?=$post['username']?></p>
        <p><?=$post['content']?></p>
        <p><?=$post['date']?></p>
        <button onclick="<?=$delete?>" > Commentaires </button>
        <hr>
    </div>

<?php }?>







