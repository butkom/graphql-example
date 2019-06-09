<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Author
 *
 * @ORM\Table(name="author")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\AuthorRepository")
 */
class Author
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @ORM\OneToMany(targetEntity="Comment", mappedBy="author")
     */
    private $comments;

    /**
     * @ORM\OneToMany(targetEntity="Article", mappedBy="author")
     */
    private $articles;


    public function __construct()
    {
        $this->comments = new ArrayCollection();
        $this->articles = new ArrayCollection();
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param string $name
     *
     * @return Author
     */
    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return ArrayCollection
     */
    public function getComments(): ArrayCollection
    {
        return $this->comments;
    }

    /**
     * @param Comment $comment
     * @return Author
     */
    public function addComment(Comment $comment): self
    {
        $this->comments->add($comment);

        return $this;
    }

    /**
     * @param Comment $comment
     * @return Author
     */
    public function removeComment(Comment $comment): self
    {
        $this->comments->remove($comment);

        return $this;
    }

    /**
     * @return ArrayCollection
     */
    public function getArticles(): ArrayCollection
    {
        return $this->articles;
    }

    /**
     * @param Article $article
     * @return Author
     */
    public function addArticle(Article $article): self
    {
        $this->articles->add($article);

        return $this;
    }

    /**
     * @param Article $article
     * @return Author
     */
    public function removeArticle(Article $article): self
    {
        $this->articles->remove($article);

        return $this;
    }
}
