<?php 
    include_once("templates/header.php");
    include_once("data/posts.php");
    include_once("data/categories.php");

    if(isset($_GET['id'])) {

        $postid = $_GET['id'];
        $currentPost;

        foreach($posts as $post) {

            if($post['id'] == $postid) {
                $currentPost = $post;
            }
        } 
    }
?>
    <main id="post-container">
        <div class="content-container">
            <h1 id="main-title"><?= $currentPost['title'] ?></h1>
            <p id="post-description"><?= $currentPost['description'] ?></p>
            <div class="img-container">
                <img src="<?= $BASE_URL ?>/img/<?= $currentPost['img'] ?>" alt="<?= $currentPost['title'] ?>">
            </div>
            <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto harum rem voluptate, illum mollitia necessitatibus commodi porro quas laudantium voluptatum aspernatur facilis repellendus eveniet vitae. Molestiae, accusamus labore! Impedit, temporibus.
            Vero atque dolore nemo recusandae sint porro dicta id repellat fuga architecto? Harum est veniam quisquam optio blanditiis ullam molestiae deserunt consectetur, quod vero at autem modi? Esse, repellat earum?
            Excepturi quaerat nam placeat magnam, sit cum autem saepe corrupti velit suscipit, corporis asperiores ab odio soluta voluptatibus voluptate? Magni dolorem velit adipisci tenetur ipsa iste porro tempore iure animi?
            Perferendis illum, provident, aspernatur quidem molestiae sequi labore cupiditate reprehenderit asperiores corporis amet dolores id minus pariatur, quas iste! Similique eligendi asperiores dicta expedita amet eum adipisci voluptatibus! Eos, nobis!
            Reiciendis est maiores, aliquid, quaerat natus qui debitis quis expedita possimus accusamus aperiam, labore magnam nostrum id? Vitae illum omnis dolorem facilis rerum, iusto in eveniet! Dolor deleniti autem officiis.</p>
       
            <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat at sint earum dolorem iste consectetur cupiditate. Dolore ea facilis dolores, nostrum ullam porro quasi, quidem, veniam officia quibusdam enim autem?
            Labore eligendi autem quo non, corporis id reiciendis obcaecati corrupti optio nam rerum nostrum dolorem. Reiciendis voluptate fuga libero? Architecto deleniti illum blanditiis nam distinctio iste fugiat quidem molestiae vero.
            Ut, impedit deserunt distinctio quibusdam rem ex rerum quisquam magni, quod veritatis mollitia aliquam laudantium delectus perferendis suscipit veniam voluptatibus eligendi porro in! Numquam, eaque expedita maiores libero beatae quasi!
            Distinctio nihil quam rerum hic sint quos suscipit fuga nulla, repudiandae id voluptatum quaerat doloribus laudantium, perferendis asperiores, libero quod ad recusandae dolore optio? Accusantium reprehenderit distinctio nisi perspiciatis fugiat?
            Minus, vitae aperiam repellendus ea atque doloribus aliquid quasi porro voluptatem est labore dolorum tenetur ad. Incidunt minima vel, quidem consectetur fuga libero modi. Quis ea doloribus in laudantium deleniti!</p>
        </div>

        <aside id="nav-container">
        <h3 id="tags-title">Tags</h3>
        <ul id="tag-list">
            <?php foreach($currentPost['tags'] as $tag): ?>
                <li><a href="#"><?= $tag ?></a></li>
            <?php endforeach; ?>
            </ul>
            <h3 id="categories-title">Categorias</h3>
            <ul id="categories-list">
             <?php foreach($categories as $category): ?>
                 <li><a href="#"><?= $category ?></a></li>
             <?php endforeach; ?>
             </ul>
        </aside>
    </main>
    
<?php
    include_once("templates/footer.php")
?>
    

