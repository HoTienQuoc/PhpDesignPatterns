<?php
namespace Framework;

class Viewer{
    public function render(string $template, array $data = []):string{
        extract($data, EXTR_SKIP);
        // require_once "src/views/$template";
        return file_get_contents("src/views/$template");
    }
}