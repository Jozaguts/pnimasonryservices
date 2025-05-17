<?php

namespace App\Notifications;

use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class ContactFormNotification extends Notification
{
    public array $data;
    public function __construct(array $data)
    {
        $this->data = $data;
    }

    public function via($notifiable): array
    {
        return ['mail'];
    }

    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->subject('Nuevo mensaje desde el formulario de contacto')
            ->greeting('Hola!')
            ->line('Has recibido un nuevo mensaje:')
            ->line('Nombre: ' . $this->data['full_name'])
            ->line('Email: ' . $this->data['email'])
            ->line('Asunto: ' . $this->data['subject'])
            ->line('Mensaje: ')
            ->line($this->data['message']);
    }

    public function toArray($notifiable): array
    {
        return [];
    }
}
