<li><a href="#search"><i class="fa fa-search"></i></a></li>
 <div id="search">
            <button type="button" class="close">×</button>
            <form role="search" method="GET" action="<?php  echo esc_url(bloginfo('home')); ?>">
                <span class="search-label">Search:</span>
                <input name="s" type="search" value="Search" placeholder="<?php  esc_html_e('Search...', 'marketing-reache');  ?>"/>
                <button type="submit" form="search" class="btn btn-primary"><i class="fa fa-search"></i></button>
            </form>
            
            
    </div>