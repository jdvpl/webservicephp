<?php

    class Categoria extends Conectar{
        public function get_categoria() {
            $conectar=parent::conexion();
            parent::set_names();
            $sql="SELECT * FROM tm_categoria WHERE est=1";
            $sql=$conectar->prepare($sql);
            $sql->execute();
            // IMPORTANTE AGREGARLE EL PDO::FETCH_ASSOC PARA QUE HAGA BIEN LA CONSULTA
            return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);

        }
    }

?>