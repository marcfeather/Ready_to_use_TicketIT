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
 
    'accepted'             => 'Le champ doit être accepté;.',
    'active_url'           => 'Le champ n\'est pas un URL valide.',
    'after'                => 'Le champ doit être une date après :date.',
    'alpha'                => 'Le champ doit contenir uniquement des lettres.',
    'alpha_dash'           => 'Le champ doit contenir uniquement des lettres, nombres, et tirets.',
    'alpha_num'            => 'Le champ doit contenir uniquement des lettres, nombres.',
    'array'                => 'Le champ doit être un tableau.',
    'before'               => 'Le champ must be a date before :date.',
    'between'              => [
        'numeric' => 'Le champ doit être entre :min et :max.',
        'file'    => 'Le champ doit être entre :min et :max kilobytes.',
        'string'  => 'Le champ doit être entre :min et :max caractères.',
        'array'   => 'Le champ doit avoir entre :min et :max objets.',
    ],
    'boolean'              => 'Le champ de choix doit être vrai ou faux.',
    'confirmed'            => 'Le champs de confirmation est érroné.',
    'date'                 => 'Le champ n\'est pas une date valide.',
    'date_format'          => 'Le champ ne ressemble pas au format :format.',
    'different'            => 'Le champ et :other doit être différent.',
    'digits'               => 'Le champ doit être :digits digits.',
    'digits_between'       => 'Le champ doit être entre :min et :max digits.',
    'distinct'             => 'Le champ à une valeur en double.',
    'email'                => 'Le champ doit être une adresse email valide.',
    'exists'               => 'Le champ selectionné est invalide.',
    'filled'               => 'Le champ de réponse est requis',
    'image'                => 'Le champ doit être une image.',
    'in'                   => 'Le champ selectionné est invalide.',
    'in_array'             => 'Le champ de réponse n\'existe pas dans :other.',
    'integer'              => 'Le champ doit être un nombre entier.',
    'ip'                   => 'Le champ doit être une adresse IP valide.',
    'json'                 => 'Le champ doit être une chaine JSON.',
    'max'                  => [
        'numeric' => 'Le champ ne peut pas être plus grand que :max.',
        'file'    => 'Le champ ne peut pas être plus grand que :max kilobytes.',
        'string'  => 'Le champ ne peut pas être plus grand que :max caractères.',
        'array'   => 'Le champ ne peut pas avoir plus que :max objets.',
    ],
    'mimes'                => 'Le champ doit être un objet de type: :values.',
    'min'                  => [
        'numeric' => 'Ce champ doit être au moins de :min.',
        'file'    => 'Ce champ doit être au moins de :min kilobytes.',
        'string'  => 'Ce champ doit être au moins de :min caractères.',
        'array'   => 'Ce champ doit être au moins de :min objets.',
    ],
    'not_in'               => 'Le champ selectionné est invalide.',
    'numeric'              => 'Le champ doit être un nombre.',
    'present'              => 'Le champ réponse doit être présent.',
    'regex'                => 'Le format du champ est invalide.',
    'required'             => 'Ce champ est requis.',
    'required_if'          => 'Le champ est requis quand :other est :value.',
    'required_unless'      => 'Le champ est requis sauf si :other est dans :values.',
    'required_with'        => 'Le champ est requis quand :values is present.',
    'required_with_all'    => 'Le champ est requis quand :values is present.',
    'required_without'     => 'Le champ est requis quand :values is not present.',
    'required_without_all' => 'Le champ est requis quand aucune des :values sont présentent.',
    'same'                 => 'Le champ et :other doivent correspondrent.',
    'size'                 => [
        'numeric' => 'Le champ doit être :size.',
        'file'    => 'Le champ doit contenir :size kilobytes.',
        'string'  => 'Le champ doit être :size caractères.',
        'array'   => 'Le champ doit contenir :size objets.',
    ],
    'string'               => 'Le champ doit être une chaîne.',
    'timezone'             => 'Le champ doit etre une timezone valide.',
    'unique'               => 'Le champ est déjà utilisé.',
    'url'                  => 'Le format du champ est invalide.',
 
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

        'g-recaptcha-response' => [
            'required' => 'Recaptcha non valide !',
        ],
    ],
 
    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */
 
    'attributes' => [],
 
];