<?php

namespace Kanboard\Plugin\RevisarTask;

use Kanboard\Core\Plugin\Base;

class Plugin extends Base
{
    public function initialize()
    {
        global $revisarTaskConfig;

        if (file_exists('plugins/RevisarTask/config.php'))
        {
            require_once('plugins/RevisarTask/config.php');
        }

        $this->hook->on('template:layout:css', array('template' => 'plugins/RevisarTask/Assets/css/btn_revisar.css'));

        $this->template->hook->attach('template:task:details:bottom', 'RevisarTask:task/revisado_button', [
            'revisarTaskConfig' => $revisarTaskConfig
        ]);
    }

    public function getPluginName()
    {
        return 'RevisarTask';
    }

    public function getPluginDescription()
    {
        return t('Adiciona botão que muda a cor da task para a cor revisada.');
    }

    public function getPluginAuthor()
    {
        return 'Mateus S.S';
    }

    public function getPluginVersion()
    {
        return '1.0.0';
    }

    public function getPluginHomepage()
    {
        return 'https://github.com/Massnt/RevisarTask.git';
    }
}

