<?php
/**
 * Created by PhpStorm.
 * User: prakash
 * Date: 3/22/17
 * Time: 8:48 PM
 */

namespace App\Portal\Repositories;


use App\customer;
use App\User;

class CustomerRepository
{
    /**
     * @var User
     */
    private $user;

    public function __construct(User $user)
 {
     $this->user = $user;
 }

    public function getCustomer()
    {
        return $this->user->select('*')->get();
    }

}