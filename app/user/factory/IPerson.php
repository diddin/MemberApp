<?php


namespace app\user\factory;


/**
 * Interface IPerson
 * @package app\user\factory
 */
interface IPerson
{
    /**
     * @param int $id
     */
    public function setId(int $id): void;

    /**
     * @param string $name
     */
    public function setUserName(string $name): void;

    /**
     * @param string $password
     */
    public function setPassword(string $password): void;

    /**
     * @param string $active
     */
    public function setActive(string $active): void;

    /**
     * @param string $last
     */
    public function setLastLogin(string $last): void;

    /**
     * @param int $id
     */
    public function setUserId(int $id): void;

    /**
     * @param string $firstName
     */
    public function setFirstName(string $firstName): void;

    /**
     * @param string $lastName
     */
    public function setLastName(string $lastName): void;

    /**
     * @param string $date
     */
    public function setDateOfBirth(string $date): void;

    /**
     * @param string $email
     */
    public function setEmail(string $email): void;

    /**
     * @param string $occupation
     */
    public function setOccupation(string $occupation): void;

    /**
     * @param string $last
     */
    public function setLastUpdate(string $last): void;

    /**
     * @return int
     */
    public function getId(): int;

    /**
     * @return string
     */
    public function getUserName(): string;

    /**
     * @return string
     */
    public function getPassword(): string;

    /**
     * @return string
     */
    public function getActive(): string;

    /**
     * @return string
     */
    public function getLastLogin(): string;

    /**
     * @return int
     */
    public function getUserId(): int;

    /**
     * @return string
     */
    public function getFirstName(): string;

    /**
     * @return string
     */
    public function getLastName(): string;

    /**
     * @return string
     */
    public function getEmail(): string;

    /**
     * @return string
     */
    public function getDateOfBirth(): string;

    /**
     * @return string
     */
    public function getOccupation(): string;

    /**
     * @return string
     */
    public function getLastUpdate(): string;
}