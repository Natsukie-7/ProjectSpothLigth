<?php

namespace app\framework\classes;

use Exception;

class Engine {
    public function render($view, $data = []) {
        $dirname = dirname(__FILE__, 2);
        $view = "$dirname/resources/views/$view.php";

        if (!file_exists($dirname)) {
            throw new Exception("View $view not exists");
        }

        ob_start();

        extract($data);
        require $view;

        $content = ob_get_contents();

        ob_end_clean();

        return $content;
    }
}