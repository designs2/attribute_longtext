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
 * @author      Andreas Isaak <info@andreas-isaak.de>
 * @copyright   The MetaModels team.
 * @license     LGPL.
 * @filesource
 */

/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	'MetaModels\Attribute\Longtext\Longtext' => 'system/modules/metamodelsattribute_longtext/MetaModels/Attribute/Longtext/Longtext.php',

	'MetaModelAttributeLongtext'             => 'system/modules/metamodelsattribute_longtext/deprecated/MetaModelAttributeLongtext.php',
));


/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
	'mm_attr_longtext'              => 'system/modules/metamodelsattribute_longtext/templates',
));
