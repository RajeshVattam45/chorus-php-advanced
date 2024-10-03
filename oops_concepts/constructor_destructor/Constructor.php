<?php

// Create the Games class.
class Games {
    public string $name;
    public int $team_size;
    public string $type;

    // Initializing the properties via the constructor.
    function __construct(string $name, int $team_size, string $type) {
        $this->name = $name;
        $this->team_size = $team_size;
        $this->type = $type;
    }

    // Get the name property.
    public function getGameName() {
        return $this->name;
    }

    // Get the team size property.
    public function getTeamSize() {
        return $this->team_size;
    }

    // Get the game type property.
    public function getGameType() {
        return $this->type;
    }
}

// Creating a new instance of the Games class for cricket.
$cricket = new Games('Cricket', 11, 'Outdoor');
echo 'Sport Name: ' . $cricket->getGameName() . ', Team Size: ' . $cricket->getTeamSize() . ', Type: ' . $cricket->getGameType();
