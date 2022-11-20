<form class="header__form" role="search" method="get" id="searchform" action="<?php echo home_url( '/' ) ?>">
    <div class="header__form-row">
        <button class="header__form-btn"></button>
        <input class="header__form-input"  placeholder="Искать врача или специальность" required="" type="text" value="<?php echo get_search_query(); ?>" name="s" id="s">
    </div>
</form>