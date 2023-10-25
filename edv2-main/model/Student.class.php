<?php
require_once 'iDatenbank.php';
class Student implements iDatenbank
{

    private $id;
    private $anrede;
    private $vorname;
    private $nachname;
    private $email;
    private $ort;

    // public function __construct(array $data = null)
    // {
    //     if ($data) {
    //         foreach ($data as $key => $value) {
    //             $setterName = 'set' . ucfirst($key);
    //             #prüft ob ein passendes Setter existiert
    //             if (method_exists($this, $setterName)) {
    //                 $this->$setterName($value); // setteraufruf
    //             }
    //         }
    //     }
    // }
    function __construct(Array $data)
	{
		$this->anrede = $data['anrede'];
		$this->vorname = $data['vorname'];
		$this->nachname = $data['nachname'];
		$this->ort = $data['ort'];
		
	}

    function insert(PDO $db)
    {
        // $sql = "INSERT INTO strudenten(anrede, vorname, nachname, ort) VALUES ('"
        //     . $this->anrede . "$this->anrede"
        //     . $this->vorname . ""
        //     . $this->vorname . "$this->vorname"
        //     . $this->nachname . "$this->nachname"
        //     . $this->ort . "$this->ort";
        // "')";
        // $db->exec($sql);
        $sql = "INSERT INTO studenten (anrede, vorname, nachname, ort)
		VALUES ('$this->anrede', '$this->vorname', '$this->nachname', '$this->ort')";
        $db->exec($sql);
        $_SESSION['message'] = "Person Daten erfolgreich eingetragen!";
    }

    public function getAnrede()
    {
        return $this->anrede;
    }
    public function setAnrede($anrede)
    {
        $this->anrede = $anrede;
    }
    public function getVorname()
    {
        return $this->vorname;
    }
    public function setVorname($vorname)
    {
        $this->vorname = $vorname;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function setEmail($email)
    {
        $this->email = $email;
    }
    public function getort()
    {
    }
    public function setort($ort)
    {
        $this->ort = $ort;
    }

    #datenverwaltung methoden

    public function isLogin() {

        $erg = false;
        if(isset($_SESSION['admin'])) {
            $erg = true;
            return $erg;
        }
    }
}
