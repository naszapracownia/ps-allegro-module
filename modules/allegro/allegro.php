<?php
if (!defined('_PS_VERSION_')) { exit; }

class Allegro extends Module
{
    public function __construct()
    {
        $this->name = 'allegro';
        $this->tab = 'others';
        $this->version = '1.0.0';
        $this->author = 'naszapracownia';
        $this->need_instance = 0;

        parent::__construct();

        $this->displayName = $this->l('Allegro Integration');
        $this->description = $this->l('Prosty moduł startowy pod integrację z Allegro.');
        $this->ps_versions_compliancy = ['min' => '1.7.0.0', 'max' => _PS_VERSION_];
    }

    public function install()
    {
        return parent::install();
    }

    public function uninstall()
    {
        return parent::uninstall();
    }
}
