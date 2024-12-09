<?php
include("island.php");

class IslandRepository
{
    private $islands;

    public function __construct($islandsResult)
    {
        $this->islands = [];
        while ($islandRow = mysqli_fetch_array($islandsResult)) {
            $island = new Island(
                $islandRow["islandOfPersonalityID"],
                $islandRow["name"],
                $islandRow["image"],
                $islandRow["color"],
                $islandRow["shortDescription"],
                $islandRow["longDescription"]
            );
            $this->islands[] = $island;
        }
    }

    public function getAll(): array
    {
        return $this->islands;
    }

    public function getByName(string $name): ?Island
    {
        return current(array_filter($this->islands, fn($island) => $island->name === $name)) ?: null;
    }

    public function getDefault(): ?Island
    {
        return $this->islands[0] ?? null;
    }
}
?>