<?php

namespace App\Admin;
use Illuminate\Support\Facades\Auth;


class CheckPermissions
{
    /**
     * Проверка на админа
     *
     * @return string
     *
     */
    public function checkIsAdmin()
    {
        $isAuth  = Auth::check();

        if  ($isAuth){

            $isAdmin = Auth::user()->is_admin;
            if( $isAdmin === NULL ) {
                $this->redirectToIndex();
            }

        }else{
            $this->redirectToIndex();
        }

    }


    /**
     * Редирект на главную
     *
     * @return string
     */
    public function redirectToIndex()
    {
        return redirect()->route( 'home' )->send();
    }
}
