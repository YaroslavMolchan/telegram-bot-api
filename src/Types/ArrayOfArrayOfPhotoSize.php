<?php

namespace YaroslavMolchan\TelegramBotApi\Types;

abstract class ArrayOfArrayOfPhotoSize
{
    public static function fromResponse($data)
    {
        return array_map(function ($arrayOfPhotoSize) {
            return ArrayOfPhotoSize::fromResponse($arrayOfPhotoSize);
        }, $data);
    }
}
