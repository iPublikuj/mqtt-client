<?php
/**
 * IFormatter.php
 *
 * @copyright      More in license.md
 * @license        http://www.ipublikuj.eu
 * @author         Adam Kadlec http://www.ipublikuj.eu
 * @package        iPublikuj:MQTTClient!
 * @subpackage     Logger
 * @since          1.0.0
 *
 * @date           26.02.17
 */

declare(strict_types = 1);

namespace IPub\MQTTClient\Logger\Formatter;

/**
 * Client server output formater interface
 *
 * @package        iPublikuj:MQTTClient!
 * @subpackage     Logger
 *
 * @author         Adam Kadlec <adam.kadlec@ipublikuj.eu>
 */
interface IFormatter
{
	/**
	 * @param string $message
	 *
	 * @return void
	 */
	function error(string $message);

	/**
	 * @param string $message
	 *
	 * @return void
	 */
	function warning(string $message);

	/**
	 * @param string $message
	 *
	 * @return void
	 */
	function note(string $message);

	/**
	 * @param string $message
	 *
	 * @return void
	 */
	function caution(string $message);
}
