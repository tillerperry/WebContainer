<?php

require 'vendor/autoload.php';

use Aws\DynamoDb\DynamoDbClient;
use Aws\Exception\AwsException;

class DynamoDBConnection {
    private $client;
    private $tableName;

    public function __construct($region, $version, $tableName) {
        // Initialize the DynamoDB client
        $this->client = new DynamoDbClient([
            'region' => $region,
            'version' => $version
        ]);
        $this->tableName = $tableName;
    }

    // Function to retrieve all items from the table
    public function getAllItems() {
        try {
            $result = $this->client->scan([
                'TableName' => $this->tableName
            ]);
            return $result['Items'];
        } catch (AwsException $e) {
            // Handle error
            echo "Unable to retrieve items:\n";
            echo $e->getMessage() . "\n";
            return [];
        }
    }

    // Function to retrieve a specific item by key
    public function getItemByKey($key) {
        try {
            $result = $this->client->getItem([
                'TableName' => $this->tableName,
                'Key' => $key
            ]);
            return $result['Item'] ?? null;
        } catch (AwsException $e) {
            // Handle error
            echo "Unable to retrieve item:\n";
            echo $e->getMessage() . "\n";
            return null;
        }
    }
}
