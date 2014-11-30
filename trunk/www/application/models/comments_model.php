<?php
/**
 * Created by PhpStorm.
 * User: novichkov
 * Date: 29.11.14
 * Time: 17:58
 */
class comments_model extends model
{
    public function getNewComments()
    {
        $stm = $this->pdo->prepare('
        (SELECT
            c.id,
            c.name,
            c.text,
            c.cdate,
            f.name firm_name,
            f.id id_firm,
            "firm" type
        FROM
            firm_comments c
        JOIN
            firms f ON c.id_firm = f.id
        WHERE
            c.status = 0
        ORDER BY c.cdate DESC)
        UNION
        (SELECT
            c.id,
            c.name,
            c.text,
            c.cdate,
            f.name firm_name,
            f.id id_firm,
            "mall" type
        FROM
            mall_comments c
        JOIN
            malls f ON c.id_firm = f.id
        WHERE
            c.status = 0
        ORDER BY c.cdate DESC)
        ORDER BY cdate DESC
        ');
        return $this->get_all($stm);
    }
}