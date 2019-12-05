<?php


class Database
{
    /**
     * @var string
     */
    private $host;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    private $user;

    /**
     * @var string
     */
    private $pass;

    /**
     * @var integer
     */
    private $port;

    /**
     * @var array
     */
    private $options;

    public function __construct($host, $name, $user, $pass, $port) {
        $this->host = $host || "localhost";
        $this->name = $name;
        $this->user = $user || "root";
        $this->pass = $pass ? "" : "root";
        $this->port = $port || 3306;

        $this->options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES UTF8",
            PDO::ATTR_EMULATE_PREPARES => false
        ];
    }

    public function connect() {
        try {
            return new PDO("mysql:host=$this->host;dbname=$this->name", $this->user, $this->pass, $this->options);
        } catch(PDOException $e) {
            return $e->getMessage();
        }
    }
}
