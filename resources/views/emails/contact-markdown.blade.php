@component('mail::message')
# Un Message de : {{ $data['name']  }}
## Email : {{ $data['email']  }}
### Tel : {{ $data['tel']  }}
### Sujet : {{ $data['subject']  }}


@component('mail::panel')
    {{ $data['message']  }}
@endcomponent

@component('mail::button', ['url' => route('home') ])
Autoplus.ma
@endcomponent

Merci,<br>
Equipe AutoPlus.ma
@endcomponent
