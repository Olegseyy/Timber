<aside id="sidebar">
    <div class="container-items">
        <?php dynamic_sidebar('let_sidebar'); ?>  
        <?php 
            $all_categories = get_categories( array(
                'orderby' => 'name',
                'parent'  => 0
            ));
            $category_link_array = array();
            foreach( $all_categories as $cat ):
                printf( '<a href="%1$s">%2$s</a> ',
                    esc_url( get_category_link( $cat->term_id ) ),
                    esc_html( $cat->name )
                );
            endforeach;              
        ?>
    </div>         
</aside>
