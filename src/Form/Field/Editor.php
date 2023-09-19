<?php

namespace Encore\Admin\Form\Field;

use Encore\Admin\Form\Field;

class Editor extends Field
{
    protected static $js = [
        'https://cardhome.oss-cn-shanghai.aliyuncs.com/js/ckeditor-v1.3.js',
    ];

    public function render()
    {
        $config = json_encode([
            'simpleUpload' => [
                'uploadUrl' => '/admin/upload-editor-image',
                'headers' => [
                    'X-CSRF-TOKEN' => 'CSRF-Token',
                ]
            ]
        ]);
        $this->script = "ClassicEditor.create( document.querySelector( '#{$this->id}' ), {$config} )";

        return parent::render();
    }
}
