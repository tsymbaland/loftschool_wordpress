<!-- sidebar-->
<div class="sidebar">
    <?php if ($tags = get_terms([
            'taxonomy' => 'post_tag',
            'hide_empty' => 0,
    ])) : ?>
        <div class="sidebar__sidebar-item">
            <div class="sidebar-item__title">Теги</div>
            <div class="sidebar-item__content">
                <ul class="tags-list">
                    <?php foreach ($tags as $tag): ?>
                        <li class="tags-list__item">
                            <a href="<?php echo get_term_link($tag->term_id) ?>"
                               class="tags-list__item__link">
                                <?php echo $tag->name ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    <?php endif; ?>
    <?php if ($categories = get_terms([
            'taxonomy' => 'category',
            'hide_empty' => 0,
    ])) : ?>
        <div class="sidebar__sidebar-item">
            <div class="sidebar-item__title">Категории</div>
            <div class="sidebar-item__content">
                <ul class="category-list">
					<?php foreach ($categories as $category): ?>
                        <li class="category-list__item">
                            <a href="<?php echo get_term_link($category->term_id) ?>"
                               class="category-list__item__link">
                                <?php echo $category->name ?>
                            </a>
                        </li>
					<?php endforeach; ?>
                </ul>
            </div>
        </div>
    <?php endif; ?>
</div>