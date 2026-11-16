<?php


class User {
    protected string $username;
    protected string $nombre;
    protected string $apellidos;
    protected string $email;
    protected string $password;
    protected DateTime $ultimo_acceso;

    protected Logger $log;


    public function __construct(string $username, string $nombre, string $apellidos, string $email, string $password, DateTime $ultimo_acceso){
        $this->username = $username;
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->email = $email;
        $this->password = $password;
        $this->ultimo_acceso = $ultimo_acceso;

        $this->logger=new Logger('user');
        $this->logger->pushHandler(new StreamHandler('app.log', Logger::INFO));
    }
}
