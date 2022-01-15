



            <form role="search" method="get" id="searchform"
    class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <div class="input-group mt-5 mb-3">
        <label class="screen-reader-text" for="s"><?php _x( 'Search for:', 'label' ); ?></label>
        <input type="text" class="form-control form-control-lg rounded-pill" value="<?php echo get_search_query(); ?>" name="s" id="s" />
        <button type="submit" class="input-group-text rounded-end bg-light"><i class="icon-search"></i></button>
                </div>
</form>