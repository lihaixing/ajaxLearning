<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//用接收的数据与admin进行判断
//1、接收用户提交数据
$name = $_REQUEST["name"];
if ($name == "admin") {
    echo "用户名称已经存在!";
} else {
    echo "通过!";
}

