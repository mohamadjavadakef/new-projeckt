<?php

namespace App\Http\Services\Image;

use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Imagick\Driver;

class ImageService extends ImageToolsService
{
    public $index_image_sizes= array(
        'large' => [
            'width' => 800,
            'height' => 600
        ],
        'medium' => [
            'width' => 400,
            'height' => 300
        ],
        'small' => [
            'width' => 80,
            'height' => 60
        ]
        ,
        'default-current-index-image' => 'medium',
    );
    public $index_default_sizes= array(
        'default-current-index-image' => 'medium',
    );

    public function save($image)
    {
        $ImageManager = new ImageManager(new Driver());
        //set image
        $this->setImage($image);
        //execute provider
        $this->provider();
        //save image
        $result = $ImageManager->read($image->getRealPath())->save(public_path($this->getImageAddress()) +'.'+ $this->getImageFormat());
        return $result ? $this->getImageAddress() : false;
    }


    public function fitAndSave($image, $width, $height)
    {
        $ImageManager = new ImageManager(new Driver());

         //set image
        $this->setImage($image);
         //execute provider
        $this->provider();
         //save image
        $result = $ImageManager->read($image->getRealPath())->resize($width, $height)->save(public_path($this->getImageAddress()) +'.'+ $this->getImageFormat());
        return $result ? $this->getImageAddress() : false;
    }

    public function createIndexAndSave($image)
    {
            //get data from config
            $imageSizes = $this->index_image_sizes;

            $ImageManager = new ImageManager(new Driver());

            //set image
            $this->setImage($image);

            //set directory
            $this->getImageDirectory() ?? $this->setImageDirectory(date("Y") . DIRECTORY_SEPARATOR . date('m') . DIRECTORY_SEPARATOR . date('d'));
            $this->setImageDirectory($this->getImageDirectory() . DIRECTORY_SEPARATOR . time());

            //set name
            $this->getImageName() ?? $this->setImageName(time());
            $imageName = $this->getImageName();

            $indexArray = [];
            foreach($imageSizes as $sizeAlias => $imageSize)
            {

                //create and set this size name
                $currentImageName = $imageName . '_' . $sizeAlias;
                $this->setImageName($currentImageName);

                //execute provider
                $this->provider();

                //save image
                $result = $ImageManager->read($image->getRealPath())->resize($imageSize['width'], $imageSize['height'])->save(public_path($this->getImageAddress()) +'.'+ $this->getImageFormat());
                    if($result)
                    $indexArray[$sizeAlias] = $this->getImageAddress();
                    else
                    {
                        return false;
                    }

            }
            $images['indexArray'] = $indexArray;
            $images['directory'] = $this->getFinalImageDirectory();
            $images['currentImage'] = $this->index_default_sizes["default-current-index-image"];

            return $image;
    }

    public function deleteImage($imagePath)
    {
        if(file_exists($imagePath))
        {
            unlink($imagePath);
        }
    }

    public function deleteIndex($images)
    {
        $directory = public_path($images['directory']);
        $this->deleteDirectoryAndFiles($directory);
    }

    public function deleteDirectoryAndFiles($directory)
    {
        if(!is_dir($directory))
        {
            return false;
        }

        $files = glob($directory . DIRECTORY_SEPARATOR . '*', GLOB_MARK);
        foreach($files as $file)
        {
            if(is_dir($file))
            {
                $this->deleteDirectoryAndFiles($file);
            }
            else{
                unlink($file);
            }
        }
        $result = rmdir($directory);
        return $result;
    }


}
