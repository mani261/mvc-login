<?php
class Core
{
    protected $currentController = "Index";
    protected $currentMethod = "Index";
    protected $param = [];

    public function __construct()
    {
        $this->getUrl();
    }

    public function getUrl()
    {
        if (isset($_GET['url'])) {
            echo $_GET['url'];
        }else {
            echo "index";
        }
    }
}
