<ul class="pnkz cts">
    <?php foreach ($pnkz_list as $_item): ?>
        <?php if($_item['url'] != ''): ?>
            <li><a href="<?php echo $_item['url'] ?>"><?php echo $_item['page'] ?></a></li>
        <?php else: ?>
            <li><?php echo $_item['page'] ?></li>
        <?php endif; ?>
    <?php endforeach; ?>
</ul>