<?php namespace transfor\Http\Controllers;

// Modelos
use transfor\Categoria;
use transfor\Cmsnoticia;

use transfor\Http\Requests\ContactFormRequest;

class InicioController extends Controller {

    public function getIndex()
    {
        $categorias = Categoria::all();
        return view('index', compact('categorias'));
    }

    public function getNosotros()
    {
        $result = \DB::table('cms_secciones')
            ->select('id')
            ->where('nombre', 'NOSOTROS')
            ->get();

        if (isset($result[0]->id)){
            $idCategoria = $result[0]->id;
            $cmsnoticias = Cmsnoticia::where('seccion_id', '=', $idCategoria)->get();

            return view('nosotros', compact('cmsnoticias'));
        }
    }

    public function create()
    {
        return view('contactenos');
    }

    public function store(ContactFormRequest $request)
    {

        /*
        \Mail::send('email',
            array(
                'Nombre' => $request->get('Nombre'),
                'Email' => $request->get('Email'),
                'Asunto' => $request->get('Asunto'),
                'Comentarios' => $request->get('Comentarios')
            ), function($message)
            {
                $message->from('rafa__varela@hotmail.com');
                $message->to('rafa_varela@yahoo.com', 'Admin')->subject('TRANSFOR S.A.S. Solicitud de información');
            });
        */

        //Datos recibidos por post //
        $txtnombre      = $request->get('Nombre');
        $txtemail       = $request->get('Email');
        $txtasunto      = $request->get('Asunto');
        $txtcomentarios = $request->get('Comentarios');

        //////////////////////////////////////////////////////////////////////////////////////
        $para = "rafa_varela@yahoo.com, rafa__varela@hotmail.com, rafa.varela.perez@gmail.com";
        $asunto = "Solicitud web de $txtnombre ($txtemail)";
        $mensaje = '<html>' .
                       '<head><title>Visitantes Rafael Varela</title></head>' .
                       '<body>' .
                       'Sus datos de visita son los siguientes:<br />' .
                       'Nombre: ' . $txtnombre . '<br />' .
                       'Email: '  . $txtemail  . '<br />' .
                       'Asunto: ' . $txtasunto . '<br />' .
                       'Comentarios: '.$txtcomentarios.' <br /><br />' .
                       '</body>' .
                    '</html>';

        $cabeceras = "From: $txtnombre <$txtemail>\r\nContent-type: text/html\r\n";

        /* PHP form validation: the script checks that the Email field contains a valid email address and the Subject field isn't empty. preg_match performs a regular expression match. It's a very powerful PHP function to validate form fields and other strings - see PHP manual for details. */
        if (!preg_match("/\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*/", $txtemail)) {
            echo "<h3>Dirección inválida</h3>";
        } elseif ($txtcomentarios == "") {
            echo "<h3>No digitó los comentarios</h3>";
        }

        /* Sends the mail and outputs the "Thank you" string if the mail is successfully sent, or the error string otherwise. */
        elseif (mail($para, $asunto, $mensaje, $cabeceras)) {

            return \Redirect::route('contactenos')->with('message', 'Su mensaje fue enviado con éxito!');

        }else{

            return \Redirect::route('contactenos')->with('message', 'Hubo una falla en el sistema, favor intentarlo más tarde...!');

        }


    }

}
