<?php
/**
 * Created by PhpStorm.
 * User: Jeidc
 * Date: 28/05/2018
 * Time: 17:53
 */


class Canetinha
{
    var $cor;
    var $ponta;
    var $tipo;
    var $tampada;

    /**
     *
     */
    function escrever()
    {
        if ($this->tampada == true) {
            echo "<p style='text-align: center'>Eu preciso destampar para poder desenhar </p>";

        } else;
        {
            echo "<p style='text-align: center'>Estou fazendo um desenho</p>";
        }
    }
    function tampar(){
        $this->tampada= true;

    }
    function destampa(){
        $this->tampada= false;

    }


}