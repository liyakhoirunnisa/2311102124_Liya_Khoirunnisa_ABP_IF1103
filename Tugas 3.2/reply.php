<?php
// Liya Koirunnisa - 2311102124 - IF1103
if (isset($_GET["msg"])) {
    echo "reply: " . htmlspecialchars($_GET["msg"]);
}
