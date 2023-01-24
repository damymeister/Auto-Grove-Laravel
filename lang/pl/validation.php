<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => 'Pole :attribute musi być zaakceptowany.',
    'accepted_if' => 'Pole :attribute musi być zaakceptowane kiedy :other jest :value.',
    'active_url' => 'Pole :attribute nie jest poprawnym adresem URL.',
    'after' => 'Pole :attribute musi być datą po :date.',
    'after_or_equal' => 'The :attribute must be a date after or equal to :date.',
    'alpha' => 'Pole :attribute musi zawierać tylko litery.',
    'alpha_dash' => 'Pole :attribute może zawierać tylko litery, cyfry, myślniki i podkreślenia.',
    'alpha_num' => 'Pole :attribute musi zawierać tylko litery oraz cyfry.',
    'array' => 'Pole :attribute musi być tablicą.',
    'ascii' => 'Pole :attribute musi zawierać tylko jednobajtowe znaki alfanumeryczne i symbole.',
    'before' => 'Pole :attribute musi być datą przed :date.',
    'before_or_equal' => 'Pole :attribute musi być datą przed albo równą :date.',
    'between' => [
        'array' => 'Pole :attribute musi być pomiędzy :min i :max wartościami.',
        'file' => 'Pole :attribute musi być pomiędzy :min i :max kilobajtami.',
        'numeric' => 'Pole :attribute musi być pomiędzy :min i :max.',
        'string' => 'Pole :attribute musi być pomiędzy :min and :max znakami.',
    ],
    'boolean' => 'Pole :attribute musi być true albo false.',
    'confirmed' => 'Pola :attribute nie zgadzają się.',
    'current_password' => 'Hasło jest niepoprawne.',
    'date' => 'Pole :attribute nie jest poprawną datą.',
    'date_equals' => 'Pole :attribute musi być datą równą :date.',
    'date_format' => 'Pole :attribute nie pasuje do formatu :format.',
    'decimal' => 'Pole :attribute musi zawierać :decimal miejsca dziesiętne.',
    'declined' => 'Pole :attribute musi być odrzucone.',
    'declined_if' => 'Pole :attribute musi zostać odrzucone kiedy :other jest :value.',
    'different' => 'Pole :attribute i :other muszą się różnić.',
    'digits' => 'Pole :attribute musi być :digits cyframi.',
    'digits_between' => 'Pole :attribute musi zawierać się pomiędzy :min i :max cyframi.',
    'dimensions' => 'Pole :attribute ma nieprawidłowe wymiary obrazu.',
    'distinct' => 'Pole :attribute ma zduplikowaną wartość.',
    'doesnt_end_with' => 'Pole :attribute nie może kończyć się jednym z poniższych: :values.',
    'doesnt_start_with' => 'Pole :attribute nie może zaczynać się od jednego z poniższych: :values.',
    'email' => 'Pole :attribute musi zawierać poprawny adres E-mail.',
    'ends_with' => 'Pole :attribute musi kończyć się jedną z poniższych: :values.',
    'enum' => 'Wybrany :attribute jest niepoprawny.',
    'exists' => 'Wybrany :attribute jest niepoprawny.',
    'file' => 'Pole :attribute musi być plikiem.',
    'filled' => 'Pole :attribute musi mieć wartość.',
    'gt' => [
        'array' => 'Pole :attribute musi mieć więcej niż :value wartości.',
        'file' => 'Pole :attribute musi być większe niż :value kilobajty(ów).',
        'numeric' => 'Pole :attribute musi być większe niż :value.',
        'string' => 'Pole :attribute musi być większe niż :value znaków.',
    ],
    'gte' => [
        'array' => 'Pole :attribute musi mieć :value wartości albo więcej.',
        'file' => 'Pole :attribute musi być większe niż lub równe :value kliobajtom.',
        'numeric' => 'Pole :attribute musi być większe lub równe wartości :value.',
        'string' => 'Pole :attribute musi być większe lub równe wartości :value znaków.',
    ],
    'image' => 'Pole :attribute musi być obrazkiem.',
    'in' => 'Wybrany :attribute jest niepoprawny.',
    'in_array' => 'Pole :attribute nie istnieje w :other.',
    'integer' => 'Pole :attribute musi być typu całkowitego.',
    'ip' => 'Pole :attribute musi być poprawnym adresem IP.',
    'ipv4' => 'Pole :attribute musi być poprawnym adresem IPV4.',
    'ipv6' => 'Pole :attribute musi być poprawnym adresem IPV6.',
    'json' => 'Pole :attribute musi być poprawnym plikiem JSON.',
    'lowercase' => 'Pole :attribute musi mieć tylko małe litery.',
    'lt' => [
        'array' => 'Pole :attribute musi mieć mniej niż :value wartości.',
        'file' => 'Pole :attribute musi być mniej niż :value kilobajtów.',
        'numeric' => 'Pole :attribute musi być mniejsze niż :value.',
        'string' => 'Pole :attribute musi być mniejsze niż :value znaków.',
    ],
    'lte' => [
        'array' => 'Pole :attribute nie może mieć więcej niż :value wartości.',
        'file' => 'Pole :attribute musi mieć mniej lub tyle samo :value kilobajtów.',
        'numeric' => 'Pole :attribute musi być mniejsze lub równe :value.',
        'string' => 'Pole :attribute musi być mniejsze lub równe :value znakom.',
    ],
    'mac_address' => 'Pole :attribute musi być poprawnym MAC adresem.',
    'max' => [
        'array' => 'Pole :attribute nie może mieć więcej niż :max wartości.',
        'file' => 'Pole :attribute nie może być większe niż :max kilobajty.',
        'numeric' => 'Pole :attribute nie może być większe niż :max.',
        'string' => 'Pole :attribute nie może być większe niż :max znaków.',
    ],
    'max_digits' => 'Pole :attribute nie może mieć więcej niż :max cyfr.',
    'mimes' => 'Pole :attribute musi być plikiem typu: :values.',
    'mimetypes' => 'Pole :attribute musi być plikiem typu: :values.',
    'min' => [
        'numeric' => 'Pole :attribute musi zawierać liczbę nie mniejszą niż :min.',
        'file' => 'Plik :attribute musi zawierać minimum :min kilobajtów.',
        'string' => 'Pole :attribute musi zawierać co najmniej :min znaków.',
        'array' => 'Pole :attribute powinno zawierać minimum :min elementów.',
        ],       
    'min_digits' => 'Pole :attribute musi zawierać conajmniej :min cyfr.',
    'multiple_of' => 'Pole :attribute musi być wielokrotnością :value.',
    'not_in' => 'Wybrany :attribute jest niepoprwany.',
    'not_regex' => 'Wybrany :attribute format jest niepoprawny.',
    'numeric' => 'Pole :attribute musi być cyfrą.',
    'password' => [
        'letters' => 'Pole :attribute musi zawierać conajmniej jedną literę.',
        'mixed' => 'Pole :attribute musi zawierać conajmniej jedną duzą i małą literę.',
        'numbers' => 'Pole :attribute musi zawierać przynajmniej jedną cyfrę.',
        'symbols' => 'Pole :attribute musi zawierać conajmniej jeden znak.',
        'uncompromised' => 'Podany :attribute pojawił się w wycieku danych. Prosze wybierz inny :attribute.',
    ],
    'present' => 'Pole :attribute musi być obecne.',
    'prohibited' => 'Pole :attribute jest zakazane.',
    'prohibited_if' => 'Pole :attribute jest zakazane kiedy :other jest :value.',
    'prohibited_unless' => 'Pole :attribute jest zakazane dopóki :other jest w :values.',
    'prohibits' => 'Pole :attribute zakazuje :other od bycia obecnym.',
    'regex' => 'Pole :attribute ma niepoprawny format.',
    'required' => 'Pole :attribute jest wymagane.',
    'required_array_keys' => 'Pole :attribute musi zawierać wpisy :values.',
    'required_if' => 'Pole :attribute jest wymagane kiedy :other jest :value.',
    'required_if_accepted' => 'Pole :attribute jest wymagane gdy :other jest zaakceptowane.',
    'required_unless' => 'Pole :attribute jest wymagane dopóki :other jest w :values.',
    'required_with' => 'Pole :attribute jest wymagane gdy :values jest obecne.',
    'required_with_all' => 'Pole :attribute jest wymagane gdy :values są obecne.',
    'required_without' => 'Pole :attribute jest wymagane gdy :values nie są obecne.',
    'required_without_all' => 'Pole :attribute jest wymagane kiedy żadne z :values nie są obecne.',
    'same' => 'Pole :attribute i :other muszą być takie same.',
    'size' => [
        'array' => 'Pole :attribute musi zawierać :size wartości.',
        'file' => 'Pole :attribute musi być rozmiaru :size kilobajtów.',
        'numeric' => 'Pole :attribute musi być rozmiaru :size.',
        'string' => 'Pole :attribute musi być :size znaków.',
    ],
    'starts_with' => 'Pole :attribute musi zaczynać się jedną z początkowych: :values.',
    'string' => 'Pole :attribute musi być ciągiem znaków.',
    'timezone' => 'Pole :attribute musi być poprawną strefą czasową.',
    'unique' => 'Pole :attribute jest już zajęte.',
    'uploaded' => 'Pola :attribute nie udało się przesłać.',
    'uppercase' => 'Pole :attribute musi mieć duże litery.',
    'url' => 'Pole :attribute musi być poprawnym URL.',
    'ulid' => 'Pole :attribute musi być poprawnym ULID.',
    'uuid' => 'Pole :attribute musi być poprawnym UUID.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */
    'attributes' => [
        'message' => 'komentarz',
        'password' => 'hasło',
        'current_password' => 'obecne hasło'
    ],
];
