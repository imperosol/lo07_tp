<?php

// ================================================================
// -----> LO07-2019 : PHP Object
// ================================================================

class Charte {

    static function html_head_bootstrap($titre): string
    {
        $result = "<html lang=\"fr\">\n";
        $result .= " <head>\n<title>$titre</title>";
        $result .= "  <meta charset='UTF-8'>\n";
        $result .= "  <meta name='viewport' content='width=device-width, initial-scale=1.0'>\n";
        $result .= "  <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css'>\n";
        $result .= "  <link href='../tp02/tp02_css.css' rel='stylesheet'/>\n";

        $result .= " </head>\n";

        $result .= " <body>\n";
        $result .= "     <div class = 'container'>\n";
        $result .= "         <div class='panel panel-success'>\n";
        $result .= "             <div class = 'panel-heading'>\n";
        $result .= "                 <h3 class='panel-title'>$titre</h3>\n";
        $result .= "             </div>\n";
        $result .= "         </div> \n";
        return $result;
    }

    static function html_foot_bootstrap(): string
    {
        $result = "  </div>\n";
        $result .= "  <!-- Charte.html_foot_bootstrap() -->\n";
        $result .= " </body>\n";
        $result .= "</html>\n";
        return $result;
    }

}