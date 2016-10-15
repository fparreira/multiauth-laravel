<h1>PAGINA PROTEGIDA POR AUTENTICACAO - EVENTOS</h1>

{{ auth()->guard('anunciante')->user() }}

<p><a href="{{ url('anunciante/home') }}">home</a></p>
<p><a href="{{ url('anunciante/logout') }}">logout</a></p>