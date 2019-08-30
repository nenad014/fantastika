<?php

require('includes/connection.php');
session_destroy();

header('Location: index.php');