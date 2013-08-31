<?php
/**
 * This file is part of oo.
 * Copyright (c) Lellys Informática. All rights reserved. See License.txt in the project root for license information.
 *
 * Author: italolelis
 * Date: 8/29/13
 */

namespace Event;

class VendaFinalizadaEvent implements EventInterface
{

    private $venda;

    public function __construct($venda)
    {
        $this->venda = $venda;
    }

    /**
     * @param mixed $venda
     */
    public function setVenda($venda)
    {
        $this->venda = $venda;
    }

    /**
     * @return mixed
     */
    public function getVenda()
    {
        return $this->venda;
    }


}