<?php
function DBUpdate($tbl, array $data, $where = NULL, $insertId = FALSE){
    $tbl    = DB_PREFIX.'_'.$tbl;
	$data   = DBEscape($data);
	
    foreach ($data as $key => $value) {
        $fields[] = "{$key} = '{$value}'";
    }
    $fields = implode(', ', $fields);
    $where  = ($where)?" WHERE {$where}":NULL;
    
    $query  = "UPDATE {$tbl} SET {$fields}{$where}";
    return DBExecute($query, $insertId);
}

function DBUpdateSemValidar($tbl, array $data, $where = NULL, $insertId = FALSE){
    $tbl    = DB_PREFIX.'_'.$tbl;
    
    foreach ($data as $key => $value) {
        $fields[] = "{$key} = '{$value}'";
    }
    $fields = implode(', ', $fields);
    $where  = ($where)?" WHERE {$where}":NULL;
    
    $query  = "UPDATE {$tbl} SET {$fields}{$where}";
    return DBExecute($query, $insertId);
}

function DBDelete($tbl, $where = NULL, $insertId = FALSE){
    $tbl    = DB_PREFIX.'_'.$tbl;    
    $where  = ($where)?" WHERE {$where}":NULL;
    
    $query  = "DELETE FROM {$tbl}{$where}";
    return DBExecute($query, $insertId);
}

function DBRead($tbl,$params=NULL,$fields='*',$order=NULL){
    $tbl    = DB_PREFIX.'_'.$tbl;
    $params = ($params)?" WHERE {$params}":NULL;
    $order  = ($order)?" order by {$order}":NULL;
    $query  = "SELECT {$fields} FROM {$tbl}{$params}{$order}";
    $result = DBExecute($query);
    
    if (!mysqli_num_rows($result)) {
        return false;
    } else {
        while($res = mysqli_fetch_assoc($result)){
            $data[] = $res;            
        }
        return  $data;
    }
}
function DBReadLimit($tbl,$params=NULL,$fields='*',$limit=NULL){
    $tbl    = DB_PREFIX.'_'.$tbl;
    $params = ($params)?" WHERE {$params}":NULL;
    $limit  = ($limit)?" {$limit}":NULL;
    $query  = "SELECT {$fields} FROM {$tbl}{$params}{$limit}";
    $result = DBExecute($query);
    
    if (!mysqli_num_rows($result)) {
        return false;
    } else {
        while($res = mysqli_fetch_assoc($result)){
            $data[] = $res;            
        }
        return  $data;
    }
}
function DBLeftJoinLimit($tbl, $leftJoin=NULL, $params=NULL, $fields='*', $order=NULL,$limit=NULL){
    $tbl        = DB_PREFIX.'_'.$tbl;
    $leftJoin   = ($leftJoin)?" {$leftJoin }":NULL;
    $params     = ($params)?" WHERE {$params}":NULL;
    $order      = ($order)?" order by {$order}":NULL;
    $limit      = ($limit)?" {$limit}":NULL;
    $query      = "SELECT {$fields} FROM {$tbl}{$leftJoin}{$params}{$order}{$limit}";
    $result     = DBExecute($query);    
    if (!mysqli_num_rows($result)) {
        return false;
    } else {
        while($res = mysqli_fetch_assoc($result)){
            $data[] = $res;            
        }
        return  $data;
    }
}

function DBLeftJoin($tbl, $leftJoin=NULL, $params=NULL, $fields='*', $order=NULL){
    $tbl        = DB_PREFIX.'_'.$tbl;
    $leftJoin   = ($leftJoin)?" {$leftJoin }":NULL;
    $params     = ($params)?" WHERE {$params}":NULL;
    $order      = ($order)?" order by {$order}":NULL;
    $query      = "SELECT {$fields} FROM {$tbl}{$leftJoin}{$params}{$order}";
    $result     = DBExecute($query);
    if (!mysqli_num_rows($result)) {
        return false;
    } else {
        while($res = mysqli_fetch_assoc($result)){
            $data[] = $res;            
        }
        return  $data;
    }
}

function DBFetchAssoc($tbl,$params=NULL,$fields='*'){
	$tbl    = DB_PREFIX.'_'.$tbl;
    $params = ($params)?" WHERE {$params}":NULL;
    $query  = "SELECT {$fields} FROM {$tbl}{$params}";
    $result = DBExecute($query);
    
    if (!$result) {
        return false;
    } else {
        $data = mysqli_fetch_assoc($result);
		return  $data;
    }
}

function DBSql($query){
    $result = DBExecute($query);    
    if (!$result) {
        return false;
    } else {
        $data = mysqli_fetch_assoc($result);
        return  $data;
    }
}
function DBCreate($tbl, array $data, $insertId = FALSE, $valida = TRUE){
    $tbl = DB_PREFIX.'_'.$tbl;
    if($valida) $data = DBEscape($data);
    
    $fields = implode(', ', array_keys($data));
    $values = "'".implode("', '", $data)."'";
    
    $query  = "INSERT INTO {$tbl} ({$fields}) VALUES ({$values})";
    return DBExecute($query, $insertId);
}

function DBExecute($query, $insertId = FALSE){
    $link   = DBConnect();    
    $result = @mysqli_query($link, $query) or die (mysqli_error($link));
    if ($insertId) {
        $result = mysqli_insert_id($link);
    }
    DBClose($link);
    return $result;
}
//($tbl, $leftJoin=NULL, $params=NULL, $fields='*', $order=NULL,$limit=NULL)
function DBNumRows($tbl, $params=NULL, $leftJoin=NULL, $fields='*', $order=NULL,$limit=NULL){
    
    $tbl        = DB_PREFIX.'_'.$tbl;
    $leftJoin   = ($leftJoin)?" {$leftJoin }":NULL;
    $params     = ($params)?" WHERE {$params}":NULL;
    $order      = ($order)?" {$order}":NULL;
    $limit      = ($limit)?" {$limit}":NULL;
    $query      = "SELECT {$fields} FROM {$tbl}{$leftJoin}{$params}{$order}{$limit}";
    /*
    $tbl    = DB_PREFIX.'_'.$tbl;
    $params = ($params)?" WHERE {$params}":NULL;
    $query = "select * from {$tbl}{$params}";
    */
    $res    = DBExecute($query);
    $result = mysqli_num_rows($res);
    return $result;
}
?>