<?php

namespace App\Http\Controllers\Tutorial;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ExampleController extends Controller
{
    protected $tutorialsPagePath = 'tutorials.pages';

    public function index(){

        $links = [
            'example1',
            'example2',
            'example3',
            'example4',
            'example5',
            'example6',
            'example7',
        ];
         
        return view('tutorials.index', compact('links'));
    }
    public function example1(){
        $title = "Nro. 1 Container | Contenedor";
        $blockquote = "La clase container (contenedor), es la clase mas básica para encasillar los 
            elementos que se dispondrá dentro de él. La clase mx-auto permite centrar el contenedor, 
            pero si se desea que la clase container por defecto centre el contenedor, se debe agregar dicha clase en el archivo
            tailwind.config.js que se encuentra en la raiz del proyecto.";
         return view($this->tutorialsPagePath . '.example1', compact('title','blockquote'));
    }

    public function example2(){
        $title = "Nro. 2 Grid | Grilla";
        $blockquote = "Cuando se necesita trabajar con grid (layouts), se debe considerar:
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
                - row-span-* : para establecer el numero de filas que ocupara la celda donde se aplica.";
        return view($this->tutorialsPagePath . '.example2', compact('title','blockquote'));
    }

    public function example3(){
        $title = "Nro. 3 Aspect Ratio | Relación Aspecto";
        $blockquote = "
            Cuando se necesita trabajar o establecer la relación de ancho y alto de un elemento,
            tal como las imagenes o video, tailwind proporciona una clase helper denominada
            aspect ratio (relación de aspecto), esta utilidad controla la relación de aspecto de un elemento.
            Las 3 clases que se encuentra en tailwind son: aspect-auto	---> aspect-ratio: auto;
            aspect-square  ---> aspect-ratio: 1 / 1; aspect-video  --->  aspect-ratio: 16 / 9;

            Si se desea utilizar una relación de aspecto no definida en las clases anteriores, se puede realizar 
            de la siguiente forma: aspect-[ancho/alto]. Por ejemplo:
                aspect-[4/3]:       aspect-ratio: 4 / 3;  aspect-[12/5]:      aspect-ratio: 12 / 5;";
         return view($this->tutorialsPagePath . '.example3', compact('title','blockquote'));
    }

    public function example4(){
        $title = "Nro. 4 Columns | Columnas";
        $blockquote = "Cuando se utiliza la clase columns, esta utilidad permite agrupar los elementos
            en columnas basandose en el nro. de columnas establecidas, similar al grid pero
            en este caso no es muy ordenada. No solo sirve para las imagenes tambien para establecer 
            ordenamiento en los textos.

            Con la utilidad break-after-column, despues de una columna realizara un salto o break y asi 
            evitar que el texto de un parrafo se divida inneserariamente.";
        return view($this->tutorialsPagePath . '.example4', compact('title', 'blockquote'));
    }
    public function example5(){
        $title = "Nro. 5 Display";
        $blockquote = "Esta utilidad permite cambiar el comportamiento del display de un elemento.
                        Las etiquetas <p>,<blockquote>,<div> ocupa su espacio en forma de bloque. 
                        Mientras que la etiqueta <span>,<a>,<i> solo ocupa el espacio minimo necesario 
                        para visualizar su contenido.";
        return view($this->tutorialsPagePath . '.example5', compact('title', 'blockquote'));
    }
    public function example6(){
        $title = "Nro. 6 Tipografía";
        $blockquote = "Esta utilidad permite cambiar el comportamiento del texto a mostrar.
                        Tailwind contiene muchas opciones que permite personalizar ampliamente
                        las carateristicas del texto a mostrar como por ejemplo la familia de fuentes,
                        el tamaño, el peso, la decoracion. ver mas en: https://tailwindcss.com/docs/font-family";
        return view($this->tutorialsPagePath . '.example6', compact('title', 'blockquote'));
    }

    public function example7(){
        $title = "Nro. 7 Background";
        $blockquote = "Esta utilidad permite estilizar el fondo de un elemento a mostrar.
                        Tailwind contiene muchas opciones que permite personalizar ampliamente
                        las carateristicas del background a mostrar como por ejemplo la familia de fuentes,
                        el tamaño, el peso, la decoracion. ver mas en: https://tailwindcss.com/docs/font-family";
        return view($this->tutorialsPagePath . '.example7', compact('title', 'blockquote'));
    }
}
