<?php get_header(); the_post(); ?>
    <div class="main-content">
        <div class="content-wrapper">
            <div class="content">
                <div class="article-title title-page"><?php the_title() ?></div>
<!--                <div class="article-image"><img src="img/post-image.jpg" alt="Image поста"></div>-->
				<?php if (has_post_thumbnail()): ?>
                    <div class="article-image">
                        <?php the_post_thumbnail('full'); ?>
                    </div>
				<?php endif; ?>
                <div class="article-info">
                    <div class="post-date"><?php the_time('d.m.Y') ?></div>
                </div>
                <div class="article-text"><?php the_content(); ?></div>

                <div class="article-pagination">
                    <?php if ($previous = get_previous_post()): ?>
                        <div class="article-pagination__block pagination-prev-left">
                            <a href="<?= get_permalink($previous->ID) ?>" class="article-pagination__link">
                                Предыдущая статья<i class="icon icon-angle-double-left"></i>
                            </a>
                            <div class="wrap-pagination-preview pagination-prev-left">
								<?php if (has_post_thumbnail($previous->ID)): ?>
                                    <div class="preview-article__img">
										<?= get_the_post_thumbnail($previous->ID, /*'thumbnail'*/[160, 108]); ?>
                                    </div>
								<?php endif; ?>
                                <div class="preview-article__content">
                                    <div class="preview-article__info">
                                        <a href="#" class="post-date"><?= get_the_time('d.m.Y', $previous->ID) ?></a>
                                    </div>
                                    <div class="preview-article__text"><?= get_the_title($previous->ID) ?></div>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                    <?php if ($next = get_next_post()): ?>
                        <div class="article-pagination__block pagination-prev-right">
                            <a href="<?= get_permalink($next->ID) ?>" class="article-pagination__link">
                                Следующая статья<i class="icon icon-angle-double-right"></i>
                            </a>
                            <div class="wrap-pagination-preview pagination-prev-right">
								<?php if (has_post_thumbnail($next->ID)): ?>
                                    <div class="preview-article__img">
										<?= get_the_post_thumbnail($next->ID, /*'thumbnail'*/[160, 108]); ?>
                                    </div>
								<?php endif; ?>
                                <div class="preview-article__content">
                                    <div class="preview-article__info">
                                        <a href="#" class="post-date"><?= get_the_time('d.m.Y', $next->ID) ?></a>
                                    </div>
                                    <div class="preview-article__text"><?= get_the_title($next->ID) ?></div>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
            <?php get_sidebar(); ?>
        </div>
    </div>
<?php get_footer(); ?>