<?php
/**
 * Created by PhpStorm.
 * User: sawrose
 * Date: 4/2/17
 * Time: 3:57 PM
 */

namespace App\Portal\Services;


use App\Portal\Repositories\TrackingRepository;
use Illuminate\Http\Request;

class TrackingService
{
    /**
     * @var TrackingRepository
     */
    private $trackingRepository;


    /**
     * TrackingService constructor.
     */
    public function __construct(TrackingRepository $trackingRepository)
    {

        $this->trackingRepository = $trackingRepository;
    }

    public function checkbatch($request)
    {
//        $data = $this->trackingRepository->checkBatch($request['batch_id']);
        $result=$this->trackingRepository->insert($request);

        if ($result ==null){
            $data = [
                "error" => true,
                "message" => "Data Cannot be Created"
            ];
            return $data;
        }

        $data = [
            "error" => false,
            "message" => "Data created Successfully",
        ];
        return $data;
    }
}