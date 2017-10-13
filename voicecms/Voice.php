<?php

namespace budyaga_cust\users\voicecms;

/*
 * Класс, который содержит основные константы библиотеки:
 * - индексы мужского и женского пола
 * - индексы всех падежей
 *
 * @author Ink.Defina
 */
class Voice
{
    /**
     * Мужской пол
     * @static integer
     */
    static $MAN = 1;
    /**
     * Женский пол
     * @static integer 
     */
    static $WOMAN = 2;
    /**
     * Именительный падеж
     * @static integer 
     */
    static $IMENITLN = 0;
    
    /**
     * Родительный падеж
     * @static integer 
     */
    static $RODITLN = 1;
    
    /**
     * Дательный падеж
     * @static integer 
     */
    static $DATELN = 2;
    
    /**
     * Винительный падеж
     * @static integer 
     */
    static $VINITELN = 3;
    
    /**
     * Творительный падеж
     * @static integer 
     */
    static $TVORITELN = 4;
    
    /**
     * Предложный падеж
     * @static integer 
     */
    static $PREDLOGN = 5;

}
