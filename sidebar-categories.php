<aside class="archive">
    <ul class="archive_list">
        <?php 
            $args = array("title_li" => "");
            wp_list_categories($args);
        ?>
    </ul>
</aside>