<?php

class Room
{
    public int $roomNumber;
    public string $type;
    public float $pricePerNight;
    public bool $isAvailable;

    public function __construct(int $roomNumber, string $type, float $pricePerNight,  $isAvailable)
    {
        $this->roomNumber = $roomNumber;
        $this->type = $type;
        $this->pricePerNight = $pricePerNight;
        $this->isAvailable = $isAvailable;
    }
}

class Reservation
{
    public Room $room;
    public string $customerName;
    public DateTime  $startDate;
    public DateTime  $endDate;

    public function __construct(Room $room, string $customerName, DateTime  $startDate, DateTime  $endDate)
    {
        $this->room = $room;
        $this->customerName = $customerName;
        $this->startDate = $startDate;
        $this->endDate = $endDate;
    }

    public function cancelReservation()
    {
        $this->room->isAvailable = true;
    }
}

class Hotel
{
    private array $rooms = [];
    private array $reservations = [];

    public function addRoom(Room $room)
    {
        $this->rooms[] = $room;
    }

    public function makeReservation(Room $room, string $customerName, DateTime  $startDate, DateTime  $endDate)
    {
        foreach ($this->reservations as $reservation) {
            if ($reservation->room->roomNumber == $room->roomNumber && !($endDate <= $reservation->startDate || $startDate >= $reservation->endDate)) {
                return false;
            }
        }
        $this->reservations[] = new Reservation($room, $customerName, $startDate, $endDate);
        $room->isAvailable = false;
        return true;
    }

    public function listAvailableRooms(DateTime $startDate, DateTime $endDate): array
    {
        $availableRooms = [];
        foreach ($this->rooms as $room) {
            $isAvailable = true;
            foreach ($this->reservations as $reservation) {
                if ($reservation->room->roomNumber == $room->roomNumber && !($endDate <= $reservation->startDate || $startDate >= $reservation->endDate)) {
                    $isAvailable = false;
                    break;
                }
            }
            if ($isAvailable) {
                $availableRooms[] = $room;
            }
        }

        return $availableRooms;
    }
}


// Assuming all classes (Room, Reservation, Hotel) are defined above this line

// Create a new hotel instance
$hotel = new Hotel();

// Add rooms to the hotel
$hotel->addRoom(new Room(101, "Single", 50.0, true));
$hotel->addRoom(new Room(102, "Double", 75.0, true));
$hotel->addRoom(new Room(103, "Suite", 120.0, true));

// Test making a reservation
$startDate1 = new DateTime('2024-09-01');
$endDate1 = new DateTime('2024-09-05');
$reservation1 = $hotel->makeReservation($hotel->listAvailableRooms($startDate1, $endDate1)[0], "John Doe", $startDate1, $endDate1);

if ($reservation1) {
    echo "Reservation 1 made successfully.\n";
} else {
    echo "Reservation 1 failed.\n";
}

// Test listing available rooms after reservation
$availableRooms = $hotel->listAvailableRooms($startDate1, $endDate1);
echo "Available rooms after Reservation 1:\n";
foreach ($availableRooms as $room) {
    echo "Room " . $room->roomNumber . " (" . $room->type . ") is available.\n";
}

// Test making another reservation with overlapping dates
$startDate2 = new DateTime('2024-09-04');
$endDate2 = new DateTime('2024-09-06');
$reservation2 = $hotel->makeReservation($hotel->listAvailableRooms($startDate2, $endDate2)[0], "Jane Smith", $startDate2, $endDate2);

if ($reservation2) {
    echo "Reservation 2 made successfully.\n";
} else {
    echo "Reservation 2 failed.\n";
}

// Test canceling a reservation
$hotel->listAvailableRooms($startDate1, $endDate1)[0]->isAvailable = true;
echo "Reservation 1 canceled.\n";

// Test listing available rooms after cancellation
$availableRooms = $hotel->listAvailableRooms($startDate1, $endDate1);
echo "Available rooms after canceling Reservation 1:\n";
foreach ($availableRooms as $room) {
    echo "Room " . $room->roomNumber . " (" . $room->type . ") is available.\n";
}
