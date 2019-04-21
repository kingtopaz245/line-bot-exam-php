<?php


$access_token = 'M4mAJN2BU9ek+Lc3NtgBA6dZeZr7YH0MoEqe8fD0u/uR+zejOJ2Rqry/KAjvvcNtDpLFRf6bvuvJjf9OjmpnXO45PfhEPqXQ8Y/i/3ZAcS+yC0U1kFx0QKB06nYbXU5Yi2bf6JHiR0o3zP+NLw610wdB04t89/1O/w1cDnyilFU=';

$userId = 'U7d8e9fee1cbea3e31720cd117b9fa841';

$url = 'https://api.line.me/v2/bot/profile/'.$userId;

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;

