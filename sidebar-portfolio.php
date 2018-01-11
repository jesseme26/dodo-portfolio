<aside class="sidebar">
<h3>Filter my portfolio</h3>
<section class="widget">
<?php
//display all terms in the "work_type"
wp_list_categories( array(
'taxonomy' => 'type_of_work',
'title_li'	=> ' ',
) ); ?>

</section>

</aside>