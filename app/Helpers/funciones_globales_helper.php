<?php



    // Helpers/breadcrumb_helper.php
function breadcrumb_panel($titulo_pagina = '', $breadcrumb = array()) {
    $html = '';
    $html.='
        <div class="container-fluid">
            <div class="block-header">
                <h1>'.$titulo_pagina.'</h1>
            </div>
            <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="'.route_to("/dashboard").'">
                            <i class="fa fa-home" aria-hidden="true"></i></a>
                        </li>';
                        foreach($breadcrumb as $bd){
                            if($bd["href"] != '#'){
                                $html.='<li class="breadcrumb-item"><a href="'.$bd['href'].'">'.$bd['titulo_pagina'].'</a></li>';
                            }else{
                                $html.='<li class="breadcrumb-item active" aria-current="page">'.$bd['titulo_pagina'].'</li>';
                            }
                        }
                        
                        //<li class="breadcrumb-item"><a href="#">Inicio</a></li>
                        //<li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                    $html.='</ol>
                </nav>
        </div>';
        return $html;
}