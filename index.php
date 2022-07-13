<?php
    include_once("templates/header.php");
    // print_r($posts) so para vc ver que vc pode acessar de qq lugar esses dados mocados
?>

<main>
    <div id="title-container">
        <h1>Blog  Codar</h1>
        <p>O Seu Blog De Programação</p>
    </div>

    <div id="posts-container">
        <?php foreach($posts as $post): ?>
            <div class="post-box">
                <img src="<?= $BASE_URL?>img/<?= $post['img']?>" alt="<?= $post['title'] ?>">
                <h2 class="post-title">
                    <a href="<?= $BASE_URL?>post.php?id=<?= $post['id'] ?>"><?= $post['title'] ?></a>
                </h2>
                <p class="post-description"><?= $post['description'] ?></p>
                <div class="tags-container">
                    <?php foreach($post['tags'] as $tag):?>
                        <a href=""><?= $tag ?></a>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</main>

<section id="sobre">
    <h1>Saiba mais!</h1>

    <p>
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vero repellendus inventore porro. Aspernatur nisi eius nesciunt eaque sed aperiam possimus, autem consequatur sunt nostrum totam ratione, quis dolore, quod odit.

        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quaerat, in magnam. Quos illum maxime corrupti quibusdam et, dolorem perspiciatis, eos nulla, laudantium quas quam at laborum saepe doloribus officiis? Molestiae?
    </p>

    <p>
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vero repellendus inventore porro. Aspernatur nisi eius nesciunt eaque sed aperiam possimus, autem consequatur sunt nostrum totam ratione, quis dolore, quod odit.

        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quaerat, in magnam. Quos illum maxime corrupti quibusdam et, dolorem perspiciatis, eos nulla, laudantium quas quam at laborum saepe doloribus officiis? Molestiae?
    </p>

    <span id="frase">Clique - objeto com interação</span>
    <h3 class="h3">Vantagens Dos Nossos Produtos</h3>
    <div id="explica">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum expedita facilis sapiente ratione porro labore, provident illo quia rem possimus dolor, nesciunt, repellendus est laborum fugit reprehenderit molestiae fuga nisi.
    </div>
</section>

<script src="<?= $BASE_URL?>/scripts/frase.js"></script>

<?php
    include_once("templates/footer.php")
?>
