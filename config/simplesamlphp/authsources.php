<?php

$config = array(

    'admin' => array(
        'core:AdminPassword',
    ),

    'example-userpass' => array(
        'exampleauth:UserPass',
        'user1:user1pass' => array('uid' => array('User_1'),'role' => array('group1'),'email' => 'user1@example.com','RealName'=> 'User 1',),
        'user2:user2pass' => array('uid' => array('User_2'),'role' => array('group2'),'email' => 'user2@example.com','RealName'=> 'User 2',),
        'user3:user3pass' => array('uid' => array('User_3'),'role' => array('group2','group3'),'email' => 'user3@example.com','RealName'=> 'User3',),
        'user4:user4pass' => array('uid' => array('User_4'),'role' => array('group3','group4'),'email' => 'user4@example.com','RealName'=> 'User 4',),
    ),

);
