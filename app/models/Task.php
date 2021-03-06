<?php

// This code was generated by a tool. Don't modify it manually.
// http://sqldalmaker.sourceforge.net

namespace models;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="tasks")
 */
class Task
{
    /**
     * @ORM\Column(name="t_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue
     * @var int
     */
    private $t_id;
    /**
     * @ORM\Column(name="g_id", type="integer")
     * @var int
     */
    private $g_id;
    /**
     * @ORM\Column(name="t_priority", type="integer")
     * @var int
     */
    private $t_priority;
    /**
     * @ORM\Column(name="t_date", type="string", length=65535)
     * @var string
     */
    private $t_date;
    /**
     * @ORM\Column(name="t_subject", type="string", length=65535)
     * @var string
     */
    private $t_subject;
    /**
     * @ORM\Column(name="t_comments", type="string", length=65535, nullable=true)
     * @var string
     */
    private $t_comments;

    public function get_t_id()
    {
        return $this->t_id;
    }

    public function set_t_id($value)
    {
        $this->t_id = $value;
    }

    public function get_g_id()
    {
        return $this->g_id;
    }

    public function set_g_id($value)
    {
        $this->g_id = $value;
    }

    public function get_t_priority()
    {
        return $this->t_priority;
    }

    public function set_t_priority($value)
    {
        $this->t_priority = $value;
    }

    public function get_t_date()
    {
        return $this->t_date;
    }

    public function set_t_date($value)
    {
        $this->t_date = $value;
    }

    public function get_t_subject()
    {
        return $this->t_subject;
    }

    public function set_t_subject($value)
    {
        $this->t_subject = $value;
    }

    public function get_t_comments()
    {
        return $this->t_comments;
    }

    public function set_t_comments($value)
    {
        $this->t_comments = $value;
    }
}
