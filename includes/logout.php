<?php

include_once 'user-session.php';

$userSession = new UserSession();

$userSession->closeSession();
header("Location: ../index.php");