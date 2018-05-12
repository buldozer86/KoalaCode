<?php


namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity
 * @ORM\Table(name="user")
 */
class User
{
    /**
     * @var int
     *
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=100, name="login")
     */
    private $login;

    /**
     * @ORM\Column(type="string", length=255, name="password")
     */
    private $password;

    /**
     * @ORM\Column(type="string", length=255, unique=true, name="email")
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=150, name="first_name")
     */
    private $firstName;

    /**
     * @ORM\Column(type="string", length=150, name="last_name")
     */
    private $lastName;

    /**
     * @ORM\Column(type="text", name="description")
     */
    private $description;

    /**
     * @ORM\Column(type="integer", name="karma")
     */
    private $karma;

    /**
     * @ORM\Column(type="datetime", name="create_date")
     */
    private $createDate;

    /**
     * @ORM\Column(type="integer", name="delete_by_id")
     */
    private $deleteById;

    /**
     * @ORM\Column(type="integer", name="delete_by")
     */
    private $deleteBy;

    /**
     * @ORM\Column(type="datetime", name="delete_data")
     */
    private $deleteData;

    /**
     * @ORM\Column(type="integer", name="update_by_id")
     */
    private $updateById;

    /**
     * @ORM\Column(type="integer", name="update_by")
     */
    private $updateBy;

    /**
     * @ORM\Column(type="datetime", name="update_date")
     */
    private $updateDate;

    /**
     * @ORM\Column(type="integer", name="banned_by_id")
     */
    private $bannedById;

    /**
     * @ORM\Column(type="integer", name="banned_by")
     */
    private $bannedBy;

    /**
     * @ORM\Column(type="datetime", name="banned_date")
     */
    private $bannedDate;

    /**
     * @ORM\Column(type="integer", name="banned_for")
     */
    private $bannedFor;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLogin(): ?string
    {
        return $this->login;
    }

    public function setLogin(string $login): self
    {
        $this->login = $login;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    public function setFirstName(string $firstName): self
    {
        $this->firstName = $firstName;

        return $this;
    }

    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    public function setLastName(string $lastName): self
    {
        $this->lastName = $lastName;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getKarma(): ?int
    {
        return $this->karma;
    }

    public function setKarma(int $karma): self
    {
        $this->karma = $karma;

        return $this;
    }

    public function getCreateDate(): ?\DateTimeInterface
    {
        return $this->createDate;
    }

    public function setCreateDate(\DateTimeInterface $createDate): self
    {
        $this->createDate = $createDate;

        return $this;
    }

    public function getDeleteById(): ?int
    {
        return $this->deleteById;
    }

    public function setDeleteById(int $deleteById): self
    {
        $this->deleteById = $deleteById;

        return $this;
    }

    public function getDeleteBy(): ?int
    {
        return $this->deleteBy;
    }

    public function setDeleteBy(int $deleteBy): self
    {
        $this->deleteBy = $deleteBy;

        return $this;
    }

    public function getDeleteData(): ?\DateTimeInterface
    {
        return $this->deleteData;
    }

    public function setDeleteData(\DateTimeInterface $deleteData): self
    {
        $this->deleteData = $deleteData;

        return $this;
    }

    public function getUpdateById(): ?int
    {
        return $this->updateById;
    }

    public function setUpdateById(int $updateById): self
    {
        $this->updateById = $updateById;

        return $this;
    }

    public function getUpdateBy(): ?int
    {
        return $this->updateBy;
    }

    public function setUpdateBy(int $updateBy): self
    {
        $this->updateBy = $updateBy;

        return $this;
    }

    public function getUpdateDate(): ?\DateTimeInterface
    {
        return $this->updateDate;
    }

    public function setUpdateDate(\DateTimeInterface $updateDate): self
    {
        $this->updateDate = $updateDate;

        return $this;
    }

    public function getBannedById(): ?int
    {
        return $this->bannedById;
    }

    public function setBannedById(int $bannedById): self
    {
        $this->bannedById = $bannedById;

        return $this;
    }

    public function getBannedBy(): ?int
    {
        return $this->bannedBy;
    }

    public function setBannedBy(int $bannedBy): self
    {
        $this->bannedBy = $bannedBy;

        return $this;
    }

    public function getBannedDate(): ?\DateTimeInterface
    {
        return $this->bannedDate;
    }

    public function setBannedDate(\DateTimeInterface $bannedDate): self
    {
        $this->bannedDate = $bannedDate;

        return $this;
    }

    public function getBannedFor(): ?int
    {
        return $this->bannedFor;
    }

    public function setBannedFor(int $bannedFor): self
    {
        $this->bannedFor = $bannedFor;

        return $this;
    }
}