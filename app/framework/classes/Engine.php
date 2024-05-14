<?php 

namespace app\framework\classes;

class Engine
{
    public function render(string $view, array $data = [])
    {
        $view = dirname(__FILE__, 2) . "/Resources/Views/{$view}.php";

        if (!file_exists($view)) {
            throw new \Exception("Template {$view} not found");
        }

        ob_start();
        
        extract($data);
        require $view;
        $content = ob_get_contents();
        ob_end_clean();
        
        return $content;
    }
}