<?php
include_once("templates/header.php");

if (isset($_GET['id'])) {

    $postId = $_GET['id'];
    $currentPost = [];

    foreach($posts as $post) {
        if($post['id'] == $postId) {
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
                <img src="<?=$BASE_URL ?>/img/<?= $currentPost['img'] ?>" alt="<?= $currentPost['title'] ?>">
            </div>
            <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium quae architecto doloremque itaque cum ea facilis in, quos laboriosam vel praesentium sunt ex eligendi velit fuga modi provident? Adipisci, ad.
            Impedit, velit animi mollitia, sequi perspiciatis consequuntur amet rem repellat aliquam, explicabo sunt! Fuga molestias libero et provident harum commodi dolores culpa iure illum ipsum! Repellendus corrupti tempore hic temporibus!
            Aspernatur esse id dolorem temporibus corporis ut perspiciatis dignissimos, sunt illum? Quo dolorum mollitia eveniet ipsam natus distinctio rem animi ut eaque aperiam ea illum quis consequatur enim, earum blanditiis!
            Dignissimos exercitationem iste vel est voluptatem. Non vitae vero iure exercitationem tempora doloribus ut esse sunt modi, deleniti incidunt perspiciatis ex repudiandae ipsam pariatur. Pariatur, qui. Sapiente, eligendi vitae. Recusandae!
            Vero voluptates quod exercitationem sint expedita rem amet doloremque doloribus, quis tenetur a adipisci numquam impedit hic consequuntur. Voluptatum tempora qui laudantium quos eligendi cupiditate, neque labore? Quo, doloremque ipsum.</p>
            <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium quae architecto doloremque itaque cum ea facilis in, quos laboriosam vel praesentium sunt ex eligendi velit fuga modi provident? Adipisci, ad.
            Impedit, velit animi mollitia, sequi perspiciatis consequuntur amet rem repellat aliquam, explicabo sunt! Fuga molestias libero et provident harum commodi dolores culpa iure illum ipsum! Repellendus corrupti tempore hic temporibus!
            Aspernatur esse id dolorem temporibus corporis ut perspiciatis dignissimos, sunt illum? Quo dolorum mollitia eveniet ipsam natus distinctio rem animi ut eaque aperiam ea illum quis consequatur enim, earum blanditiis!
            Dignissimos exercitationem iste vel est voluptatem. Non vitae vero iure exercitationem tempora doloribus ut esse sunt modi, deleniti incidunt perspiciatis ex repudiandae ipsam pariatur. Pariatur, qui. Sapiente, eligendi vitae. Recusandae!
            Vero voluptates quod exercitationem sint expedita rem amet doloremque doloribus, quis tenetur a adipisci numquam impedit hic consequuntur. Voluptatum tempora qui laudantium quos eligendi cupiditate, neque labore? Quo, doloremque ipsum.</p>
        </div>
    </main>
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
<?php
include_once("templates/footer.php")
?>