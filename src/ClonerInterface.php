<?php
/**
 * @link    https://github.com/nnx-framework/cloner
 * @author  Malofeykin Andrey  <and-rey2@yandex.ru>
 */
namespace Nnx\Cloner;

/**
 * Interface ClonerInterface
 *
 * @package Nnx\Cloner
 */
interface ClonerInterface
{
    /**
     * Обработка объекта и связей
     *
     * @param $object
     *
     * @return mixed
     */
    public function handle($object);
}
