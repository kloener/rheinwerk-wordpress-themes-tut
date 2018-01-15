<?php if(is_page() && !is_page('Kontakt')): ?>
<aside>
    <h4>Haben Sie Fragen?</h4>
    <p>Nehmen Sie gerne <a href="<?php ?>">Kontakt</a> mit uns auf.</p>
</aside>
<?php endif; ?>
<?php if(is_single()): ?>
<aside>
    <ul>
        <?php wp_list_categories(); ?>
    </ul>
</aside>
<?php endif; ?>
<?php if(is_front_page()): ?>
<aside>
    <h4>Willkommen!</h4>
</aside>
<?php endif; ?>