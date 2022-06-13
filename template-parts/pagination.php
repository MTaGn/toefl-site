<div class="pagination">
    <?php 
        echo paginate_links([
            "type" => "list",
            "show_all" => false,
            "mid_size" => 1,
            "end_size" => 1,
            "prev_text" => "&lt;&lt;",
            "next_text" => "&gt;&gt;",
        ]);
    ?>
</div>