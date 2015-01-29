<?php

/**
 * The MetaModels extension allows the creation of multiple collections of custom items,
 * each with its own unique set of selectable attributes, with attribute extendability.
 * The Front-End modules allow you to build powerful listing and filtering of the
 * data in each collection.
 *
 * PHP version 5
 * @package     MetaModels
 * @subpackage  AttributeLongtext
 * @author      Christian Schiffler <c.schiffler@cyberspectrum.de>
 * @author      Christopher Boelter <c.boelter@cogizz.de>
 * @copyright   The MetaModels team.
 * @license     LGPL.
 * @filesource
 */

$GLOBALS['METAMODELS']['attributes']['longtext']['class'] = 'MetaModels\Attribute\Longtext\Longtext';
$GLOBALS['METAMODELS']['attributes']['longtext']['image'] =
    'system/modules/metamodelsattribute_longtext/html/longtext.png';
