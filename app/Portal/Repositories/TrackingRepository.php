<?php
/**
 * Created by PhpStorm.
 * User: sawrose
 * Date: 4/2/17
 * Time: 3:57 PM
 */

namespace App\Portal\Repositories;


use App\TrackingPost;

class TrackingRepository
{
    /**
     * @var TrackingPost
     */
    private $trackingPost;


    /**
     * TrackingRepository constructor.
     */
    public function __construct(TrackingPost $trackingPost)
    {
        $this->trackingPost = $trackingPost;
    }

    public function insert($request)
    {
        $result =$this->trackingPost->create($request);
        if (isNull($result)){
            return null;
        }
        return $result;
    }

    public function getLocation($tracking_id)
    {
        $location= $this->trackingPost->select('*')
                                    ->join('batches','batches.id','tracking_posts.batch_id')
                                        ->where('batches.tracking_id',$tracking_id)->first();
        return $location;
    }
}