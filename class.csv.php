<?php
class CSV{
    static function export($datas, $filename){
        header('Content-Type: text/csv');//pour télécharger le fichier
        header('Content-Disposition: attachment; filename="'.$filename.'.csv"');
        $i = 0;//récupérer les clés du tableau
        foreach($datas as $v){
            if($i == 0){
               echo '"'.implode('";"',(array_keys($v))).'"'."\n";
            }
            echo '"'.implode('";"',$v).'"'."\n";
            $i++;
        }

    }
}

?>