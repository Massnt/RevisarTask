<?php if ($task['color_id'] == 'purple' &&
    $task['column_id'] == ($revisarTaskConfig['column_id'] ?? '31') &&
    $task['project_id'] == ($revisarTaskConfig['project_id'] ?? '1')) :?>
    <a id="revisar"
       type="button"
       data-chamado="<?= $task['title'] ?>"
       class="btn-revisar"
       href="<?= $this->url->href('TaskReviewController', 'markAsReviewed', array('plugin' => 'RevisarTask', 'project_id' => $task['project_id'], 'task_id' => $task['id'])) ?>">
        <span>Revisar</span>
    </a>
<?php endif; ?>
