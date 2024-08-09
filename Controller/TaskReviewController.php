<?php

namespace Kanboard\Plugin\RevisarTask\Controller;

use Kanboard\Controller\BaseController;

class TaskReviewController extends BaseController
{
    public function markAsReviewed()
    {
        $task_id = $this->request->getIntegerParam('task_id');
        $project_id = $this->request->getIntegerParam('project_id');

        $this->taskModificationModel->update(array('id' => $task_id, 'color_id' => 'blue'));
        $this->response->redirect($this->helper->url->to('TaskViewController', 'show', array('task_id' => $task_id, 'project_id' => $project_id)));

    }

}
