<?php
include_once("templates/header.php");

    if(isset($_GET['id'])){
        $postid = $_GET['id'];
        $currentPost;

        foreach($posts as $post){
            if($post["id"] == $postid){
                $currentPost = $post;
            }
        }
    }
?>

<main id="post-container">
    <div class="content-container">
        <h1 id="main-title"><?= $currentPost['title'] ?></h1>
        <p id="post-description2"><?= $currentPost['description'] ?></p>
        <div class="img-container">
            <img src="<?= $BASE_URL?>/img/<?= $currentPost['img'] ?>" alt="<?= $currentPost['title']?>">
        </div>
        <p class="post-content">
            laudantium consequuntur ducimus ea tempora!
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius consequuntur, facilis quaerat maiores dolorum quas doloribus impedit doloremque. Accusantium error numquam blanditiis necessitatibus culpa placeat voluptate, voluptatibus inventore assumenda magni?
            Odio quis pariatur maxime rerum aspernatur, repellendus libero! Ab praesentium voluptas et temporibus! Quod ipsam itaque nisi repellat deserunt officia ab voluptatem voluptatum ipsum perspiciatis, nostrum blanditiis, beatae aliquam natus!
            Quaerat odit ducimus doloremque quasi totam corporis, veniam aperiam temporibus? Ducimus ipsum nostrum animi aliquam earum vero, nulla rerum quas atque similique? Natus sunt magni architecto beatae corporis fuga repellat.
            Reprehenderit ipsa earum nemo iure nisi accusamus cupiditate vel explicabo similique. Ea, est minus perspiciatis necessitatibus quae harum sapiente voluptate officia magnam, earum, ipsum laudantium soluta rerum architecto quas modi.
            Perferendis consequatur pariatur veniam. Ad totam architecto debitis nostrum rem quasi voluptatibus sequi, deleniti accusantium repellendus expedita suscipit eveniet molestiae nesciunt? Quam nostrum fuga obcaecati quo ut repellat et non!
        </p>

        <p class="post-content">
            laudantium consequuntur ducimus ea tempora!
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius consequuntur, facilis quaerat maiores dolorum quas doloribus impedit doloremque. Accusantium error numquam blanditiis necessitatibus culpa placeat voluptate, voluptatibus inventore assumenda magni?
            Odio quis pariatur maxime rerum aspernatur, repellendus libero! Ab praesentium voluptas et temporibus! Quod ipsam itaque nisi repellat deserunt officia ab voluptatem voluptatum ipsum perspiciatis, nostrum blanditiis, beatae aliquam natus!
            Quaerat odit ducimus doloremque quasi totam corporis, veniam aperiam temporibus? Ducimus ipsum nostrum animi aliquam earum vero, nulla rerum quas atque similique? Natus sunt magni architecto beatae corporis fuga repellat.
            Reprehenderit ipsa earum nemo iure nisi accusamus cupiditate vel explicabo similique. Ea, est minus perspiciatis necessitatibus quae harum sapiente voluptate officia magnam, earum, ipsum laudantium soluta rerum architecto quas modi.
            Perferendis consequatur pariatur veniam. Ad totam architecto debitis nostrum rem quasi voluptatibus sequi, deleniti accusantium repellendus expedita suscipit eveniet molestiae nesciunt? Quam nostrum fuga obcaecati quo ut repellat et non!
        </p>

        <p class="post-content">
            laudantium consequuntur ducimus ea tempora!
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius consequuntur, facilis quaerat maiores dolorum quas doloribus impedit doloremque. Accusantium error numquam blanditiis necessitatibus culpa placeat voluptate, voluptatibus inventore assumenda magni?
            Odio quis pariatur maxime rerum aspernatur, repellendus libero! Ab praesentium voluptas et temporibus! Quod ipsam itaque nisi repellat deserunt officia ab voluptatem voluptatum ipsum perspiciatis, nostrum blanditiis, beatae aliquam natus!
            Quaerat odit ducimus doloremque quasi totam corporis, veniam aperiam temporibus? Ducimus ipsum nostrum animi aliquam earum vero, nulla rerum quas atque similique? Natus sunt magni architecto beatae corporis fuga repellat.
            Reprehenderit ipsa earum nemo iure nisi accusamus cupiditate vel explicabo similique. Ea, est minus perspiciatis necessitatibus quae harum sapiente voluptate officia magnam, earum, ipsum laudantium soluta rerum architecto quas modi.
            Perferendis consequatur pariatur veniam. Ad totam architecto debitis nostrum rem quasi voluptatibus sequi, deleniti accusantium repellendus expedita suscipit eveniet molestiae nesciunt? Quam nostrum fuga obcaecati quo ut repellat et non!
        </p> 
    </div>
    <aside id="nav-container">
        <h3 id="tags-title">Tags</h3>
        <ul class="tag-list">
            <?php foreach($currentPost['tags'] as $tag):?>
                <li><a href=""><?= $tag ?></a></li>
            <?php endforeach; ?>
        </ul>
    
        <h3 id="categories-title">Categorias</h3>
        
        <ul id="categories-list">
            <?php foreach($categories as $category):?>
                <li><a href="#"><?= $category ?></a></li>
            <?php endforeach; ?>
        </ul>
    </aside>
</main>


<?php
    include_once("templates/footer.php");
?>