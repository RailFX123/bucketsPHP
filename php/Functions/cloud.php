<?php
require 'vendor/autoload.php';

use Google\Cloud\Storage\StorageClient;

class GoogleCloudOperations
{
    private $storage;

    public function __construct()
    {
        $this->storage = new StorageClient(
            ['keyFilePath' => './php/Key/credential.json']
        );
    }

    function download_object($bucketName, $objectName, $destination)
    {
        $bucket = $this->storage->bucket($bucketName);
        $object = $bucket->object($objectName);
        $object->downloadToFile($destination);
    }

    function upload_object($bucketName, $objectName, $source)
    {
        $file = fopen($source, 'r');
        $bucket = $this->storage->bucket($bucketName);
        $object = $bucket->upload($file,  [
            'name' => $objectName,
            'predefinedAcl' => 'publicRead'
        ]);
    }
}
?>