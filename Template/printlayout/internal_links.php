<section class="accordion-section <?= empty($links) ? 'accordion-collapsed' : '' ?>">
    <div class="accordion-title">
        <h3><a href="#" class="fa accordion-toggle"></a> <?= t('Internal links') ?></h3>
    </div>
    <div class="accordion-content">
        <?= $this->render('Task2pdf:printlayout/i_links_table', array(
            'links' => $links,
            'task' => $task,
            'project' => $project,
            'editable' => $editable,
            'is_public' => $is_public,
        )) ?>
    </div>
</section>
