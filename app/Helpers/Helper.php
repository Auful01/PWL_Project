<?php

// require 'vendor/autoload.php';

use Aws\S3\S3Client;
use Aws\Exception\AwsException;
use Aws\S3\Exception\S3Exception;

define('ORACLE_ACCESS_KEY', '1a0b022081881c456750111459dc665dba67a2c6');
define('ORACLE_SECRET_KEY', 'tX13ja34Mk4/IP+01t1Sv6Duu5N6A6IIAIWBEIQ9snU=');
define('ORACLE_REGION', 'ap-sydney-1');
define('ORACLE_NAMESPACE', 'sd1gwrxto4nv');


function get_oracle_client()
{
    $endpoint = "https://objectstorage.ap-sydney-1.oraclecloud.com/p/OkZdJvppHC64WB8sT0yiNmoDPL89K6G2oClNAoXDKN4mKNt2qK3t8K2YUwObWtLu/n/sd1gwrxto4nv/b/bukcet-uts/o/";

    return new S3Client(array(
        'credentials' => [
            'key' => ORACLE_ACCESS_KEY,
            'secret' => ORACLE_SECRET_KEY,
        ],
        'version' => 'latest',
        'region' => ORACLE_REGION,
        'bucket_endpoint' => true,
        'endpoint' => $endpoint
    ));
}

function upload($file_name)
{

    // $endpoint = 'https://objectstorage.ap-sydney-1.oraclecloud.com/p/OkZdJvppHC64WB8sT0yiNmoDPL89K6G2oClNAoXDKN4mKNt2qK3t8K2YUwObWtLu/n/sd1gwrxto4nv/b/bukcet-uts/o/'
    $s3 = get_oracle_client();
    $s3->getEndpoint();

    // $file_url = "https://objectstorage." . ORACLE_REGION . ".oraclecloud.com/n/" . ORACLE_NAMESPACE . "/b/{$bucket_name}/o/{$keyname}";
    try {
        $s3->putObject(array(
            'Bucket' => 'bukcet-uts',
            'Key' => $file_name,
            'SourceFile' => $file_name,
            'StorageClass' => 'REDUCED_REDUNDANCY'
        ));

        return array('success' => true, 'message' => 'success');
    } catch (S3Exception $e) {
        return array('success' => false, 'message' => $e->getMessage());
    } catch (Exception $e) {
        return array('success' => false, 'message' => $e->getMessage());
    }
}
