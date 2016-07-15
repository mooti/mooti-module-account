<?php
/*
 *
 * @author Ken Lalobo
 *
 */

namespace Mooti\Service\Account\Model\User;

use Mooti\Framework\Framework;

class UserMapper
{
    use Framework;

    protected $rules = [
        'id' => [
            'required' => true,
            'type'     => 'number',
            'constraints' => [
                'integer' => true   
            ]
        ],
        'firstName' => [
            'required' => true,
            'type'     => 'string'
        ],
        'lastName' => [
            'required' => true,
            'type'     => 'string'
        ]
    ];

    public function createEntityFromData($data)
    {

    }

    public function createUserFromData($data)
    {

    }
    private $dataRules = [
        1 => [
            'id'        => 1,
            'firstName' => 'Ken',
            'LastName'  => 'Lalobo',
        ],
        2 => [
            'id'        => 2,
            'firstName' => 'Joe',
            'LastName'  => 'Bloggs',
        ]
    ];

    public function findAll()
    {
        $returnUsers = [];
        foreach ($this->users as $userDetails) {
            $returnUsers[] = new User($userDetails);
        }
        return $returnUsers;
    }

    public function find($id)
    {
        return new User($this->users[$id]);
    }
}