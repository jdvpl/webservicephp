<?php

    class Categoria extends Conectar{
        // retorna todas las categorias
        public function get_categoria() {
            $conectar=parent::conexion();
            parent::set_names();
            $sql="SELECT * FROM tm_categoria WHERE est=1";
            $sql=$conectar->prepare($sql);
            $sql->execute();
            // IMPORTANTE AGREGARLE EL PDO::FETCH_ASSOC PARA QUE HAGA BIEN LA CONSULTA
            return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);

        }
        // retorna solo una categoria
        public function get_categoria_x_id($cat_id) {
            $conectar=parent::conexion();
            parent::set_names();
            $sql="SELECT * FROM tm_categoria WHERE est=1 and cat_id= ?";
            $sql=$conectar->prepare($sql);
            // envia parametro
            $sql->bindValue(1,$cat_id);
            $sql->execute();
            // IMPORTANTE AGREGARLE EL PDO::FETCH_ASSOC PARA QUE HAGA BIEN LA CONSULTA
            return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);

        }

              // crea yba categoria
              public function insert_categoria($cat_nom, $cat_obs, $est) {
                $conectar=parent::conexion();
                parent::set_names();
                $sql="INSERT INTO tm_categoria(cat_nom, cat_obs, est) VALUES(?,?,?)";
                $sql=$conectar->prepare($sql);
                // envia parametro
                $sql->bindValue(1,$cat_nom);
                $sql->bindValue(2,$cat_obs);
                $sql->bindValue(3,$est);
                $sql->execute();
                // IMPORTANTE AGREGARLE EL PDO::FETCH_ASSOC PARA QUE HAGA BIEN LA CONSULTA
                return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
    
            }

              // actualiza una categoria
              public function update_categoria($cat_id,$cat_nom, $cat_obs, $est) {
                $conectar=parent::conexion();
                parent::set_names();
                $sql="UPDATE tm_categoria SET cat_nom =?, cat_obs= ?, est=? where cat_id=?";
                $sql=$conectar->prepare($sql);
                // envia parametro
                $sql->bindValue(1,$cat_nom);
                $sql->bindValue(2,$cat_obs);
                $sql->bindValue(3,$est);
                $sql->bindValue(4,$cat_id);
                $sql->execute();
                // IMPORTANTE AGREGARLE EL PDO::FETCH_ASSOC PARA QUE HAGA BIEN LA CONSULTA
                return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
    
            }

            // elimina una categoria pero solo actualiza el estado
            public function delete_categoria($cat_id) {
                $conectar=parent::conexion();
                parent::set_names();
                $sql="UPDATE tm_categoria SET est=0 where cat_id=?";
                $sql=$conectar->prepare($sql);
                // envia parametro
                $sql->bindValue(1,$cat_id);
                $sql->execute();
                // IMPORTANTE AGREGARLE EL PDO::FETCH_ASSOC PARA QUE HAGA BIEN LA CONSULTA
                return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
    
            }
    }

?>