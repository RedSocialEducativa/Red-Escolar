<?php

session_start();
class Login
{
 
 private $correo;
 private $contraseña;
            
    public function login_users($correo,$contraseña)
    {
        
        try {
            
            $sql = "SELECT * from perfil WHERE correo = ? AND contraseña = ?";
            $query = $this->dbh->prepare($sql);
            $query->bindParam(1,$correo);
            $query->bindParam(2,$contraseña);
            $query->execute();
            $this->dbh = null;
 
            //si existe el usuario
            if($query->rowCount() == 1)
            {
                 
                 $fila  = $query->fetch();
                 $_SESSION['correo'] = $fila['correo'];                 
                 return TRUE;
    
            }
            
        }catch(PDOException $e){
            
            print "Error!: " . $e->getMessage();
            
        }        
        
    }
    
 
     // Evita que el objeto se pueda clonar
    public function __clone()
    {
 
        trigger_error('La clonación de este objeto no está permitida', E_USER_ERROR);
 
    }
 
}