<?php

include 'connect.php';
include 'API.php';


if (http_response_code() == 200) {
    $sql = "SELECT * FROM tbl_api where id = $apiResult->id";
    $resultDb = $dbHandle->query($sql);

    if ($resultDb->num_rows > 0) {
        while ($row = mysqli_fetch_assoc($resultDb)) {
            echo "Status: " . $row['status'];
            echo '</br>';
            echo "Receipt: " . $row['receipt'];
            echo '</br>';
            echo "Time Served: " . $row['time_served'];
        }
    } else {
        try {
            $sql = "INSERT INTO tbl_api (id, amount, status, timestamp, bank_code, 
                    account_number, beneficiary_name, remark, receipt, time_served, fee) VALUES 
                (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
            // echo $apiResult->status;exit;
            $stmt = $dbHandle->prepare($sql);
            $stmt->bind_param(
                "sssssssssss",
                $apiResult->id,
                $apiResult->amount,
                $apiResult->status,
                $apiResult->timestamp,
                $apiResult->bank_code,
                $apiResult->account_number,
                $apiResult->beneficiary_name,
                $apiResult->remark,
                $apiResult->receipt,
                $apiResult->time_served,
                $apiResult->fee
            );
            $stmt->execute();

            echo "New Record created successfully";
        } catch (exception $e) {
            echo "Error: " . $e->getMessage();
        }
        $stmt->close();
        $dbHandle->close();
    }
} else {
    echo "Unconnected to API";
}
