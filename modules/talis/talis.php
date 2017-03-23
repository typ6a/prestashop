<?php
if (!defined('_PS_VERSION_'))
  exit;

class Talis extends Module
{
    public function __construct()
    {
        $this->name = 'talis';
        $this->tab = 'TALIS';
        $this->version = '0.1';
        $this->author = 'Dmitry Znak';
        $this->bootstrap = true;
        parent::__construct();
        $this->displayName = $this->l('Talis module');
        $this->description = $this->l('Танин модуль загрузки - выгрузки товаров с удобным добавленим аксессуаров к продуктам.');
    }

    public function getContent()
        {
        return 'Талис';
        }

}
