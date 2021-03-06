<?php
/**
 * Created by PhpStorm.
 * User: p2
 * Date: 1/11/2557
 * Time: 11:02 น.
 */

namespace Main\Entity\Que;

/**
 * @Entity
 * @Table(name="que")
 */
class Que extends BaseEntity {
    /** @Column(type="string") */
    protected $vn;

    /** @Column(type="string") */
    protected $hn;

    /** @Column(type="date") */
    protected $vstdate;

    /** @Column(type="time") */
    protected $vsttime;

    /** @Column(type="integer") */
    protected $vstts;

    /** @Column(type="string", length=2, options={"fixed" = true}) */
    protected $spclty;

    /** @Column(type="string") */
    protected $fname;

    /** @Column(type="string") */
    protected $lname;

    /** @Column(type="string") */
    protected $note = "";

    /** @Column(type="integer", nullable=true) */
    protected $drug = null;


    /** @Column(type="boolean") */
    protected $is_hide = false;

    /** @Column(type="boolean") */
    protected $is_skip = false;

    /**
     * @param mixed $hn
     */
    public function setHn($hn)
    {
        $this->hn = $hn;
    }

    /**
     * @return mixed
     */
    public function getHn()
    {
        return $this->hn;
    }

    /**
     * @param mixed $spclty
     */
    public function setSpclty($spclty)
    {
        $this->spclty = $spclty;
    }

    /**
     * @return mixed
     */
    public function getSpclty()
    {
        return $this->spclty;
    }

    /**
     * @param mixed $vn
     */
    public function setVn($vn)
    {
        $this->vn = $vn;
    }

    /**
     * @return mixed
     */
    public function getVn()
    {
        return $this->vn;
    }

    /**
     * @param mixed $vstdate
     */
    public function setVstdate($vstdate)
    {
        $this->vstdate = $vstdate;
    }

    /**
     * @return mixed
     */
    public function getVstdate()
    {
        return $this->vstdate;
    }

    /**
     * @param mixed $vsttime
     */
    public function setVsttime($vsttime)
    {
        $this->vsttime = $vsttime;
    }

    /**
     * @return mixed
     */
    public function getVsttime()
    {
        return $this->vsttime;
    }

    /**
     * @param mixed $is_hide
     */
    public function setIsHide($is_hide)
    {
        $this->is_hide = $is_hide;
    }

    /**
     * @return mixed
     */
    public function getIsHide()
    {
        return $this->is_hide;
    }

    /**
     * @param mixed $is_skip
     */
    public function setIsSkip($is_skip)
    {
        $this->is_skip = $is_skip;
    }

    /**
     * @return mixed
     */
    public function getIsSkip()
    {
        return $this->is_skip;
    }

    /**
     * @param mixed $fname
     */
    public function setFname($fname)
    {
        $this->fname = $fname;
    }

    /**
     * @return mixed
     */
    public function getFname()
    {
        return $this->fname;
    }

    /**
     * @param mixed $lname
     */
    public function setLname($lname)
    {
        $this->lname = $lname;
    }

    /**
     * @return mixed
     */
    public function getLname()
    {
        return $this->lname;
    }

    /**
     * @param mixed $vstts
     */
    public function setVstts($vstts)
    {
        $this->vstts = $vstts;
    }

    /**
     * @return mixed
     */
    public function getVstts()
    {
        return $this->vstts;
    }

    /**
     * @param mixed $note
     */
    public function setNote($note)
    {
        $this->note = $note;
    }

    /**
     * @return mixed
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * @param mixed $drug
     */
    public function setDrug($drug)
    {
        $this->drug = $drug;
    }

    /**
     * @return mixed
     */
    public function getDrug()
    {
        return $this->drug;
    }



} 