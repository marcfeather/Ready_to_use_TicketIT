<p>Cliquez sur ce lien pour réinitialiser votre mot de passe :<br> 
<a href="{{ $link = url('tickets-admin/users/password/reset', $token).'?email='.urlencode($user->getEmailForPasswordReset()) }}"> {{ $link }} </a><br></p>

