<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

// パスワードリセット通知のカスタムクラス
//php artisan make:notification CustomResetPasswordNotificationで作成後、toMail関数をカスタマイズ
class CustomResetPasswordNotification extends Notification
{
    use Queueable;

    public $token;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($token)
    {
        $this->token = $token;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }


    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {

        $url = url(config('app.url').route('password.reset', ['token' => $this->token, 'email' => $notifiable->getEmailForPasswordReset()], false));
        $expire = config('auth.passwords.' . config('auth.defaults.passwords') . '.expire');

        return (new MailMessage)
            ->subject(__('Reset Password Notification'))
            ->markdown('emails.reset_password', [
                'greeting' => '',
                'introLines' => [
                    __('You are receiving this email because we received a password reset request for your account.')
                ],
                'actionText' => __('Reset Password'),
                'actionUrl' => $url,
                'outroLines' => [
                    __('This password reset link will expire in :count minutes.', ['count' => $expire]),
                    __('If you did not request a password reset, no further action is required.')
                ],
                'salutation' => __('Best Regards.'),
            ]);
    }

}
