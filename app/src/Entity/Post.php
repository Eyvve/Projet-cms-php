<?php

namespace App\Entity;

class Post
{
    public int $postId;
    public string $username;
    private int $userId;
    private string $content;
    private \DateTime $date;
    private \DateTime $updateDate;

    public function __construct(array $data = [])
    {
        $this->hydrate($data);
    }

    // TODO - Essayer un trait au lieu de le mettre 3 fois
    public function hydrate(array $data) // $data = $_POST
    {
        foreach($data as $key => $value) { // $data = $_POST // $key = $_POST['name'] // $value = "Jacquy"

            $method = 'set' . ucfirst($key); // set"?"() <- setName() setFirstName setID

            if(is_callable([$this, $method])) { // if setName exists
                $this->$method($value); // then launch setName("Jacquy")
            }
        }
    }

    /**
     * @return int
     */
    public function getPostId(): int
    {
        return $this->postId;
    }

    /**
     * @param int $postId
     */
    public function setPostId(int $postId): void
    {
        $this->postId = $postId;
    }

    /**
     * @return string
     */
    public function getUsername(): string
    {
        return $this->username;
    }

    /**
     * @param string $username
     */
    public function setUsername(string $username): void
    {
        $this->username = $username;
    }

    /**
     * @return int
     */
    public function getUserId(): int
    {
        return $this->userId;
    }

    /**
     * @param int $userId
     */
    public function setUserId(int $userId): void
    {
        $this->userId = $userId;
    }

    /**
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }

    /**
     * @param string $content
     */
    public function setContent(string $content): void
    {
        $this->content = $content;
    }







}