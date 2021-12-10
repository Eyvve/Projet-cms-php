<h1 xmlns="http://www.w3.org/1999/html"> salut </h1>

<?php

var_dump($posts);


foreach ($posts as $post){

    ?>
    <div>

        <p><?php var_dump($delete)?></p>
        <p><?=$post['username']?></p>
        <p><?=$post['content']?></p>
        <p><?=$post['date']?></p>
        <p><?=$post['postId']?></p>

        <form action="deletePost" method="POST">
            <input  name="postId" type="hidden" value="<?=$post['postId']?>">
            <input  type="submit" value="supprimer">
        </form>

        

        <button onclick="<?=$delete?>" > Commentaires </button>
        <hr>
    </div>

<?php }?>







