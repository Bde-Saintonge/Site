<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\User
 *
 * @property int $id
 * @property string $name
 * @property string $lastname
 * @property string $email
 * @property string $password
 * @property string|null $class
 * @property int $office_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read string $profile_photo_url
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \App\Models\Office $office
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Role[] $roles
 * @property-read int|null $roles_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Sanctum\PersonalAccessToken[] $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\UserFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereClass($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereLastname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereOfficeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property string $first_name
 * @property string $last_name
 * @method static \Illuminate\Database\Eloquent\Builder|User whereFirstName($value)
 */
class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'lastname',
        'email',
        'password',
        'office_id',
        'created_at',
        'updated_at'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
    ];

    public function office()
    {
        return $this->belongsTo(Office::class);
    }

    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

    static function generate_error($name)
    {
        return [
            $name . '.accepted' => 'Ce champ doit être acceptée.',
            $name . '.active_url' => "Ce champ n'est pas une URL valide.",
            $name . '.after' => 'Ce champ doit être une date postérieure à :date.',
            $name . '.after_or_equal' => 'Ce champ doit être une date postérieure ou égale à :date.',
            $name . '.alpha' => 'Ce champ ne peut contenir que des lettres.',
            $name . '.alpha_dash' => 'Ce champ ne peut contenir que des lettres, des chiffres, des tirets et des traits de soulignement.',
            $name . '.alpha_num' => 'Ce champ ne peut contenir que des lettres et des chiffres.',
            $name . '.array' => 'Ce champ doit être un tableau.',
            $name . '.before' => 'Ce champ doit être une date antérieure à :date.',
            $name . '.before_or_equal' => 'Ce champ doit être une date antérieure ou égale à :date.',
            $name . '.between' => [
                'numeric' => 'Ce champ doit être compris entre :min et :max.',
                'file' => 'Ce champ doit être compris entre :min et :max kilo-octets.',
                'string' => 'Ce champ doit être compris entre les caractères :min et :max.',
                'array' => 'Ce champ doit avoir entre les éléments :min et :max.',
            ],
            $name . '.boolean' => 'Ce champ doit être vrai ou faux.',
            $name . '.confirmed' => 'La confirmation ne correspond pas.',
            $name . '.date' => "Ce champ n'est pas une date valable.",
            $name . '.date_equals' => "Ce champ doit être une date égale à :date.",
            $name . '.date_format' => "Ce champ ne correspond pas au format :format.",
            $name . '.different' => 'Ce champ et :autre doit être différent.',
            $name . '.digits' => 'Ce champ doit être :digits chiffres.',
            $name . '.digits_between' => 'Ce champ doit être compris entre :min et :max.',
            $name . '.dimensions' => "Ce champ a des dimensions d'image non valables.",
            $name . '.distinct' => 'Ce champ a une valeur en double.',
            $name . '.email' => 'Ce champ doit être une adresse électronique valide.',
            $name . '.ends_with' => "Ce champ doit se terminer par l'une des following: :values.",
            $name . '.exists' => "L'attribut sélectionné n'est pas valide.",
            $name . '.file' => 'Ce champ doit être un fichier.',
            $name . '.filled' => 'Ce champ doit avoir une valeur.',
            $name . '.gt' => [
                'numeric' => 'Ce champ doit être supérieure à :value.',
                'file' => 'Ce champ doit être supérieure à :value kilo-octets.',
                'string' => 'Ce champ must be greater than :value caractères.',
                'array' => 'Ce champ doit avoir plus de :value items.',
            ],
            $name . '.gte' => [
                'numeric' => 'Ce champ doit être supérieure ou égale :value.',
                'file' => 'Ce champ doit être supérieure ou égale :value kilo-octets.',
                'string' => 'Ce champ doit être supérieure ou égale :value caractères.',
                'array' => 'Ce champ doit avoir :value ou plus.',
            ],
            $name . '.image' => 'Ce champ doit être une image.',
            $name . '.in' => "Le champ sélectionné n'est pas valable.",
            $name . '.in_array' => "Ce champ n'existe pas dans :other.",
            $name . '.integer' => 'Ce champ doit être un nombre entier.',
            $name . '.ip' => 'Ce champ doit être une adresse IP valide.',
            $name . '.ipv4' => 'Ce champ doit être une adresse IPv4 valide.',
            $name . '.ipv6' => 'Ce champ doit être une adresse IPv6 valide.',
            $name . '.json' => 'Ce champ doit être une chaîne JSON valide.',
            $name . '.lt' => [
                'numeric' => 'Ce champ doit être inférieure à :value.',
                'file' => 'Ce champ doit être inférieur à : valeur kilo-octets.',
                'string' => 'Ce champ doit être inférieur aux caractères :value.',
                'array' => 'Ce champ doit avoir moins de :value items.',
            ],
            $name . '.lte' => [
                'numeric' => 'Ce champ doit être inférieure ou égale :value.',
                'file' => 'Ce champ doit être inférieure ou égale :value kilo-octets.',
                'string' => 'Ce champ doit être inférieure ou égale :value caractères.',
                'array' => 'Ce champ ne doit pas avoir plus de :value items.',
            ],
            $name . '.max' => [
                'numeric' => 'Ce champ ne peut être supérieure à :max.',
                'file' => 'Ce champ ne peut être supérieure à :max kilo-octets.',
                'string' => 'Ce champ ne peut être supérieure à :max caractères.',
                'array' => 'Ce champ ne peut pas avoir plus de :max items.',
            ],
            $name . '.mimes' => 'Ce champ doit être un fichier de type: :values.',
            $name . '.mimetypes' => 'Ce champ doit être un fichier de type: :values.',
            $name . '.min' => [
                'numeric' => 'Ce champ doit être au moins :min.',
                'file' => 'Ce champ doit être au moins :min kilo-octets.',
                'string' => 'Ce champ doit être au moins :min caractères.',
                'array' => 'Ce champ must have at least :min items.',
            ],
            $name . '.multiple_of' => 'Ce champ doit être un multiple de :value',
            $name . '.not_in' => "Ce champ sélectionné n'est pas valable.",
            $name . '.not_regex' => "Ce champ n'est pas valide.",
            $name . '.numeric' => 'Ce champ doit être un chiffre.',
            $name . '.password' => 'Ce champ est incorrect.',
            $name . '.present' => 'Le champ doit être présent.',
            $name . '.regex' => "Ce champ n'est pas valide.",
            $name . '.required' => 'Veuillez compléter ce champ il est obligatoire.',
            $name . '.required_if' => 'Ce champ est obligatoire lorsque :other est :value.',
            $name . '.required_unless' => 'Le champ est obligatoire, sauf si :other est en :values.',
            $name . '.required_with' => 'Le champ est obligatoire lorsque :values est présent.',
            $name . '.required_with_all' => 'Le champ est obligatoire lorsque :values sont présents.',
            $name . '.required_without' => "Le champ est obligatoire lorsque :values n'est pas présent.",
            $name . '.required_without_all' => 'Le champ est obligatoire lorsque aucune des :values sont présents.',
            $name . '.same' => 'Ce champ et :other doivent correspondre.',
            $name . '.size' => [
                'numeric' => 'Ce champ doit être :size.',
                'file' => 'Ce champ doit être :size kilo-octets.',
                'string' => 'Ce champ doit être :size caractères.',
                'array' => 'Ce champ doit contenir :size items.',
            ],
            $name . '.starts_with' => "Ce champ doit commencer par l'un des éléments suivants: :values.",
            $name . '.string' => 'Ce champ doit être une chaîne de caractère.',
            $name . '.timezone' => 'Ce champ doit être une zone valable.',
            $name . '.unique' => 'Ce champ a déjà été complété.',
            $name . '.uploaded' => "Ce champ n'a pas réussi à être télécharger.",
            $name . '.url' => "Ce champ n'est pas valide.",
            $name . '.uuid' => 'Ce champ doit être une UUID valide.',
        ];
    }
}
