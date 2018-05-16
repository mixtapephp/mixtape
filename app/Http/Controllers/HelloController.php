<?php
// When you call php grandmaster make::controller {someController} || {subdirectory/someController}
namespace App\Http\Controllers;
use Mixtapes\Simplifiers\Simplifier as Simplifier;
/*
|--------------------------------------------------------------------------
| This is the example controller so you can get familiar with stuff.
|--------------------------------------------------------------------------
|
|
|
*/

/*
|--------------------------------------------------------------------------
| Declare your class includes. There are a few included by default.
|--------------------------------------------------------------------------
*/
use CustomMixtapes; // this will be generated but will be commented out. If you decide to use some custom mixtapes you would need to uncomment this line in your class.
use Mixtapes; // This is pretty much required if you want to use ,ixtapes in your application. MixtapePhp uses Mixtapes this is included by default.

////////////////////////////////////////////////////////////////////////////



class HelloController extends Controller {

/*
|--------------------------------------------------------------------------
| Load up your Mixtapes:
|--------------------------------------------------------------------------
*/

    protected $simpleRest;
    protected $comics;

//Core Mixtapes

//Custom Mixtapes


////////////////////////////////////////////////////////////////////////////
///

    public function __construct()
    {
        $this->simpleRest = new Mixtapes\SimpleRest\Client(); //This is just here for example.
        $this->comics = new CustomMixtapes\Mikandi\Comics\Comic(); //This is just here for example.
    }

    public function index()
    {
        $data['name'] = "taco";
       Simplifier::view('example.hello' , $data);
    }
}