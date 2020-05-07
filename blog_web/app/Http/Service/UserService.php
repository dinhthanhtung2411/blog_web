<?php


namespace App\Http\Service;


use App\Contract\User\UserRepositoryInterface;
use App\Contract\User\UserServiceInterface;
use Illuminate\Support\Facades\Hash;

class UserService implements UserServiceInterface
{
//    protected $userRepo;
//
//    public function __construct(UserRepositoryInterface $userRepo)
//    {
//        $this->userRepo = $userRepo;
//    }
//
//    public function all($paginate)
//    {
//        return $this->userRepo->all($paginate);
//    }
//
//    public function create($request)
//    {
//        $user = $this->userRepo->model();
//
//        $user->name = $request->name;
//        $user->email = $request->email;
//        $user->password = Hash::make($request->password);
//
//        if (!$request->hasFile('avatar')){
//            $image_name = 'no_image.png';
//        }else{
//            $image = $request->file('image');
//            $image_name = 'images/' . date('d-m-Y_H:i:s') . '.' . $image->getClientOriginalName();
//            $image->storeAs('public/images', $image_name);
//        }
//
//        $user->avatar = $image_name;
//        $user->role = $request->role;
//
//        $this->userRepo->store($user);
//    }
//
//    public function edit($request, $id)
//    {
//        // TODO: Implement edit() method.
//    }
//
//    public function delete($id)
//    {
//        // TODO: Implement delete() method.
//    }
}
