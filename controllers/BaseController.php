<?php

class BaseController
{

    // path format folder.filename
    // lay tu sau thu muc viewq

    const VIEW_FOLDER_NAME = 'views';
    const MODEL_FOLDER_NAME = 'models';


    protected function view($path, $data = [])
    {
        foreach ($data as $key => $value) {
            $$key = $value;
        }

        require(self::VIEW_FOLDER_NAME . '/' . str_replace('.', '/', $path) . '.php');
    }

    protected function loadModel($modelPath)
    {
        require(self::MODEL_FOLDER_NAME . '/' . $modelPath . '.php');
    }
}
