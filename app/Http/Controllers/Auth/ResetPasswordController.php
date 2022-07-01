<?php

namespace App\Http\Controllers\Auth;

use App\Mail\ResetPassword as ResetPasswordEmail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class ResetPasswordController extends BaseController
{
    /**
     * Méthode qui permet de lancer le processus de réinitialisation de mot de passe.
     *
     * @var Request
     */
    public function reset(Request $request)
    {
        if (!Auth::check()) {
            $user = DB::table('users')
                ->where('email', '=', $request->email)
                ->first();

            // Check if the user exists
            if (is_null($user)) {
                return redirect()
                    ->back()
                    ->withErrors([
                        'error' => "L'utilisateur n'existe pas en base !",
                    ]);
            }

            // Change the password and send it to the user
            if ($this->resetPassword($user)) {
                return redirect()
                    ->back()
                    ->with([
                        'success' => [
                            'Un nouveau mot de passe a été envoyé à votre adresse électronique.',
                        ],
                    ]);
            }

            return redirect()
                ->back()
                ->withErrors([
                    'error' => 'Une erreur de réseau s\'est produite. Veuillez réessayer.',
                ]);
        }

        return back()->withErrors([
            'error' => 'Veillez-vous déconnecter avant de modifier votre mot de passe.',
        ]);
    }

    /**
     * Méthode qui permet d'enregistrer le nouveau mot de passe et envoyer l'email.
     *
     *
     * @param mixed $user
     */
    private function resetPassword($user): bool
    {
        $new_password = $this->generate_password(20);

        User::find($user->id)->update([
            'password' => Hash::make($new_password),
        ]);

        $temp = new \stdClass();
        $temp->user = $user;
        $temp->newPassword = $new_password;

        Mail::to($user->email)->send(new ResetPasswordEmail($temp));

        return true;
    }

    /**
     * Méthode qui permet de générer le nouveau mdp
     * $n.
     */
    public function generate_password(int $n)
    {
        $characters =
            '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ-_@#$^%&;:=?!';
        $randomString = '';

        for ($i = 0; $i < $n; ++$i) {
            $index = rand(0, strlen($characters) - 1);
            $randomString .= $characters[$index];
        }

        return $randomString;
    }
}
