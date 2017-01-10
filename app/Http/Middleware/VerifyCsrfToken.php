<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as BaseVerifier;

class VerifyCsrfToken extends BaseVerifier
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
        //
    ];
}


// 
// { 
// 	["test":"Symfony\Component\HttpFoundation\File\UploadedFile":private]=> bool(false) 
// 	["originalName":"Symfony\Component\HttpFoundation\File\UploadedFile":private]=> string(52) "12321111_10205189182865394_1580478516259476522_n.jpg" 
// 	["mimeType":"Symfony\Component\HttpFoundation\File\UploadedFile":private]=> string(10) "image/jpeg" 
// 	["size":"Symfony\Component\HttpFoundation\File\UploadedFile":private]=> int(10199) 
// 	["error":"Symfony\Component\HttpFoundation\File\UploadedFile":private]=> int(0) 
// 	["pathName":"SplFileInfo":private]=> string(25) "C:\wamp64\tmp\php4624.tmp" 
// 	["fileName":"SplFileInfo":private]=> string(11) "php4624.tmp" 
// } 