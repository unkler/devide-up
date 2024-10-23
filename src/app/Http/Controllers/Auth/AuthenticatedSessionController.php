<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     *
     * @param  \App\Http\Requests\Auth\LoginRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(LoginRequest $request)
    {
        $request->authenticate();

        $request->session()->regenerate();

        return redirect()->intended(RouteServiceProvider::HOME);
    }

    /**
     * Destroy an authenticated session.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

    /**
     * OAuthプロバイダーの認証ページにリダイレクト
     *
     * @param string $provider OAuthプロバイダーの名前（例: 'google', 'facebook'）
     * @return \Illuminate\Http\RedirectResponse プロバイダーの認証ページへのリダイレクトレスポンス
     */
    public function redirectToProvider(string $provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    /**
     * OAuthプロバイダーからのコールバックを処理
     * 指定されたOAuthプロバイダーからのユーザー情報を取得し、
     * 既存のユーザーとしてログインさせるか、新規登録ページにリダイレクト
     *
     * @param string $provider OAuthプロバイダーの名前（例: 'google', 'facebook'）
     * @return \Illuminate\Http\RedirectResponse
     * - 認証に成功した場合、ホームページにリダイレクト
     * - ユーザーが存在しない場合、新規登録ページにリダイレクト
     */
    public function handleProviderCallback(string $provider)
    {
        try {
            $providerUser = Socialite::driver($provider)->stateless()->user();
        } catch (\Exception $e) {
            return redirect()->to(config('app.url'));
        }

        $user = User::where('email', $providerUser->getEmail())->first();

        if ($user) {
            Auth::login($user);

            return redirect()->intended(RouteServiceProvider::HOME);
        }

        return redirect()->route('register.{provider}', [
            'provider' => $provider,
            'email' => $providerUser->getEmail(),
            'token' => $providerUser->token,
        ]);
    }
}
