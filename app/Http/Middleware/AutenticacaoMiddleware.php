<?php

namespace App\Http\Middleware;

use Closure;
use Dotenv\Result\Result;

class AutenticacaoMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $metodo_autenticacao, $visitante)
    {

        if ($metodo_autenticacao == 'padrao' ) {
            echo 'Usuario ' .$visitante.' Não permitido<br>';
        }
        
        if (false) {
            return $next($request);
        } else {
            return Response('Acesso negado! ROta exite autenticação.');
        }
    }
}
