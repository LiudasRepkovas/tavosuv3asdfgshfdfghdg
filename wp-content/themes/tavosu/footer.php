</div>

</div>
<div class="mobile-footer">
    <?php if (is_active_sidebar('sidebar_bottom')) : ?>
        <div class="sidebar-bottom widget-area" role="complementary">
            <ul>
                <?php dynamic_sidebar('sidebar_bottom'); ?>
            </ul>
        </div>
    <?php endif; ?>
    <div class="copyright">
        © 2016 Tavosu. All rights reserved.
    </div>
</div>

</div>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.2.2.1.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.fitvids.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/main.js"></script>
</body>
</html>