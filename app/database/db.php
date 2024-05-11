<?php

session_start();
require('connect.php');

function dd($value) // Print table in readable format
{
    echo "<pre>", print_r($value, true), "</pre>";
    die();
}

function executeQuery($sql, $data) 
{
    global $conn;
    $stmt = $conn->prepare($sql);
    $values = array_values($data);
    $types = str_repeat('s', count($values));
    $stmt->bind_param($types, ...$values);
    $stmt->execute();
    return $stmt;
}


function selectAll($table, $conditions = []) 
{
    global $conn;
    $sql = "SELECT * FROM $table";

    if (empty($conditions)) {
        // Print entire table
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
        return $records;        
    } else {
        // Print conditions that match...

        $i = 0; //index   
        foreach ($conditions as $key => $value) {
            if ($i == 0) {
                $sql = $sql . " WHERE $key=?";
            } else {
                 $sql = $sql . " AND $key=?";
            }
            $i++;           
        }

        $stmt = executeQuery($sql, $conditions);
        $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
        return $records;  
    }
}

function selectOne($table, $conditions) 
{
    global $conn;
    $sql = "SELECT * FROM $table";

    $i = 0; //index   
    foreach ($conditions as $key => $value) {
        if ($i == 0) {
            $sql = $sql . " WHERE $key=?";
        } else {
             $sql = $sql . " AND $key=?";
        }
        $i++;           
    }
    // Stop searching after finding first query
    $sql = $sql . " LIMIT 1";

    $stmt = executeQuery($sql, $conditions);
    $records = $stmt->get_result()->fetch_assoc();
    return $records;  
}

function create($table, $data) 
{
    global $conn;
    // SQL = INSERT INTO *table_name SET username=?, admin=?, email=?, password=?
    $sql = "INSERT INTO $table SET ";
    $i = 0; //index   
    foreach ($data as $key => $value) {
        if ($i == 0) {
            $sql = $sql . "$key=?";
        } else {
             $sql = $sql . ", $key=?";
        }
        $i++;           
    }
    $stmt = executeQuery($sql, $data);
    $id = $stmt->insert_id;
    return $id;
}

function update($table, $id, $data) 
{
    global $conn;
    // SQL = UPDATE *table_name SET username=?, admin=?, email=?, password=? WHERE id=?
    $sql = "UPDATE $table SET ";
    $i = 0; //index   
    foreach ($data as $key => $value) {
        if ($i == 0) {
            $sql = $sql . "$key=?";
        } else {
            $sql = $sql . ", $key=?";
        }
        $i++;           
    }
    $sql = $sql . " WHERE id=?";
    $data['id'] = $id;
    $stmt = executeQuery($sql, $data);
    $id = $stmt->insert_id;
    // -1 = failed to update 
    // 1 = update successful
    return $stmt->affected_rows;
}

function delete($table, $id) 
{
    global $conn;
    // SQL = DELETE FROM *table_name WHERE condition...
    $sql = "DELETE FROM $table WHERE id=?";
    $stmt = executeQuery($sql, ['id' => $id]);
    // 0 = failed to delete 
    // 1 = delete successful    
    return $stmt->affected_rows;
}