<?php


namespace App\Http\Repository;


use App\Contract\User\UserRepositoryInterface;
use App\User;

class UserRepository implements UserRepositoryInterface
{

//    protected $user;
//
//    public function __construct(User $user)
//    {
//        $this->user = $user;
//    }
//
//    public function all($paginate)
//    {
//        if ($paginate){
//            return $this->user->paginate($paginate);
//        }
//        return $this->user->all();
//    }
//
//    public function delete($obj)
//    {
//        // TODO: Implement delete() method.
//    }
//
//    public function update($obj)
//    {
//        // TODO: Implement update() method.
//    }
//
//    public function store($user)
//    {
//        return $user->save();
//    }
//
//    public function model()
//    {
//        return $this->user ;
//    }
}
