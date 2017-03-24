<?php
/**
 * Created by PhpStorm.
 * User: prakash
 * Date: 3/18/17
 * Time: 5:17 PM
 */

namespace App\Portal\Services;


use App\Portal\Repositories\PackageRepository;

class PackageService
{


    /**
     * @var PackageRepository
     */
    private $packageRepository;

    public function __construct(PackageRepository $packageRepository)
    {
        $this->packageRepository = $packageRepository;
    }

    public function addPackage($request)
    {

        $formData = $request->all();
        $formData = array_except($formData, ['_token', 'to', 'remove']);
        $data= $this->packageRepository->addPackage($formData);
        return $data;
    }

    public function getpackage()
    {
        return $this->packageRepository->getPackage();
    }

    public function getpackageid($id)
    {
        return $this->packageRepository->getPackageId($id);
    }

    public function update_package($request, $id)
    {
        $formData=$request->all();
        return $this->packageRepository->updatePackage($formData,$id);
    }


}