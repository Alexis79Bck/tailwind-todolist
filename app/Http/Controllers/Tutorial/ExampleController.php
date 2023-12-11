<?php

namespace App\Http\Controllers\Tutorial;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ExampleController extends Controller
{
    public function example1(){
        $title = "Nro. 1 Class Container";
        /*
            Se agrega la clase mx-auto para centrar el contenedor, 
            pero si se desea que la clase container por defecto 
            centre el contenedor, se debe agregar dicha clase en el archivo
            tailwind.config.js que se encuentra en la raiz del proyecto. 
         */

         return view('example1', compact('title'));
    }

    public function example2(){
        $title = "Nro. 2 El Grid";
        /*
            Cuando se necesita trabajar con grid (layouts), se debe considerar:
            1.- Utilizar un elemento div con la clase container donde se va a estructurar la grid.
            2.- El segundo div debe tener la clase grid para indicar que los elementos se dividiran en columnas.
            3.- Para crear la estructura responsiva, se debe emplear prefijos de breakpoints:
                - default: es el breakpoint minimo por defecto, por lo general no se le indica con ningun prefijo.
                - sm	640px	@media (min-width: 640px) { ... }
                - md	768px	@media (min-width: 768px) { ... }
                - lg	1024px	@media (min-width: 1024px) { ... }
                - xl	1280px	@media (min-width: 1280px) { ... }
                - 2xl	1536px	@media (min-width: 1536px) { ... }

                Tambien se puede emplear varias clases que pueden ayudar a estructurar layouts mas complejos, tal como:
                - grid-cols-* (1 - 12): para establecer el numero de columnas que formará la grilla.
                - col-span-* (1 - 12): para establecer el numero de columnas que ocupara la celda donde se aplica.
                - col-start-* : Esta clase indicara a partir de cual columna iniciara la celda, segun el numero de columnas
                                establecida.
                - grid-rows-* : para establecer el numero de filas que formará la grilla.
                - row-span-* : para establecer el numero de filas que ocupara la celda donde se aplica.
         */
        return view('example2', compact('title'));
    }

    public function example3(){
        $title = "Nro. 3 Aspect Ratio";
        /*
            Cuando se necesita trabajar con grid (layouts), se debe considerar:
            1.- Utilizar un elemento div con la clase container donde se va a estructurar la grid.
            2.- El segundo div debe tener la clase grid para indicar que los elementos se dividiran en columnas.
            3.- Para crear la estructura responsiva, se debe emplear prefijos de breakpoints:
                - default: es el breakpoint minimo por defecto, por lo general no se le indica con ningun prefijo.
                - sm	640px	@media (min-width: 640px) { ... }
                - md	768px	@media (min-width: 768px) { ... }
                - lg	1024px	@media (min-width: 1024px) { ... }
                - xl	1280px	@media (min-width: 1280px) { ... }
                - 2xl	1536px	@media (min-width: 1536px) { ... }

                Tambien se puede emplear varias clases que pueden ayudar a estructurar layouts mas complejos, tal como:
                - grid-cols-* (1 - 12): para establecer el numero de columnas que formará la grilla.
                - col-span-* (1 - 12): para establecer el numero de columnas que ocupara la celda donde se aplica.
                - col-start-* : Esta clase indicara a partir de cual columna iniciara la celda, segun el numero de columnas
                                establecida.
                - grid-rows-* : para establecer el numero de filas que formará la grilla.
                - row-span-* : para establecer el numero de filas que ocupara la celda donde se aplica.
         */
        return view('example3', compact('title'));
    }
}
