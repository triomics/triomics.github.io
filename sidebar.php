<!-- sidebar -->
<div class="col-md-3 col-md-offset-1 col-sm-4">

    <!-- widget  -->
    <div class="widget margin-twenty no-margin-lr no-margin-top xs-margin-twelve xs-no-margin-lr xs-no-margin-top">
        <form>
            <i class="fa fa-search close-search search-button"></i>
            <input type="text" name="search" class="alt-font blog-search-btn"  name="s" id="s" placeholder="TYPE KEYWORD HERE...">
        </form>
    </div>
    <!-- end widget  -->
    <!-- widget  -->
    <div class="widget">
        <span class="alt-font text-uppercase dark-gray-text font-weight-600 text-large">Categories</span>
        <div class="bg-golden-yellow separator-line-thick no-margin-lr md-margin-eleven md-no-margin-lr"></div>
        <div class="widget-body">
            <?php 
                $terms = get_terms("category");
                $count = count($terms);
                if($count > 0){
                    echo "<ul class=\"category-list\">";
                    foreach ($terms as $term) {
                    echo "<li><a href=\"".$term->slug."\">".$term->name."</a></li>";

                    }
                    echo "</ul>";
                }
            ?>
        </div>
    </div>
    <!-- end widget  -->
    <!-- widget  -->
    <div class="widget">
        <?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
            <?php dynamic_sidebar ('sidebar-1'); ?>
        <?php endif; ?>
    </div>
    <!-- end widget  -->   
    <!-- widget  -->
    <div class="widget">
        <span class="alt-font text-uppercase dark-gray-text font-weight-600 text-large">Text Widget</span>
        <div class="bg-golden-yellow separator-line-thick no-margin-lr md-margin-eleven md-no-margin-lr"></div>
        <div class="widget-body">
            <p>Lorem Ipsum is simply dummy text of printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the of type and scrambled it to make a type specimen.</p>
        </div>
    </div>
    <!-- end widget  --> 
    </div>
</div>
<!-- end sidebar -->