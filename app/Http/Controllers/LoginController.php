<?php

namespace App\Http\Controllers;

use App\Http\Services\AuthenticationServices;
use Illuminate\Http\Request;
use Illuminate\View\View;

class LoginController extends Controller
{
    private AuthenticationServices $authenticationServices;

    public function __construct(AuthenticationServices $authenticationServices)
    {
        $this->authenticationServices = $authenticationServices;
    }

    public function index(): View
    {
        return view('login');
    }
}
