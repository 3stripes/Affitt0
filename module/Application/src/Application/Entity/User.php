<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Index
 *
 * @ORM\Table(name="user")
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks
 */
class User
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="varchar", length = 255, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue()
     */
    private $id;

    /**
     * @ORM\Column(name="pass", type="varchar", length=255, nullable=false)
     */
    private $pass;

    /**
     * @ORM\Column(name="passConf", type="varchar", length=255, nullable=false)
     */
    private $passConf;

    /**
     * @ORM\Column(name="email", type="varchar", length=255, nullable=false)
     */
    private $email;

    /**
     * @ORM\Column(name="emailConf", type="varchar", length=255, nullable=false)
     */
    private $emailConf;

    /**
     * @ORM\Column(name="nome", type="string", length=255, nullable=false)
     */
    private $nome;

    /**
     * @ORM\Column(name="cognome", type="string", length=255, nullable=false)
     */
    private $cognome;

    /**
     * @ORM\Column(name="telefono", type="number", length=255, nullable=false)
     */
    private $telefono;

    /**
     * @ORM\Column(name="indirizzo", type="string", length=255, nullable=false)
     */
    private $indirizzo;

    /**
     * @return mixed
     */
    public function getDataNascita()
    {
        return $this->dataNascita;
    }

    /**
     * @param mixed $dataNascita
     */
    public function setDataNascita($dataNascita)
    {
        $this->dataNascita = $dataNascita;
    }

    /**
     * @return mixed
     */
    public function getPassConf()
    {
        return $this->passConf;
    }

    /**
     * @param mixed $passConf
     */
    public function setPassConf($passConf)
    {
        $this->passConf = $passConf;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getEmailConf()
    {
        return $this->emailConf;
    }

    /**
     * @param mixed $emailConf
     */
    public function setEmailConf($emailConf)
    {
        $this->emailConf = $emailConf;
    }

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param mixed $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    /**
     * @return mixed
     */
    public function getCognome()
    {
        return $this->cognome;
    }

    /**
     * @param mixed $cognome
     */
    public function setCognome($cognome)
    {
        $this->cognome = $cognome;
    }

    /**
     * @return mixed
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * @param mixed $telefono
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;
    }

    /**
     * @return mixed
     */
    public function getIndirizzo()
    {
        return $this->indirizzo;
    }

    /**
     * @param mixed $indirizzo
     */
    public function setIndirizzo($indirizzo)
    {
        $this->indirizzo = $indirizzo;
    }

    /**
     * @ORM\Column(name="dataNascita", type="string", length=255, nullable=false)
     */
    private $dataNascita;


    /**
     * @return int
     */




    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getPass()
    {
        return $this->pass;
    }

    /**
     * @param mixed $pass
     */
    public function setPass($pass)
    {
        $this->pass = $pass;
    }


    /**
     * @return int
     */


    /** @ORM\PrePersist */
    public function prePersist()
    {
        $this->setDateCreate(new \DateTime());
        $this->setDataModified(new \DateTime());
    }


}