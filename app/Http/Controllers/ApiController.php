<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Socialite;

class ApiController extends Controller
{
  public function redirectToProviderGithub()
  {
      return Socialite::driver('github')->redirect();
  }

  public function handleProviderCallbackGithub()
  {
      $user = Socialite::driver('github')->user();

      // $user->token;
      print_r("<pre>");
      print_r($user);
      print_r("</pre>");
  }

  public function redirectToProviderGoogle()
  {
      return Socialite::driver('google')->redirect();
  }

  public function handleProviderCallbackGoogle()
  {
      $user = Socialite::driver('google')->user();

      // $user->token;
      print_r("<pre>");
      print_r($user);
      print_r("</pre>");
  }

  public function redirectToProviderFacebook()
  {
      return Socialite::driver('facebook')->redirect();
  }

  public function handleProviderCallbackFacebook()
  {
      $user = Socialite::driver('facebook')->user();

      // $user->token;
      print_r("<pre>");
      print_r($user);
      print_r("</pre>");
  }
}
