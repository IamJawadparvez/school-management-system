<?php

namespace App\Http\Controllers;

function random()
{
  $random = '';
            $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $charactersLength = strlen($characters);
            $randomString1 = '';
            for ($i = 0; $i <3; $i++) {
                $randomString1 .= $characters[rand(0, $charactersLength - 1)];
            }

            $characters = '0123456789';
            $charactersLength = strlen($characters);
            $randomString2 = '';
            for ($i = 0; $i <5; $i++) {
                $randomString2 .= $characters[rand(0, $charactersLength - 1)];
            }
  $random = $randomString1.'-'.$randomString2;

  return $random;           
} 

?>