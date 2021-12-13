<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductoController extends Controller
{
    function obtener($id){
        
        $productos=[];
        $productos[1]="Producto1";
        $productos[2]="Producto2";
        $productos[3]="Producto3";
        $productos[4]="Producto4";
        $productos[5]="Producto5";
        $productos[6]="Producto6";
       
       
        foreach($productos as $indice=>$producto){

            if($id ==$indice)

            {
                $resultado=[]; 
                $resultado["Id"]=$id;
                $resultado["Nombre"]=$producto;
                $resultado["Codigo"]=1548763;
                $resultado["Descripcion"]="Descripcion del producto";

               
                return response()->json($resultado);
                      
            }

        }
                  
        return "El producto buscado no existe ";

    }
}
