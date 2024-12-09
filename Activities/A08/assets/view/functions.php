<?php
include_once("connect.php");
include_once("islandRepository.php");

function fetchIslands(): IslandRepository
{
    $query = "SELECT * FROM IslandsOfPersonality";
    $result = executeQuery($query);
    return new IslandRepository($result);
}

function fetchIslandContents(int $islandId): array
{
    $query = "SELECT image, content FROM islandContents WHERE islandOfPersonalityID = $islandId";
    $result = executeQuery($query);
    return $result ? mysqli_fetch_all($result, MYSQLI_ASSOC) : [];
}
?>