<!-- sidebar php berguna untuk bagian sidebar didalam website -->
<aside id="sidebar">
    <?php if (is_active_sidebar('sidebar1')): ?>
        <div class="widget-area">
            <ul>
            <?php dynamic_sidebar('sidebar1'); ?>
            </ul>
        </div>
        <?php endif; ?>
</aside>