<?php

namespace Coconuts\Mail;

class MailMessage
{
    public $view = 'postmark::postmark';
    public $subject = 'subject';
    public $attachments = [];
    public $rawAttachments = [];
    public $priority;
    public $callbacks = [];

    protected $viewData = [];
    protected $alias;
    protected $id;

    public function id($id)
    {
        $this->id = $id;

        return $this;
    }

    public function alias($alias)
    {
        $this->alias = $alias;

        return $this;
    }

    public function with($data = [])
    {
        $this->viewData = $data;

        return $this;
    }

    public function data()
    {
        return [
            'id' => $this->id,
            'alias' => $this->alias,
            'data' => $this->viewData,
        ];
    }
}
