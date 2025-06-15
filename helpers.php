<?php
    function render(string $component, array $props = []) {
        $file = __DIR__ . "/components/{$component}/index.php";
        if (!file_exists($file)) {
            throw new Exception("Component {$component} not found");
        }
        $data = (object)$props;
        include $file;
    }
?>