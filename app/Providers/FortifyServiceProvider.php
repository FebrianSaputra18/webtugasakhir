<?php

namespace App\Providers;

use App\Actions\Fortify\CreateNewUser;
use App\Actions\Fortify\ResetUserPassword;
use App\Actions\Fortify\UpdateUserPassword;
use App\Actions\Fortify\UpdateUserProfileInformation;
use App\Models\User;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\ServiceProvider;
use Laravel\Fortify\Fortify;

class FortifyServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Fortify::createUsersUsing(CreateNewUser::class);
        Fortify::updateUserProfileInformationUsing(UpdateUserProfileInformation::class);
        Fortify::updateUserPasswordsUsing(UpdateUserPassword::class);
        Fortify::resetUserPasswordsUsing(ResetUserPassword::class);

        Fortify::loginView(function () {
            return view('login');
        });
        RateLimiter::for('login', function (Request $request) {
            $phone_number = (string) $request->phone_number;

            return Limit::perMinute(5)->by($phone_number . $request->ip());
        });

        Fortify::authenticateUsing(function (Request $request) {
            $user = User::Where('phone_number', $request->phone_number)
            ->first();
            
            // dd($request->phone_number, $user->phone_number, Hash::check($request->password, $user->password));
            if (
                $user &&
                Hash::check($request->password, $user->password)
            ) {
                return $user;
            } else {
                $request->session()->flash('status', 'Gagal, pastikan nomor hp dan sandi anda benar!');
                // return false;
            }
        });

        RateLimiter::for('two-factor', function (Request $request) {
            return Limit::perMinute(5)->by($request->session()->get('login.id'));
        });
    }
}
