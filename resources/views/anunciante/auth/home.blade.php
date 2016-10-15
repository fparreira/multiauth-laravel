<h1>PAGINA PROTEGIDA POR AUTENTICACAO - PAGINA ANUNCIANTE</h1>

{{ auth()->guard('anunciante')->user() }}


<p><a href="{{ url('anunciante/eventos') }}">eventos</a></p>
<p><a href="{{ url('anunciante/logout') }}">logout</a></p>