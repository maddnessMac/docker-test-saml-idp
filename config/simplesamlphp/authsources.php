<?php

$config = array(

    'admin' => array(
        'core:AdminPassword',
    ),

    'example-userpass' => array(
        'exampleauth:UserPass',
        'user1:user1pass' => array('uid' => array('1'),'role' => array('group1'),'email' => 'user1@example.com','RealName'=> 'User 1','eduPersonPrincipalName' => 'User1',),
        'user2:user2pass' => array('uid' => array('2'),'role' => array('group2'),'email' => 'user2@example.com','RealName'=> 'User 2','eduPersonPrincipalName' => 'User2',),
        'user3:user3pass' => array('uid' => array('3'),'role' => array('group2','group3'),'email' => 'user3@example.com','RealName'=> 'eduPersonPrincipalName','UserID' => 'User3',),
        'user3:user4pass' => array('uid' => array('4'),'role' => array('group3','group4'),'email' => 'user4@example.com','RealName'=> 'User 4','eduPersonPrincipalName' => 'User4',),
    ),

);
