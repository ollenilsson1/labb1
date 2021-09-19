<?php
/**
 * Template för meddelande om inget sökresultat hittats
 *
 */
?>

<article id="post-0" class="post no-results not-found">
    <header class="entry-header">
        <h1 class="entry-title"><?php _e('Inga blogginlägg hittades..', 'shape');?></h1>
    </header>

    <!-- Om inget sökresultat visas, visa div med sökruta och ett felmeddelande -->
    <div class="entry-content">
        <?php if (is_search()): ?>

           <p><?php _e('Tyvärr kunde vi inte hitta något, försök gärna igen med andra sökord.', 'shape');?></p>
           <?php get_search_form();?>

        <?php endif;?>
    </div>
</article>