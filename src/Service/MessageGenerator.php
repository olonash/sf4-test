<?php
/**
 * Created by PhpStorm.
 * User: nasolo
 * Date: 14/12/19
 * Time: 11:38
 */

namespace App\Service;


class MessageGenerator
{
    public function getHappyMessage()
    {
        $messages = [
            'You did it! You updated the system! Amazing!',
            'That was one of the coolest updates I\'ve seen all day!',
            'Great work! Keep going!',
        ];

        $index = array_rand($messages);

        return $messages[$index];
    }


    public function succes() {

        return 'Ok';
    }
}