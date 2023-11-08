<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://hyperf.wiki
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */
namespace App\User\Controller;
use App\User\UseCase\UserServiceInterface;
use Hyperf\HttpServer\Contract\RequestInterface;
use Hyperf\HttpServer\Contract\ResponseInterface;

class IndexController extends AbstractController
{
    protected $service;

    public function __construct(UserServiceInterface $service){
       $this->service = $service;
    }

    public function show(int $id, RequestInterface $request, ResponseInterface $responseInterface)
    {
        $user = $this->service->find($id);
 
        return $responseInterface->json($user)->withStatus(200);        
    }

    public function store(RequestInterface $request, ResponseInterface $responseInterface)
    {
        $user = $this->service->save($request->all());
 
        return $responseInterface->json($user)->withStatus(201);       
    }

    public function update(int $id, RequestInterface $request, ResponseInterface $responseInterface)
    {
        $user = $this->service->save($request->all(), $id);
 
        return $responseInterface->json($user)->withStatus(200);   
    }
}
