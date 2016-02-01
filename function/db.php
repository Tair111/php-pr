<?php

function config()
{
    return include __DIR__ . '/../config.php';
}

function DBConnect()
{
    $config = config();

    mysqli_connect(
        $config['db']['host'],
        $config['db']['user'],
        $config['db']['password']
    );
    mysqli_select_db($config['db']['name']);
}

function DBQuery($sql)
{
    DBConnect();
    $res = mysqli_query($sql);

    $ret = [];
    while($row = mysqli_fetch_assoc($res))
    {
        $ret = $row;
    }
    return $ret;
}