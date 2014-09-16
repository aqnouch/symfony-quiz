<?php

namespace Acme\QuizBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Questions
 */
class Questions
{
    /**
     * @var string
     */
    private $question;

    /**
     * @var string
     */
    private $questionCodePart;

    /**
     * @var string
     */
    private $comment;

    /**
     * @var integer
     */
    private $numberCorrectAnswers;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set question
     *
     * @param string $question
     * @return Questions
     */
    public function setQuestion($question)
    {
        $this->question = $question;

        return $this;
    }

    /**
     * Get question
     *
     * @return string 
     */
    public function getQuestion()
    {
        return $this->question;
    }

    /**
     * Set questionCodePart
     *
     * @param string $questionCodePart
     * @return Questions
     */
    public function setQuestionCodePart($questionCodePart)
    {
        $this->questionCodePart = $questionCodePart;

        return $this;
    }

    /**
     * Get questionCodePart
     *
     * @return string 
     */
    public function getQuestionCodePart()
    {
        return $this->questionCodePart;
    }

    /**
     * Set comment
     *
     * @param string $comment
     * @return Questions
     */
    public function setComment($comment)
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * Get comment
     *
     * @return string 
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Set numberCorrectAnswers
     *
     * @param integer $numberCorrectAnswers
     * @return Questions
     */
    public function setNumberCorrectAnswers($numberCorrectAnswers)
    {
        $this->numberCorrectAnswers = $numberCorrectAnswers;

        return $this;
    }

    /**
     * Get numberCorrectAnswers
     *
     * @return integer 
     */
    public function getNumberCorrectAnswers()
    {
        return $this->numberCorrectAnswers;
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
}
