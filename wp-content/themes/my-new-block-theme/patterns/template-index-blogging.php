<?php
/**
 * Title: Blogging index template
 * Slug: my-new-block-theme/template-index-blogging
 * Template Types: index, home
 * Viewport width: 1400
 * Inserter: no
 */
?>

<!-- wp:template-part {"slug":"header","area":"header","tagName":"header"} /-->

<!-- wp:group {"tagName":"main","style":{"spacing":{"blockGap":"0","margin":{"top":"0"}}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group" style="margin-top:0">
	<!-- wp:heading {"level":1,"style":{"typography":{"lineHeight":"1"},"spacing":{"padding":{"top":"var:preset|spacing|50"}}}} -->
	<h1 class="wp-block-heading" style="padding-top:var(--wp--preset--spacing--50);line-height:1"><?php esc_html_e( 'Watch, Read, Listen', 'my-new-block-theme' ); ?></h1>
	<!-- /wp:heading -->

	<!-- wp:pattern {"slug":"my-new-block-theme/posts-1-col"} /-->
</main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","area":"footer","tagName":"footer"} /-->
