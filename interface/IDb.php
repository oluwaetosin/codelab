<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace codelab;

/**
 *
 * @author tosin
 */
interface IDb {
    //put your code here
    /**
     * @param array $_data a key value pair of data to be updated
     * @param array  $_condition an array of key value condition
     */
   public function update(array $_data,array $_condition);
}
