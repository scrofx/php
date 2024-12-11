<?php


require 'src/MagicClass.php';

use App\MagicClass;

echo "Demonstrating MagicClass\n";

// Instantiate the class
$magic = new MagicClass();

// Access and set a property
$magic->nonexistent;
$magic->nonexistent = 'value';

// Check if a property exists
isset($magic->nonexistent);

// Unset a property
unset($magic->nonexistent);

// Call a method
$magic->nonexistentMethod('arg1', 'arg2');

// Call a static method
MagicClass::nonexistentStaticMethod('arg1', 'arg2');

// Convert object to string
echo $magic;

// Use the object as a function
$magic();

// Clone the object
$cloned = clone $magic;

// Serialize and unserialize the object
$serialized = serialize($magic);
$unserialized = unserialize($serialized);

// Trigger debug info
var_dump($magic);

echo "Done demonstrating MagicClass\n";


require 'src/Point.php';
require 'src/Vector.php';

use App\Point;
use App\Vector;

echo "Task Demonstration\n";

// Create a point T1 with arbitrary coordinates
$T1 = new Point(3, 4);
echo "Point T1: $T1\n";

// Create a vector V1 with arbitrary coordinates
$V1 = new Vector(5, 12);
echo "Vector V1: $V1\n";

// Create a zero vector V2
$V2 = new Vector(0, 0);
echo "Vector V2: $V2\n";

// Create a vector V3 perpendicular to V1 (if V1 = (x, y), a perpendicular vector is (-y, x))
$V3 = new Vector(-$V1->y, $V1->x);
echo "Vector V3: $V3\n";

// Find and print the length of each vector
echo "Length of V1: " . $V1->length() . "\n";
echo "Length of V2: " . $V2->length() . "\n";
echo "Length of V3: " . $V3->length() . "\n";

// Verify V3 and V1 are perpendicular
if ($V3->isPerpendicularTo($V1)) {
    echo "V3 and V1 are perpendicular.\n";
} else {
    echo "V3 and V1 are not perpendicular.\n";
}

// Move T1 by vector V1
$T1->moveByVector($V1);
echo "Point T1 after moving by V1: $T1\n";

echo "Task Completed\n";
