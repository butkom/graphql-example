<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Comment
 *
 * @ORM\Table(name="comment")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CommentRepository")
 */
class Comment
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
     * @var Author
     *
     * @ORM\ManyToOne(targetEntity="Author", inversedBy="comments")
     */
    private $author;

    /**
     * @var Article
     *
     * @ORM\ManyToOne(targetEntity="Article", inversedBy="comments")
     */
    private $article;

    /**
     * @var string
     *
     * @ORM\Column(name="content", type="text")
     */
    private $content;


    /**
     * Get id
     *
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Set author
     *
     * @param Author $author
     *
     * @return Comment
     */
    public function setAuthor(Author $author): self
    {
        $this->author = $author;

        return $this;
    }

    /**
     * Get author
     *
     * @return Author
     */
    public function getAuthor(): Author
    {
        return $this->author;
    }

    /**
     * Set article
     *
     * @param Article $article
     *
     * @return Comment
     */
    public function setArticle(Article $article): self
    {
        $this->article = $article;

        return $this;
    }

    /**
     * Get article
     *
     * @return Article
     */
    public function getArticle(): Article
    {
        return $this->article;
    }

    /**
     * Set content
     *
     * @param string $content
     *
     * @return Comment
     */
    public function setContent(string $content): self
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }
}
